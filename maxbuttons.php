<?php
/*
Plugin Name: MaxButtons
Plugin URI: http://maxbuttons.com
Description: The best WordPress button generator. This is the free version; the Pro version <a href="http://maxbuttons.com/?ref=mbfree">can be found here</a>.
Version: 3.0
Author: Max Foundry
Author URI: http://maxfoundry.com

Copyright 2015 Max Foundry, LLC (http://maxfoundry.com)
*/
define("MAXBUTTONS_ROOT_FILE", __FILE__);
define('MAXBUTTONS_VERSION_NUM', '3.0');
define('MAXBUTTONS_RELEASE',"08 April 2015"); 

require_once("classes/maxbuttons-class.php"); 

require_once('classes/button.php');
require_once("classes/installation.php"); 	
require_once("classes/max-utils.php"); 
require_once("classes/scssphp/scss.inc.php");
require_once("classes/maxCSSParser.php");
require_once("includes/maxbuttons-admin-helper.php"); 
require_once("includes/arrays.php"); 
	if (! class_exists('simple_html_dom_node'))
		require_once("includes/simple_html_dom.php");


$m = new maxButtons();	

register_activation_hook(__FILE__, array("maxInstall",'activation_hook') );
register_deactivation_hook(__FILE__,array("maxInstall", 'deactivation_hook') );

?>
