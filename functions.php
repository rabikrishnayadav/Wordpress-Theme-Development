<?php
/*
* This is function file
*/
function vs_theme_setup(){
	add_theme_support('custom-logo');
	
	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');

	add_theme_support('automatic-feed-links');

	register_nav_menus( array(
		'primary' =>__('Primary Menu', 'RKY Theme'),
		'secondary' =>__('Secondary Menu', 'RKY Theme')
	) );
};

add_action('after_setup_theme','vs_theme_setup');

function vs_theme_scripts(){
	wp_enqueue_style('',get_stylesheet_uri());
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');
}
add_action('wp_enqueue_scripts','vs_theme_scripts');