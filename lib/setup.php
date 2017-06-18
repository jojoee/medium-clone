<?php

namespace Jojoee\Mediumm\Lib\Setup;

use Jojoee\Mediumm\Lib\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support( 'soil-clean-up' );
  add_theme_support( 'soil-nav-walker' );
  add_theme_support( 'soil-nice-search' );
  add_theme_support( 'soil-jquery-cdn' );
  add_theme_support( 'soil-relative-urls' );

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain( 'mediumm', get_template_directory() . '/lang' );

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support( 'title-tag' );

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus( array(
    'primary_navigation' => __( 'Primary Navigation', 'mediumm' ),
  ) );

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support( 'post-thumbnails' );

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );

  // Theme Check
  add_theme_support( 'automatic-feed-links' );

  // Customize
  add_theme_support( 'custom-background' );
  add_theme_support( 'custom-header', array(
    'flex-width'  => true,
    'flex-height' => true,
  ) );

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style( Assets\asset_path( 'styles/main.css' ) );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup' );

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Primary', 'mediumm' ),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer', 'mediumm' ),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
}

add_action( 'widgets_init', __NAMESPACE__ . '\\widgets_init' );

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset( $display ) || $display = ! in_array( true, array(
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_author(),
    is_singular(),
    is_page_template( 'template-custom.php' ),
  ) );

  return apply_filters( 'sage/display_sidebar', $display );
}

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style( 'mediumm-sage/css', Assets\asset_path( 'styles/main.css' ), false, null );

  if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  wp_enqueue_script( 'mediumm-sage/js', Assets\asset_path( 'scripts/main.js' ), array( 'jquery' ), null, true );
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100 );
