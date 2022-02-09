<?php

define('THEME_ROOT', get_template_directory_uri());
define('JS_DIR', THEME_ROOT . '/assets/js');
define('IMG_DIR', THEME_ROOT . '/assets/img');


add_action( 'wp_enqueue_scripts', 'archmove_style' );
add_action( 'wp_enqueue_scripts', 'archmove_scripts' );

function archmove_style() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	
}

function archmove_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js' );
	wp_enqueue_script( 'jquery' );

   wp_enqueue_script( 'main-script', get_template_directory_uri() . './assets/js/main.min.js', array( 'jquery' ), null, true );
}    

