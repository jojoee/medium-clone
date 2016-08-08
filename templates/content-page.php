<?php // Yoast SEO breadcrumb over Breadcrumb NavXT ?>

<?php if ( function_exists( 'yoast_breadcrumb' ) || function_exists( 'bcn_display' ) ) : ?>
  <div class="mdcbreadcrumb-wrap">
    <div class="container">
      <div class="mdcbreadcrumb">
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

<article>
  <div class="container">
    <div class="entry-content">
      <?php the_content(); ?>
    </div>

    <footer>
      <?php
        wp_link_pages( [
          'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'mdc' ),
          'after' => '</p></nav>'
        ] );
      ?>
    </footer>
  </div>
</article>
