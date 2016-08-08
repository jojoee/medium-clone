<?php // single post ?>

<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="container">
      <header>
        <h1 class="entry-title">
          <?php the_title(); ?>
        </h1>

        <?php get_template_part( 'templates/entry-meta' ); ?>
      </header>

      <div class="entry-content">
        <?php the_content(); ?>
      </div>

      <div class="entry-other">
        <?php
          the_category_list();
          the_tag_list();
        ?>
      </div>

      <footer>
        <?php
          wp_link_pages( [
            'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'mdc' ),
            'after'  => '</p></nav>'
          ] );
        ?>
      </footer>

      <div class="comment-wrap clearfix">
        <?php comments_template( '/templates/comments.php' ); ?>
      </div>
    </div>
  </article>
<?php endwhile; ?>
