<?php get_header(); ?>
<?php //Get the parent portfolio
$project_terms = get_the_terms( $post->ID, 'portfolio' );
if($project_terms) :
foreach ( $project_terms as $term ) {
	$term_parent_id = $term->parent;
	$term_id = $term->term_id;
}
$term_parent_id = ($term_parent_id) ? $term_parent_id : $term_id;
$top_term = get_term_by('id', $term_parent_id, 'portfolio');
$top_term_link = get_term_link( $top_term, 'portfolio' );
endif;
?>

  <div class="row">
    <div class="large-3 columns">

		<?php if($project_terms) :?>
			<h1><?php echo $top_term->name; ?></h1>
			<?php if(strlen($top_term->description) > 0) echo '<p>'.$top_term->description.'</p>'; ?>
		<?php endif; ?>

		<?php while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class( 'project' ); ?>>

        <div class="projectNav clearfix">
          <div class="previous <?php if(!get_previous_post()){ echo 'inactive'; }?>">
            <?php previous_post_link('%link'); ?>
          </div>
          <a class="portfolioHome" href="<?php echo $top_term_link; ?>">Back</a>
          <div class="next <?php if(!get_next_post()){ echo 'inactive'; }?>">
            <?php next_post_link('%link'); ?>
          </div>
        </div> <!-- end navigation -->

        <h4><?php the_title(); ?></h4>


        <?php $project_notes = get_post_meta($post->ID, "_ttrust_notes_value", true); ?>
        <?php echo wpautop(do_shortcode($project_notes)); ?>

        <?php $project_url = get_post_meta($post->ID, "_ttrust_url_value", true); ?>
        <?php $project_url_label = get_post_meta($post->ID, "_ttrust_url_label_value", true); ?>
        <?php $project_url_label = ($project_url_label!="") ? $project_url_label : __('Visit Site', 'themetrust'); ?>
        <?php if ($project_url) : ?>
          <p><a class="action" href="<?php echo $project_url; ?>"><?php echo $project_url_label; ?></a></p>
        <?php endif; ?>

      </article>
    </div>

    <div class="large-9 columns" role="main">
      <?php the_content(); ?>
    </div>

  </div>
  <?php endwhile; ?>

<?php get_footer(); ?>
