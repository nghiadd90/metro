<?php get_header(); ?>
<?php
// Start the loop.
while (have_posts()) :
    the_post();

    // Include the page content template.
    get_template_part('content/content', 'single');



    // End of the loop.
endwhile;
?>
<?php
get_sidebar();
get_footer();
