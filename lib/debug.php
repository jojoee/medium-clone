<?php

/*================================================================ Echo
*/

function dd( $var = null, $die = true ) {
  echo '<pre>';
  print_r( $var );
  echo '</pre>';

  if ( $die ) die();
}

function da( $var = null ) {
  dd( $var, false );
}

function dhead( $head, $var ) {
  echo '<div class="debug-box">';
  echo '================';
  echo ' ' . $head . ' ';
  echo '================';
  echo '<br>';
  da( $var );
  echo '</div>';
}

/*================================================================ Dummy
*/

function get_dummy_image_uri() {
  $dummy_img = get_template_directory_uri() . '/dist/images/dummy-img.jpg';
  
  return $dummy_img;
}

function the_dummy_image_uri() {
  echo get_dummy_image_uri();
}

// unused
function the_dummy_background_image_style() {
  the_background_image_style( get_dummy_image_uri() );
}

/*================================================================ Author
*/

function debug_author_meta() {
  echo '<pre>';
  printf( '%s: %s<br />', 'ID', get_wpauthor_id() );
  printf( '%s: %s<br />', 'user_login', get_wpauthor_login() );
  printf( '%s: %s<br />', 'user_nicename', get_wpauthor_nicename() );
  printf( '%s: %s<br />', 'user_email', get_wpauthor_email() );
  printf( '%s: %s<br />', 'user_url', get_wpauthor_url() );
  printf( '%s: %s<br />', 'facebook', get_wpauthor_facebook() );
  printf( '%s: %s<br />', 'twitter', get_wpauthor_twitter() );
  printf( '%s: %s<br />', 'googleplus', get_wpauthor_googleplus() );
  printf( '%s: %s<br />', 'display_name', get_wpauthor_display_name() );
  printf( '%s: %s<br />', 'nickname', get_wpauthor_nickname() );
  printf( '%s: %s<br />', 'first_name', get_wpauthor_first_name() );
  printf( '%s: %s<br />', 'last_name', get_wpauthor_last_name() );
  printf( '%s: %s<br />', 'description', get_wpauthor_description() );
  printf( '%s: %s<br />', 'jabber', get_wpauthor_jabber() );
  printf( '%s: %s<br />', 'aim', get_wpauthor_aim() );
  printf( '%s: %s<br />', 'user_level', get_wpauthor_level() );
  printf( '%s: %s<br />', 'avatar_url', get_wpauthor_avatar_url() );
  echo '</pre>';
}

/*================================================================ Condition
*/

// http://stackoverflow.com/questions/1005857/how-to-call-php-function-from-string-stored-in-a-variable
// https://developer.wordpress.org/themes/basics/conditional-tags/
// http://www.wpexplorer.com/discover-wordpress-conditional-tags/
function debug_condition_tags() { ?>
  <style>
  .decond-tags {}
  .decond-tags .status {}
  .decond-tags .status-false { color: red; }
  .decond-tags .status-true { color: green; }
  </style>
  <?php
  $funcs = [
    'has_tag',
    'has_term',
    // 'in_category',
    'is_404',
    'is_admin',
    'is_archive',
    'is_attachment',
    'is_author',
    'is_category',
    'is_child_theme',
    'is_comments_popup',
    'is_date',
    'is_day',
    'is_feed',
    'is_front_page',
    'is_home',
    'is_month',
    'is_multi_author',
    'is_multisite',
    'is_main_site',
    'is_page',
    'is_page_template',
    'is_paged',
    'is_preview',
    'is_rtl',
    'is_search',
    'is_single',
    'is_singular',
    'is_sticky',
    'is_super_admin',
    'is_tag',
    'is_tax',
    'is_time',
    'is_trackback',
    'is_year',
    'pings_open'
  ];

  echo '<div class="decond-tags">';
  foreach ( $funcs as $func ) {
    $cond_status = 'false';
    if ( call_user_func( $func ) ) $cond_status = 'true';

    printf( '%s: <span class="status-%s">%s</span><br>',
      $func,
      $cond_status,
      $cond_status
    );
  }
  echo '</div>';
}
