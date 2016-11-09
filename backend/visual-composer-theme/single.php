<?php get_header(); ?>
<?php
    // Start the loop.
    while ( have_posts() ) : the_post();
?>
<div class="<?php echo vc_get_content_container_class(); ?>">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="main-content">
                    <article class="entry-full-content">
                        <div class="row">
                            <div class="col-md-2">
                                <?php
                                    get_template_part( 'template-parts/biography' );
                                ?>
                            </div><!--.col-md-2-->
                            <div class="col-md-10">
                                <?php
                                    visualcomposertheme_single_meta();
                                    get_template_part( 'template-parts/content', 'single' );

                                    if ( is_singular( 'post' ) ): ?>
                                        <div class="nav-links post-navigation">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="nav-previous">
                                                        <?php
                                                            echo get_previous_post_link(
                                                                '%link',
                                                                '<span class="meta-nav">' . __( 'Previous', 'visual-composer-theme' ) . '</span>
                                                                <span class="screen-reader-text">' . __( 'Previous post:', 'visual-composer-theme' ) . '</span>
                                                                <span class="post-title">%title</span>'
                                                            );
                                                        ?>
                                                    </div><!--nav-previous-->
                                                </div><!--.col-md-5-->
                                                <div class="col-md-5 col-md-offset-2">
                                                    <div class="nav-next">
                                                        <?php
                                                            echo get_next_post_link(
                                                                '%link',
                                                                '<span class="meta-nav">' . __( 'Next', 'visual-composer-theme' ) . '</span>
                                                                <span class="screen-reader-text">' . __( 'Next post:', 'visual-composer-theme' ) . '</span>
                                                                <span class="post-title">%title</span>'
                                                            );
                                                        ?>
                                                    </div><!--.nav-next-->
                                                </div><!--.col-md-5-->
                                            </div><!--.row-->
                                        </div><!--.nav-links post-navigation-->
                                    <?php endif; ?>
                            </div><!--.col-md-10-->
                        </div><!--.row-->
                    </article><!--.entry-full-content-->
                </div><!--.main-content-->
            </div>
        </div><!--.row-->
    </div><!--.content-wrapper-->
</div><!--.<?php echo vc_get_content_container_class(); ?>-->
<?php if ( comments_open() || get_comments_number() ) {
    comments_template();
}?>
<?php
    // End of the loop.
    endwhile;
?>
<?php get_footer(); ?>