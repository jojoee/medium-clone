<header class="header">
  <div class="container">
    <div class="row">
      <div class="top">
        <div class="site-title col-md-8">
          <?php
          printf( '<a href="%s">%s</a>',
            get_home_url(),
            get_bloginfo( 'name' )
          );
          ?>
        </div>

        <div class="search-form-nostyle col-md-4 hidden-xs hidden-sm">
          <?php echo get_search_form(); ?>
        </div>
      </div>

      <nav class="nav-primary hidden-xs">
        <?php
        if ( has_nav_menu( 'primary_navigation' ) ) {
          wp_nav_menu( array(
            'theme_location' => 'primary_navigation',
            'menu_class'     => 'nav',
          ) );
        }
        ?>
      </nav>

      <nav class="nav-primary-mobile visible-xs">
        <button class="mobile-menu-btn">
          Menu
        </button>

        <?php
        if ( has_nav_menu( 'primary_navigation' ) ) {
          wp_nav_menu( array(
            'theme_location' => 'primary_navigation',
            'menu_class'     => 'nav',
          ) );
        }
        ?>
      </nav>
    </div>
  </div>
</header>

<?php if ( is_author() ) : ?>
  <div class="author-banner">
    <div class="container">
      <div class="author-meta col-xs-9">
        <h1 class="author-name">
          <?php the_author(); ?>
        </h1>

        <div class="author-desc">
          <?php the_author_meta( 'user_description' ); ?>
        </div>
      </div>

      <?php $avatar_url = medm_get_wpauthor_avatar_url(); ?>
      <div class="author-avatar col-xs-3"
        <?php medm_the_background_image_style( $avatar_url ); ?>
        >
      </div>
    </div>
  </div>
<?php endif; ?>

