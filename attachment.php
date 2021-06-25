<?php get_header(); ?>
<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    
    <div class="container clearfix">

      <!-- Post Content
      ============================================= -->
      <div class="postcontent nobottommargin clearfix">

      	<?php
      		if( have_posts() ){
      			while( have_posts() ){
      				the_post();
      				$author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
      				?>

				  		<div class="single-post nobottommargin">

				          <!-- Single Post -->
				        	<div class="entry clearfix">

				            	<!-- Entry Title -->
					    	   	<div class="entry-title">
					        	  <h2><?php the_title(); ?></h2>
					        	</div>
					        	<!-- .entry-title end -->

					            <!-- Entry Content -->
					            <div class="entry-content notopmargin">

					              <!-- Post Single - Content End -->
					              <?php the_content(); ?>

					              <div class="clear"></div>

					            </div>
				          	</div>
				          	<!-- .entry end -->

				          	<div class="line"></div>

				          	<?php comments_template(); ?>

				        </div>

      				<?php
      			}
      		}
      	?>


      </div><!-- .postcontent end -->

      <?php get_sidebar(); ?>

    </div>

  </div>

</section><!-- #content end -->

<?php get_footer();