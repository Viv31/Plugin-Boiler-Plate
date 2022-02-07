<?php 
/**
 Plugin Name: Plugin Boiler Plate
Plugin URI: http://wordpress.org/plugins/
Description: A plugin for making basic file structure of a plugin.
Author: Vaibhav Gangrade
Version: 1.0.0
Author URI: 
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Defining contants 
define("PLUGIN_DIR_PATH",plugin_dir_path(__FILE__));
define("PLUGIN_URL",plugins_url());
define("SITE_URL",site_url());

//including form section 
include_once("boiler-plate-form.php");
   /*$zipfile = PLUGIN_URL.'/plugin-boiler-plate/'.$plugin_name.'.zip';
   $dir = PLUGIN_DIR_PATH;
   $zipfile = $dir.'/'.$plugin_name.'.zip';
   $zip = new ZipArchive();
   if($zip->open($zipfile,ZipArchive::CREATE)!==TRUE){
   	//exit("message");

   }
   $plugin_name = 'BoiulerPlatePlugin';
   $file_url = $zip->addFile("PLUGIN_URL.'/plugin-boiler-plate/".$plugin_name,'Plugin');
   $download_file = file_get_contents($file_url);
   $zip->addFromString(basename($file_url),$download_file);

   $zip->close();*/

?>
