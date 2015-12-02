<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <div class="post wow fadeInLeft" data-wow-offset="200" data-wow-duration=".5s">
            <section>
                <div class="post-preview col-xs-12  no-gutter">

                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

                    <p class="meta">
                        Published at <?php the_time('F jS, Y') ?> in
                        <?php the_category(', ') ?>
                    </p>

                    <p style="text-align: justify">
                        <?php the_content() ?>
                    </p>
                </div>

            </section>
        </div>

    <?php endwhile; ?>

<?php else : ?>

    <h2 class="center">Not Found</h2>
    <p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

<?php endif; ?>