<article <?php post_class(); ?>>
  <header>
    <?php
    if ( ! is_archive() ) {
      mediumm_article_category_box();
    }

    mediumm_article_author_box();
    ?>
  </header>

  <div class="inner-entry">
    <a href="<?php the_permalink(); ?>" class="inner-wrap"></a>

    <h2 class="title">
      <?php the_title(); ?>
    </h2>

    <?php if ( has_post_thumbnail() ) : ?>
      <div class="featured-image">
        <?php the_post_thumbnail( 'large' ); ?>
      </div>
    <?php endif; ?>

    <div class="summary">
      <?php the_excerpt(); ?>
    </div>
  </div>

  <a href="<?php the_permalink(); ?>" class="read-more gray">
    Read more...
  </a>
</article>
