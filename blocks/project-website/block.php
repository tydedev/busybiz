<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function tydedev_render_project_website_block( $attributes ) {
    global $post;
    if ( ! $post ) return '';

    $url = get_post_meta( $post->ID, 'client_url', true );
    if ( ! $url ) return '';

    $text = $attributes['linkText'] ?? 'Visit website';

    return sprintf(
        '<a %s href="%s" target="_blank" rel="noopener noreferrer">%s</a>',
        get_block_wrapper_attributes(),
        esc_url( $url ),
        esc_html( $text )
    );
}
