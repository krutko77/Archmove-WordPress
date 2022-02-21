<?php

define('THEME_ROOT', get_template_directory_uri());
define('JS_DIR', THEME_ROOT . '/assets/js');
define('IMG_DIR', THEME_ROOT . '/assets/img');

add_filter('show_admin_bar', '__return_false');
add_action( 'wp_enqueue_scripts', 'archmove_style' );
add_action( 'wp_enqueue_scripts', 'archmove_scripts' );
add_action( 'after_setup_theme', 'archmove_register_nav_menu' );
add_action( 'init', 'register_post_types' );

function archmove_style() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	
}

function archmove_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js' );
	wp_enqueue_script( 'jquery' );

   wp_enqueue_script( 'main-script', JS_DIR . './main.js', array( 'jquery' ), null, true );
}    

function archmove_register_nav_menu() {
	register_nav_menu( 'top_menu', 'top_menu' );
   register_nav_menu( 'bottom_menu', 'bottom_menu' );
}

function register_post_types(){
	register_post_type( 'reviews', [
		'labels' => [
			'name'               => 'reviews', // основное название для типа записи
			'singular_name'      => 'review', // название для одной записи этого типа
			'add_new'            => 'Добавить review', // для добавления новой записи
			'add_new_item'       => 'Добавление review', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование review', // для редактирования типа записи
			'new_item'           => 'Новое review', // текст новой записи
			'view_item'          => 'Смотреть review', // для просмотра записи этого типа.
			'search_items'       => 'Искать review', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Reviews', // название меню
		],
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-star-filled',
		'supports'            => [ 'editor', 'author' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments',
	] );
}