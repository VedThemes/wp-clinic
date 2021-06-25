<?php

function vedt_widgets(){

	$widget_args = [
		'name'			=> __( 'WP Clinic Widgets', 'wp-clinic' ),
		'id'			=> 'wpbt_sidebar',
		'description'	=> __( 'Sidebar for WP Clinic', 'wp-clinic' ),
		'before_widget'	=> '<div id="%1$s" class="widget clearfix %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4>',
		'after_title'	=> '</h4>'
	];

	register_sidebar( $widget_args );

}