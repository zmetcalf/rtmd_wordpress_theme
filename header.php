<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

    <div class="row">
      <div class="large-12 columns">
        <div class="right hide-for-small-only">
          <ul class="inline-list social_icons">
            <?php get_template_part( 'partial', 'social_media' ); ?>
          </ul>
        </div>
        <a href="<?php echo home_url(); ?>">
            <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
          <img class="header_logo" src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="<?php bloginfo( 'name' ); ?>">
        </a>
      </div>
    </div>

    <div class="off-canvas-wrap" data-offcanvas>
      <div class="inner-wrap">

        <div class="row">
          <div class="large-12 columns">
            <div class="sticky">
              <nav class="top-bar hide-for-small-only" data-topbar role="navigation">
                <section class="top-bar-section">
                  <?php content_nav() ?>
                </section>
              </nav>
            </div>
          </div>
        </div>

        <nav class="tab-bar show-for-small">
          <a class="left-off-canvas-toggle menu-icon" aria-expanded="true"><span></span></a>
        </nav>
        <aside class="left-off-canvas-menu">
          <?php off_canvas_nav(); ?>
        </aside>

        <div class="hide-for-small-only">
          <hr/>
        </div>
