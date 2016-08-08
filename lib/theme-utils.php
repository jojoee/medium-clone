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

/**
 * [is_post_type description]
 *
 * @see https://developer.wordpress.org/reference/functions/get_post_type/
 * @see http://wordpress.stackexchange.com/questions/6731/if-is-custom-post-type
 *
 * @param  string  $str [description]
 * @return boolean      [description]
 */
function is_post_type( $str = '' ) {
  $result = false;

  $post_id = get_the_ID();
  $post_obj = get_post( $post_id );
  $post_type = $post_obj->post_type;
  $result = ( $post_type == $str );

  return $result;
}

function get_posts_by_post_type( $post_type = '', $nposts = -1 ) {
  $args = [
    'post_type'       => $post_type,
    'posts_per_page'  => $nposts
  ];

  return get_posts( $args );
}

/**
 * [the_category_list description]
 *
 * @see https://codex.wordpress.org/Function_Reference/get_the_category_list
 * 
 * @return [type] [description]
 */
function the_category_list() {
  $categories_list = get_the_category_list( __( ', ', 'mdc' ) );

  if ( ! is_null_or_empty_string( $categories_list ) ) {
    echo '<div class="category-list">';
    echo 'Category: ' . $categories_list;
    echo '</div>';
  }
}

/**
 * [the_tag_list description]
 *
 * @see https://codex.wordpress.org/Function_Reference/get_the_tag_list
 * 
 * @return [type] [description]
 */
function the_tag_list() {
  $tag_list = get_the_tag_list( '', __( ', ', 'mdc' ), '' );

  if ( ! is_null_or_empty_string( $tag_list ) ) {
    echo '<div class="tag-list">';
    echo 'Tag: ' . $tag_list;
    echo '</div>';
  }
}
