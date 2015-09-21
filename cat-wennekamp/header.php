<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cat Wennekamp</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

        <script src="<?php bloginfo('url'); ?>/wp-content/themes/cat-wennekamp/js/vendor/modernizr-2.8.3.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header id="header">
            <div id="logo">
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php bloginfo('url'); ?>/wp-content/themes/cat-wennekamp/img/logo_black.svg" alt="">
                </a>
            </div>
            <ul id="nav">
            <!-- need to manually add .current_page_item class -->
            <?php 
                $page_args = array( 'sort_column' => 'menu_order' ); 
                $pages = get_pages( $page_args );
            
                foreach ( $pages as $page ) : 
            ?>
                <li><a href="<?php echo $page->guid; ?>" title="<?php echo strtoupper($page->post_title); ?>"><?php echo $page->post_title; ?></a></li>
            <?php endforeach; ?>
                <li class="social_icon"><a href="https://www.facebook.com/Cat-Wennekamp-Fashion-Stylist-140362836015080/timeline/" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/cat-wennekamp/img/facebook.png" alt="facebook"></a></li>
                <li class="social_icon"><a href="https://twitter.com/catwennekamp" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/cat-wennekamp/img/twitter.png" alt="twitter"></a></li>
                <li class="social_icon"><a href="https://www.pinterest.com/catwennekamp/" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/cat-wennekamp/img/pinterest.png" alt="pinterest"></a></li>
                <li class="social_icon"><a href="https://instagram.com/catwennekamp/?hl=en" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/themes/cat-wennekamp/img/instagram.png" alt="instagram"></a></li>
            </ul>
            <button id="nav_trigger">≡</button>
            <div class="clearfix"></div>
        </header>

<?php 

$banner_img = get_field('banner_image');

if ( $banner_img ) :

    $banner_img_url = $banner_img['url'];
    $banner_img_title = $banner_img['title']; 

    if ( $banner_img_url ) : ?>

<div class="banner_img" style="background:url(<?php echo $banner_img_url; ?>) center center no-repeat; background-size:cover;">
    <div class="banner_logo" style="background:url(<?php bloginfo('url'); ?>/wp-content/themes/cat-wennekamp/img/logo_white.svg) center center no-repeat; background-size:contain;"></div>
</div>

<?php
    
    endif; 

endif; 

?>