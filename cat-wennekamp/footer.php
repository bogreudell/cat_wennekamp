        </div><!-- end .content-wrapper -->
        <footer id="footer">
            <p>© 2015 Cat Wennekamp</p>
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
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <?php wp_footer(); ?>
    </body>
</html>