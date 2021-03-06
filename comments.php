<div id="comments" class="comments-area">
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentyfifteen' ),
                number_format_i18n( get_comments_number() ), get_the_title() );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 56,
            ) );
            ?>
        </ol><!-- .comment-list -->

                     // Are there comments to navigate through?
                     if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                     ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfifteen' ); ?></h2>
            <div class="nav-links">
                <?php
                if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'twentyfifteen' ) ) ) :
                    printf( '<div class="nav-previous">%s</div>', $prev_link );
                endif;

                if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'twentyfifteen' ) ) ) :
                    printf( '<div class="nav-next">%s</div>', $next_link );
                endif;
                ?>
            </div><!-- .nav-links -->
        </nav><!-- .comment-navigation -->

    <?php endif; // have_comments() ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfifteen' ); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div><!-- .comments-area -->