<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/constants.php',
  'lib/debug.php',
  'lib/utils.php',
  'lib/wp-utils.php',
  'lib/theme-utils.php',
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ( $sage_includes as $file ) {
  if ( ! $filepath = locate_template( $file ) ) {
    trigger_error( sprintf( __( 'Error locating %s for inclusion', 'mdc' ), $file ), E_USER_ERROR );
  }

  require_once $filepath;
}
unset( $file, $filepath );

/*================================================================ CUSTOM
*/

/**
 * [mdc_excerpt_length description]
 *
 * @see https://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length
 * 
 * @param  [type] $length [description]
 * @return [type]         [description]
 */
function mdc_excerpt_length( $length ) {
  return 144;
}

add_filter( 'excerpt_length', 'mdc_excerpt_length', 999 );

// https://codex.wordpress.org/Content_Width
// https://wycks.wordpress.com/2013/02/14/why-the-content_width-wordpress-global-kinda-sucks/
if ( ! isset( $content_width ) ) {
  $content_width = 1170;
}

// post navigation
function mdc_posts_navigation() { ?>
  <div class="posts-navigation-wrap">
    <div class="container">
      <?php
        if ( function_exists( 'wp_pagenavi' ) ) {
          wp_pagenavi();

        } else {
          the_posts_navigation();
        }
      ?>
    </div>
  </div>
  <?php
}
