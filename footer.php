
        <!-- Footer -->
        <footer>
            <!-- Main footer -->
            <div class="frg-footer">
                <div class="container">
                    <div class="row">
                        <!-- About footer -->
                        <div class="col-xs-6 col-sm-4">
                            <div class="frg-footer-about">
                                <h4>About Us</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur quam augue, vehicula quis, tincidunt vel, varius vitae, nulla. Sed convallis orci. Duis libero orci, pretium a, convallis quis.</p>
                            </div>
                        </div>
                        <!-- End about footer -->

                        <!-- Featured footer -->
                        <div class="col-xs-6 col-sm-4">
                            <div class="frg-footer-featured">
                                <h4>Featured</h4>
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
                                    foreach ($sliders as $slider) {
                                    ?>
                                    <div class="media">
                                        <div class="media-left">
                                        <a href="<?php echo get_permalink($slider->ID); ?>">
                                        <?php echo get_the_post_thumbnail($slider->ID, 'thumbnail'); ?>
                                            <!-- <img class="media-object" src="<?php echo IMAGES; ?>/feature-media-1.jpg" alt="footer featured image"> -->
                                        <?php echo wp_get_attachment_url($slider->ID); ?>
                                        </a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="<?php echo get_permalink($slider->ID); ?>"><?php echo $slider->post_title; ?></a></h6>
                                        </div>
                                   </div>
                                    <?php
                                    }
                                ?>

                            </div>
                        </div>
                        <!-- End featured footer -->

                        <!-- Footer link -->
                        <div class="col-xs-6 col-sm-4">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="frg-footer-social">
                                        <ul class="list-inline">
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-dribbble.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-mail.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-rss.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-facebook.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-googleplus.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-flickr.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-lastfm.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-linkedin.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-twitter.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-tumblr.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-vimeo.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-stumbleupon.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-youtube.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo IMAGES; ?>/social/social-pinterest.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="frg-footer-form">
                                        <form role="search" id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                            <div class="form-horizontal" role="form">
                                                <div class="input-group">
                                                    <label class="sr-only" for="s"><?php _x('Tìm kiếm cho:', 'label', 'metro'); ?></label>
                                                    <input type="text" class="form-control" name="s" id="s" value="<?php echo get_search_query(); ?>">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="submit"><i class="fa fa-search fa-flip-horizontal fa-lg"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End footer link -->
                    </div>
                </div>
            </div>
            <!-- End main footer -->

            <!-- Bottom footer -->
            <div class="frg-bottom">
                <div class="container">
                    <h6>Copyright &copy; 2016 MetroTheme <span class="pull-right"><a class="frg-scroll-top" href="#">Back to Top <i class="fa fa-long-arrow-up"></i></a></span></h6>
                </div>
            </div>
            <!-- End bottom footer -->
        </footer>
        <!-- End footer -->

        <?php wp_footer(); ?>
    </body>
</html>
