<?php
/**
 * BusyBiz – Block Theme functions
 *
 * File: functions.php
 * Tema a blocchi (FSE)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$busybiz_includes = [
	'inc/setup.php',
	'inc/editor.php',
	'inc/patterns.php',
	'inc/cleanup.php',
	'inc/body-classes.php',
	'inc/block-styles.php',
	'inc/assets.php',
	'inc/utils.php',
	'inc/cpts.php',
];

foreach ( $busybiz_includes as $file ) {
	require_once get_template_directory() . '/' . $file;
}

$block_file = get_template_directory() . '/blocks/project-client/block.php';
if ( file_exists($block_file) ) {
    require $block_file;
}

function tydedev_enqueue_project_client_block() {
    wp_register_script(
        'tydedev-project-client-block',
        get_template_directory_uri() . '/blocks/project-client/block.js',
        array( 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components' ),
        filemtime( get_template_directory() . '/blocks/project-client/block.js' )
    );

   register_block_type( 'tydedev/project-client', array(
    'editor_script'   => 'tydedev-project-client-block',
    'render_callback' => 'tydedev_render_project_client_block',
    'supports' => array(
        'align' => array('wide','full'),
        'spacing' => array(
            'margin'  => true,
            'padding' => true,
        ),
        'typography' => array(
            'fontSize'       => true,  // Dimensione del font
            'lineHeight'     => true,  // Altezza linea
            'letterSpacing'  => true,  // Spaziatura lettere
        ),
        'color' => array(
            'text'       => true,
            'background' => true,
        ),
        'customClassName' => true,
        'customSpacing'   => true,
    ),
) );

}
add_action( 'init', 'tydedev_enqueue_project_client_block' );



$block_file = get_template_directory() . '/blocks/project-website/block.php';
if ( file_exists($block_file) ) {
    require $block_file;
}

function tydedev_enqueue_project_website_block() {
    wp_register_script(
        'tydedev-project-website-block',
        get_template_directory_uri() . '/blocks/project-website/block.js',
        array( 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components' ),
        filemtime( get_template_directory() . '/blocks/project-website/block.js' )
    );

   register_block_type( 'tydedev/project-website', array(
    'editor_script'   => 'tydedev-project-website-block',
    'render_callback' => 'tydedev_render_project_website_block',
    'supports' => array(
        'align' => array('wide','full'),
        'spacing' => array(
            'margin'  => true,
            'padding' => true,
        ),
        'typography' => array(
            'fontSize'       => true,  // Dimensione del font
            'lineHeight'     => true,  // Altezza linea
            'letterSpacing'  => true,  // Spaziatura lettere
        ),
        'color' => array(
            'text'       => true,
            'background' => true,
        ),
        'customClassName' => true,
        'customSpacing'   => true,
    ),
) );

}
add_action( 'init', 'tydedev_enqueue_project_website_block' );
