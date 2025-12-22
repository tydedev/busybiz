<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function busybiz_block_assets() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'busybiz-style',
		get_template_directory_uri() . '/style.css',
		[],
		$version
	);

	wp_enqueue_style(
		'busybiz-frontend-style',
		get_template_directory_uri() . '/assets/css/screen.css',
		[],
		$version
	);

	wp_enqueue_style(
		'fontawesome',
		get_template_directory_uri() . '/assets/font-awesome/css/all.css',
		[],
		'5.15.3'
	);

	wp_enqueue_style(
		'busybiz-editor-style',
		get_template_directory_uri() . '/assets/css/editor.css',
		[],
		$version
	);
}
add_action( 'enqueue_block_assets', 'busybiz_block_assets' );
