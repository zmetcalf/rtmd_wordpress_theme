<?php get_header(); ?>

  <div class="row">
    <div class="large-9 columns" role="main">

			<h1><?php _e( 'Categories for ', 'rtmd_theme' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
	  </div>

    <aside class="large-3 columns">
      <?php get_sidebar(); ?>
    </aside>
  </div>

<?php get_footer(); ?>
