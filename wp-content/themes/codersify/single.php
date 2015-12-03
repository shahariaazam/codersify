<?php
global $post;
$author_id = $post->post_author;
get_header();
?>

    <span class="menu-trigger writer-icon animated fadeInDown">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </span>

<?php
//Featured image in single post page
    $screen = wp_get_attachment_url( get_post_thumbnail_id($post->ID));;
?>

<?php if (isset($screen) && !empty($screen)): ?>
    <div class="hero-image hero-a-great-story" style="background-image: url(<?php echo $screen; ?>);">
<?php else: ?>
    <div class="hero-image hero-a-great-story">
<?php endif; ?>

    <!-- if the user has javascript disabled they can still use the menu -->
    <noscript>
        <div class="no-js-menu">
            <ul>
                <li><i class="entypo-home"></i><a href="/">Home</a></li>
                <li><i class="entypo-user"></i><a href="<?php echo get_the_author_meta('user_url',
                        1); ?>"><?php echo get_the_author_meta('display_name', 1); ?></a></li>
            </ul>
        </div>
    </noscript>
    <!-- end no script -->

    </div>

    <div class="container">
        <div class="row">

            <div id="menu">
                <ul>
                    <li><i class="entypo-home"></i><a href="/">Home</a></li>
                    <li><i class="entypo-user"></i><a
                            href="<?php echo get_the_author_meta('user_url',
                                1); ?>"><?php echo get_the_author_meta('display_name',
                                $author_id); ?></a></li>

                </ul>
            </div>
            <div class="col-xs-12 main-content single-content">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>

                        <p class="meta">
                            Published on <?php the_time('F jS, Y') ?> <br><?php edit_post_link(); ?>
                            <!-- AddThis Button BEGIN -->
                        </p>

                        <p>
                            <?php echo the_content() ?>
                        </p>

                        <hr>
                    <?php endwhile; ?>

                    <?php comments_template(); ?>

                    <hr>
                    &copy; All rights reserved by <a href="<?php echo get_the_author_meta('user_url',
                        1); ?>"><?php the_author() ?></a> <br>
                    Powered by <a target="_blank" href="https://wordpress.org/">Wordpress</a> | Theme developed by <a target="_blank" href="https://twitter.com/shaharia">@shaharia</a> with <span style="font-size: 16px; color: red;">❤</span>

                <?php endif; ?>
            </div>
            <!-- main-content/col -->


        </div>
        <!--/row -->

    </div>

<?php get_footer(); ?>