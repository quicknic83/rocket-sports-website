<?php
function rock3t_enqueue_styles() {
    // Parent Theme Stylesheet
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Child Theme Stylesheet
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
    
    // Custom JS
    wp_enqueue_script('rock3t-custom-js', get_stylesheet_directory_uri() . '/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'rock3t_enqueue_styles');
