<?php
/**
 * The Template for displaying all single pages
 */

get_header();
?>

<main id="primary" class="site-main">
    
    <?php
    while (have_posts()) : the_post();
    ?>

    <!-- Page Hero / Title -->
    <section class="relative border-b border-border bg-gradient-hero py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
            
            <?php if (has_post_thumbnail()) : ?>
                <div class="mx-auto mb-8 max-w-2xl overflow-hidden rounded-2xl">
                    <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
                </div>
            <?php endif; ?>

            <h1 class="text-4xl sm:text-5xl font-bold tracking-tight leading-tight">
                <?php the_title(); ?>
            </h1>

            <?php if (get_the_excerpt()) : ?>
                <p class="mt-6 text-lg text-muted-foreground max-w-2xl mx-auto">
                    <?php the_excerpt(); ?>
                </p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Main Content -->
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 py-12">
        <div class="prose prose-lg max-w-none 
                    prose-headings:font-semibold 
                    prose-a:text-brand hover:prose-a:underline
                    prose-img:rounded-xl">
            <?php the_content(); ?>
        </div>

        <!-- Page Links (for multi-page posts) -->
        <?php
            wp_link_pages(array(
                'before'      => '<div class="page-links mt-10 pt-6 border-t border-border"><span class="text-sm text-muted-foreground">Pages: </span>',
                'after'       => '</div>',
                'link_before' => '<span class="inline-block px-3 py-1 border rounded-md mr-2">',
                'link_after'  => '</span>',
            ));
        ?>
    </div>

    <?php
    endwhile;
    ?>

</main>

<?php
get_footer();
?>