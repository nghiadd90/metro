<div class="frg-comment-box">
<?php if (have_comments()) : ?>
    <div class="well">
    <h3 id="comments">
        <?php
        if (1 == get_comments_number()) {
            /* translators: %s: post title */
            printf(__('Một bình luận', 'metro'));
        } else {
            /* translators: 1: number of comments, 2: post title */
            printf(
                _n('Có %1$s bình luận', 'Có %1$s bình luận', get_comments_number()),
                number_format_i18n(get_comments_number())
            );
        }
        ?>
    </h3>
    </div>
    <div class="navigation">
        <div class="alignleft"><?php previous_comments_link() ?></div>
        <div class="alignright"><?php next_comments_link() ?></div>
    </div>
    <div class="frg-comment-list">
        <ul class="commentlist">
        <?php
        $args = array(
            'avatar_size' => 75,
            'type' => 'comment',
            'callback' => 'format_comment'
        ); 
        wp_list_comments($args);
        ?>
        </ul>
    </div>
    <div class="navigation">
        <div class="alignleft"><?php previous_comments_link() ?></div>
        <div class="alignright"><?php next_comments_link() ?></div>
    </div>
    <?php else : // this is displayed if there are no comments so far ?>

    <?php if (comments_open()) : ?>
        <!-- If comments are open, but there are no comments. -->

        <?php else : // comments are closed ?>
        <!-- If comments are closed. -->
        <p class="nocomments"><?php _e('Bình luận đã đóng.'); ?></p>

    <?php endif; ?>
<?php endif; ?>

<?php comment_form(); ?>
</div>
