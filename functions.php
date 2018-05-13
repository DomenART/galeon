<?php
add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header_menu' => 'Меню в шапке',
	) );
});

add_theme_support( 'post-thumbnails', array( 'post' ) );
add_theme_support( 'post-thumbnails', array( 'page' ) );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Параметры',
		'menu_title'	=> 'Параметры',
		'menu_slug' 	=> 'acf-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}