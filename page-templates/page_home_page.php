<?php
/* Template Name: Home Page Template */
?>

<?php get_header( 'home' ); ?>

<div class="row">

  <div class="large-6 columns">
    <div class="row">
      <div class="large-12 large-offset-0 medium-10 medium-offset-1 small-10 small-offset-1 columns">
        <div class="home_slider">
          <?php foreach ( get_post_meta( $post->ID, 'slider_image_url' ) as $image_url): ?>
          <div>
            <img src="<?php echo $image_url; ?>">
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    </br>
  </div>

  <div class="large-6 columns">

    <div class="panel">
      <h4><?php echo get_post_meta( $post->ID, 'main_block_header', TRUE ); ?><hr/></h4>
      <h5 class="subheader"><?php echo get_post_meta( $post->ID, 'main_block_body', TRUE); ?></h5>
    </div>

    <div class="row" data-equalizer="small_blocks">
      <div class="large-6 small-6 columns">
        <div class="panel" data-equalizer-watch="small_blocks">
          <h5><?php echo get_post_meta( $post->ID, 'child_block_one_header', TRUE ); ?></h5>
          <h6 class="subheader"><?php echo get_post_meta( $post->ID, 'child_block_one_body', TRUE ); ?></h6>
          <?php for ($breaks = 0; $breaks < intval( get_post_meta( $post->ID, 'child_block_one_blank_space', TRUE ) ); $breaks++ ): ?>
            <br>
          <?php endfor; ?>
          <a href="<?php echo get_post_meta( $post->ID, 'child_block_one_link', TRUE); ?>" class="small button large-12"><?php echo get_post_meta( $post->ID, 'child_block_one_button_text', TRUE); ?></a>
        </div>
      </div>

      <div class="large-6 small-6 columns">
        <div class="panel" data-equalizer-watch="small_blocks">
          <h5><?php echo get_post_meta( $post->ID, 'child_block_two_header', TRUE ); ?></h5>
          <h6 class="subheader"><?php echo get_post_meta( $post->ID, 'child_block_two_body', TRUE ); ?></h6>
          <?php for ($breaks = 0; $breaks < intval( get_post_meta( $post->ID, 'child_block_two_blank_space', TRUE ) ); $breaks++ ): ?>
            <br>
          <?php endfor; ?>
          <a href="<?php echo get_post_meta( $post->ID, 'child_block_two_link', TRUE); ?>" class="small button large-12"><?php echo get_post_meta( $post->ID, 'child_block_two_button_text', TRUE); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="large-12 columns">
    <div class="radius panel">
      <form>
        <div class="row collapse">

          <h5>Sign-up for our E-Newsletter</h5>
          <div class="large-10 small-8 columns">
            <input type="text"/>
          </div>

          <div class="large-2 small-4 columns">
            <a href="#" class="postfix button expand">Subscribe</a>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">

  <div class="large-3 small-6 columns home_quad_blocks">
    <a href="<?php echo get_post_meta( $post->ID, 'base_widget_one_link', TRUE); ?>"></a>
    <img src="<?php echo get_post_meta( $post->ID, 'base_widget_one_img_url', TRUE); ?>">
    <div class="panel">
      <p><?php echo get_post_meta( $post->ID, 'base_widget_one_text', TRUE); ?></p>
    </div>
  </div>

  <div class="large-3 small-6 columns home_quad_blocks">
    <a href="<?php echo get_post_meta( $post->ID, 'base_widget_two_link', TRUE); ?>"></a>
    <img src="<?php echo get_post_meta( $post->ID, 'base_widget_two_img_url', TRUE); ?>">
    <div class="panel">
      <p><?php echo get_post_meta( $post->ID, 'base_widget_two_text', TRUE); ?></p>
    </div>
  </div>

  <div class="large-3 small-6 columns home_quad_blocks">
    <a href="<?php echo get_post_meta( $post->ID, 'base_widget_three_link', TRUE); ?>"></a>
    <img src="<?php echo get_post_meta( $post->ID, 'base_widget_three_img_url', TRUE); ?>">
    <div class="panel">
      <p><?php echo get_post_meta( $post->ID, 'base_widget_three_text', TRUE); ?></p>
    </div>
  </div>

  <div class="large-3 small-6 columns home_quad_blocks">
    <a href="<?php echo get_post_meta( $post->ID, 'base_widget_four_link', TRUE); ?>"></a>
    <img src="<?php echo get_post_meta( $post->ID, 'base_widget_four_img_url', TRUE); ?>">
    <div class="panel">
      <p><?php echo get_post_meta( $post->ID, 'base_widget_four_text', TRUE); ?></p>
    </div>
  </div>

</div>

<?php get_footer(); ?>
