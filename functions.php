<?php

// CSS

function mi_tema_enqueue_styles() {
    wp_enqueue_style(
        'estilos-principales',
        get_stylesheet_directory_uri() . '/style.css'
    );
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_styles');

// javascript

function mi_tema_scripts() {
 wp_enqueue_script(
 'main-js',
 get_template_directory_uri() . '/assets/js/main.js',
 array(),
 null,
 true
 );
}
add_action('wp_enqueue_scripts', 'mi_tema_scripts');

// quitar Worpress default nav bar

function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// clase especial para paraffo

function add_class_based_on_slug($content) {
    if (is_page('about')) {
        $content = str_replace('<p>', '<p class="about-paragraph">', $content);
    } elseif (is_page()) {
        $content = str_replace('<p>', '<p class="page-paragraph">', $content);
    }
    return $content;
}
add_filter('the_content', 'add_class_based_on_slug');
