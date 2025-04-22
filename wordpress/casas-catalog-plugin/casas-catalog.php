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
        // retrive photo file
        $photo_file_name = "sample-house.jpg";
        $photos_folder_url = content_url('houses-photos');
        $image_url = $photos_folder_url . '/' . $photo_file_name;

        // TODO: validate if the file exists
        // if(file_exists($image_url)) {/* */}

        $output = '<div class="product-catalog px-2">';
        $output .= '<div class="products-list grid grid-cols-3 gap-4 mx-auto w-full max-w-screen-2xl">';
        foreach ($casasList as $product)
        {
            $output .= '<div class="flex flex-col border hover:shadow" style="border:.5px solid #ddd; background-color:#f0f0f0;">';
            $output .= sprintf('<img class="object-cover w-full h-64" src="%s" alt="Imagen" />', $image_url);
            $output .= '<div class="flex flex-col items-center p-2">';
            $output .= '<h1 class="font-medium text-center text-sm" style="font-size:1.4rem !important;">' . esc_html($product->title) . '</h1>';
            $output .= '<div class="p-1">';
            $output .= sprintf('<li class="flex items-center gap-2"> <i class="h-8 w-6 translate-y-1">%s</i> Cuartos: %s</li>', bedRoomIcon(), 4);
            $output .= sprintf('<li class="flex items-center gap-2"> <i class="h-8 w-6 translate-y-1">%s</i> Baños: %s</li>', restRoomIcon(), 4);
            $output .= sprintf('<li class="flex items-center gap-2"> <i class="h-8 w-6 translate-y-1">%s</i> Cocheras: %s</li>', garageIcon(), 1);
            $output .= sprintf('<li class="flex items-center gap-2"> <i class="h-8 w-6 ">%s</i> Dimenciones: %s</li>', dimensionsIcon(), "240m2");
            $output .= '</div>';
            $output .= '<p>Disponibilidad: ' . ($product->address ? 'Available' : 'Out of Stock') . '</p>';
            $output .= '</div>';
            $output .= '</div>';
        }

        $output .= '</div>'; // End products-list
        $output .= '</div>'; // End product-catalog
    }
    else
    {
        $output = '<pre>' . $casasList. '</pre>';
        $output .= '<h2> No hay datos disponibles</h2>';
    }

    return $output;
}


function bedRoomIcon()
{
    return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"><path fill="#333333" d="M24 16H8a4 4 0 0 0-4 4v2a1 1 0 0 0 1 1h1v1a2 2 0 0 0 4 0v-1h12v1a2 2 0 0 0 4 0v-1h1a1 1 0 0 0 1-1v-2a4 4 0 0 0-4-4m-11.889-6h7.777c.615 0 1.112.447 1.112 1s-.497 1-1.112 1h-7.777C11.497 12 11 11.553 11 11s.497-1 1.111-1M9 14h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1"/></svg>';

}

function restRoomIcon()
{
    return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256"><path fill="#333333" d="M60 88h136a4 4 0 0 0 4-4V40a16 16 0 0 0-16-16H72a16 16 0 0 0-16 16v44a4 4 0 0 0 4 4m28-40h15.73a8.18 8.18 0 0 1 8.27 7.47a8 8 0 0 1-8 8.53H88.27A8.18 8.18 0 0 1 80 56.53A8 8 0 0 1 88 48m136 64.06a8 8 0 0 0-8-8.06H40a8 8 0 0 0-8 8.06a96.1 96.1 0 0 0 51.68 85.08l-3.47 24.27a16.43 16.43 0 0 0 1.63 10A16 16 0 0 0 96 240h63.66a16.52 16.52 0 0 0 9.72-3a16 16 0 0 0 6.46-15.23l-3.52-24.6A96.1 96.1 0 0 0 224 112.06M96 224l2.93-20.5a96.15 96.15 0 0 0 58.14 0L160 224Z"/></svg>';
}

function garageIcon()
{
    return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#333333" d="M19 20h-2v-9H7v9H5V9l7-4l7 4zM8 12h8v2H8zm0 3h8v2H8zm8 3v2H8v-2z"/></svg>';
}

function dimensionsIcon()
{
    return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#333333" d="M9 1v1h1v3H9v1h3V5h-1V2h1V1M9 7c-1.11 0-2 .89-2 2v12c0 1.11.89 2 2 2h12c1.11 0 2-.89 2-2V9c0-1.11-.89-2-2-2M1 9v3h1v-1h3v1h1V9H5v1H2V9m7 0h12v12H9m5-11v1h1v5h-4v-1h-1v3h1v-1h4v2h-1v1h3v-1h-1v-2h3v1h1v-3h-1v1h-3v-5h1v-1"/></svg>';
}

add_shortcode('product_catalog', 'display_product_catalog');


/**
 * fetch the house data from the API
 *
 * @return array|null
 */
function get_houses_from_api() {
    error_log('[DEBUG] Retrieving data from the API');

    $response = wp_remote_get('http://host.docker.internal/api/houses');
    if (is_wp_error($response)) {
        error_log($response->get_error_message());
        return false;
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body);

    return $data;
}
