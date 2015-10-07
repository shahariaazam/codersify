<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        {% if page.title %}
        {{ page.title }} &ndash;
        {% endif %}
        {{ site.name }}
    </title>
    <base href="http://blog.shahariaazam.com/">
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
    <meta property="og:image" content="http://blog.shahariaazam.com/assets/img/shaharia_azam_blog_bg.jpg"/>
    <meta property="og:description" content="{{ page.ogDescription }}"/>
    <meta property="article:publisher" content="https://www.facebook.com/shahariaazamweb"/>
    <meta property="article:author" content="https://www.facebook.com/shaharia.azam"/>
    <meta property="article:published_time" content="{{ page.date }}"/>

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <script src="/assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="/assets/js/vendor/highlight.pack.js"></script>
    <script src="/assets/js/vendor/wow.min.js"></script>

    <script>hljs.initHighlightingOnLoad();
        new WOW().init();</script>

    <script src="/assets/js/vendor/jquery.jpanelmenu.min.js"></script>
    <script src="/assets/js/vendor/bootstrap.min.js"></script>

    <script src="/assets/js/main.js"></script>
</head>

<body>