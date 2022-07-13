<?php
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

function qrates_theme_support() {
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails');
}
add_action('after_setup_theme',  'qrates_theme_support');

function wpb_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'theme_name' ),
        'id'            => 'footer-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 2', 'theme_name' ),
        'id'            => 'footer-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 3', 'theme_name' ),
        'id'            => 'footer-3',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 4', 'theme_name' ),
        'id'            => 'footer-4',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );

function qrates_styles() {
    wp_enqueue_style('tailwind', get_template_directory_uri(). '/dist/output.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(),'all');
    wp_enqueue_style('swiper', src: 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
    wp_enqueue_script('main.js', get_template_directory_uri() .'/main.js', array('jquery', 'swiper.js'), null, true);
    wp_enqueue_script('swiper.js', src: 'https://unpkg.com/swiper@8/swiper-bundle.min.js');
}
add_action('wp_enqueue_scripts', 'qrates_styles');

function qrates_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('custom-menu',__('Custom Menu'));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action('init', 'qrates_menu');

function my_acf_json_save_point( $path ) {
    return get_stylesheet_directory() . '/acf-fields';
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-fields';
    return $paths;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
