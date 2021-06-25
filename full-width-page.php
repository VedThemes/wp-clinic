<?php
	/*
	 * Template Name: Full Width Page
	 */
	get_header();
?>


<!-- Page Title
        ============================================= -->
<section id="page-title">
  <div class="container clearfix">
    <h1><?php single_post_title(); ?></h1>
  </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    
    <div class="container clearfix">

      	<?php
  			while( have_posts() ){
  				the_post();
  				$author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
  				?>

			  		<div class="single-post nobottommargin">

			          <!-- Single Post -->
			        	<div class="entry clearfix">

				            <?php if( has_post_thumbnail() ): ?>
				            <!-- Entry Image -->
					            <div class="entry-image">
					              <?php the_post_thumbnail(); ?>
					            </div>
				            <!-- .entry-image end -->
				        	<?php endif; ?>

				            <!-- Entry Content -->
				            <div class="entry-content notopmargin">

				              <!-- Post Single - Content End -->
				              <?php
				              	the_content();
				              	$defaults = array(
							        'before'           => '<p class="text-center">' . __( 'Pages:', 'wp-clinic' ),
							        'after'            => '</p>',
							    );
				              	wp_link_pages( $defaults );
				              ?>

				              <div class="clear"></div>

				            </div>
			          	</div>
			          	<!-- .entry end -->

			          	<div class="line"></div>


			          	<?php comments_template(); ?>

			        </div>

  				<?php
  			}
      	?>

    </div>

  </div>

</section><!-- #content end -->

<?php get_footer();