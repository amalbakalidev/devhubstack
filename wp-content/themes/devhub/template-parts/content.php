<?php
/**
 * Template Part: Content - Blog Card
 */
?>

<article class="group flex flex-col rounded-xl border border-border bg-card p-6 transition-smooth hover:-translate-y-1 hover:border-brand/40 hover:shadow-card">
    
    <!-- Category -->
    <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground w-fit">
        <?php 
            $categories = get_the_category();
            echo !empty($categories) ? esc_html($categories[0]->name) : 'General';
        ?>
    </div>

    <!-- Featured Image (Optional but Recommended) -->
    <?php if (has_post_thumbnail()) : ?>
        <div class="mt-4 overflow-hidden rounded-lg">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-auto transition-transform group-hover:scale-105']); ?>
            </a>
        </div>
    <?php endif; ?>

    <!-- Title -->
    <h2 class="mt-4 text-lg font-semibold leading-snug transition-smooth group-hover:text-brand">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    <!-- Excerpt -->
    <p class="mt-2 flex-1 text-sm text-muted-foreground line-clamp-3">
        <?php echo wp_trim_words(get_the_excerpt(), 28); ?>
    </p>

    <!-- Meta -->
    <div class="mt-5 flex items-center justify-between text-xs text-muted-foreground">
        <span class="flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M12 6v6l4 2"></path>
            </svg>
            <?php 
                $reading_time = get_post_meta(get_the_ID(), 'reading_time', true);
                echo !empty($reading_time) ? $reading_time : ceil(str_word_count(wp_strip_all_tags(get_the_content())) / 200);
            ?> min
        </span>
        
        <span class="flex items-center text-brand">
            Read 
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 h-3 w-3" aria-hidden="true">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
            </svg>
        </span>
    </div>
</article>