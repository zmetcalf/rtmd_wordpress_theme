    <footer class="row">
      <hr/>
      <div class="row show-for-small-only">
        <div class="large-12 columns">
          <ul class="inline-list">
           <?php get_template_part( 'partial', 'social_media' ); ?>
          </ul>
        </div>
        <hr/>
      </div>
      <div class="large-12 columns">
        <div class="left">
          <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></p>
        </div>
        <div class="right">
          <p>Rebuilding Together Metro Denver is a 501(c)3 nonprofit organization.</p>
        </div>
      </div>
    </footer>
  </div> <!-- inner-wrap -->
</div> <!-- off-canvas-wrap -->


<?php wp_footer(); ?>

<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');
</script>

	</body>
</html>
