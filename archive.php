<?php get_header(); ?>

  <div class="row">
    <div class="large-9 columns" role="main">

			<h1><?php _e( 'Archives', 'rtmd_theme' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
	  </div>

    <?php get_sidebar(); ?>
  </div>

<?php get_footer(); ?>
