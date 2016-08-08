<div class="footer-sidebar">
  <div class="container">
    <div class="col-md-4">
      <?php dynamic_sidebar( 'sidebar-footer1' ); ?>
    </div>

    <div class="col-md-4">
      <?php dynamic_sidebar( 'sidebar-footer2' ); ?>
    </div>

    <div class="col-md-4">
      <?php dynamic_sidebar( 'sidebar-footer3' ); ?>
    </div>
  </div>
</div><!-- .footer-sidebar -->

<footer class="content-info">
  <div class="colophon">
    &copy; <?php echo date( 'Y' ) ?> <?php the_site_domain(); ?>    
  </div>
</footer><!-- .content-info -->
