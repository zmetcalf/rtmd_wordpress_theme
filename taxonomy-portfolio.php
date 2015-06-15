<?php get_header(); ?>

<?php //Get the parent portfolio
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ));
$term->term_id;
$child_of = ($term->parent == 0) ? $term->term_id : $term->parent;

?>

  <div class="row">
    <div class="large-3 columns">

		<div id="pageHead">
			<h1><?php echo $term->name; ?></h1>
			<?php if(strlen($term->description) > 0) echo '<p>'.$term->description.'</p>'; ?>
		</div>

		<?php $content_class = "full"; ?>
		<?php $categories =  get_categories('taxonomy=portfolio&child_of='.$child_of); ?>

		<?php if (sizeof($categories) > 0 ) : //If there are sub-portfolios, show the sidebar.?>

				<ul id="filterNav" class="clearfix">
					<li class="segment-0"><a href="#" data-filter="*" class="selected">All</a></li>
					<?php
					foreach ($categories as $category) {
						$a = '<li><a href="#" data-filter=".'.$category->slug.'">';
						$a .= $category->name;
						$a .= '</a></li>';
						echo $a;
						echo "\n";
					 }
					 ?>
				</ul>

			<?php if(is_active_sidebar('sidebar_portfolio')) : dynamic_sidebar('sidebar_portfolio'); endif; ?>
			<?php $content_class = "threeFourth"?>
		<?php endif; ?>
		</div>

		<?php
		query_posts( array(
			'ignore_sticky_posts' => 1,
    		'posts_per_page' => 200,
    		'post_type' => array(
			'projects'
			),
			'portfolio' => get_query_var( 'term' )
		));
		?>

    <div class="large-9 columns <?php echo $content_class; ?> clearfix"  id="content" role="main">

			<div id="projects">

				<div class="thumbs masonry">
				<?php  while (have_posts()) : the_post(); ?>

					<?php
					$p = "";
					$portfolios = get_the_terms( $post->ID, 'portfolio');
					if ($portfolios) {
					   foreach ($portfolios as $portfolio) {
					      $p .= $portfolio->slug . " ";
					   }
					}
					?>

					<?php $project_thumb_size = ( "ttrust_one_fourth_cropped" ? "ttrust_one_fourth_cropped" : "small" ); ?>

					<?php
					$lightbox_media = "";
					$lightbox_img = get_post_meta($post->ID, "_ttrust_lightbox_img_value", true);
					$lightbox_video = get_post_meta($post->ID, "_ttrust_lightbox_video_value", true);
					if ($lightbox_img || $lightbox_video) :
						$lightbox_media = ($lightbox_video != "") ? $lightbox_video : $lightbox_img;
					endif;
					?>

					<div class="project small <?php echo $p; ?> <?php if($lightbox_media) echo 'lightbox'; ?>" >
						<?php if($lightbox_media) : ?>
							<a href="<?php echo $lightbox_media; ?>" rel="prettyPhoto" >
						<?php else : ?>
							<a href="<?php the_permalink(); ?>" rel="bookmark" >
						<?php endif; ?>

						<?php the_post_thumbnail($project_thumb_size, array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?>
						<span class="title"><span><?php the_title(); ?></span></span>
						</a>
		 			</div>

				<?php endwhile; ?>
				<?php wp_reset_query();?>

				</div>
			</div>
		</div>
  </div>
<?php get_footer(); ?>
