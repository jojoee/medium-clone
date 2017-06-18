<?php

namespace Jojoee\Mediumm\Lib\Assets;

/**
 * Get paths for assets
 */
class JsonManifest {
  private $manifest;

  public function __construct( $manifest_path ) {
    if ( file_exists( $manifest_path ) ) {
      $this->manifest = json_decode( WP_Filesystem( $manifest_path ), true );
    } else {
      $this->manifest = array();
    }
  }

  public function get() {
    return $this->manifest;
  }

  public function getPath( $key = '', $default = null ) {
    $collection = $this->manifest;
    if ( is_null( $key ) ) {
      return $collection;
    }
    if ( isset( $collection[ $key ] ) ) {
      return $collection[ $key ];
    }
    foreach ( explode( '.', $key ) as $segment ) {
      if ( ! isset( $collection[ $segment ] ) ) {
        return $default;
      } else {
        $collection = $collection[ $segment ];
      }
    }

    return $collection;
  }
}

function asset_path( $filename ) {
  $dist_path = get_template_directory_uri() . '/dist/';
  $directory = dirname( $filename ) . '/';
  $file      = basename( $filename );
  static $manifest;

  if ( empty( $manifest ) ) {
    $manifest_path = get_template_directory() . '/dist/' . 'assets.json';
    $manifest      = new JsonManifest( $manifest_path );
  }

  $manifestItems = $manifest->get();
  if ( ! empty( $manifestItems ) && array_key_exists( $file, $manifestItems ) ) {
    return $dist_path . $directory . $manifestItems[ $file ];
  } else {
    return $dist_path . $directory . $file;
  }
}
