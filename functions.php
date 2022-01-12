<?php
/*
* This is function file
*/
function vs_theme_setup(){
	add_theme_support('custom-logo');
	
	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');

	add_image_size('home-featured',680,400,array('center','center'));

	add_theme_support('automatic-feed-links');

	register_nav_menus( array(
		'primary' =>__('Primary Menu', 'VSTheme'),
		'secondary' =>__('Secondary Menu', 'VSTheme')
	) );

	$args = array(
		'default-image' => get_template_directory_uri().'assets/images/banner.jpg',
		'default-text-color' => '000',
		'width'			=> 1920,
		'height'		=> 400,
		'flex-width'	=> true,
		'flex-height'	=> true,
	);
	add_theme_support('custom-header',$args);

};

add_action('after_setup_theme','vs_theme_setup');


function vs_theme_scripts(){
	wp_enqueue_style('',get_stylesheet_uri());
	wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');
}
add_action('wp_enqueue_scripts','vs_theme_scripts');


function vs_widgets_init(){
	register_sidebar( array(
		'name'			=> __('Primary Sidebar', 'VSTheme'),
		'id'			=>'main-sidebar',
		'description'	=>'Main Sidebar on Right Side',
		'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
		'after_widget'	=>'</aside>',
		'before_title'	=>'<h3 class="widget-title">',
		'after_title'	=>'</h3>',
	) );

	register_sidebar( array(
		'name'			=> __('Footer Widget 1', 'VSTheme'),
		'id'			=>'footer-1',
		'description'	=>'Main Sidebar on Right Side',
		'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
		'after_widget'	=>'</aside>',
		'before_title'	=>'<h3 class="widget-title">',
		'after_title'	=>'</h3>',
	) );

	register_sidebar( array(
		'name'			=> __('Footer Widget 2', 'VSTheme'),
		'id'			=>'footer-2',
		'description'	=>'Main Sidebar on Right Side',
		'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
		'after_widget'	=>'</aside>',
		'before_title'	=>'<h3 class="widget-title">',
		'after_title'	=>'</h3>',
	) );

	register_sidebar( array(
		'name'			=> __('Footer Widget 3', 'VSTheme'),
		'id'			=>'footer-3',
		'description'	=>'Main Sidebar on Right Side',
		'before_widget' =>'<aside id="%1$s" class="widget %2$s">',
		'after_widget'	=>'</aside>',
		'before_title'	=>'<h3 class="widget-title">',
		'after_title'	=>'</h3>',
	) );
}
add_action('widgets_init','vs_widgets_init');

/**
* Filter the except length to 20 words.
*@param int $length Excerpt length.
*@return int (Maybe) modified excerpt length.
*/

function vs_custom_excerpt_length($length){
	return 10;
}
add_filter('excerpt_length', 'vs_custom_excerpt_length',999);

// include Customizer
require get_template_directory(). '/inc/customizer.php';