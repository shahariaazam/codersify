<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css">

    <script src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>
        window.jQuery || document.write('<script src="<?php bloginfo( 'template_directory' ); ?>js/vendor/jquery-1.10.1.min.js"><\/script>')
    </script>

    <script src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/highlight.pack.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/wow.min.js"></script>

    <script>
        hljs.initHighlightingOnLoad();
        new WOW().init();
    </script>

    <script src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/jquery.jpanelmenu.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

    <?php wp_head(); ?>
</head>

<body>