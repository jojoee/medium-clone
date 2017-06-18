<?php

namespace Jojoee\Mediumm\Templates\PageHeader;

use Jojoee\Mediumm\Lib\Titles;

if ( ! is_front_page() &&
     ! is_author() &&
     ! is_singular()
) {

  $title = Titles\title();
  printf( '<div class="page-header"><h1>%s</h1></div>',
    $title
  );
}
