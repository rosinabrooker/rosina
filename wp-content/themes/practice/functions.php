<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles');

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function practice_files() {
   wp_enqueue_style( 'main-style', get_stylesheet_uri(), filemtime(get_stylesheet_directory() . '/style.css'), 'all');
}

add_action( 'wp_enqueue_scripts', 'practice_files');

add_theme_support( 'post-thumbnails' );
?>