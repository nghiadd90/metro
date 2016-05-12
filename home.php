<?php get_header(); ?>
            <!-- Section content -->
            <section id="frg-content">
                <div class="container">
                    <div class="row">
                        <!-- Main Content -->
                        <div id="frg-main-content" class="col-sm-8">
                            <!-- Slideshow -->
                            <div id="frg-slider">
                                <div id="carousel-example-generic" class="frg-slideshow carousel fade" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators pull-right">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                    <?php
                                        /**
                                         * Query featured post for slideshow
                                         */
                                        $args = [
                                            'posts_per_page' => 3,
                                            'post_type' => 'post',
                                            'slideshow' => 'slider',
                                            'post_status' => 'publish'
                                        ];

                                        $sliders = get_posts($args);
                                        $i = 0;
                                        foreach ($sliders as $slider) {
                                        ?>
                                        <div class="thumbnail item <?php echo ($i==0) ? 'active' : ''; ?>">
                                            <div><a href="<?php echo get_permalink($slider->ID); ?>"><?php echo get_the_post_thumbnail($slider->ID, 'featured-image'); ?></a></div>
                                            <div class="carousel-caption">
                                                <h3><a href="<?php echo get_permalink($slider->ID); ?>"><?php echo $slider->post_title; ?></a></h3>
                                                <p><?php echo string_limit_words($slider->post_excerpt, 25); ?></p>
                                            </div>
                                        </div>
                                        <?php
                                        $i++;
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <!-- End slider -->

                            <!-- Article -->
                            <div class="frg-article">
                                <div class="row">

                                <?php
                                if (have_posts()): ?>
                                <?php
                                // Start the loop.
                                while ( have_posts() ) : the_post();

                                    // Include the page content template.
                                    get_template_part( 'content/content', 'front');

                                endwhile;
                                ?>


                                </div>
                            </div>
                            <!-- End article -->

                            <!-- Pagination -->
                            <div id="frg-pagination">
                            <?php the_posts_pagination(); ?>
                            </div>
                            <!-- End pagination -->
                                <?php endif; ?>
                        </div>
                        <!-- End #main-content -->
<?php
get_sidebar();
get_footer();
