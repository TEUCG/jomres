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
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class invoice_payment_send
	{
	function __construct($invoice_array)
		{
		$eLiveSite = "/".JOMRES_ROOT_DIRECTORY."/core-plugins/core_gateway_stripe/";
		$ePointFilepath =  JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS ."core-plugins". JRDS . "core_gateway_stripe".JRDS;

		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');

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

 		$output = array();
		$pageoutput=array();

		if (isset($_POST['stripeToken']) && $_POST['stripeToken'] != "")
			{
			$property_manager_xref = get_showtime( 'property_manager_xref' );
			if ( is_null( $property_manager_xref ) )
				{
				$property_manager_xref = build_property_manager_xref_array();
				}
			$manager_id = $property_manager_xref[ $invoice_array['invoice_data']['property_uid'] ];

			jr_import("stripe_user");
			$stripe_user=new stripe_user();
			$stripe_user->getStripeUser($manager_id);
			
			require $ePointFilepath.'lib'.JRDS.'init.php';
 
			\Stripe\Stripe::setApiKey( trim( $settingArray[ 'stripe_secret_key' ]));
			$error = '';
			$success = '';

			try 
				{

				/* if (empty($_POST['street']) || empty($_POST['city']) || empty($_POST['zip']))
					throw new Exception("Fill out all required fields."); */
				if (!isset($_POST['stripeToken']))
					throw new Exception("The Stripe Token was not generated correctly");
				if (!isset($_POST['payment_reference']) || (int)$_POST['payment_reference'] == 0)
					throw new Exception("The payment reference was not sent");

				$charge =\Stripe\Charge::create(array(
						"amount" => $invoice_array['invoice_data']['balance']*100 ,
						"currency" => $invoice_array['invoice_data']['currencycode'],
						"card" => $_POST['stripeToken'],
						"description" => $_POST['stripeEmail']
						),
					array("stripe_account" => $stripe_user->stripe_user_id)
					);

				if ($charge->status == "succeeded")
					{
					$transaction_id = $charge->id;
					$management_url = 'https://dashboard.stripe.com/';
					if ($is_test_key)
						$management_url .='test/';
					$management_url .= 'payments/'.$charge->id;
					$payment_method = 'stripe';
					
					set_showtime("gateway_payment_method" , $payment_method );
					set_showtime("gateway_management_url" , $management_url );
					set_showtime("gateway_transaction_id" , $transaction_id );
					
					jr_import("jrportal_payment_reference");
					$jrportal_payment_reference = new jrportal_payment_reference();
					$jrportal_payment_reference->get_invoice_details_for_reference ((int)$_POST['payment_reference']);
					$jrportal_payment_reference->mark_payment_reference_paid();

					jr_import( 'jrportal_invoice' );
					$invoice = new jrportal_invoice();
					$invoice->id = $jrportal_payment_reference->invoice_id;
					$invoice->getInvoice();
					$invoice->mark_invoice_paid(); 
					
					$message = "Balance payment of ".$invoice_array['invoice_data']['balance']." ".$invoice_array['invoice_data']['currencycode']." paid";
					logging::log_message( $message , "Stripe" , "INFO" );
					logging::log_message( $message , "Core" , "INFO" );
					
					jomresRedirect( JOMRES_SITEPAGE_URL_NOSEF . "&task=list_invoices" );
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
				$output['CONFIRMATION_PAGE'] =  JOMRES_SITEPAGE_URL . "&task=list_gateways_for_invoice&invoice_id=".$invoice_array['invoice_data']['invoice_number'];
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
				$output['CONFIRMATION_PAGE'] =  JOMRES_SITEPAGE_URL . "&task=list_gateways_for_invoice&invoice_id=".$invoice_array['invoice_data']['invoice_number'];
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
				$output['CONFIRMATION_PAGE'] =  JOMRES_SITEPAGE_URL . "&task=list_gateways_for_invoice&invoice_id=".$invoice_array['invoice_data']['invoice_number'];
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
				$output['CONFIRMATION_PAGE'] =  JOMRES_SITEPAGE_URL . "&task=list_gateways_for_invoice&invoice_id=".$invoice_array['invoice_data']['invoice_number'];
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
				$output['CONFIRMATION_PAGE'] =  JOMRES_SITEPAGE_URL . "&task=list_gateways_for_invoice&invoice_id=".$invoice_array['invoice_data']['invoice_number'];
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
				$output['CONFIRMATION_PAGE'] =  JOMRES_SITEPAGE_URL . "&task=list_gateways_for_invoice&invoice_id=".$invoice_array['invoice_data']['invoice_number'];
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

			$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );

			$current_property_details					= jomres_singleton_abstract::getInstance( 'basic_property_details' );
			$mrConfig									= getPropertySpecificSettings($invoice_array['invoice_data']['property_uid']);

			$output['PROPERTY_NAME']											= $current_property_details->get_property_name($invoice_array['invoice_data']['property_uid']);
			$output['IMG_PATH']													= get_showtime('live_site')."/jomres/core-plugins/core_gateway_stripe/img/marketplace.png";
			$output['CONTRACT_TOTAL']											= $invoice_array['invoice_data']['balance']*100;
			$output['PUBLIC_KEY']												= $settingArray['stripe_public_key'];
			$output['_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL']						= jr_gettext('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT',false,false);
			$output['STRIPE_PAYMENT_FORM_SECURE']								= jr_gettext('STRIPE_PAYMENT_FORM_SECURE','STRIPE_PAYMENT_FORM_SECURE',false,false);
			$output['PAYMENT_REFERENCE']										= $invoice_array['payment_reference'] ;
			
			$output['STRIPE_PAYMENTFORM_EMAIL']									= $invoice_array['invoice_data']['payer']['email'];
			
			$output['CURRENCY'] = $invoice_array['invoice_data']['currencycode'];
			if ( $jrConfig[ 'useGlobalCurrency' ] == "1" )
				{
				$output['CURRENCY'] = $jrConfig[ 'globalCurrencyCode' ];
				}
			
			// The rest of these varables aren't required if using the Stripe Checkout 
			/* 
			$output['STRIPE_PAYMENTFORM_NAME']									= $invoice_array['invoice_data']['payer']['firstname']." ".$invoice_array['invoice_data']['payer']['surname'];
			$output['STRIPE_PAYMENTFORM_EMAIL']									= $invoice_array['invoice_data']['payer']['email'];
			$output['STRIPE_PAYMENTFORM_STREET']								= $invoice_array['invoice_data']['payer']['house']." ".$invoice_array['invoice_data']['payer']['street'];
			$output['STRIPE_PAYMENTFORM_TOWN']									= $invoice_array['invoice_data']['payer']['town'];
			$output['STRIPE_PAYMENTFORM_REGION']								= $invoice_array['invoice_data']['payer']['county'];
			$output['STRIPE_PAYMENTFORM_POSTCODE']								= $invoice_array['invoice_data']['payer']['postcode'];
			$output['STRIPE_PAYMENTFORM_COUNTRY']								= $invoice_array['invoice_data']['payer']['country_code'];

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
			$output['STRIPE_PAYMENT_FORM_VALIDATION_CCV_INVALID']				= str_replace("'","&#39;",jr_gettext('STRIPE_PAYMENT_FORM_VALIDATION_CCV_INVALID','STRIPE_PAYMENT_FORM_VALIDATION_CCV_INVALID',false,false));
			 */
			
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( $ePointFilepath.'templates'.JRDS.find_plugin_template_directory() );
			$tmpl->readTemplatesFromInput( 'payment_form_simple_balance.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->displayParsedTemplate();
			
			logging::log_message( "Creditcard number payment form shown" , "Stripe" , "DEBUG" );
			}
		}
	}


