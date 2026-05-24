<?php
/**
 * The Single Post Template
 */

get_header();
?>

<main class="site-main">
    <?php
    while (have_posts()) : the_post();
    ?>

    <!-- Hero / Title Section -->
    <section class="relative border-b border-border bg-gradient-hero py-20">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-2 mb-6">
                <?php 
                    $categories = get_the_category();
                    if (!empty($categories)) : 
                ?>
                    <div class="inline-flex items-center border px-3 py-1 text-xs font-semibold rounded-full bg-secondary text-secondary-foreground">
                        <?php echo esc_html($categories[0]->name); ?>
                    </div>
                <?php endif; ?>
            </div>

            <h1 class="text-4xl sm:text-5xl font-bold tracking-tight leading-tight">
                <?php the_title(); ?>
            </h1>

            <div class="mt-6 flex items-center gap-4 text-sm text-muted-foreground">
                <span><?php the_date(); ?></span>
                <span>•</span>
                <span>
                    <?php 
                        $reading_time = get_post_meta(get_the_ID(), 'reading_time', true);
                        echo !empty($reading_time) ? $reading_time . ' min read' : '';
                    ?>
                </span>
            </div>
        </div>
    </section>

    <!-- Featured Image -->
    <?php if (has_post_thumbnail()) : ?>
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 mt-10">
            <div class="overflow-hidden rounded-2xl">
                <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Main Content -->
<div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <div class="blog-content">
        <?php the_content(); ?>
    </div>

    <!-- Modern Before / After Post Navigation -->
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 mt-16 border-t border-border px-5 py-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Previous Post -->
            <div>
                <?php previous_post_link(
                    '%link',
                    '<span class="block text-sm text-muted-foreground mb-2">← Previous</span>
                     <span class="block font-semibold text-lg leading-tight hover:text-brand transition-colors">%title</span>'
                ); ?>
            </div>

            <!-- Next Post -->
            <div class="text-right">
                <?php next_post_link(
                    '%link',
                    '<span class="block text-sm text-muted-foreground mb-2">Next →</span>
                     <span class="block font-semibold text-lg leading-tight hover:text-brand transition-colors">%title</span>'
                ); ?>
            </div>

        </div>
    </div>
</div>

    <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
?>