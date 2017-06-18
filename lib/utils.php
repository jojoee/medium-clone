<?php

namespace Jojoee\Mediumm\Lib\Utils;

/*================================================================ Domain
*/

function mediumm_get_site_domain() {
  $sitename = get_site_url();
  $pattern  = '/^(\/\/|http:\/\/|https:\/\/)/';
  $replace  = '';
  $result   = preg_replace( $pattern, $replace, $sitename );

  return $result;
}

function mediumm_the_site_domain() {
  echo mediumm_get_site_domain();
}

/*================================================================ String
*/

/**
 * Check the string is null or empty string
 *
 * @see http://stackoverflow.com/questions/381265/better-way-to-check-variable-for-null-or-empty-string
 *
 * @param string $str
 *
 * @return boolean
 */
function mediumm_is_null_or_empty_string( $str ) {
  return ( ! isset( $str ) || trim( $str ) === '' );
}

/*================================================================ Image
*/

/**
 * Get inline style of provided background image url
 *
 * @param string $url
 *
 * @return string
 */
function mediumm_get_background_image_style( $url = '' ) {
  $result = ( ! mediumm_is_null_or_empty_string( $url ) )
    ? 'style="background-image: url(\'' . $url . '\');"'
    : '';

  return $result;
}

/**
 * Echo inline style of provided background image url
 *
 * @param string $url
 */
function mediumm_the_background_image_style( $url = '' ) {
  echo mediumm_get_background_image_style( $url );
}

/*================================================================ Font
*/

/**
 * Echo fontawesome
 *
 * @param string $id
 */
function mediumm_the_fontawesome( $id = 'circle' ) {
  printf( '<i class="fa fa-%s" aria-hidden="true"></i>', $id );
}

/*================================================================ Misc
*/

/**
 * Get reading time
 *
 * @see https://yhello.co/wordpress/add-reading-time-article/
 *
 * @param string $content
 *
 * @return string
 */
function mediumm_get_reading_time( $content ) {
  $words_per_min = 200;
  $nwords        = str_word_count( $content );
  $mins          = ceil( $nwords / $words_per_min );
  $txt           = __( 'min read', 'mediumm' );

  return sprintf( '%d %s', $mins, $txt );
}

/*================================================================ Wp - User
*/

function mediumm_get_wpauthor_id() {
  return get_the_author_meta( 'ID' );
}

function mediumm_get_wpauthor_avatar_url() {
  return get_avatar_url( mediumm_get_wpauthor_id() );
}

function mediumm_posts_navigation() { ?>
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

/*================================================================ Theme
*/

function mediumm_article_category_box() {
  $categories = get_the_category();
  ?>
  <div class="categories clearfix">
    <?php mediumm_the_fontawesome( 'tag' ); ?>
    <div class="list">
      <?php
      $i = 0;
      $n = count( $categories );
      for ( $i = 0; $i < $n; $i ++ ) {
        $cate      = $categories[ $i ];
        $cate_id   = $cate->cat_ID;
        $cate_link = get_category_link( $cate_id );
        $cate_name = $cate->cat_name;

        printf( '<a href="%s" class="underline gray">%s</a>',
          $cate_link,
          $cate_name
        );
      }
      ?>
    </div>
  </div>
  <?php
}

function mediumm_article_author_box() { ?>
  <div class="article-author">
    <?php $avatar_url = mediumm_get_wpauthor_avatar_url(); ?>
    <div class="avatar" <?php mediumm_the_background_image_style( $avatar_url ); ?>>
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
        $content      = get_the_content();
        $reading_time = mediumm_get_reading_time( $content );
        echo $reading_time;
        ?>
      </div>
    </div>
  </div>
  <?php
}
