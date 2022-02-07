<?php
if(!function_exists('BoilerPlateForm')){
	function BoilerPlateForm(){
		?>
		<form action="<?php echo PLUGIN_URL.'/plugin-boiler-plate/create-boiler-plate.php'; ?>" method="POST">
			<label>Plugin Name:</label>
			<input type="text" name="plugin_name" id="plugin_name" placeholder="Insert Plugin Name"><br>
			<label>Author Name:</label>
			<input type="text" name="author_name" id="author_name" placeholder="Insert Plugin Author Name"><br>
			<label>Description:</label>
			<textarea name="plugin_description" id="plugin_description" placeholder="Enter plugin Description"></textarea>
			<label>Plugin URI</label>
			<input type="text" name="plugin_uri" id="plugin_uri" placeholder="Insert Plugin URI"><br>
			<label>Author URI</label>
			<input type="text" name="author_uri" id="author_uri" placeholder="Insert Plugin Author URI"><br>
			<input type="submit" id="submit" name="create" value="Create & Download">
		</form>


	<?php }
	add_shortcode('BolierPlatePluginForm','BoilerPlateForm');//First parameter is shortcode name and second parameter is function  name


}