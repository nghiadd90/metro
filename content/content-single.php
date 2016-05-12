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
                                        <?php
                                        echo '<p class="frg-post-meta">';
                                        echo '<i class="fa fa-user"></i> ';
                                        printf(__('Đăng bởi <span><a href="%1$s">%2$s</a></span> ', 'metro'), get_author_posts_url(get_the_author_meta('ID')), get_the_author());
                                        echo '<i class="fa fa-clock-o"></i> ';
                                        echo '<span>' . get_the_time('F jS, Y') . '</span>';
                                        echo ' <i class="fa fa-bolt"></i> ';
                                        echo '<span>' . get_the_category_list(' ') . '</span>';
                                        echo '<i class="fa fa-comments"></i> ';
                                        if (comments_open()) {
                                            echo '<span>';
                                            comments_popup_link(
                                                __('Để lại bình luận', 'metro'),
                                                __('1 bình luận', 'metro'),
                                                __('% bình luận', 'metro'),
                                                __('Tất cả bình luận', 'metro')
                                            );
                                            echo '</span>';
                                        }
                                        ?>


                                        <div class="frg-post-content">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="frg-author-bio">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                            <img class="media-object" src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php printf(__('Viết bởi <a href="%1$s">%2$s</a>', 'metro'), get_author_posts_url(get_the_author_meta('ID')), get_the_author()); ?></h4>
                                        <p><?php echo get_the_author_meta('description'); ?></p>
                                        <p>Website <a href="<?php echo get_the_author_meta('user_url'); ?>"><?php echo get_the_author_meta('user_url'); ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (comments_open(get_the_id())) {
                                comments_template();
                            }
                            ?>
                        </div>
                        <!-- End #main-content -->

