<?php

function get_default_featured_image_url() {
  return DEFAULT_FEATURED_IMAGE_PATH;
}

/**
 * [get_wpfeatured_image_url_with_default description]
 *
 * @see http://stackoverflow.com/questions/6384431/creating-anonymous-objects-in-php
 * @see https://wordpress.org/support/topic/getting-a-post-featured-image-url
 * @see https://wordpress.org/support/topic/retrieveing-featured-image-url
 * @see http://stackoverflow.com/questions/11261883/how-to-get-wordpress-post-featured-image-url
 * 
 * @param  [type] $post_id [description]
 * @return [type]          [description]
 */
function get_wpfeatured_image_url_with_default( $post_id = 0 ) {
  $wpfeatured_image_url = get_wpfeatured_image_url( $post_id );

  if ( is_null_or_empty_string( $wpfeatured_image_url ) ) {
    $wpfeatured_image_url = get_default_featured_image_url();
  }

  return $wpfeatured_image_url;
}
