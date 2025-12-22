<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function busybiz_editor_assets() {
	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'busybiz_editor_assets' );
