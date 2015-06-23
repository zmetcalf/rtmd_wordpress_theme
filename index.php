<?php get_header(); ?>
  <div class="row">
    <div class="large-9 medium-8 columns" role="main">

			<h1><?php _e( 'Latest Posts', 'rtmd_theme' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

    </div>

    <?php get_sidebar(); ?>
  </div>

<?php get_footer(); ?>
