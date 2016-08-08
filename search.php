<?php get_template_part( 'templates/page', 'header' ); ?>

<?php if ( ! have_posts() ) : ?>
  <!-- search no result and 404 are the same -->
  <article>
    <div class="container">
      <div class="alert alert-warning">
        <?php _e( 'Sorry, no results were found.', 'mdc' ); ?>
      </div>

      <?php get_search_form(); ?>
    </div>
  </article>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'templates/content', 'search' ); ?>
<?php endwhile; ?>

<?php if ( have_posts() ) : ?>
  <?php mdc_posts_navigation(); ?>
<?php endif; ?>
