<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function tydedev_render_project_client_block($attributes, $content) {
    global $post;
    if (!$post) return '';

    $client_name = get_post_meta($post->ID, 'client_name', true);
    if (!$client_name) return '';

    // Genera le classi CSS e attributi Gutenberg (fontSize, fontFamily, weight, colore, ecc.)
    $blockProps = get_block_wrapper_attributes();

    return '<div ' . $blockProps . '>' . esc_html($client_name) . '</div>';
}
