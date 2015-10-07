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
                <div class="pagination-heading">Pages &raquo; </div>
                <!-- Pagination links -->
                <nav>
                    <ul class="pager">
                        <li class="previous"><a href="{{ paginator.previous_page_path }}"><span
                                    aria-hidden="true">&larr;</span> Previous Page </a></li>
                        <li class="next"><a href="{{ paginator.next_page_path }}">Next Page <span
                                    aria-hidden="true">&rarr;</span></a></li>
                    </ul>
                </nav>

                <div class="home-footer">
                    &copy; All rights reserved by <?php the_author() ?>

                </div>

            </div>
            <!-- main content -->

        </div>
        <!--/row -->

    </div> <!-- /container -->

<?php get_footer(); ?>