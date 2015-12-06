<?php
/**
 * Theme has been developed by @shaharia and published to @github for public use.
 * @Contributors https://github.com/shahariaazam/codersify/graphs/contributors
 * @URI https://github.com/shahariaazam/codersify
 */
?>

<?php get_header(); ?>

    <div class="container home-container">
        <div class="row">

            <?php get_sidebar(); ?>

            <div class="col-md-7 col-sm-12 col-md-offset-5 main-content">

                <div class="nav">
                    <a href="#" class="select-posts active">Posts</a>
                </div>

                <div class="home-page-posts animated fadeIn ">
                    <?php get_template_part('content', get_post_format()); ?>
                </div>
                <!-- Home page posts -->
                <div class="pagination-heading">Pages &raquo; <?php wp_link_pages(); ?> </div>
                <!-- Pagination links -->
                <nav>
                    <ul class="pager">
                        <?php posts_nav_link(); ?>
                    </ul>
                </nav>

                <div class="home-footer">
                    &copy; All rights reserved by <a href="<?php echo get_the_author_meta('user_url',
                        1); ?>"><?php the_author() ?></a> <br>
                    Powered by <a target="_blank" href="https://wordpress.org/">Wordpress</a> | Theme developed by <a target="_blank" href="https://twitter.com/shaharia">@shaharia</a> with <span style="font-size: 16px; color: red;">❤</span>

                </div>

            </div>
            <!-- main content -->

        </div>
        <!--/row -->

    </div> <!-- /container -->

<?php get_footer(); ?>