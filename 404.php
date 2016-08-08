<?php get_template_part( 'templates/page', 'header' ); ?>

<!-- search no result and 404 are the same -->
<article>
  <div class="container">
    <div class="alert alert-warning">
      <?php _e( 'Sorry, but the page you were trying to view does not exist.', 'mdc' ); ?>
    </div>

    <?php get_search_form(); ?>
  </div>
</article>
