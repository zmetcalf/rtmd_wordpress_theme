<?php
/* Template Name: Holiday Home Page Template */
?>

<?php get_header( 'home' ); ?>

<div class="row" data-equalizer="mast_ad_blocks">
  <div class="large-6 columns">
    <div class="panel" data-equalizer-watch="mast_ad_blocks">
      <div class="home_quad_blocks">
        <a href="<?php echo get_post_meta( $post->ID, 'mast_ad_left_link', TRUE); ?>"></a>
        <img src="<?php echo get_post_meta( $post->ID, 'mast_ad_left_img_url', TRUE); ?>">
      </div>
    </div>
  </div>
  <div class="large-6 columns">
    <div class="panel" data-equalizer-watch="mast_ad_blocks">
      <div class="home_quad_blocks">
        <a href="<?php echo get_post_meta( $post->ID, 'mast_ad_right_link', TRUE); ?>"></a>
        <img src="<?php echo get_post_meta( $post->ID, 'mast_ad_right_img_url', TRUE); ?>">
      </div>
    </div>
  </div>
</div>

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
    <br>
  </div>

  <div class="large-6 columns">

    <div class="panel">
      <h4><?php echo get_post_meta( $post->ID, 'main_block_header', TRUE ); ?></h4><hr />
      <h5 class="subheader"><?php echo get_post_meta( $post->ID, 'main_block_body', TRUE); ?></h5>
    </div>

    <div class="row" data-equalizer="small_blocks">
      <div class="large-6 medium-6 columns">
        <div class="panel" data-equalizer-watch="small_blocks">
          <h5><?php echo get_post_meta( $post->ID, 'child_block_one_header', TRUE ); ?></h5>
          <h6 class="subheader">
            <?php echo get_post_meta( $post->ID, 'child_block_one_body', TRUE ); ?>
            <div class="child_block_link show-for-large-only">
              <a href="<?php echo get_post_meta( $post->ID, 'child_block_one_link', TRUE); ?>"> <?php echo get_post_meta( $post->ID, 'child_block_one_button_text', TRUE); ?></a>
            </div>
          </h6>
          <div class="hide-for-large-only">
            <a href="<?php echo get_post_meta( $post->ID, 'child_block_one_link', TRUE); ?>" class="child_block_link_button small button large-12"><?php echo get_post_meta( $post->ID, 'child_block_one_button_text', TRUE); ?></a>
          </div>
        </div>
      </div>

      <div class="large-6 medium-6 columns">
        <div class="panel" data-equalizer-watch="small_blocks">
          <h5><?php echo get_post_meta( $post->ID, 'child_block_two_header', TRUE ); ?></h5>
          <h6 class="subheader">
            <?php echo get_post_meta( $post->ID, 'child_block_two_body', TRUE ); ?>
            <div class="child_block_link show-for-large-only">
              <a href="<?php echo get_post_meta( $post->ID, 'child_block_two_link', TRUE); ?>"> <?php echo get_post_meta( $post->ID, 'child_block_two_button_text', TRUE); ?></a>
            </div>
          </h6>
          <div class="hide-for-large-only">
            <a href="<?php echo get_post_meta( $post->ID, 'child_block_two_link', TRUE); ?>" class="child_block_link_button small button large-12"><?php echo get_post_meta( $post->ID, 'child_block_two_button_text', TRUE); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="large-12 columns">
    <div class="radius panel">
      <div id="success_message" style="display:none;" data-alert class="alert-box hidden radius">
        Thanks for signing up!
          <a href="#" class="close">&times;</a>
      </div>

      <form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
        <h5>Sign-up for our E-Newsletter</h5>
        <!-- The following code must be included to ensure your sign-up form works properly. -->
        <input data-id="ca:input" type="hidden" name="ca" value="238ed0d9-e683-4a81-ac8a-d503bcc2b4b6">
        <input data-id="list:input" type="hidden" name="list" value="1561268378">
        <input data-id="source:input" type="hidden" name="source" value="EFD">
        <input data-id="required:input" type="hidden" name="required" value="email">
        <input data-id="url:input" type="hidden" name="url" value="">

        <div class="row collapse">

          <div class="large-10 small-8 columns">
            <p data-id="Email Address:p" >
              <input data-id="Email Address:input" type="text" name="email" value="" maxlength="80">
            </p>
          </div>

          <div class="large-2 small-4 columns">
            <!--<a href="#" class="postfix button expand">Subscribe</a>-->
            <button type="submit" class="postfix button expand Button ctct-button Button--block Button-secondary" data-enabled="enabled">Subscribe</button>
          </div>

        </div>
      </form>
      <script type='text/javascript'>
         var localizedErrMap = {};
         localizedErrMap['required'] = 		'This field is required.';
         localizedErrMap['ca'] = 			'An unexpected error occurred while attempting to send email.';
         localizedErrMap['email'] = 			'Please enter your email address in name@email.com format.';
         localizedErrMap['birthday'] = 		'Please enter birthday in MM/DD format.';
         localizedErrMap['anniversary'] = 	'Please enter anniversary in MM/DD/YYYY format.';
         localizedErrMap['custom_date'] = 	'Please enter this date in MM/DD/YYYY format.';
         localizedErrMap['list'] = 			'Please select at least one email list.';
         localizedErrMap['generic'] = 		'This field is invalid.';
         localizedErrMap['shared'] = 		'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
         localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
         localizedErrMap['state_province'] = 'Select a state/province';
         localizedErrMap['selectcountry'] = 	'Select a country';
         var postURL = 'https://visitor2.constantcontact.com/api/signup';
      </script>
      <script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.0/js/signup-form.js'></script>
      <!--End CTCT Sign-Up Form-->
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

<div class="row" data-equalizer="news_blocks">
  <div class="large-6 medium-6 columns">
    <div class="panel collapse" data-equalizer-watch="news_blocks">
        <?php
          $query = new WP_Query( array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 1,
            'order_by' => 'date',
            'order' => 'DESC',
          ) );

          if ( $query->have_posts() ) {
            while ( $query->have_posts() ):
              $query->the_post(); ?>

              <?php if ( has_post_thumbnail() ) : ?>
                <div class="left recent_thumb">
                  <?php the_post_thumbnail( 'small' ); ?>
                </div>
              <?php endif; ?>

                <h5><?php the_title(); ?></h5>
            <?php html5wp_excerpt('home_recent_post'); ?>
            <?php endwhile; ?>
          <?php
          } else {
            // no posts found
          }
          wp_reset_postdata();
        ?>
    </div>
  </div>
  <div class="large-6 medium-6 columns">
    <div class="panel" data-equalizer-watch="news_blocks">
    <?php
      $query = new WP_Query( array(
        'post_type' => 'chesterfield_news',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'order_by' => 'date',
        'order' => 'DESC',
      ) );

      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();
          the_content();
        }
      } else {
        // no posts found
      }
      wp_reset_postdata();
    ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
