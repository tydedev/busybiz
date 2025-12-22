<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function busybiz_is_site_editor() {
	return is_admin()
		&& function_exists( 'get_current_screen' )
		&& get_current_screen()?->is_block_editor();
}
