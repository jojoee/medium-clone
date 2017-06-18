<?php

namespace Jojoee\Mediumm\Index;

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
  <?php get_template_part( 'templates/content', get_post_type() !== 'post' ? get_post_type() : get_post_format() ); ?>
<?php endwhile; ?>

<?php Utils\mediumm_posts_navigation();
