<?php

// Enqueue parent theme styles

function casas_garcia_child_theme_enqueue_styles()
{
    // Load the parent theme's styles first (optional if not already handled)
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Load your custom CSS file from the child theme
    wp_enqueue_style(
        'custom-style',
        get_stylesheet_directory_uri() . '/product.css',
        array('parent-style'), // Optional: define dependencies
        filemtime(get_stylesheet_directory() . '/product.css') // Version based on file modified time
    );
}
add_action('wp_enqueue_scripts', 'casas_garcia_child_theme_enqueue_styles');

?>