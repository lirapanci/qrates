<?php
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

function qrates_theme_support() {
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails');

}

add_action('after_setup_theme',  'qrates_theme_support');


function qrates_styles() {
    wp_enqueue_style('tailwind', get_template_directory_uri(). '/dist/output.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(),'all');
    wp_enqueue_script('main.js', get_template_directory_uri() .'/main.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'qrates_styles');


function qrates_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('custom-menu',__('Custom Menu'));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}

add_action('init', 'qrates_menu');