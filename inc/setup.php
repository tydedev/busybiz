<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function busybiz_theme_setup() {
	load_theme_textdomain( 'busybiz', get_template_directory() . '/languages' );

	add_theme_support( 'block-templates' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-spacing' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'busybiz_theme_setup' );
