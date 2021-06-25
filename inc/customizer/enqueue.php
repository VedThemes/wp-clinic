<?php

function vedt_customize_preview_init() {
	$template_uri = get_template_directory_uri();
	wp_enqueue_script(
		'wpbt_theme_customizer',
		$template_uri . '/assets/js/theme-customize.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);
}