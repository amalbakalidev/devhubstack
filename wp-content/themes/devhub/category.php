<?php
/**
 * Archive Template
 */

get_header();
?>

<section class="relative overflow-hidden border-b border-border bg-gradient-hero">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        
        <div class="flex items-center gap-2">
            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-brand text-brand-foreground shadow-glow">
                <!-- Newspaper SVG -->
            </span>
            <div class="inline-flex items-center border px-2.5 py-0.5 text-xs font-semibold ... rounded-full">
                <?php single_cat_title(); ?>
            </div>
        </div>

       

        <!-- 2. Longer Subtitle (Custom Field) -->
        <?php 
        $subtitle = get_term_meta(get_queried_object_id(), 'category_subtitle', true);
        if (!empty($subtitle)) : 
        ?>
        <h1 class="mt-6 max-w-3xl text-4xl font-bold tracking-tight sm:text-5xl">
            <?php echo esc_html($subtitle); ?>
        </h1>

            
        <?php endif; ?>

        <!-- 3. Category Description -->
        <?php if (category_description()) : ?>
            <div class="mt-6 max-w-2xl text-lg text-muted-foreground leading-relaxed">
                <?php echo wp_kses_post(category_description()); ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php get_template_part('template-parts/blog-grid'); ?>

<?php get_footer(); ?>