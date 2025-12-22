<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function busybiz_register_block_styles() {

	$button_styles = [
		'secondary'        => 'Secondary',
		'contact'          => 'Contact',
		'contact-outline'  => 'Contact Outline',
		'call'             => 'Call',
		'call-outline'     => 'Call Outline',
	];

	foreach ( $button_styles as $name => $label ) {
		register_block_style( 'core/button', [
			'name'  => $name,
			'label' => $label,
		] );
	}

	$paragraph_styles = [
		'address'   => 'Address',
		'email'     => 'Email',
		'phone'     => 'Phone',
		'checkmark' => 'Checkmark',
	];

	foreach ( $paragraph_styles as $name => $label ) {
		register_block_style( 'core/paragraph', [
			'name'  => $name,
			'label' => $label,
		] );
	}

	register_block_style( 'core/heading', [
		'name'  => 'checkmark',
		'label' => 'Checkmark',
	] );

	register_block_style( 'core/group', [
		'name'  => 'featured',
		'label' => 'Featured',
	] );

	register_block_style( 'tydedev/project-website', [
    'name'  => 'button',
    'label' => 'Button',
] );


}
add_action( 'init', 'busybiz_register_block_styles' );
