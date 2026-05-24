<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 */

get_header();
?>
<main id="primary" class="site-main">

    <?php
    if ( have_posts() ) :

        // Start the Loop
        while ( have_posts() ) : the_post();
            
            // You can include a template part for consistency
            get_template_part( 'template-parts/content', get_post_format() );

        endwhile;

        // Pagination
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => '← Previous',
            'next_text' => 'Next →',
        ));

    else :
    ?>

        <div class="mx-auto max-w-7xl px-4 py-20 text-center">
            <h2 class="text-2xl font-semibold">No posts found</h2>
            <p class="mt-4 text-muted-foreground">Sorry, but nothing matched your search criteria.</p>
        </div>

    <?php endif; ?>

</main>

<?php
get_footer();
?>