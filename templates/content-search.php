<article <?php post_class(); ?>>
  <header>
    <?php
    if ( get_post_type() === 'post' ) {
      medm_article_author_box();
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
      the_post_thumbnail( 'large' );
      the_excerpt();
      ?>
    </div>
  </div>

  <a href="<?php the_permalink(); ?>" class="read-more gray">
    Read more...
  </a>
</article>
