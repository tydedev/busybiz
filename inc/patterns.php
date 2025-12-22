<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function busybiz_register_patterns() {
	register_block_pattern_category(
		'busybiz',
		[ 'label' => __( 'BusyBiz', 'busybiz' ) ]
	);
}
add_action( 'init', 'busybiz_register_patterns' );
