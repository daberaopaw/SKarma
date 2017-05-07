<?php

if(!function_exist('skarma_setup'));

function skerma_setup(){
 add_theme_support('title-tag');   
    
}
endif;

add_action('after_setup_theme','skarma-setup');

function register_skarma_menu(){
    register_nav_menu(array(
    primary => __('Primary Menu'),
        footer => __('Footer Menu')
    ));
}

add_action('init', 'register_skerma_menu');

function skarma_script(){
    
    wp_enqueue_style('skarma_styles',get_stylesheet_uri());
}

add_action('wp-enqueue_scripts','skarma_scripts');
