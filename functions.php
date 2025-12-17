<?php
/**
 * BusyBiz – Block Theme functions
 *
 * File: functions.php
 * Tema a blocchi (FSE)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Sicurezza base, sempre.
}

/**
 * Setup del tema
 */
function busybiz_theme_setup() {
	// Traduzioni
	load_theme_textdomain( 'busybiz', get_template_directory() . '/languages' );

	// Supporti base per FSE
	add_theme_support( 'block-templates' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-spacing' );

	// Thumbnail (anche se nei block theme spesso servono poco)
	add_theme_support( 'post-thumbnails' );

	// Rimuove il supporto ai pattern core se vuoi solo i tuoi
	// remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'busybiz_theme_setup' );

/**
 * Caricamento assets frontend + editor
 */
function busybiz_enqueue_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// CSS principale
	wp_enqueue_style(
		'busybiz-style',
		get_theme_file_uri( 'assets/css/screen.css' ),
		array(),
		$theme_version
	);

	// JS (se ti serve)
	wp_enqueue_script(
		'busybiz-script',
		get_theme_file_uri( 'assets/js/main.js' ),
		array(),
		$theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'busybiz_enqueue_assets' );

/**
 * Editor styles (Gutenberg)
 */
function busybiz_editor_assets() {
	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'busybiz_editor_assets' );

/**
 * Registrazione pattern personalizzati
 */
function busybiz_register_patterns() {
	register_block_pattern_category(
		'busybiz',
		array( 'label' => __( 'BusyBiz', 'busybiz' ) )
	);
}
add_action( 'init', 'busybiz_register_patterns' );

/**
 * Disabilita roba inutile nel frontend
 */
function busybiz_cleanup() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
}
add_action( 'init', 'busybiz_cleanup' );

/**
 * Custom body classes
 */
function busybiz_body_classes( $classes ) {
	$classes[] = 'theme-busybiz';
	return $classes;
}
add_filter( 'body_class', 'busybiz_body_classes' );

/**
 * Utility: verifica se siamo nel Site Editor
 */
function busybiz_is_site_editor() {
	return is_admin() && function_exists( 'get_current_screen' ) && get_current_screen()?->is_block_editor();
}

