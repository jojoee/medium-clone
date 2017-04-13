<?php if ( function_exists( 'yoast_breadcrumb' ) || function_exists( 'bcn_display' ) ) : ?>
  <div class="medmbreadcrumb-wrap">
    <div class="container">
      <div class="medmbreadcrumb">
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
      the_post_thumbnail( 'large' );
      the_content();
      ?>
    </div>
  </div>

  <?php
  wp_link_pages( [
    'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'medm' ),
    'after'  => '</p></nav>',
  ] );
  ?>
</article>
