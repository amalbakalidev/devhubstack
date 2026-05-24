<?php
/**
 * The Archive Template
 *
 * Used for Category, Tag, Author, Date archives etc.
 */

get_header();
?>
<!-- Dynamic Hero Section -->
<section class="relative overflow-hidden border-b border-border bg-gradient-hero">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        <div class="flex items-center gap-2">
            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-brand text-brand-foreground shadow-glow">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-newspaper h-4 w-4" aria-hidden="true">
                    <path d="M15 18h-5"></path>
                    <path d="M18 14h-8"></path>
                    <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2"></path>
                    <rect width="8" height="4" x="10" y="6" rx="1"></rect>
                </svg>
            </span>
            <div class="inline-flex items-center border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 rounded-full">
                Archive
            </div>
        </div>

        <h1 class="mt-6 max-w-3xl text-4xl font-bold tracking-tight sm:text-5xl">
            <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    echo 'Posts by ' . get_the_author();
                } elseif (is_date()) {
                    if (is_day()) {
                        echo get_the_date('F j, Y');
                    } elseif (is_month()) {
                        echo get_the_date('F Y');
                    } elseif (is_year()) {
                        echo get_the_date('Y');
                    }
                } else {
                    the_archive_title();
                }
            ?>
        </h1>

        <?php if (get_the_archive_description()) : ?>
            <p class="mt-5 max-w-2xl text-lg text-muted-foreground">
                <?php echo wp_kses_post(get_the_archive_description()); ?>
            </p>
        <?php endif; ?>
    </div>
</section>

<!-- Blog Posts Grid -->
<?php get_template_part('template-parts/blog-grid'); ?>

<?php get_footer(); ?>