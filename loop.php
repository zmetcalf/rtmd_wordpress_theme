<?php $first_loop = true; ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php
    if ( !$first_loop ) {
      echo '<hr>';
    } else {
      $first_loop = false;
    }
  ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- post title -->
		<h3>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h3>
		<!-- /post title -->

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		  <div class="right">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail(array(400,240)); // Declare pixel size you need inside the array ?>
        </a>
      </div>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<!-- /post details -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?>

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
