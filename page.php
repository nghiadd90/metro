<?php get_header(); ?>
<?php
// Start the loop.
while ( have_posts() ) : the_post();

    // Include the page content template.
    get_template_part( 'content/content', 'page' );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
        comments_template();
    }

    // End of the loop.
endwhile;
?>
<?php
get_sidebar();
get_footer();