<?php
/*
* This is function file
*/
function vs_theme_scripts(){
	wp_enqueue_style('style',get_stylesheet_uri());
	wp_enqueue_script('my-slider',get_template_directory_uri().'/assets/js/my-js.js');

}
add_action('wp_enqueue_scripts','vs_theme_scripts');