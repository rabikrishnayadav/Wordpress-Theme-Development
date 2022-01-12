<?php
/*
*RKY Theme Customizer
*/

function vs_customize_register($wp_customize){

	$wp_customize->add_panel('vstheme_settings', array(
		'title'=>__('VSTheme Settings'),
		'description'=>'',	// include html tags such as <p>	
		'priority'=>10, 	// Mixed with top-level-section hierarchy.
	) );

	$wp_customize->add_section('vstheme_colors', array(
		'title'=>'Colors',
		'panel'=>'vstheme_settings',
	) );

	$wp_customize->add_section('vstheme_labels', array(
		'title'=>'Labels',
		'panel'=>'vstheme_settings',
	) );

	$wp_customize->add_section('vstheme_misc', array(
		'title'=>'Misc Settings',
		'panel'=>'vstheme_settings',
	) );

	$wp_customize->add_setting('vstheme_nav_bg_color', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '#2ca358',
		'transport' => 'refresh', // or PostMessage
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control('vstheme_nav_bg_color', array(
		'label' =>__('Menu Background'),
		'type'  => 'color',
		'section'=> 'vstheme_colors'
	) );

	$wp_customize->add_setting('vstheme_nav_li_color', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '#000',
		'transport' => 'refresh', // or PostMessage
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control('vstheme_nav_li_color', array(
		'label' =>__('Menu List Background'),
		'type'  => 'color',
		'section'=> 'vstheme_colors'
	) );

	$wp_customize->add_setting('vstheme_body_bg_color', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => '#fff',
		'transport' => 'refresh', // or PostMessage
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control('vstheme_body_bg_color', array(
		'label' =>__('Body Background'),
		'type'  => 'color',
		'section'=> 'vstheme_colors'
	) );

	$wp_customize->add_setting('vstheme_featured_block_1', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => 'Latest From Technology',
		'transport' => 'refresh', // or PostMessage
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control('vstheme_featured_block_1', array(
		'label' =>__('Featured Box 1 Title'),
		'type'  => 'text',
		'section'=> 'vstheme_labels'
	) );

	$wp_customize->add_setting('vstheme_featured_block_2', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => 'Latest From Social Media',
		'transport' => 'refresh', // or PostMessage
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control('vstheme_featured_block_2', array(
		'label' =>__('Featured Box 2 Title'),
		'type'  => 'text',
		'section'=> 'vstheme_labels'
	) );

	$wp_customize->add_setting('vstheme_home_banner', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => 'yes',
		'transport' => 'refresh', // or PostMessage
		'sanitize_callback' => 'esc_attr',
	) );

	$wp_customize->add_control('vstheme_home_banner', array(
		'label' =>__('Show/Hide Home Banner'),
		'type'  => 'radio',
		'section'=> 'vstheme_misc',
		'choices'=> array(
			'yes' => 'Yes',
			'no'  => 'No'
		)
	) );
}
add_action('customize_register','vs_customize_register');


