<?php get_header(); ?>

<div class="row">
  <div class="large-9 medium-8 columns" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
    ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php the_title('<h1>', '</h1>' ); ?>
        <p><?php
          echo sprintf( __( 'The event will be held on %s', 'cf_domain' ),
            date("F j, Y", strtotime( get_post_meta( get_the_ID(), 'cf_event_date', TRUE ) ) )
          );
        ?>
        </p>
        <p><?php echo __( 'Please come back for more details.', 'cf_domain' ); ?></p>
      </article>
    <?php endwhile; ?>
  </div>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
