<?php
  /* need to improve */
  $banner_url = '';
  $custom_css = '';

  // home only
  $title = '';
  $subtitle = '';
  $home_url = '';

  if ( is_home() ) {
    $title = get_bloginfo( 'name' );
    $subtitle = get_bloginfo( 'description' );
    $home_url = esc_url( home_url( '/' ) );

  } else {
    $post_id = get_the_ID();
    $banner_url = get_wpfeatured_image_url( $post_id );

    if ( is_null_or_empty_string( $banner_url ) ) {
      $banner_url = get_default_banner_url();
      $custom_css = 'default';
    }
  }
?>

<header class="banner <?php echo $custom_css; ?>"
  <?php the_background_image_style( $banner_url ); ?>>
  <div class="container">
    <?php if ( is_home() ) : ?>
      <div class="heading">
        <h1 class="sitename italiana">
          <a class="brand italiana nounderline"
            href="<?php echo $home_url; ?>">
            <?php echo $title; ?>
          </a>
        </h1><!-- .sitename -->

        <div class="sitedesc">
          <?php echo $subtitle; ?>
        </div><!-- .sitedesc -->
      </div>
    <?php endif; ?>
  </div>
</header><!-- .banner -->
