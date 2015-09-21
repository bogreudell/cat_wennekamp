        </div><!-- end .content-wrapper -->
        <?php if ( is_front_page() ) : ?>
        
            <div id="instafeed-wrap">
                <div id="instafeed-banner" class="homepage-blog-title"><img class="social_icon" src="<?php bloginfo('url'); ?>/wp-content/themes/cat-wennekamp/img/instagram.png">Follow Cat on Instagram</div>
                <div id="instafeed"></div>  
            </div>
        
        <?php endif; ?>
        <footer id="footer">
            <p>© 2015 Cat Wennekamp</p>
            <p>designed by <a href="http://www.matte-finish.com" target="_blank">MATTE</a></p>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="<?php bloginfo('url'); ?>/wp-content/themes/cat-wennekamp/js/plugins.js"></script>
        <script src="<?php bloginfo('url'); ?>/wp-content/themes/cat-wennekamp/js/main.js"></script>
        <!--<script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobubble/src/infobubble.js"></script>-->

        <!-- Instagram banner below -->
        <?php if ( is_front_page() ) : ?>
        <script type="text/javascript">
            
            var feed = new Instafeed({
                get: 'user',
                limit: 13,
                userId: 6551595,
                accessToken: '6551595.97584da.6fb385d2a71149d9aab8f60d843bde64',
                resolution: 'standard_resolution',
                template: '<a href="{{link}}" target="_blank"><img src="{{image}}"/></a>'
            });
            feed.run();
        </script>
        <?php endif; ?>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-66440040-1', 'auto');
          ga('send', 'pageview');

        </script>
        <?php wp_footer(); ?>
    </body>
</html>