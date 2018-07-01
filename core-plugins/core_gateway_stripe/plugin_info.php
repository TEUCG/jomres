<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2017 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class plugin_info_core_gateway_stripe
	{
	function __construct()
	{
		$this->data=array(
			"name"=>"core_gateway_stripe",
			"category"=>"Payment handling",
			"marketing"=>"Connect to the Stripe Connect payment server. A single, mobile friendly, payment process right there on your site. Charge Application Fees, or not.",
			"version"=>(float)"1.6",
			"description"=> "Connect to the Stripe Connect payment server. A single, mobile friendly, payment process right there on your site. Charge Application Fees, or not.",
			"lastupdate"=>"2017/11/14",
			"min_jomres_ver"=>"9.9.16",
			"manual_link"=>'http://www.jomres.net/manual/site-managers-guide/23-control-panel/payment-methods/340-core-gateway-stripe',
			'change_log'=>'v0.2 Removed Stripe Commission settings, removed code that calculates entire booking fees, instead settled on making a recommendation that Site Commission be 1/2 Site minimum deposit value. v0.3 Fixed a bug & added functionality that removes all other gateways "active" values to ensure that this gateway is the only gateway with "active" settings. v1.0 Updated plugin to work with 9.8.27 gateway refactor. v1.1  Modified code to reflect fact that currency code conversion is now a singleton. v1.2 Modified how array contents are checked. v1.3 Added touch template code to allow the plugin name to be translated in Label Editing page. v1.4 Added ability to disconnect accounts in gateway settings, frontend. v1.5 Added floor call to ensure that we are not passing a float number to Stripe. v1.6 Added functionality to allow us to pass transaction id and payment method to Jomres.',
			'highlight'=>'',
			'image'=>'https://snippets.jomres.net/plugin_screenshots/2017-08-02_tvawk.png',
			'demo_url'=>''
			);
		}
	}
