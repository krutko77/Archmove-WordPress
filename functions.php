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
	register_post_type( 'articles', [
		'labels' => [
			'name'               => 'articles', // основное название для типа записи
			'singular_name'      => 'article', // название для одной записи этого типа
			'add_new'            => 'Добавить article', // для добавления новой записи
			'add_new_item'       => 'Добавление article', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование article', // для редактирования типа записи
			'new_item'           => 'Новое article', // текст новой записи
			'view_item'          => 'Смотреть article', // для просмотра записи этого типа.
			'search_items'       => 'Искать article', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Articles', // название меню
		],
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-star-filled',
		'supports'            => [ 'title', 'editor', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields', comments',
	] );
}

   function getArticles() {
      $args = array(
         'orderby'     => 'date',
         'order'       => 'ASC',
         'post_type'   => 'articles',         
      ) ;

      $articles = [];

      foreach(get_posts($args) as $post) {

         $article = get_fields( $post->ID );

         $article['text'] = $post->post_content;
         $articles[] = $article;
      }

      return $articles;
   }


   // var_dump(getArticles());