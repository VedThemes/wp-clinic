<?php

function vedt_customize_register( $wp_customize ) {

	$wp_customize->add_panel(
		'wp_clinic_panel',
		array(
			'title'			=>	__( 'WP Clinic Settings', 'wp-clinic' ),
			'description'	=>	__( '<p>Update settings for WP Clinic</p>', 'wp-clinic' ),
			'priority'		=>	150
		),
	);
	
	vedt_socail_customizer_section( $wp_customize );
	vedt_miscellaneous_customizer_section( $wp_customize );
	
}