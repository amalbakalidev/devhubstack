<?php
/**
 * Template Name: DevHub - Blog Page
 * Template Post Type: page
 */

get_header();

?>
<!-- Hero Section -->
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
                Blog 
            </div>
        </div>
        
        <h1 class="mt-6 max-w-3xl text-4xl font-bold tracking-tight sm:text-5xl">
            The DevHubStack Blog
        </h1>
        <p class="mt-5 max-w-2xl text-lg text-muted-foreground">
            Tutorials, opinions and deep dives on the tools and systems shaping modern development.
        </p>
    </div>
</section>

<?php get_template_part('template-parts/blog-grid'); ?>



<?php get_footer(); ?>