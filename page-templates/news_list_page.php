<?php /* Template Name: News List Template */ ?>


<?php get_header(); ?>

  <div class="row">
    <div class="large-9 medium-8 columns" role="main">
			<h1><?php the_title(); ?></h1>

    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $query = new WP_Query( array(
        'post_type' => 'chesterfield_news',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'order_by' => 'date',
        'order' => 'DESC',
        'paged' => $paged
      ) );

      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();
          the_content();

          edit_post_link();
          echo '<hr>';
        }
      } else {
        // no posts found
      }
    ?>

      <ul class="pagination">
        <?php foundation_single_page_pagination( 2, $query ); ?>
      </ul>

    <?php
      wp_reset_postdata();
    ?>
	  </div>

    <?php get_sidebar(); ?>
  </div>

<?php get_footer(); ?>
