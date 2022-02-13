<?php

define('THEME_ROOT', get_template_directory_uri());
define('JS_DIR', THEME_ROOT . '/assets/js');
define('IMG_DIR', THEME_ROOT . '/assets/img');


add_action( 'wp_enqueue_scripts', 'archmove_style' );
add_action( 'wp_enqueue_scripts', 'archmove_scripts' );
add_action( 'after_setup_theme', 'archmove_register_nav_menu' );


function archmove_style() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	
}

function archmove_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js' );
	wp_enqueue_script( 'jquery' );

   wp_enqueue_script( 'main-script', JS_DIR . './main.min.js', array( 'jquery' ), null, true );
}    

function archmove_register_nav_menu() {
	register_nav_menu( 'top_menu', 'top_menu' );
   register_nav_menu( 'bottom_menu', 'bottom_menu' );
}
