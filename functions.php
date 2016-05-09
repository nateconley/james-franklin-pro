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
	wp_enqueue_style( 'google_fonts.css', 'https://fonts.googleapis.com/css?family=Roboto+Slab:700|Lato:400,400italic,700' );
	wp_enqueue_style( 'main.css', get_template_directory_uri() . '/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'james_theme_styles' );

function james_theme_js() {
	wp_enqueue_script( 'scripts.js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'james_theme_js' );

?>