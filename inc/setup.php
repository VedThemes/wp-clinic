<?php

if ( ! isset( $content_width ) ) {
	$content_width = 900;
}
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}
function vedt_setup_theme(){
	
	add_theme_support( 'post-thumbnails' );
	/**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 
		'html5',
		array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
			'style',
			'script'
		)
	);
	// Set up the WordPress core custom background feature.
    $args = apply_filters( 'wp_clinic_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) );
    add_theme_support( 'custom-background', $args );
    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	register_nav_menu(
		'primary',
		__( 'Primary Menu', 'wp-clinic' )
	);

	register_nav_menu(
		'secondary',
		__( 'Secondary Menu', 'wp-clinic' )
	);

}

function vedt_comment_callback( $comment, $args, $depth ){
	if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
        <div class="comment-meta" >
            <?php
                if ( $args['avatar_size'] != 0 ) {
                    echo get_avatar( $comment, $args['avatar_size'] ); 
                }
            ?>
            <div class="comment-author vcard">
                <?php 
                    printf( __( '<cite class="fn">%s</cite>', 'wp-clinic' ), get_comment_author_link() );
                ?>
                <?php if ( $comment->comment_approved == '0' ) { ?>
                    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'wp-clinic' ); ?></em><br/>
                <?php } ?>
                <div class="comment-meta commentmetadata">
                    <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                        printf( 
                            __( '%1$s at %2$s', 'wp-clinic' ), 
                            get_comment_date(),  
                            get_comment_time() 
                        ); ?>
                    </a>
                    <?php edit_comment_link( __( '(Edit)', 'wp-clinic' ), '  ', '' ); ?>
                </div>
            </div>
        </div>
        <div class="comment-content clearfix">
            <?php comment_text(); ?>
        </div>
        <div class="reply"><?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}