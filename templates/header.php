<?php

namespace Jojoee\Mediumm\Templates\Header;

use Jojoee\Mediumm\Lib\Utils;

// customizer
$header_text_color   = get_header_textcolor();
$header_image_url    = get_header_image();
$custom_header_style = '<style>';
if ( ! Utils\mediumm_is_null_or_empty_string( $header_text_color ) ) {
  $custom_header_style .= sprintf( '.site-title > a { color: #%s !important }', $header_text_color );
}
if ( ! Utils\mediumm_is_null_or_empty_string( $header_image_url ) ) {
  $custom_header_style .= sprintf( '.header { background-image: url("%s"); }', $header_image_url );
}
$custom_header_style .= '</style>';
?>
<?php echo $custom_header_style; ?>
<header class="header">
  <div class="container">
    <div class="row">
      <div class="top">
        <div class="site-title col-md-8">
          <?php
          printf( '<a href="%s">%s</a>',
            esc_url( home_url( '/' ) ),
            get_bloginfo( 'name' )
          );
          ?>
        </div>

        <div class="search-form-nostyle col-md-4 hidden-xs hidden-sm">
          <?php echo get_search_form(); ?>
        </div>
      </div>

      <?php if ( has_nav_menu( 'primary_navigation' ) ) : ?>
        <nav class="nav-primary hidden-xs">
          <?php
          wp_nav_menu( array(
            'theme_location' => 'primary_navigation',
            'menu_class'     => 'nav',
          ) );
          ?>
        </nav>
      <?php endif; ?>

      <?php if ( has_nav_menu( 'primary_navigation' ) ) : ?>
        <nav class="nav-primary-mobile visible-xs">
          <button class="mobile-menu-btn">
            <?php _e( 'Menu', 'mediumm' ); ?>
          </button>

          <?php
          wp_nav_menu( array(
            'theme_location' => 'primary_navigation',
            'menu_class'     => 'nav',
          ) );
          ?>
        </nav>
      <?php endif; ?>
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

      <?php $avatar_url = Utils\mediumm_get_wpauthor_avatar_url(); ?>
      <div class="author-avatar col-xs-3"
        <?php Utils\mediumm_the_background_image_style( $avatar_url ); ?>
      >
      </div>
    </div>
  </div>
<?php endif; ?>

