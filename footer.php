      <?php if(is_single()):?>
      <div class="ad ad--leaderboard">
        <div class="container">
          <!-- FF- leaderboard -->
          <ins class="adsbygoogle"
               style="display:inline-block;width:728px;height:90px"
               data-ad-client="ca-pub-8642281896248767"
               data-ad-slot="3980592108"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>

        </div>
      </div>
      <?php endif; ?>

    </div>
  </main>


  <footer  class="footer" role="contentinfo">


    <div class="container">
      <ul class="footer__top">
        <li>
          <?php dynamic_sidebar('footer-left'); ?>
        </li>
        <li>
          <?php dynamic_sidebar('footer-center'); ?>
        </li>
        <li>
          <?php dynamic_sidebar('footer-right'); ?>
        </li>
      </ul>

      <div class="footer__nav">
        <ul>
          <li><a href="<?php bloginfo("url"); ?>/" title=""<?php if ( is_front_page()) { ?> class="active"<?php } ?>>Home</a></li>
          <?php
            if ( function_exists( 'wp_nav_menu' ) ) {
            wp_nav_menu( array( 'theme_location' => 'custom-menu' , 'container' => '' , 'fallback_cb'=> 'custom_menu' , 'depth' => 1 ) ); }
          else
            { custom_menu(); }
          ?>
        </ul>

      </div>

      <div class="footer__bottom">
        <h3 class="footer__title"><a href="/">FondFont</a></h3>
        <p>FondFont gathers the best fonts and web fonts that are free to download in one site and present it in a most original and graphical way. Fonts here are handpicked from sites like Behance, Dribbble, Google Fonts and more.</p>
        <div id="copyright">&copy; <?php the_time(__('Y')) ?> <?php bloginfo('name'); ?>. All Rights Reserved.</div>
      </div>
    </div>







  </footer>


<?php wp_footer(); ?>

<!-- GA -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46740497-1', 'fondfont.com');
  ga('send', 'pageview');
</script>

</body>
</html>
