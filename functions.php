<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu')
		)
	);
}

add_action( 'init', 'register_theme_menus' );

function james_theme_styles() {
	wp_enqueue_style( 'normalize.css', 'https://necolas.github.io/normalize.css/4.1.1/normalize.css' );
	wp_enqueue_style( 'font-awesome.css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' );
	wp_enqueue_style( 'main.css', get_template_directory_uri() . '/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'james_theme_styles' );

?>