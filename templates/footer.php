<?php

namespace Jojoee\Mediumm\Templates\Foot;

use Jojoee\Mediumm\Lib\Utils;

?>

<div class="footer-sidebar">
  <div class="container">
    <?php dynamic_sidebar( 'sidebar-footer' ); ?>
  </div>
</div><!-- .footer-sidebar -->

<footer class="footer-info">
  <div class="container">
    &copy; <?php echo date( 'Y' ) ?> <?php Utils\mediumm_the_site_domain(); ?>
  </div>
</footer><!-- .footer-info -->
