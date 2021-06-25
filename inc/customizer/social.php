<?php

function wpbt_socail_customizer_section( $wp_customize ) {
	$wp_customize->add_setting(
		'wpbt_facebook_handle',
		array(
			'default'	=> '',
			'sanitize_callback'  => 'esc_attr',
		),
	);

	$wp_customize->add_setting(
		'wpbt_twitter_handle',
		array(
			'default'	=>  '',
			'sanitize_callback'  => 'esc_attr',
		),
	);

	$wp_customize->add_setting(
		'wpbt_instagram_handle',
		array(
			'default'	=>  '',
			'sanitize_callback'  => 'esc_attr',
		)
	);

	$wp_customize->add_setting(
		'wpbt_email',
		array(
			'default'	=>  '',
			'sanitize_callback'  => 'esc_attr',
		)
	);

	$wp_customize->add_setting(
		'wpbt_phone_number',
		array(
			'default'	=>  '',
			'sanitize_callback'  => 'esc_attr',
		)
	);

	$wp_customize->add_section(
		'wpbt_social_section',
		array(
			'title'		=>	__( 'WP Clinic Social Settings', 'wp-clinic' ),
			'priority'	=>	35,
			'panel'		=>	'wp_clinic_panel'
		),
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'wpbt_social_facebook_input',
			array(
				'label'		=>	__( 'Facebook Handle', 'wp-clinic' ),
				'section'	=>	'wpbt_social_section',
				'settings'	=>	'wpbt_facebook_handle',
				'type'		=>	'text',
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'wpbt_social_twitter_input',
			array(
				'label'		=>	__( 'Twitter Handle', 'wp-clinic' ),
				'section'	=>	'wpbt_social_section',
				'settings'	=>	'wpbt_twitter_handle',
				'type'		=>	'text',
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'wpbt_social_instagram_input',
			array(
				'label'		=>	__( 'Instagram Handle', 'wp-clinic' ),
				'section'	=>	'wpbt_social_section',
				'settings'	=>	'wpbt_instagram_handle',
				'type'		=>	'text',
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'wpbt_social_email_input',
			array(
				'label'		=>	__( 'Email', 'wp-clinic' ),
				'section'	=>	'wpbt_social_section',
				'settings'	=>	'wpbt_email',
				'type'		=>	'text',
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'wpbt_social_phone_number_input',
			array(
				'label'		=>	__( 'Phone Number', 'wp-clinic' ),
				'section'	=>	'wpbt_social_section',
				'settings'	=>	'wpbt_phone_number',
				'type'		=>	'text',
			)
		)
	);

}