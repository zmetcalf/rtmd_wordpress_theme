<?php get_header(); ?>

<div class="row">
  <div class="large-9 medium-8 columns" role="main">


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1><?php the_title(); ?></h1>

      <!-- post thumbnail -->
      <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
        <div class="right blogroll_image">
          <?php the_post_thumbnail( 'blogroll_thumb' ); // Declare pixel size you need inside the array ?>
        </div>
      <?php endif; ?>
      <!-- /post thumbnail -->


			<!-- post details -->
			<h6 class="subheader"><?php the_time('F j, Y'); ?></h6>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'rtmd_theme' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorized in: ', 'rtmd_theme' ); the_category(', '); // Separated by commas ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'rtmd_theme' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
  </div>


  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
