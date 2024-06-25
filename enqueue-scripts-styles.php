<?php
/**
 * Enqueue scripts and styles.
 */
function custom_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri());

    // Enqueue main JavaScript file
    wp_enqueue_script('main-javascript', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');
