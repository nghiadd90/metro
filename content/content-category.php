                                    <div class="col-xs-6 col-sm-6">
                                        <div class="thumbnail">
                                            <h4>
                                            <?php
                                            $category = get_the_category();
                                            echo $category[0]->cat_name;
                                            ?>
                                            </h4>
                                            <?php
                                            if (has_post_thumbnail()) {
                                                echo '<a href="' . get_permalink() . '">';
                                                the_post_thumbnail('category-image');
                                                echo '</a>';
                                            }
                                            ?>
                                            <div class="caption">
                                                <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                <p><?php echo string_limit_words(get_the_excerpt(), 20) . '...'; ?></p>
                                            </div>
                                        </div>
                                    </div>

