<?php

// Setup
define( 'VEDT_DEV_MODE', true );

// Includes
include( get_theme_file_path( '/inc/public/enqueue.php' ) );
include( get_theme_file_path( '/inc/setup.php' ) );
include( get_theme_file_path( '/inc/custom-nav-walker.php' ) );
include( get_theme_file_path( '/inc/widgets.php' ) );
include( get_theme_file_path( '/inc/theme-customizer.php' ) );
include( get_theme_file_path( '/inc/customizer/social.php' ) );
include( get_theme_file_path( '/inc/customizer/miscellaneous.php' ) );
include( get_theme_file_path( '/inc/customizer/enqueue.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'vedt_scripts' );
add_action( 'after_setup_theme', 'vedt_setup_theme' );
add_action( 'widgets_init', 'vedt_widgets' );
add_action( 'customize_register', 'vedt_customize_register' );
add_action( 'customize_preview_init', 'vedt_customize_preview_init' );
add_action( 'excerpt_more', '__return_false' );
add_action( 'comment_form_before', 'vedt_enqueue_comments_reply' );

// Shortcodes