<?php

if(!function_exists('skarma_setup')) :

function skarma_setup(){
    
    add_theme_support('title-tag');
}

endif;

add_action('after_setup_theme' , 'skarma_setup');

function register_skarma_menu(){
    
    register_nav_manus(
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
?>