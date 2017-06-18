<?php

namespace Jojoee\Mediumm\Functions;

// http://php.net/manual/en/language.namespaces.rationale.php
define( 'MEDIUMM_MIN_PHP_VERSION', '5.3.0' );

function mediumm_admin_notices() {
  ?>
  <div class="update-nag">
    <?php _e( 'You need to update your PHP version to run Mediumm theme.', 'mediumm' ); ?> <br/>
    <?php _e( 'Your PHP version: ', 'mediumm' ); ?>
    <strong><?php echo phpversion(); ?></strong><br/>
    <?php _e( 'Minimum PHP required version: ', 'mediumm' ); ?>
    <strong><?php echo MEDIUMM_MIN_PHP_VERSION; ?></strong><br/>
  </div>
  <?php
}

// https://wordpress.stackexchange.com/questions/131157/check-php-version-before-theme-activation
// https://wpartisan.me/tutorials/check-php-version-switching-theme
function mediumm_after_switch_theme( $old_theme_name, $old_theme ) {
  if ( version_compare( phpversion(), MEDIUMM_MIN_PHP_VERSION, '<' ) ) {
    add_action( 'admin_notices', __NAMESPACE__ . '\\mediumm_admin_notices', 10, 0 );
    // switch back
    switch_theme( $old_theme->stylesheet );

    return false;
  }
}

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

add_action( 'after_switch_theme', __NAMESPACE__ . '\\mediumm_after_switch_theme', 10, 2 );
