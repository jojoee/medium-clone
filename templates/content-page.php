<?php

namespace Jojoee\Mediumm\Templates\ContentPage;

?>

<?php if ( function_exists( 'yoast_breadcrumb' ) || function_exists( 'bcn_display' ) ) : ?>
  <div class="mediumm-breadcrumb-wrap">
    <div class="container">
      <div class="mediumm-breadcrumb">
        <?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
          <?php yoast_breadcrumb(); ?>

        <?php elseif ( function_exists( 'bcn_display' ) ) : ?>
          <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php bcn_display(); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<article <?php post_class(); ?>>
  <div class="inner-entry">
    <h1 class="title">
      <?php the_title(); ?>
    </h1>

    <div class="summary">
      <?php
      if ( has_post_thumbnail() ) {
        echo '<div class="featured-image">';
        the_post_thumbnail( 'large' );
        echo '</div>';
      }
      the_content();
      ?>
    </div>
  </div>

  <?php
  wp_link_pages( array(
    'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'mediumm' ),
    'after'  => '</p></nav>',
  ) );
  ?>
</article>
