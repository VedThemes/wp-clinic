    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

      <!-- Copyrights
      ============================================= -->
      <div id="copyrights">

        <div class="container clearfix">

          <div class="col_half">
            <?php
              $copyright_text = get_theme_mod( 'wpbt_footer_copyright_text' );
              echo $copyright_text;
            ?><br>
            <div class="copyright-links">
              <?php

                $privacy_policy_page = get_theme_mod( 'wpbt_select_privacy_page' );
                $terms_and_condition_page = get_theme_mod( 'wpbt_select_tos_page' );

                if( $privacy_policy_page ){
                  ?>
                    <a href="<?php the_permalink( $privacy_policy_page ); ?>"><?php _e( 'Privacy Policy', 'wp-clinic' ); ?></a>
                  <?php
                }

                if( $terms_and_condition_page ){
                  ?>
                    <a href="<?php the_permalink( $terms_and_condition_page ); ?>"><?php _e( 'Terms & Conditions', 'wp-clinic' ); ?></a>
                  <?php
                }

              ?>
            </div>
          </div>

          <div class="col_half col_last tright">
            <div class="fright clearfix">
              <?php
                if( get_theme_mod( 'wpbt_facebook_handle' ) ){
                  ?>
                    <a href="https://facebook.com/<?php echo esc_html( get_theme_mod( 'wpbt_facebook_handle' ) ); ?>" class="social-icon si-small si-borderless si-facebook">
                      <i class="icon-facebook"></i>
                      <i class="icon-facebook"></i>
                    </a>
                  <?php
                }

                if( get_theme_mod( 'wpbt_twitter_handle' ) ){
                  ?>
                    <a href="https://twitter.com/<?php echo esc_html( get_theme_mod( 'wpbt_twitter_handle' ) ); ?>" class="social-icon si-small si-borderless si-twitter">
                      <i class="icon-twitter"></i>
                      <i class="icon-twitter"></i>
                    </a>
                  <?php
                }

              ?>

            </div>

            <div class="clear"></div>

            <?php
              if( get_theme_mod( 'wpbt_email' ) ){
                ?>
                  <i class="icon-envelope2"></i> <?php echo esc_html( get_theme_mod( 'wpbt_email' ) ); ?> <span class="middot">&middot;</span>
                <?php
              }
              if( get_theme_mod( 'wpbt_phone_number' ) ){
                ?>
                  <i class="icon-headphones"></i> <?php echo esc_html( get_theme_mod( 'wpbt_phone_number' ) ); ?>
                <?php
              }
            ?>
            
          </div>

        </div>

      </div><!-- #copyrights end -->

    </footer><!-- #footer end -->
  </div><!-- #wrapper end -->

  <!-- Go To Top
  ============================================= -->
  <div id="gotoTop" class="icon-angle-up"></div>

  <!-- External JavaScripts
  ============================================= -->
  <?php wp_footer(); ?>
</body>

</html>