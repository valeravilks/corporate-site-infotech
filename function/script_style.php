<?php

// File with script and style



add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
  wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.css' );
  wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.default.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_enqueue_script('jquery_js', get_template_directory_uri() . '/js/jquery-3.4.1.js', '', null, true);
  wp_enqueue_script('owl', get_template_directory_uri() . '/js/owl.carousel.js', '', null, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', '', null, true);
}

add_action('wp_print_styles', 'mytheme_dequeue_css_from_plugins', 100);
function mytheme_dequeue_css_from_plugins() {
//  wp_dequeue_style( 'contact-form-7' );
//  wp_dequeue_style( 'wp-block-library' );
//  wp_dequeue_style( 'wordpress-popular-posts-css' );
}

function my_deregister_scripts(){
//  wp_deregister_script( 'wp-embed' );
//  wp_deregister_script('jquery');
}
add_action( 'wp_footer', 'my_deregister_scripts' );
