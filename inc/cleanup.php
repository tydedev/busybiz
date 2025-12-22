<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function busybiz_cleanup() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
}
add_action( 'init', 'busybiz_cleanup' );
