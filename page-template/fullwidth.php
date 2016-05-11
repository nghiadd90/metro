<?php
/**
 * Template Name: Full Width
 */
get_header();
?>

            <!-- Section content -->
            <section id="frg-content">
                <div class="container">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        <div class="frg-page-fullwidth">
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section>
        </div>


<?php
get_footer();
