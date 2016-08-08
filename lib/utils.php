<?php

function get_site_domain() {
  $result = '';
  $sitename = get_site_url();
  $pattern = '/^(\/\/|http:\/\/|https:\/\/)/';
  $replace = '';

  $result = preg_replace( $pattern, $replace, $sitename );

  return $result;
}

function the_site_domain() {
  echo get_site_domain();
}

/**
 * [is_null_or_empty_string description]
 *
 * @see http://stackoverflow.com/questions/381265/better-way-to-check-variable-for-null-or-empty-string
 * 
 * @param  [type]  $str [description]
 * @return boolean      [description]
 */
function is_null_or_empty_string( $str ) {
  return ( ! isset( $str ) || trim( $str ) === '' );
}

function get_background_image_style( $url = '' ) {
  $result = ( ! is_null_or_empty_string( $url ) )
    ? 'style="background-image: url(\'' . $url . '\');"'
    : '';

  return $result;
}

function the_background_image_style( $url = '' ) {
  echo get_background_image_style( $url );
}

/**
 * [get_word_count description]
 *
 * @see http://www.thomashardy.me.uk/wordpress-word-count-function
 * 
 * @param  [type] $content [description]
 * @return [type]          [description]
 */
function get_word_count( $content = '' ) {
  $word_count = str_word_count( strip_tags( $content ) );

  return $word_count;
}
