<?php

namespace Jojoee\Mediumm\Templates\ContentSearch;

use Jojoee\Mediumm\Lib\Utils;

?>

<article <?php post_class(); ?>>
  <header>
    <?php
    if ( get_post_type() === 'post' ) {
      Utils\mediumm_article_author_box();
    }
    ?>
  </header>

  <div class="inner-entry">
    <a href="<?php the_permalink(); ?>" class="inner-wrap"></a>

    <h2 class="title">
      <?php the_title(); ?>
    </h2>

    <div class="summary">
      <?php
      if ( has_post_thumbnail() ) {
        echo '<div class="featured-image">';
        the_post_thumbnail( 'large' );
        echo '</div>';
      }
      the_excerpt();
      ?>
    </div>
  </div>

  <a href="<?php the_permalink(); ?>" class="read-more gray">
    <?php _e( 'Read more...', 'mediumm' ); ?>
  </a>
</article>
