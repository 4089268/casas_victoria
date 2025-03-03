<?php
// Enqueue parent theme styles

function casas_garcia_child_theme_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_template_directory_uri() . '/product.css');
}
add_action('wp_enqueue_scripts', 'casas_garcia_child_theme_styles');

// function casas_garcia_enqueue_styles() {
//     // Enqueue child theme styles
//     wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

//     // Enqueue custom product styles
//     wp_enqueue_style('product-style', get_stylesheet_directory_uri() . '/product.css', array('child-style'));
// }
// add_action('wp_enqueue_scripts', 'casas_garcia_enqueue_styles');

function get_products_from_api() {
    $response = wp_remote_get('http://localhost/api/houses');
    
    if (is_wp_error($response)) {
        return false;
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body);

    return $data;
}

?>