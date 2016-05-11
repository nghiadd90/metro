            <!-- Section content -->
            <section id="frg-content">
                <div class="container">
                    <div class="row">
                        <!-- Main Content -->
                        <div id="frg-main-content" class="col-sm-8">
                            <div class="frg-single-post">
                                <div class="thumbnail">
                                    <div class="img-responsive">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('large');
                                        }
                                        ?>
                                    </div>
                                    <div class="caption">
                                        <h3><?php the_title(); ?></h3>
                                        <p class="frg-post-meta"><i class="fa fa-user"></i> <?php _e('Đăng bởi', 'metro'); ?> <span><?php the_author(); ?></span> <i class="fa fa-clock-o"></i> <?php the_time('F jS, Y'); ?> <i class="fa fa-bolt"></i> <?php echo get_the_category_list(' '); ?></p>

                                        <div class="frg-post-content">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End #main-content -->

