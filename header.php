<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <?php wp_head(); ?>

</head>

<body <?php body_class( "stretched no-transition" ); ?>>
  <?php wp_body_open(); ?>
  <!-- Document Wrapper
  ============================================= -->
  <div id="wrapper" class="clearfix">
    <!-- Header
    ============================================= -->
    <header id="header" class="sticky-style-2">

      <div class="container clearfix">

        <!-- Logo
        ============================================= -->
        <div id="logo">
          <?php
            if( has_custom_logo() ){
              the_custom_logo();
            } else {
              ?>
                <a href="<?php echo esc_url( home_url( "/" ) ); ?>" class="standard-logo"><?php bloginfo( 'name' ); ?></a>
              <?php
            }
          ?>
        </div><!-- #logo end -->

      </div>

      <div id="header-wrap">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-2">

          <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <?php
              if( has_nav_menu( 'primary' ) ){
                wp_nav_menu( [
                  'theme_location'    => 'primary',
                  'container'         => false,
                  'fallback_cb'       => false,
                  'depth'             => 4,
                ] );
              }
            ?>
            <?php if( get_theme_mod( 'wpbt_show_header_search' ) ): ?>
              <!-- Top Search
              ============================================= -->
              <div id="top-search">
                <a href="#" id="top-search-trigger">
                  <i class="icon-search3"></i><i class="icon-line-cross"></i>
                </a>
                <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                  <input
                    type="text"
                    name="s"
                    class="form-control"
                    placeholder="<?php _e( 'Search for...', 'wp-clinic' ); ?>"
                    value="<?php the_search_query(); ?>"
                  />
                </form>
              </div><!-- #top-search end -->
            <?php endif; ?>
            
          </div>

        </nav><!-- #primary-menu end -->

      </div>

    </header><!-- #header end -->
