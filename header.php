<?php
/**
 * Theme has been developed by @shaharia and published to @github for public use.
 * @Contributors https://github.com/shahariaazam/codersify/graphs/contributors
 * @URI https://github.com/shahariaazam/codersify
 */
?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/main.css">

    <script
        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/vendor/highlight.pack.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/vendor/wow.min.js"></script>

    <script>
        hljs.initHighlightingOnLoad();
        new WOW().init();
    </script>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/vendor/jquery.jpanelmenu.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/main.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>