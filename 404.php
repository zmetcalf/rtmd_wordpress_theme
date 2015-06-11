<?php get_header(); ?>
  <div class="row">
    <div class="large-9 columns" role="main">

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'rtmd_theme' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'rtmd_theme' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

    </div>
    <aside class="large-3 columns">
      <?php get_sidebar(); ?>
    </aside>
  </div>

<?php get_footer(); ?>
