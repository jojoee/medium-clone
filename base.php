<?php

namespace Jojoee\Mediumm\Base;

use Jojoee\Mediumm\Lib\Setup;
use Jojoee\Mediumm\Lib\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'templates/head' ); ?>
<body <?php body_class(); ?>>
<!--[if IE]>
<div class="alert alert-warning">
  <?php
  _e( 'You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
  browser</a> to improve your experience.', 'mediumm' );
  ?>
</div>
<![endif]-->
<?php
do_action( 'get_header' );
get_template_part( 'templates/header' );
?>
<div class="wrap" role="document">
  <div class="container">
    <div class="content row">
      <main class="main">
        <?php include Wrapper\template_path(); ?>
      </main>
      <!-- .main -->

      <?php if ( Setup\display_sidebar() ) : ?>
        <aside class="sidebar">
          <?php include Wrapper\sidebar_path(); ?>
        </aside>
        <!-- .sidebar -->
      <?php endif; ?>
    </div>
    <!-- .content -->
  </div>
</div>
<!-- .wrap -->
<?php
do_action( 'get_footer' );
get_template_part( 'templates/footer' );
get_template_part( 'templates/foot' );
?>
</body>
</html>
