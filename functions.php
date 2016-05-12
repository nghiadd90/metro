<?php
/**
 * Metro functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package Metro
 * @subpackage Metro
 * @since Metro 1.0
 */

/**
 * Define theme constants
 */
define('THEMEPATH', get_stylesheet_directory_uri());
define('IMAGES', THEMEPATH . '/images');


/**
 * Theme setup
 *
 * @since  Metro 1.0
 */
if (!function_exists('metro_theme_setup')) {
    function metro_theme_setup()
    {
        $langs = THEMEPATH . '/langs';
        load_theme_textdomain('metro', $langs);

        /**
         * Add theme features
         */
        add_theme_support('automatic_feed_links');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', [
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ]);
        add_theme_support('title-tag');
        add_theme_support('custom-background');

        register_nav_menus([
            'top-nav' => __('Top Nav', 'metro'),
            'main-nav' => __('Main Nav', 'metro')
        ]);

        add_image_size('featured-image', 590, 333, true);
        add_image_size('post-image', 500, 9999, false);
        add_image_size('category-image', 280, 150, true);
    }
}
add_action('after_setup_theme', 'metro_theme_setup');

/**
 * Register widget sidebar
 *
 * @since  Metro 1.0
 */
if (!function_exists('metro_widgets_init')) {
    function metro_widgets_init()
    {
        register_sidebar([
            'name'          => __('Main Sidebar', 'metro'),
            'id'            => 'main-sidebar',
            'description'   => __('Right sidebar', 'metro'),
            'before_widget' => '<div class="sidebar-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ]);

        register_sidebar([
            'name'          => __('Social Sidebar', 'metro'),
            'id'            => 'social-sidebar',
            'description'   => __('Sidebar for social sharing', 'metro'),
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ]);
    }
}
add_action('widgets_init', 'metro_widgets_init');

/**
 * Insert custom sized image
 *
 * @since  Metro 1.0
 */
add_filter('image_size_names_choose', 'metro_custom_image');
function metro_custom_image($sizes)
{
    $custom_sizes = [
        'featured-image' => __('Featured Image', 'metro'),
        'post-image' => __('Post Image', 'metro'),
        'category-image' => __('Category Image', 'metro')
    ];
    return array_merge($sizes, $custom_sizes);
}

/**
 * Create custom taxonomy slideshow
 *
 * @since  Metro 1.0
 */
if (!function_exists('metro_slideshow_taxonomy')) {
    function metro_slideshow_taxonomy()
    {
        $labels = [
            'name' => __('Slideshow', 'metro'),
            'singular_name' => __('Slideshow', 'metro'),
            'menu_name' => __('Slideshows', 'metro'),
            'all_items' => __('All slideshow', 'metro'),
            'edit_item' => __('Edit slideshow', 'metro'),
            'view_item' => __('View slideshow', 'metro'),
            'update_item' => __('Update slideshow', 'metro'),
            'add_new_item' => __('Add new slideshow', 'metro')
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'hierarchical' => true,
        ];

        register_taxonomy('slideshow', 'post', $args);
    }
}
add_action('init', 'metro_slideshow_taxonomy');

/**
 * Enqueues scripts and styles.
 *
 * @since Metro 1.0
 */
function metro_scripts()
{
    // Theme stylesheet
    wp_enqueue_style('bootstrap-3.3.6', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome-4.6.1', get_stylesheet_directory_uri() . '/css/font-awesome-4.6.1/css/font-awesome.min.css');
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/css/main.css');
    wp_enqueue_style('post-css', get_stylesheet_directory_uri(). '/css/post.css');
    wp_enqueue_style('category-css', get_stylesheet_directory_uri(). '/css/category.css');
    wp_enqueue_style('comment-css', get_stylesheet_directory_uri() . '/css/comments.css');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    // Theme javascript
    wp_enqueue_script('jquery-2.2.3', get_stylesheet_directory_uri() . '/js/jquery-2.2.3.min.js');
    wp_enqueue_script('bootstrap-3.3.6-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'metro_scripts');


/**
 * Limit number of words for excerpt
 *
 * @since  Metro 1.0
 */
if (!function_exists('metro_excerpt_limit')) {
    function metro_excerpt_limit($length)
    {
        return 21;
    }
}
add_filter('excerpt_length', 'metro_excerpt_limit');

/**
 * Retrieve first number of words in string
 */
function string_limit_words($string, $word_limit)
{
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit) {
        array_pop($words);
    }
    return implode(' ', $words);
}


/**
 * Pagination
 */
if (!function_exists('metro_pagination')) {
    function metro_pagination()
    {
        global $wp_query;

        if ($wp_query->max_num_pages > 1) {
            ?>
            <ul>
                <li><a href=""></a></li>
            </ul>
            <?php
        }
    }
}

/**
 * Show content for home page
 *
 * @since  Metro 1.0
 */
if (!function_exists('metro_home_show')) {
    function metro_home_show()
    {

    }
}
