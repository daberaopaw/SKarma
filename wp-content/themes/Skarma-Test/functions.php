<?php

if( ! function_exists('skarma_setup')) :

function skarma_setup(){
    
    add_theme_support('title-tag');
}

endif;

add_action('after_setup_theme' , 'skarma_setup');

function register_skarma_menus(){
    register_nav_menus(
        array(
        'primary' => __('Primary Menu'), 
            'footer' => __('Footer Menu')
        )
        );
}

add_action('init', 'register_skarma_menus');

function skarma_scripts(){
    
    wp_enqueue_style('skarma_styles', get_stylesheet_uri());
}
    
    add_action('wp_enqueue_scripts', 'skarma_scripts');

function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_enqueue_style( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/js/scripts.js');

}

add_action( 'wp_enqueue_scripts', 'theme_js');
?>