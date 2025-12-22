<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function busybiz_body_classes( $classes ) {
	$classes[] = 'theme-busybiz';
	return $classes;
}
add_filter( 'body_class', 'busybiz_body_classes' );
