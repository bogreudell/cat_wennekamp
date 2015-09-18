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
                <?php wp_list_pages('orderby=menu_order&title_li='); ?>
            </ul>
            <div class="clearfix"></div>
        </header>

<?php 

$banner_img = get_field('banner_image');

if ( $banner_img ) :

    $banner_img_url = $banner_img['url'];
    $banner_img_title = $banner_img['title']; 

    if ( $banner_img_url ) : ?>

<div class="banner_img" style="background:url(<?php echo $banner_img_url; ?>); background-size:cover;"></div>

<?php
    
    endif; 

endif; 

?>