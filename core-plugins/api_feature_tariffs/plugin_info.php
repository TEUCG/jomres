<?php
/**
* Jomres CMS Agnostic Plugin
* @author  
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2015 
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class plugin_info_api_feature_tariffs
	{
	function __construct()
		{
		$this->data=array(
			"name"=>"api_feature_tariffs",
			"category"=>"REST API",
			"marketing"=>"Functionality that allows listing and modification of tariffs through the API",
			"version"=>"0.1",
			"description"=> "Experimental plugin. Functionality that allows listing and modification of tariffs through the API. It is important to note that this functionality will ONLY modify tariffs if the property is configured to use the Micromanage tariff editing mode.",
			"author"=>"",
			"authoremail"=>"",
			"lastupdate"=>"2018/03/03",
			"min_jomres_ver"=>"9.9.20",
			"manual_link"=>'',
			'change_log'=>'',
			'highlight'=>'',
			'image'=>'',
			'demo_url'=>''
			);
		}
	}
