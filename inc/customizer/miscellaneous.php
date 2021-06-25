<?php

function vedt_miscellaneous_customizer_section( $wp_customize ) {

	$wp_customize->add_setting(
		'wpbt_show_header_search',
		array(
			'default'	=>	'yes',
			'transport'	=> 'postMessage',
			'sanitize_callback'  => 'esc_attr',
		),
	);

	$wp_customize->add_setting(
		'wpbt_footer_copyright_text',
		array(
			'default'	=>	'Copyrights © 2021 All Rights Reserved by WP Clinic.',
			'sanitize_callback'  => 'sanitize_textarea_field',
		),
	);

	$wp_customize->add_setting(
		'wpbt_select_tos_page',
		array(
			'default'	=>	0,
			'sanitize_callback'  => 'esc_attr',
		),
	);

	$wp_customize->add_setting(
		'wpbt_select_privacy_page',
		array(
			'default'	=>	0,
			'sanitize_callback'  => 'esc_attr',
		),
	);

	$wp_customize->add_setting(
		'wpbt_color_picker',
		array(
			'default'	=> '#1ABC9C',
			'sanitize_callback'  => 'esc_attr',
		),
	);

	$wp_customize->add_section(
		'wpbt_miscellaneous_section',
		array(
			'title'		=>	__( 'WP Clinic Miscellaneous Settings', 'wp-clinic' ),
			'priority'	=>	35,
			'panel'		=>	'wp_clinic_panel'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'wpbt_show_header_search_input',
			array(
				'label'		=>	__( 'Show search icon', 'wp-clinic' ),
				'section'	=>	'wpbt_miscellaneous_section',
				'settings'	=>	'wpbt_show_header_search',
				'type'		=>	'checkbox',
				'choices'	=> array(
					'yes'	=> 	'Yes'
				)
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'wpbt_footer_copyright_text_input',
			array(
				'label'		=>	__( 'Copyright text:', 'wp-clinic' ),
				'section'	=>	'wpbt_miscellaneous_section',
				'settings'	=>	'wpbt_footer_copyright_text',
				'type'		=>	'textarea',
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'wpbt_select_tos_page_select',
			array(
				'label'		=>	__( 'Select terms of service page', 'wp-clinic' ),
				'section'	=>	'wpbt_miscellaneous_section',
				'settings'	=>	'wpbt_select_tos_page',
				'type'		=>	'dropdown-pages',
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'wpbt_select_privacy_page_select',
			array(
				'label'		=>	__( 'Select privacy page', 'wp-clinic' ),
				'section'	=>	'wpbt_miscellaneous_section',
				'settings'	=>	'wpbt_select_privacy_page',
				'type'		=>	'dropdown-pages',
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'wpbt_color_picker_input',
			array(
				'label'		=>	__( 'Read more link color', 'wp-clinic' ),
				'section'	=>	'wpbt_miscellaneous_section',
				'settings'	=>	'wpbt_color_picker'
			)
		)
	);

}