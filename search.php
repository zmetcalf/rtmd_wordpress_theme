<?php get_header(); ?>
  <div class="row">
    <div class="large-9 columns" role="main">

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

    <aside class="large-3 columns">
      <?php get_sidebar(); ?>
    </aside>
  </div>

<?php get_footer(); ?>
