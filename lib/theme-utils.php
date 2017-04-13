<?php

function medm_posts_navigation() { ?>
  <div class="posts-navigation-wrap clearfix">
    <?php
    if ( function_exists( 'wp_pagenavi' ) ) {
      wp_pagenavi();
    } else {
      the_posts_navigation();
    }
    ?>
  </div>
  <?php
}

function medm_article_category_box() {
  $categories = get_the_category();
  ?>
  <div class="categories clearfix">
    <?php medm_the_fontawesome( 'tag' ); ?>
    <div class="list">
      <?php
      $i = 0;
      $n = count( $categories );
      for ( $i = 0; $i < $n; $i++ ) {
        $cate = $categories[ $i ];
        $cate_id = $cate->cat_ID;
        $cate_link = get_category_link( $cate_id );
        $cate_name = $cate->cat_name;
        $comma = ( $i !== 0 ) ? ', ' : '';

        printf( '%s<a href="%s" class="underline gray">%s</a>',
          $comma,
          $cate_link,
          $cate_name
        );
      }
      ?>
    </div>
  </div>
  <?php
}

function medm_article_author_box() { ?>
  <div class="article-author">
    <?php $avatar_url = medm_get_wpauthor_avatar_url(); ?>
    <div class="avatar" <?php medm_the_background_image_style( $avatar_url ); ?>>
    </div>

    <div class="meta">
      <div class="top">
        <?php
        printf( '<a href="%s" rel="author" class="fn">%s</a>',
          get_author_posts_url( get_the_author_meta( 'ID' ) ),
          get_the_author()
        );
        ?>
      </div>

      <div class="bottom">
        <?php
        printf( '<time class="created" datetime="%s">%s</time>',
          get_post_time( 'c', true ),
          get_the_date( 'M j, Y' )
        );
        ?>

        <span class="split"></span>

        <?php
        $excerpt = get_the_excerpt();
        $reading_time = medm_get_reading_time( $excerpt );
        echo $reading_time;
        ?>
      </div>
    </div>
  </div>
  <?php
}
