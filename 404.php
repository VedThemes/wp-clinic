<?php get_header(); ?>

<!-- Page Title
============================================= -->
<section id="page-title">
	<div class="container clearfix">
		<h1><?php _e( 'Page Not Found', 'wp-clinic' ); ?></h1>
	</div>
</section><!-- #page-title end -->
<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="col_half nobottommargin">
				<div class="error404 center"><?php _e( '404', 'wp-clinic' ); ?></div>
			</div>

			<div class="col_half nobottommargin col_last">

				<div class="heading-block nobottomborder">
					<h4><?php _e( "Ooopps! The Page you were looking for, couldn't be found.", "wp-clinic" ); ?></h4>
					<span><?php _e( 'Try searching for the best match or browse the links below:', 'wp-clinic' ); ?></span>
				</div>

				<?php get_search_form(); ?>

			</div>

		</div>

	</div>

</section><!-- #content end -->


<?php get_footer();