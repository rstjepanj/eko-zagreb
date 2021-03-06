<?php

function ekozagreb_setup() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'ekozagreb_setup' );

function ekozagreb_scripts_styles() {
	global $wp_styles;
	wp_enqueue_style( 'ekozagreb-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome-4.7.0/css/font-awesome.min.css', true);
}
add_action( 'wp_enqueue_scripts', 'ekozagreb_scripts_styles' );

show_admin_bar(false);

function new_excerpt_more( $more ) {
    return ' [...]';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>