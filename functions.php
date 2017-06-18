<?php

namespace Jojoee\Mediumm\Functions;

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
$sage_includes = array(
  'lib/utils.php',
  'lib/assets.php',
  'lib/extras.php',
  'lib/setup.php',
  'lib/titles.php',
  'lib/wrapper.php',
  'lib/customizer.php',
);

foreach ( $sage_includes as $file ) {
  $filepath = locate_template( $file );

  require_once $filepath;
}
unset( $file, $filepath );

// https://codex.wordpress.org/Content_Width
// https://wycks.wordpress.com/2013/02/14/why-the-content_width-wordpress-global-kinda-sucks/
if ( ! isset( $content_width ) ) {
  $content_width = 1170;
}
