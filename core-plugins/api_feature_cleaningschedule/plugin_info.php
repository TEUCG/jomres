<?php
/**
* Jomres CMS Agnostic Plugin
* @author  John m_majma@yahoo.com
* @version Jomres 9
* @package Jomres
* @copyright 2017
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class plugin_info_api_feature_cleaningschedule
	{
	function __construct()
		{
		$this->data=array(
			"name"=>"api_feature_cleaningschedule",
			"category"=>"REST API",
			"marketing"=>"A quick and dirty (sic) cleaning schedule that can be viewed through the API",
			"version"=>"0.2",
			"description"=> "Experimental plugin. A quick and dirty (sic) cleaning schedule that can be viewed through the API",
			"author"=>"",
			"authoremail"=>"",
			"lastupdate"=>"2017/24/01",
			"min_jomres_ver"=>"9.8.25",
			"manual_link"=>'',
			'change_log'=>'v0.2 Notes updated',
			'highlight'=>'',
			'image'=>'',
			'demo_url'=>''
			);
		}
	}
