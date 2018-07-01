<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j00605stripe {
	function __construct($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$eLiveSite = get_showtime('eLiveSite');
		$ePointFilepath = get_showtime('ePointFilepath');

		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$mrConfig = getPropertySpecificSettings($tmpBookingHandler->tmpbooking['property_uid']);
		
		$query		= "SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = 0 AND plugin = 'stripe' ";
		$settingsList = doSelectSql( $query );
		if ( count ($settingsList) > 0)
			{
			foreach ( $settingsList as $set )
				{
				$settingArray[ $set->setting ] = trim($set->value);
				}
			}
		
		$is_test_key = false;
		if (substr($settingArray[ 'stripe_public_key' ] , 0 , 7 ) == "pk_test")
			$is_test_key = true;
		
		if ( !isset($settingArray[ 'stripe_secret_key' ]) || trim($settingArray[ 'stripe_secret_key' ]) =="" )
			{
			$message = "Stripe Secret key not set. Please set this in Administrator -> Jomres -> Payment methods -> Gateways -> Stripe";
			logging::log_message( $message , "Stripe" , "ERROR" );
			throw new Exception( $message );
			}
			
		if ( !isset($settingArray[ 'stripe_public_key' ]) || trim($settingArray[ 'stripe_public_key' ]) =="" )
			{
			$message = "Stripe Public key not set. Please set this in Administrator -> Jomres -> Payment methods -> Gateways -> Stripe";
			logging::log_message( $message , "Stripe" , "ERROR" );
			throw new Exception( $message );
			}
			
		
		if ( !isset($settingArray[ 'application_fee' ]) || trim($settingArray[ 'application_fee' ]) =="" )
			{
			$message = "Application fee (Stripe Connect Commission) not set. Please set this in Administrator -> Jomres -> Payment methods -> Gateways -> Stripe";
			logging::log_message( $message , "Stripe" , "ERROR" );
			throw new Exception( $message );
			}
		
		
		/*if ( !isset($settingArray[ 'stripe_commission_euro' ]) || trim($settingArray[ 'stripe_commission_euro' ]) =="" )
			{
			$message = "Stripe Euro commission not set. Please set this in Administrator -> Jomres -> Payment methods -> Gateways -> Stripe";
			logging::log_message( $message , "Stripe" , "ERROR" );
			throw new Exception( $message );
			}
			
		if ( !isset($settingArray[ 'stripe_commission_noneuro' ]) || trim($settingArray[ 'stripe_commission_noneuro' ]) =="" )
			{
			$message = "Stripe non-Euro commission not set. Please set this in Administrator -> Jomres -> Payment methods -> Gateways -> Stripe";
			logging::log_message( $message , "Stripe" , "ERROR" );
			throw new Exception( $message );
			}*/
		
		
		$output = array();
		$pageoutput=array();
		
		$output['CURRENCY'] = $mrConfig[ 'property_currencycode' ];
		if ( $jrConfig[ 'useGlobalCurrency' ] == "1" )
			{
			$output['CURRENCY'] = $jrConfig[ 'globalCurrencyCode' ];
			}

		$deposit_required=(float)$tmpBookingHandler->tmpbooking['deposit_required'];
		$booking_total = $tmpBookingHandler->tmpbooking['contract_total']; 
		
		$site_commission_rate = bcdiv ($settingArray['application_fee'] , 100 , 3 );

		if ($site_commission_rate > 0)
			{
			// We need to calculate the application fee. This is basically this website's commission.
			$site_commission = bcmul ($booking_total , $site_commission_rate , 3 );
			}
		else
			$site_commission = 0;

		
		// Now to decided if we'll need to show the form, or actually process the charge
		if (isset($_POST['stripeToken']) && $_POST['stripeToken'] != "")
			{
				
			$property_manager_xref = get_showtime( 'property_manager_xref' );
			if ( is_null( $property_manager_xref ) )
				{
				$property_manager_xref = build_property_manager_xref_array();
				}
			$manager_id = $property_manager_xref[ $tmpBookingHandler->tmpbooking['property_uid'] ];

			jr_import("stripe_user");
			$stripe_user=new stripe_user();
			$stripe_user->getStripeUser($manager_id);
			
			require $ePointFilepath.'lib'.JRDS.'init.php';
 
			\Stripe\Stripe::setApiKey( trim( $settingArray[ 'stripe_secret_key' ]));
			$error = '';
			$success = '';

			try 
				{
				// Uncomment thes if using the payment_form template instead of payment_form_simple
				/* if (empty($_POST['street']) || empty($_POST['city']) || empty($_POST['zip']))
					throw new Exception("Fill out all required fields."); */
				if (!isset($_POST['stripeToken']))
					throw new Exception("The Stripe Token was not generated correctly");
				
				if ($site_commission > 0)
					{
					$charge =\Stripe\Charge::create(array(
							"amount" => floor ($deposit_required*100) ,
							"currency" => $tmpBookingHandler->tmpbooking['property_currencycode'],
							"card" => $_POST['stripeToken'],
							"description" => $tmpBookingHandler->tmpguest['email'],
							"application_fee" => (int)$site_commission*100
							),
						array("stripe_account" => $stripe_user->stripe_user_id)
						);
					}
				else
					{
					$charge =\Stripe\Charge::create(array(
							"amount" => floor ($deposit_required*100) ,
							"currency" => $tmpBookingHandler->tmpbooking['property_currencycode'],
							"card" => $_POST['stripeToken'],
							"description" => $tmpBookingHandler->tmpguest['email']
							),
						array("stripe_account" => $stripe_user->stripe_user_id)
						);
					}
				if ($charge->status == "succeeded")
					{
					$message = "Deposit payment of ".floor ($deposit_required)." ".$tmpBookingHandler->tmpbooking['property_currencycode']." paid";
					logging::log_message( $message , "Stripe" , "INFO" );
					logging::log_message( $message , "Core" , "INFO" );
					
					$tmpBookingHandler->updateBookingField('depositpaidsuccessfully',true);
					
					$transaction_id = $charge->id;
					$management_url = 'https://dashboard.stripe.com/';
					if ($is_test_key)
						$management_url .='test/';
					$management_url .= 'payments/'.$charge->id;
					$payment_method = 'stripe';
					
					set_showtime("gateway_payment_method" , $payment_method );
					set_showtime("gateway_management_url" , $management_url );
					set_showtime("gateway_transaction_id" , $transaction_id );
					
					$result=insertInternetBooking(get_showtime('jomressession'),true,true);
					}
				}
			catch(\Stripe\Error\Card $e) 
				{
				// Since it's a decline, \Stripe\Error\Card will be caught
				$body = $e->getJsonBody();
				$err  = $body['error'];
				$log_message = 'Status is:' . $e->getHttpStatus();
				$log_message .= 'Type is:' . $err['type'];
				$log_message .= 'Code is:' . $err['code'];
				$log_message .= 'Param is:' . $err['param'];
				$log_message .= 'Message is:' . $err['message'];

				$output['STRIPE_PAYMENT_FAILED'] = jr_gettext('STRIPE_PAYMENT_ERROR_DECLINED','STRIPE_PAYMENT_ERROR_DECLINED',false,false);
				$output['CONFIRMATION_PAGE'] =  JOMRES_SITEPAGE_URL . "&task=confirmbooking";
				$output['STRIPE_PAYMENT_TRY_AGAIN'] = jr_gettext('STRIPE_PAYMENT_TRY_AGAIN','STRIPE_PAYMENT_TRY_AGAIN',false,false);

				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( $ePointFilepath.'templates'.JRDS.find_plugin_template_directory() );
				$tmpl->readTemplatesFromInput( 'payment_cancelled.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->displayParsedTemplate();
				
				logging::log_message( $log_message , "Stripe" , "ERROR" );
				} 
			catch (\Stripe\Error\RateLimit $e) 
				{
				// Too many requests made to the API too quickly
				$output['STRIPE_PAYMENT_FAILED'] = jr_gettext('STRIPE_PAYMENT_FAILED','STRIPE_PAYMENT_FAILED',false,false);
				$output['CONFIRMATION_PAGE'] =  JOMRES_SITEPAGE_URL . "&task=confirmbooking";
				$output['STRIPE_PAYMENT_TRY_AGAIN'] = jr_gettext('STRIPE_PAYMENT_TRY_AGAIN','STRIPE_PAYMENT_TRY_AGAIN',false,false);

				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( $ePointFilepath.'templates'.JRDS.find_plugin_template_directory() );
				$tmpl->readTemplatesFromInput( 'payment_cancelled.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->displayParsedTemplate();
				
				logging::log_message( jr_gettext('STRIPE_PAYMENT_ERROR_RATE_LIMIT','STRIPE_PAYMENT_ERROR_RATE_LIMIT',false,false)." ".$e->getMessage() , "Stripe" , "ERROR" );
				} 
			catch (\Stripe\Error\InvalidRequest $e) 
				{
				// Invalid parameters were supplied to Stripe's API
				$output['STRIPE_PAYMENT_FAILED'] = jr_gettext('STRIPE_PAYMENT_FAILED','STRIPE_PAYMENT_FAILED',false,false);
				$output['CONFIRMATION_PAGE'] =  JOMRES_SITEPAGE_URL . "&task=confirmbooking";
				$output['STRIPE_PAYMENT_TRY_AGAIN'] = jr_gettext('STRIPE_PAYMENT_TRY_AGAIN','STRIPE_PAYMENT_TRY_AGAIN',false,false);

				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( $ePointFilepath.'templates'.JRDS.find_plugin_template_directory() );
				$tmpl->readTemplatesFromInput( 'payment_cancelled.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->displayParsedTemplate();
				
				logging::log_message( jr_gettext('STRIPE_PAYMENT_ERROR_INVALID_PARAMETERS','STRIPE_PAYMENT_ERROR_INVALID_PARAMETERS',false,false)." ".$e->getMessage() , "Stripe" , "ERROR" );
				} 
			catch (\Stripe\Error\Authentication $e) 
				{
				// We need to disconnect the Stripe user in our Stripe User's table so that future guests are not offered the Stripe gateway as an option
				$stripe_user->connected =0;
				$stripe_user->updateStripeUser();

				// Authentication with Stripe's API failed
				$body = $e->getJsonBody();
				$err  = $body['error'];
				$log_message = 'Status is:' . $e->getHttpStatus();
				$log_message .= 'Type is:' . $err['type'];
				$log_message .= 'Message is:' . $err['message'];
				
				$output['STRIPE_PAYMENT_FAILED'] = jr_gettext('STRIPE_PAYMENT_FAILED','STRIPE_PAYMENT_FAILED',false,false);
				$output['CONFIRMATION_PAGE'] =  JOMRES_SITEPAGE_URL . "&task=confirmbooking";
				$output['STRIPE_PAYMENT_TRY_AGAIN'] = jr_gettext('STRIPE_PAYMENT_TRY_AGAIN','STRIPE_PAYMENT_TRY_AGAIN',false,false);

				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( $ePointFilepath.'templates'.JRDS.find_plugin_template_directory() );
				$tmpl->readTemplatesFromInput( 'payment_cancelled.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->displayParsedTemplate();
				
				logging::log_message( jr_gettext('STRIPE_PAYMENT_ERROR_AUTH_FAILED','STRIPE_PAYMENT_ERROR_AUTH_FAILED',false,false)." ".$log_message , "Stripe" , "ERROR" );
				
				} 
			catch (\Stripe\Error\ApiConnection $e) 
				{
				// Network communication with Stripe failed
				$output['STRIPE_PAYMENT_FAILED'] = jr_gettext('STRIPE_PAYMENT_ERROR_NETWORK_FAULT','STRIPE_PAYMENT_ERROR_NETWORK_FAULT',false,false);
				$output['CONFIRMATION_PAGE'] =  JOMRES_SITEPAGE_URL . "&task=confirmbooking";
				$output['STRIPE_PAYMENT_TRY_AGAIN'] = jr_gettext('STRIPE_PAYMENT_TRY_AGAIN','STRIPE_PAYMENT_TRY_AGAIN',false,false);

				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( $ePointFilepath.'templates'.JRDS.find_plugin_template_directory() );
				$tmpl->readTemplatesFromInput( 'payment_cancelled.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->displayParsedTemplate();
				
				logging::log_message( jr_gettext('STRIPE_PAYMENT_ERROR_NETWORK_FAULT','STRIPE_PAYMENT_ERROR_NETWORK_FAULT',false,false)." ".$e->getMessage() , "Stripe" , "ERROR" );
				} 
			catch (Exception $e) 
				{
				// Sumfink else went wrong :(
				$output['STRIPE_PAYMENT_FAILED'] = jr_gettext('STRIPE_PAYMENT_FAILED','STRIPE_PAYMENT_FAILED',false,false);
				$output['CONFIRMATION_PAGE'] =  JOMRES_SITEPAGE_URL . "&task=confirmbooking";
				$output['STRIPE_PAYMENT_TRY_AGAIN'] = jr_gettext('STRIPE_PAYMENT_TRY_AGAIN','STRIPE_PAYMENT_TRY_AGAIN',false,false);

				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( $ePointFilepath.'templates'.JRDS.find_plugin_template_directory() );
				$tmpl->readTemplatesFromInput( 'payment_cancelled.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->displayParsedTemplate();
				
				logging::log_message( jr_gettext('STRIPE_PAYMENT_ERROR_UNCAUGHT','STRIPE_PAYMENT_ERROR_UNCAUGHT',false,false)." ".$e->getMessage() , "Stripe" , "ERROR" );
				}
			}
		else
			{
			logging::log_message( "Showing creditcard number payment form." , "Stripe" , "DEBUG" );
			jomres_cmsspecific_addheaddata( "css",$eLiveSite."/css/" ,'bootstrap-formhelpers-min.css' );
			jomres_cmsspecific_addheaddata( "css",$eLiveSite."/css/" ,'bootstrapValidator-min.css' );
			
			jomres_cmsspecific_addheaddata( "javascript", $eLiveSite.'js/' , "bootstrapValidator-min.js" );
			jomres_cmsspecific_addheaddata( "javascript", $eLiveSite.'js/' , "bootstrap-formhelpers-min.js" );

			jomres_cmsspecific_addcustomtag( '<script type="text/javascript" src="https://js.stripe.com/v2/"></script>' );
		
			$current_property_details					= jomres_singleton_abstract::getInstance( 'basic_property_details' );
			
			
			$output['PROPERTY_NAME']											= $current_property_details->get_property_name($tmpBookingHandler->tmpbooking['property_uid']);
			$output['IMG_PATH']													= $eLiveSite."img/marketplace.png";
			$output['CONTRACT_TOTAL']											= floor ($deposit_required*100);
			$output['PUBLIC_KEY']												= $settingArray['stripe_public_key'];
			$output['_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL']						= jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL',false,false);
			$output['STRIPE_PAYMENT_FORM_SECURE']								= jr_gettext('STRIPE_PAYMENT_FORM_SECURE','STRIPE_PAYMENT_FORM_SECURE',false,false);
			
			$output['STRIPE_PAYMENTFORM_EMAIL']									= $tmpBookingHandler->tmpguest['email'];


			// The rest of these varables aren't required if using the Stripe Checkout javascript.
			
			/* $output['_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL']					= jr_gettext('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL',false,false);;
			
			$output['STRIPE_PAYMENTFORM_NAME']									= $tmpBookingHandler->tmpguest['firstname']." ".$tmpBookingHandler->tmpguest['surname'];
			
			$output['STRIPE_PAYMENTFORM_STREET']								= $tmpBookingHandler->tmpguest['house']." ".$tmpBookingHandler->tmpguest['street'];
			$output['STRIPE_PAYMENTFORM_TOWN']									= $tmpBookingHandler->tmpguest['town'];
			$output['STRIPE_PAYMENTFORM_REGION']								= find_region_name($tmpBookingHandler->tmpguest['region']);
			$output['STRIPE_PAYMENTFORM_POSTCODE']								= $tmpBookingHandler->tmpguest['postcode'];
			$output['STRIPE_PAYMENTFORM_COUNTRY']								= $tmpBookingHandler->tmpguest['country'];

			$output['STRIPE_PAYMENT_FORM_CREDITCARD']							= jr_gettext('STRIPE_PAYMENT_FORM_CREDITCARD','STRIPE_PAYMENT_FORM_CREDITCARD',false,false);
			$output['STRIPE_PAYMENT_FORM_EXPIRATION']							= jr_gettext('STRIPE_PAYMENT_FORM_EXPIRATION','STRIPE_PAYMENT_FORM_EXPIRATION',false,false);
			$output['STRIPE_PAYMENT_FORM_CVC']									= jr_gettext('STRIPE_PAYMENT_FORM_CVC','STRIPE_PAYMENT_FORM_CVC',false,false);
			$output['STRIPE_PAYMENT_FORM_ZIP']									= jr_gettext('STRIPE_PAYMENT_FORM_ZIP','STRIPE_PAYMENT_FORM_ZIP',false,false);
			$output['STRIPE_PAYMENT_FORM_BILLINGDETAILS']						= jr_gettext('STRIPE_PAYMENT_FORM_BILLINGDETAILS','STRIPE_PAYMENT_FORM_BILLINGDETAILS',false,false);
			$output['STRIPE_PAYMENT_FORM_CARDDETAILS']							= jr_gettext('STRIPE_PAYMENT_FORM_CARDDETAILS','STRIPE_PAYMENT_FORM_CARDDETAILS',false,false);
			$output['STRIPE_PAYMENT_FORM_HOLDER']								= jr_gettext('STRIPE_PAYMENT_FORM_HOLDER','STRIPE_PAYMENT_FORM_HOLDER',false,false);
			$output['STRIPE_PAYMENT_FORM_PAYNOW']								= jr_gettext('STRIPE_PAYMENT_FORM_PAYNOW','STRIPE_PAYMENT_FORM_PAYNOW',false,false);

			$output['_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET']				= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',false,false);
			$output['_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN']					= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',false,false);
			$output['_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION']				= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',false,false);
			$output['_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY']				= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',false,false);
			$output['_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL']				= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL',false,false);
			$output['_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY']				= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',false,false);
			$output['_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE']				= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',false,false);
			
			$output['STRIPE_PAYMENT_FORM_VALIDATION_STREET_EMPTY']				= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_STREET_EMPTY','STRIPE_PAYMENT_FORM_VALIDATION_STREET_EMPTY',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_CARDNUMBER_LENGTH']			= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_CARDNUMBER_LENGTH','STRIPE_PAYMENT_FORM_VALIDATION_CARDNUMBER_LENGTH',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_CITY_EMPTY']				= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_CITY_EMPTY','STRIPE_PAYMENT_FORM_VALIDATION_CITY_EMPTY',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_ZIP_EMPTY']					= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_ZIP_EMPTY','STRIPE_PAYMENT_FORM_VALIDATION_ZIP_EMPTY',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_ZIP_LENGTH']				= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_ZIP_LENGTH','STRIPE_PAYMENT_FORM_VALIDATION_ZIP_LENGTH',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_EMAIL_EMPTY']				= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_EMAIL_EMPTY','STRIPE_PAYMENT_FORM_VALIDATION_EMAIL_EMPTY',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_EMAIL_INVALID']				= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_EMAIL_INVALID','STRIPE_PAYMENT_FORM_VALIDATION_EMAIL_INVALID',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_EMAIL_LENGTH']				= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_EMAIL_LENGTH','STRIPE_PAYMENT_FORM_VALIDATION_EMAIL_LENGTH',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_CARDHOLDER_EMPTY']			= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_CARDHOLDER_EMPTY','STRIPE_PAYMENT_FORM_VALIDATION_CARDHOLDER_EMPTY',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_CARDHOLDER_LENGTH']			= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_CARDHOLDER_LENGTH','STRIPE_PAYMENT_FORM_VALIDATION_CARDHOLDER_LENGTH',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_CARDNUMBER_EMPTY']			= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_CARDNUMBER_EMPTY','STRIPE_PAYMENT_FORM_VALIDATION_CARDNUMBER_EMPTY',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_CARDNUMBER_INVALID']		= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_CARDNUMBER_INVALID','STRIPE_PAYMENT_FORM_VALIDATION_CARDNUMBER_INVALID',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_EXPIRATION_MONTH_EMPTY']	= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_EXPIRATION_MONTH_EMPTY','STRIPE_PAYMENT_FORM_VALIDATION_EXPIRATION_MONTH_EMPTY',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_EXPIRATION_MONTH_DIGITS']	= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_EXPIRATION_MONTH_DIGITS','STRIPE_PAYMENT_FORM_VALIDATION_EXPIRATION_MONTH_DIGITS',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_EXPIRATION_YEAR_EMPTY']		= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_EXPIRATION_YEAR_EMPTY','STRIPE_PAYMENT_FORM_VALIDATION_EXPIRATION_YEAR_EMPTY',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_EXPIRATION_YEAR_DIGITS']	= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_EXPIRATION_YEAR_DIGITS','STRIPE_PAYMENT_FORM_VALIDATION_EXPIRATION_YEAR_DIGITS',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_CCV_EMPTY']					= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_CCV_EMPTY','STRIPE_PAYMENT_FORM_VALIDATION_CCV_EMPTY',false,false));
			$output['STRIPE_PAYMENT_FORM_VALIDATION_CCV_INVALID']				= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_CCV_INVALID','STRIPE_PAYMENT_FORM_VALIDATION_CCV_INVALID',false,false)); */
			
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( $ePointFilepath.'templates'.JRDS.find_plugin_template_directory() );
			$tmpl->readTemplatesFromInput( 'payment_form_simple.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->displayParsedTemplate();

			logging::log_message( "Creditcard number payment form shown" , "Stripe" , "DEBUG" );
			}
		}


	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

	
/*
		
		// Not using this atm, as there's too much overlap between the Jomres commission rate functionality ( which shouldn't be enabled at this point.)
		// Will leave it in-situ in case we need to explore this further
		jr_import('jrportal_commissions');
		$jrportal_commissions = new jrportal_commissions();
		$commission_rate = $jrportal_commissions->getCrateForPropertyuid( $tmpBookingHandler->tmpbooking['property_uid'] );
		
		
		
	

		// First, let's figure out how much Stripe's Commission is, calculated to this property's currency
		$stripe_commission_euro = $settingArray[ 'stripe_commission_euro' ];
		$stripe_commission_noneuro = $settingArray[ 'stripe_commission_noneuro' ];
		
		$deposit_required=(float)$tmpBookingHandler->tmpbooking['deposit_required'];
		$booking_total = $tmpBookingHandler->tmpbooking['contract_total']; 
		
		// We don't know how much commission is going to be, because we don't know what card is going to be used.
		// First we'll find the highest possible commission rate.
		if ($stripe_commission_euro > $stripe_commission_noneuro)
			$stripe_commission_rate = bcdiv ($stripe_commission_euro , 100 , 3 );
		else
			$stripe_commission_rate = bcdiv ($stripe_commission_noneuro , 100 , 3 );
		
		if ( $output['CURRENCY'] == "EUR" ) // No need to convert the deposit to euros, we can just calculate Stripe's commission
			{
			$stripe_commission = bcmul ($deposit_required , $stripe_commission_rate , 2 );
			}
		else // Stripe charges commission in Euros, so we need to convert their commission to euros, add .25c, then reconvert that value back into the property's currency then check that site commission + stripe commission is not > the deposit value.
			{
			$stripe_commission_native = bcmul ($deposit_required , $stripe_commission_rate , 2 );
			$jomres_currency_conversion = jomres_singleton_abstract::getInstance('jomres_currency_conversion');
			$stripe_commission_in_euros = $jomres_currency_conversion->convert_sum( $stripe_commission_native, "EUR", $output['CURRENCY'] );
			$stripe_commission_in_euros = $stripe_commission_in_euros + 0.25;
			$stripe_commission = $jomres_currency_conversion->convert_sum( $stripe_commission_in_euros, $output['CURRENCY'], "EUR" );
			}

		$site_commission_rate = bcdiv ($settingArray['application_fee'] , 100 , 3 );

		if ($site_commission_rate > 0)
			{
			// We need to calculate the application fee. This is basically this website's commission.
			$site_commission = bcmul ($booking_total , $site_commission_rate , 3 );
			$remainder_after_site_commission = bcsub($deposit_required , $site_commission , 2 );
			
			if ( $remainder_after_site_commission <= 0 )
				{
				$message = "Remainder after site commission removed is too low to process this transaction. Site Commission rate : $site_commission_rate Booking total : $booking_total Deposit required : $deposit_required Site Commission : $site_commission";
				logging::log_message( $message , "Stripe" , "ERROR" );
				throw new Exception( $message );
				}
			
			$property_balance =  bcsub($remainder_after_site_commission , $stripe_commission );
			}
		else
			$site_commission = 0;
*/
