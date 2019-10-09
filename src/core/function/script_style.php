<?php

// File with script and style



add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
//  wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.css' );
//  wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.default.css' );
//  wp_enqueue_style( 'styl', get_template_directory_uri() . '/styles.css' );
    enqueue_versioned_style( 'styl', '/styles.css' );
//  wp_enqueue_style( 'style', get_stylesheet_uri() );

//  wp_enqueue_script('jquery_js', get_template_directory_uri() . '/js/jquery-3.4.1.js', '', null, true);
//  wp_enqueue_script('styler', get_template_directory_uri() . '/js/jquery.formstyler.exec.jjs', '', null, true);
//  wp_enqueue_script('owl', get_template_directory_uri() . '/js/owl.carousel.js', '', null, true);
//  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', '', null, true);
//  wp_enqueue_script('script2', get_template_directory_uri() . '/script.js', '', null, true);
    enqueue_versioned_script('script2', '/script.js', '', true);
}

add_action('wp_print_styles', 'mytheme_dequeue_css_from_plugins', 100);
function mytheme_dequeue_css_from_plugins() {
  //wp_dequeue_style( 'wpforms-full-css');
//  wp_dequeue_style( 'wp-block-library' );
//  wp_dequeue_style( 'wordpress-popular-posts-css' );
}

function my_deregister_scripts(){
//  wp_deregister_script( 'wp-embed' );
//  wp_deregister_script('jquery');
}
add_action( 'wp_footer', 'my_deregister_scripts' );


function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
    wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
}

function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
    wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
}