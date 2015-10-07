<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="description" content="{{ page.ogDescription }}"/>
    <meta name="viewport" content="width=device-width">
    <meta name="google-site-verification" content="PX2o2Mdb63PoTVyFtjfpSssn2L6tZpQEESIf4KrJr5U"/>

    <link rel="author" href="https://plus.google.com/+GMShahariaAzam"/>
    <!-- @authorship -->
    <!--Open Graph Protocol-->
    <meta name="twitter:card" content="summery"/>
    <meta name="twitter:site" content="@shaharia"/>
    <meta name="twitter:creator" content="@shaharia"/>
    <meta property="og:site_name" content="{{ site.description }}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="fb:app_id" content="{{ site.fbAppId }}"/>
    <meta property="og:url" content="{{ site.url }}{{ page.url }}"/>
    <meta property="og:title" content="{{ page.title }}"/>
    <meta property="og:image" content="<?php bloginfo( 'url' ); ?>/assets/img/blog_bg.jpg"/>
    <meta property="og:description" content="{{ page.ogDescription }}"/>
    <meta property="article:publisher" content="https://www.facebook.com/shahariaazamweb"/>
    <meta property="article:author" content="https://www.facebook.com/shaharia.azam"/>
    <meta property="article:published_time" content="{{ page.date }}"/>

    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/main.css">

    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo( 'template_directory' ); ?>js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/vendor/highlight.pack.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/vendor/wow.min.js"></script>

    <script>hljs.initHighlightingOnLoad();
        new WOW().init();</script>

    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/vendor/jquery.jpanelmenu.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/vendor/bootstrap.min.js"></script>

    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/main.js"></script>
</head>

<body>