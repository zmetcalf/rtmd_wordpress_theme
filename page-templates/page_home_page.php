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

    <h3 class="show-for-small">Header<hr/></h3>

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
          <h5>Rebuilding Days</h5>
          <h6 class="subheader">Find out more about the next rebuilding days.</h6>
          <a href="#" class="small button large-12">Take a Look</a>
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
  <div class="large-12 show-for-small columns">
    <h3>Header</h3><hr>
  </div>

  <div class="large-3 small-6 columns home_quad_blocks">
    <a href="#"></a>
    <img src="http://placehold.it/500x500&text=Thumbnail">
    <div class="panel">
      <p>Our Sponsors</p>
    </div>
  </div>

  <div class="large-3 small-6 columns home_quad_blocks">
    <a href="#"></a>
    <img src="http://placehold.it/500x500&text=Thumbnail">
    <div class="panel">
      <p>Our Mission</p>
    </div>
  </div>

  <div class="large-3 small-6 columns home_quad_blocks">
    <a href="#"></a>
    <img src="http://placehold.it/500x500&text=Thumbnail">
    <div class="panel">
      <p>Our Group</p>
    </div>
  </div>

  <div class="large-3 small-6 columns home_quad_blocks">
    <a href="#"></a>
    <img src="http://placehold.it/500x500&text=Thumbnail">
    <div class="panel">
      <p>Our Projects</p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
