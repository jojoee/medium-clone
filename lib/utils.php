<?php

/*================================================================ Domain
*/

function mediumm_get_site_domain() {
  $sitename = get_site_url();
  $pattern = '/^(\/\/|http:\/\/|https:\/\/)/';
  $replace = '';

  $result = preg_replace( $pattern, $replace, $sitename );

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
 * @return string
 */
function mediumm_get_reading_time( $content ) {
  $words_per_min = 200;
  $nwords = str_word_count( $content );
  $mins = ceil( $nwords / $words_per_min );

  return sprintf( '%d min read', $mins );
}
