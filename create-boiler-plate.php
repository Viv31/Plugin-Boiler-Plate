<?php 
if(isset($_POST['create'])){

	$plugin_name = $_POST['plugin_name'];
	$author_name = $_POST['author_name'];
	$plugin_description = $_POST['plugin_description'];
	$plugin_uri = $_POST['plugin_uri'];
	$author_uri = $_POST['author_uri'];

	$pluginFolder = mkdir($plugin_name); 
	if($pluginFolder){

		//index.php file content goes here
		$indexFileContetnt = "<?php //Silence is golden";
		//Plugin main file content goes here 
		$PluginmainFileContent ="<?php /**
 		* Plugin Name: ".$plugin_name."
		* Plugin URI: ".$plugin_uri."
		* Description: ".$plugin_description."
		* Author: ".$author_name."
		* Version: 1.0.0
		* Author URI:".$author_uri."
		*/";
	$index = "index.php";
	file_put_contents($plugin_name.'/'.$index, $indexFileContetnt);
	file_put_contents($plugin_name.'/'.$plugin_name.'php', $PluginmainFileContent);


	}

}

?>