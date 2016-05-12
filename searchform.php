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
