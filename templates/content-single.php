<?php

namespace Jojoee\Mediumm\Templates\ContentSearch;

use Jojoee\Mediumm\Lib\Utils;

?>

<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <?php
      Utils\mediumm_article_author_box();
      ?>
    </header>

    <div class="inner-entry">
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="featured-image">
          <?php the_post_thumbnail( 'large' ); ?>
        </div>
      <?php endif; ?>

      <h2 class="title">
        <?php the_title(); ?>
      </h2>

      <div class="summary">
        <?php the_content(); ?>
      </div>
    </div>

    <?php $tags = get_the_tags(); ?>
    <?php if ( $tags ) : ?>
      <div class="post-tags">
        <?php
        foreach ( $tags as $tag ) {
          $tag_id = $tag->term_id;
          printf( '<a href="%s" class="tag-link-%s" title="%s">%s</a>',
            get_tag_link( $tag_id ),
            $tag_id,
            $tag->description,
            $tag->name
          );
        }
        ?>
      </div>
    <?php endif; ?>

    <footer>
      <?php
      wp_link_pages( array(
        'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'mediumm' ),
        'after'  => '</p></nav>',
      ) );
      ?>
    </footer>

    <?php comments_template( '/templates/comments.php' ); ?>
  </article>
<?php endwhile;
