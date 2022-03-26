<?php
/**
* Load Script and Style
**/
function load_style_script(){
	// Style
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	// wp_enqueue_style('liner', 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/fontawesome-all.css');
	wp_enqueue_style('font', get_template_directory_uri() . '/css/fonts.css');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style('style2', get_template_directory_uri() . '/css/style2.css');

	// JS
	wp_enqueue_script('jquery_loc', get_template_directory_uri() . '/js/jquery.1.11.1.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js');
	wp_enqueue_script('jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js');
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
	wp_enqueue_script('app2', get_template_directory_uri() . '/js/app2.js');
}
add_action('wp_enqueue_scripts', 'load_style_script');

/**
* Picture
**/
add_theme_support('post-thumbnails');

/**
* Menu
**/
register_nav_menu('menu', 'Меню');

/** 
* Options Page ACF 
**/
if( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title' 	=> 'Глобальные настройки темы',
		'menu_title'	=> 'Опции темы',
		'menu_slug' 	=> 'theme-global-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> true,
	 ) );

}


function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');





?>
