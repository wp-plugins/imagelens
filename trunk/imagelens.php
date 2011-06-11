<?php
/*
Plugin Name: Imagelens
Plugin URI: http://www.ramoonus.nl/wordpress/imagelens/
Description: jQuery plug-in for Lens Effect Image Zooming
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

// Install
function rw_imagelens() {
		// load jQuery
		wp_enqueue_script('jquery'); // load
		// Load Imagelens
		wp_deregister_script('imagelens'); // deregister
		wp_register_script('imagelens', plugins_url('/js/jquery.imageLens.js', __FILE__), false, '1.0.0', false); // re register // false for not in footer
		wp_enqueue_script('imagelens'); // load
}
// init
add_action('init', 'rw_imagelens'); 
?>