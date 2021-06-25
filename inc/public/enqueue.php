<?php

function vedt_scripts() {
	$template_uri = get_template_directory_uri();
	$ver = VEDT_DEV_MODE ? time() : false;

	wp_register_style( 'vedt_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', array(), $ver );
	wp_register_style( 'vedt_bootstrap', $template_uri . '/assets/css/bootstrap.css', array(), $ver );
	wp_register_style( 'vedt_style', $template_uri . '/assets/css/style.css', array(), $ver );
	wp_register_style( 'vedt_dark', $template_uri . '/assets/css/dark.css', array(), $ver );
	wp_register_style( 'vedt_font_icons', $template_uri . '/assets/css/font-icons.css', array(), $ver );
	wp_register_style( 'vedt_animate', $template_uri . '/assets/css/animate.css', array(), $ver );
	wp_register_style( 'vedt_magnific_popup', $template_uri . '/assets/css/magnific-popup.css', array(), $ver );
	wp_register_style( 'vedt_responsive', $template_uri . '/assets/css/responsive.css', array(), $ver );
	wp_register_style( 'vedt_custom', $template_uri . '/assets/css/custom.css', array(), $ver );

	wp_enqueue_style( 'vedt_google_fonts' );
	wp_enqueue_style( 'vedt_bootstrap' );
	wp_enqueue_style( 'vedt_style' );
	wp_enqueue_style( 'vedt_dark' );
	wp_enqueue_style( 'vedt_font_icons' );
	wp_enqueue_style( 'vedt_animate' );
	wp_enqueue_style( 'vedt_magnific_popup' );
	wp_enqueue_style( 'vedt_responsive' );
	wp_enqueue_style( 'vedt_custom' );

	$read_more_color = get_theme_mod( 'vedt_color_picker' );
	wp_add_inline_style(
		'vedt_custom',
		'a.more-link { color: '. $read_more_color .'; border-color: '. $read_more_color .';}'
	);

	wp_register_script( 'vedt_plugins', $template_uri . '/assets/js/plugins.js', array(), $ver, true );
	wp_register_script( 'vedt_functions', $template_uri . '/assets/js/functions.js', array(), $ver, true );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'vedt_plugins' );
	wp_enqueue_script( 'vedt_functions' );
}

function vedt_enqueue_comments_reply() {
    if( get_option( 'thread_comments' ) ) {
	    wp_enqueue_script( 'comment-reply' );
    }
}