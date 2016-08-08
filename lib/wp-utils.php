<?php

/*================================================================ Featured image
*/

function get_wpfeatured_image_url( $post_id = 0 ) {
  $thumbnail_id = get_post_thumbnail_id( $post_id );
  $wpfeatured_image = wp_get_attachment_image_src( $thumbnail_id, 'full' ); // return array
  $wpfeatured_image_url = '';
  
  if ( ! empty( $wpfeatured_image ) ) {
    $wpfeatured_image_url = $wpfeatured_image[0];
  }

  return $wpfeatured_image_url;
}

/*================================================================ Post
*/

function get_random_posts( $num = 1, $post_type = 'post' ) {
  $args = [
    'orderby'             => 'rand',
    'posts_per_page'      => $num,
    'ignore_sticky_posts' => 1,
    'post_type'           => $post_type
  ];
  $random_posts = get_posts( $args );

  return $random_posts;
}

/**
 * [get_post_excerpt description]
 *
 * @see http://wordpress.stackexchange.com/questions/26729/get-excerpt-using-get-the-excerpt-outside-a-loop
 * 
 * @param  [type]  $the_content    [description]
 * @param  integer $excerpt_length [description]
 * @param  string  $pclass         [description]
 * @return [type]                  [description]
 */
function get_post_excerpt( $the_content = '', $excerpt_length = 35, $pclass = '' ) {
  $the_excerpt = strip_tags( strip_shortcodes( $the_content ) );
  $the_excerpt = '<p class="' . $pclass . '">' . get_limited_string( $the_excerpt, $excerpt_length ) . '</p>';

  return $the_excerpt;
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

/*================================================================ Archive - Category
*/

function get_category_term_id() {
  $cat_queried_object = get_queried_object();
  $cat_term_id = $cat_queried_object->term_id;

  return $cat_term_id;
}

/**
 * [get_all_top_level_categories description]
 *
 * @see http://stackoverflow.com/questions/15113247/wordpress-show-only-top-level-categories
 * @see https://developer.wordpress.org/reference/functions/get_categories/
 * 
 * @return [type] [description]
 */
function get_all_top_level_categories() {
  $args = [
    'orderby' => 'name',
    'parent'  => 0
  ];
  $categories = get_categories( $args );

  return $categories;
}

/**
 * [get_all_top_level_subcategories description]
 * get only top (first) level of the category
 * and not query a category that have no posts
 *
 * @see http://wordpress.stackexchange.com/questions/13485/list-all-subcategories-from-category
 * @see http://stackoverflow.com/questions/15113247/wordpress-show-only-top-level-categories
 * 
 * @param  integer $cat_term_id [description]
 * @return array
 */
function get_all_top_level_subcategories( $cat_term_id = 0 ) {
  $args = [ 'parent' => $cat_term_id ];
  $categories = get_categories( $args );

  return $categories;
}

/**
 * [get_all_subcategories description]
 * all subcategories (including child)
 * 
 * @param  [type] $cat_term_id [description]
 * @return [type]              [description]
 */
function get_all_subcategories( $cat_term_id ) {
  $args = [ 'child_of' => $cat_term_id ];
  $categories = get_categories( $args );

  return $categories;
}

/**
 * [get_all_category_posts description]
 * including the post in subcategory of this category
 * 
 * @param  [type] $cat_term_id [description]
 * @return [type]              [description]
 */
function get_all_category_posts( $cat_term_id ) {
  $cat_args = [
    'category'        => $cat_term_id,
    'posts_per_page'  => -1
  ];
  $cat_posts = get_posts( $cat_args );

  return $cat_posts;
}

/**
 * [get_all_category_posts_excluding_subcategory_args description]
 *
 * @see https://wordpress.org/support/topic/how-to-exclude-child-category-content-from-parent-category-default-display?replies=9
 * @see https://wordpress.org/support/topic/exclude-posts-from-children-categories-with-query_postsget_posts?replies=4
 * @see http://wordpress.stackexchange.com/questions/136486/exclude-sub-category-posts-from-category-display
 *
 * @param  [type] $cat_term_id [description]
 * @return [type]              [description]
 */
function get_all_category_posts_excluding_subcategory_args( $cat_term_id ) {
  $cat_args = [
    'category__in'    => $cat_term_id,
    'posts_per_page'  => -1
  ];

  return $cat_args;
}

function get_all_category_posts_excluding_subcategory( $cat_term_id ) {
  $cat_args = get_all_category_posts_excluding_subcategory_args( $cat_term_id );
  $cat_posts = get_posts( $cat_args );

  return $cat_posts;
}
/**
 * [the_category_list description]
 *
 * @see https://codex.wordpress.org/Function_Reference/get_the_category_list
 * 
 * @return [type] [description]
 */
function the_category_list() {
  $categories_list = get_the_category_list( __( ', ', 'koa' ) );

  if ( ! is_null_or_empty_string( $categories_list ) ) {
    echo '<div class="category-list">';
    echo 'Category: ' . $categories_list;
    echo '</div>';
  }
}

/*================================================================ Archive - Tag
*/

/**
 * [the_tag_list description]
 *
 * @see https://codex.wordpress.org/Function_Reference/get_the_tag_list
 * 
 * @return [type] [description]
 */
function the_tag_list() {
  $tag_list = get_the_tag_list( '', __( ', ', 'koa' ), '' );

  if ( ! is_null_or_empty_string( $tag_list ) ) {
    echo '<div class="tag-list">';
    echo 'Tag: ' . $tag_list;
    echo '</div>';
  }
}

/*================================================================ Page
*/

/**
 * [is_default_page_template description]
 *
 * @see https://wordpress.org/support/topic/is_page_template-refuses-to-acknowledge-the-default-page-template
 * 
 * @return boolean [description]
 */
function is_default_page_template() {
  return ( is_page() && ! is_page_template() );
}

/*================================================================ Author
*/

function get_wpuser_meta()                { return get_user_meta( get_wpauthor_id() ); }
function get_wpauthor_id()                { return get_the_author_meta( 'ID' ); }
function get_wpauthor_login()             { return get_the_author_meta( 'user_login' ); } 
function get_wpauthor_nicename()          { return get_the_author_meta( 'user_nicename' ); } // duplicate
function get_wpauthor_email()             { return get_the_author_meta( 'user_email' ); }
function get_wpauthor_url()               { return get_the_author_meta( 'user_url' ); }
function get_wpauthor_facebook()          { return get_the_author_meta( 'facebook' ); }
function get_wpauthor_twitter()           { return 'https://twitter.com/' . get_the_author_meta( 'twitter' ); }
function get_wpauthor_googleplus()        { return get_the_author_meta( 'googleplus' ); }
function get_wpauthor_display_name()      { return get_the_author_meta( 'display_name' ); }
function get_wpauthor_nickname()          { return get_the_author_meta( 'nickname' ); }
function get_wpauthor_first_name()        { return get_the_author_meta( 'first_name' ); }
function get_wpauthor_last_name()         { return get_the_author_meta( 'last_name' ); }
function get_wpauthor_description()       { return get_the_author_meta( 'description' ); }
function get_wpauthor_jabber()            { return get_the_author_meta( 'jabber' ); } // unused
function get_wpauthor_aim()               { return get_the_author_meta( 'aim' ); }
function get_wpauthor_level()             { return get_the_author_meta( 'user_level' ); } // unused
function get_wpauthor_user_firstname()    { return get_the_author_meta( 'user_firstname' ); } // duplicate
function get_wpauthor_user_lastname()     { return get_the_author_meta( 'user_lastname' ); } // duplicate
function get_wpauthor_user_description()  { return get_the_author_meta( 'user_description' ); } // duplicate
function get_wpauthor_avatar_url()        { return get_avatar_url( get_wpauthor_id() ); }
