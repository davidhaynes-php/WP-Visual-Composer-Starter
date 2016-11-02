<?php get_header(); ?>
<div class="container">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="archive">
                            <?php if ( have_posts() ) : ?>
                                
                                <?php
                                // Start the loop.
                                while ( have_posts() ) : the_post();

                                    /*
                                     * Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', get_post_format() );

                                    // End the loop.
                                endwhile;

                            ?>
                                <div class="pagination">
                                    <h2 class="screen-reader-text"><?php __( 'Post navigation', 'visual-composer-theme' ); ?></h2>
                                    <div class="nav-links archive-navigation">
                                        <?php
                                        // Previous/next page navigation.
                                        the_posts_pagination( array(
                                            'screen_reader_text' => '',
                                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'visual-composer-theme' ) . '</span>',
                                        ) );
                                        ?>
                                    </div>
                                </div>
                            <?php


                            // If no content, include the "No posts found" template.
                            else :
                                get_template_part( 'template-parts/content', 'none' );

                            endif;

                            ?>

                        </div>
                    </div>
                </div>

                <?php get_sidebar(); ?>



            </div>
        </div>
    </div>
<?php get_footer(); ?>