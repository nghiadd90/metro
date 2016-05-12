<?php get_header(); ?>
            <!-- Section content -->
            <section id="frg-content">
                <div class="container">
                    <div class="row">
                        <!-- Main Content -->
                        <div id="frg-main-content" class="col-sm-8">
                            <div class="alert alert-success" role="alert">
                                <?php printf( __( 'Kết quả tìm kiếm cho: %s', 'metro' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
                            </div>
                            <!-- Article -->
                            <div class="frg-article">
                                <div class="row">

                                <?php
                                if (have_posts()): ?>
                                <?php
                                // Start the loop.
                                while ( have_posts() ) : the_post();

                                    // Include the page content template.
                                    get_template_part( 'content/content', 'search');

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
                            <?php else : ?>
                                </div>
                            </div>
                            <?php
                                get_template_part('content/content', 'none');
                            ?>
                            <?php endif; ?>
                        </div>
                        <!-- End #main-content -->
<?php
get_sidebar();
get_footer();
