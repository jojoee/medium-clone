<?php

namespace Jojoee\Mediumm\Page404;

get_template_part( 'templates/page', 'header' );

?>

<article>
  <div class="alert alert-warning">
    <?php _e( 'Sorry, but the page you were trying to view does not exist.', 'mediumm' ); ?>
  </div>

  <?php get_search_form(); ?>
</article>
