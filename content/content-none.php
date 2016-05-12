<div class="frg-none-content">
<?php if (is_home() && current_user_can('publish_posts')) : ?>

<?php elseif (is_search()) : ?>

    <p><?php _e('Không tìm thấy kết quả. Thử tìm kiếm với từ khóa khác.', 'metro'); ?></p>
    <?php get_search_form(); ?>

<?php else : ?>

    <p><?php _e('Dường như chúng tôi không tìm thấy thứ bạn muốn. Bạn có thể thử tìm kiếm bằng cách gõ từ khóa vào khung dưới đây', 'twentysixteen'); ?></p>
    <?php get_search_form(); ?>

<?php endif; ?>
</div>
