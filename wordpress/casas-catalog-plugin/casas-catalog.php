<?php
/**
 * Plugin Name: Casas Catalog
 * Description: A plugin to display houses from an external API.
 * Version: 1.0
 * Author: Juan Salvador Rangel A.
 */


// Add a shortcode to display products
function display_product_catalog() {
    $casasList = get_houses_from_api();

    if ($casasList)
    {
        $output = '<div class="product-catalog">';
        $output .= '<h1>Product Catalog</h1>';
        $output .= '<div class="products-list">';
        
        foreach ($casasList as $product) {
            $output .= '<div class="product">';
            try {
                
            } catch (\Throwable $th) {
                //throw $th;
            }
            $output .= '<h2>' . esc_html($product->title) . '</h2>';
            $output .= '<p>Price: $' . esc_html($product->created_at) . '</p>';
            $output .= '<p>Status: ' . ($product->address ? 'Available' : 'Out of Stock') . '</p>';
            $output .= '</div>';
        }

        $output .= '</div>'; // End products-list
        $output .= '</div>'; // End product-catalog
    }
    else
    {
        $output = '<pre>' . $casasList. '</pre>';
        $output .= '<h2> Hola mundo</h2>';
    }

    return $output;
}
add_shortcode('product_catalog', 'display_product_catalog');


// Function to fetch products from the external API
function get_houses_from_api() {
    $response = wp_remote_get('http://host.docker.internal/api/houses');
    if (is_wp_error($response)) {
        error_log($response->get_error_message());
        return false;
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body);

    return $data;
}
