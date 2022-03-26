<?php
/**
* загрудаемые стили и скрипты
**/
function load_style_script(){
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
	wp_enqueue_script('parallax', get_template_directory_uri() . '/js/parallax.js');
	wp_enqueue_script('parallax.min', get_template_directory_uri() . '/js/parallax.min.js');
	wp_enqueue_script('wow.min', get_template_directory_uri() . '/js/wow.min.js');
	wp_enqueue_script('slick.min', get_template_directory_uri() . '/libs/slick/slick.min.js');
}

/**
* загружаем стили и скрипты
**/
add_action('wp_enqueue_scripts', 'load_style_script');

/**
* поддержка миниатюр
**/
add_theme_support('post-thumbnails');



// /**
// * Отзывы
// **/
// add_action('init', 'testomonials');
// function testomonials(){
// 	register_post_type('testomonials', array(
// 		'public' => true,
// 		'supports' => array('title', 'excerpt', 'thumbnail'),
// 		'labels' => array(
// 			'name' => 'Отзывы',
// 			'all_items' => 'Все отзывы',
// 			'add_new' => 'Добавить новый',
// 			'add_new_item' => 'Добавление отзыва'
// 		)
// 	));
// }

// /**
// * Клиенты
// **/
// add_action('init', 'client');
// function client(){
// 	register_post_type('client', array(
// 		'public' => true,
// 		'supports' => array('title', 'excerpt', 'thumbnail'),
// 		'labels' => array(
// 			'name' => 'Клиенты',
// 			'all_items' => 'Все клиенты',
// 			'add_new' => 'Добавить новый',
// 			'add_new_item' => 'Добавление клиента'
// 		)
// 	));
// }

// ?>
