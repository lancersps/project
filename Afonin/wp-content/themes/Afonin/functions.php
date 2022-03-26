<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
	acf_add_options_sub_page('General');
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');
	
}
/**
* загрудаемые стили и скрипты
**/
function load_style_script(){
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	// wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js');
	wp_enqueue_script('my', get_template_directory_uri() . '/js/my.js');
}

/**
* загружаем стили и скрипты
**/
add_action('wp_enqueue_scripts', 'load_style_script');

/**
* поддержка миниатюр
**/
add_theme_support('post-thumbnails');

/**
* меню
**/
register_nav_menu('menu', 'Меню');

/**
* Спикеры
**/
add_action('init', 'spicker');
function spicker(){
	register_post_type('spicker', array(
		'public' => true,
		'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
		'labels' => array(
			'name' => 'Спикеры',
			'all_items' => 'Все Спикеры',
			'add_new' => 'Добавить новый',
			'add_new_item' => 'Добавление спикера'
		),
        'menu_icon' => 'dashicons-megaphone',
        'menu_position' => 7,
	));
}


?>
