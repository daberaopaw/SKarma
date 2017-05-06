<?php

if(!function_exist('skarma_setup'));

function skerma_setup(){
    
    
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
   wp_enqueue_style( 'style-name', get_stylesheet_uri() . "/css/bootstrap.css" );
   wp_enqueue_style( 'style-name', get_stylesheet_uri() . "/css/bootstrap-responsive.css" );
}