<?php get_header(); ?>
<div class="row">
  <div class="large-9 columns" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="row">
        <div class="large-12 columns blog_content">
          <!-- post thumbnail -->
          <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
            <div class="right blogroll_image">
              <?php the_post_thumbnail( 'blogroll_thumb' ); // Declare pixel size you need inside the array ?>
            </div>
          <?php endif; ?>
          <!-- /post thumbnail -->

          <?php the_content(); ?>

          <?php edit_post_link(); ?>
        </div>
      </div>

    </article>
    <!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'rtmd_theme' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
  </div>

  <aside class="large-3 columns">
    <?php get_sidebar(); ?>
  </aside>
</div>

<?php get_footer(); ?>
