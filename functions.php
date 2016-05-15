<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu'),
			'social-menu' => __('Social Links')
		)
	);
}

add_action( 'init', 'register_theme_menus' );

function james_theme_styles() {
	wp_enqueue_style( 'normalize.css', 'https://necolas.github.io/normalize.css/4.1.1/normalize.css' );
	wp_enqueue_style( 'font-awesome.css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' );
	wp_enqueue_style( 'lightbox.css', get_template_directory_uri() . '/css/lightbox.min.css' );
	wp_enqueue_style( 'google_fonts.css', 'https://fonts.googleapis.com/css?family=Lato:400,700|Maven+Pro:700' );
	wp_enqueue_style( 'main.css', get_template_directory_uri() . '/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'james_theme_styles' );

function james_theme_js() {
	wp_enqueue_script( 'lightbox.js', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'scripts.js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'james_theme_js' );

?>