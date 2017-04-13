<?php
use Jojoee\Mediumm\Titles;

if ( ! is_front_page() &&
     ! is_author() &&
     ! is_singular()
) {

  $title = Titles\title();
  printf( '<div class="page-header"><h1>%s</h1></div>',
    $title
  );
}
