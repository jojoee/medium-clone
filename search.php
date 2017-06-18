<?php

namespace Jojoee\Mediumm\Search;

use Jojoee\Mediumm\Lib\Utils;

?>

<?php get_template_part( 'templates/page', 'header' ); ?>

<?php if ( ! have_posts() ) : ?>
  <div class="alert alert-warning">
    <?php _e( 'Sorry, no results were found.', 'mediumm' ); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'templates/content', 'search' ); ?>
<?php endwhile; ?>

<?php Utils\mediumm_posts_navigation();
