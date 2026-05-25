<?php
/**
 * Template Name: Front Page Template
 *
 * @package DevHub
 */
get_header(); 
?>

<!-- ====================== HERO SECTION ====================== -->
<section class="relative overflow-hidden bg-gradient-hero">
    <div class="mx-auto grid max-w-7xl gap-12 px-4 py-20 sm:px-6 lg:grid-cols-2 lg:gap-8 lg:px-8 lg:py-28">
        
        <div class="flex flex-col justify-center">
            <div class="inline-flex items-center text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-secondary-foreground hover:bg-secondary/80 w-fit gap-1.5 rounded-full border border-border bg-surface-elevated px-3 py-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-3.5 w-3.5 text-brand" aria-hidden="true">
                    <path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path>
                    <path d="M20 2v4"></path>
                    <path d="M22 4h-4"></path>
                    <circle cx="4" cy="20" r="2"></circle>
                </svg>
                <span class="text-xs font-medium">2026 reviews are live</span>
            </div>

            <h1 class="mt-6 text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">
                Smart Tools &amp; <span class="text-gradient-brand">Performance Systems</span> for Modern Developers
            </h1>

            <p class="mt-6 max-w-xl text-lg leading-relaxed text-muted-foreground">
                Helping developers, creators and businesses discover the best tools, hosting platforms, AI systems and optimization strategies — backed by real-world testing.
            </p>

            <div class="mt-8 flex flex-wrap gap-3">
                <a href="<?php echo home_url('/category/reviews'); ?>" 
                   class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow hover:bg-primary/90 h-10 rounded-md px-8 bg-gradient-brand text-brand-foreground shadow-glow hover:opacity-90">
                    Explore Reviews 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1.5 h-4 w-4" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>
                
                <a href="<?php echo home_url('/category/comparisons'); ?>" 
                   class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground h-10 rounded-md px-8">
                    View Comparisons
                </a>
            </div>

            <div class="mt-10 flex flex-wrap items-center gap-6 text-xs text-muted-foreground">
                <span class="flex items-center gap-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-3.5 w-3.5 text-brand" aria-hidden="true">
                        <path d="M20 6 9 17l-5-5"></path>
                    </svg> 
                    200+ tools tested
                </span>
                <span class="flex items-center gap-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-3.5 w-3.5 text-brand" aria-hidden="true">
                        <path d="M20 6 9 17l-5-5"></path>
                    </svg> 
                    Updated weekly
                </span>
                <span class="flex items-center gap-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check h-3.5 w-3.5 text-brand" aria-hidden="true">
                        <path d="M20 6 9 17l-5-5"></path>
                    </svg> 
                    Independent reviews
                </span>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="relative">
            <div class="absolute -inset-4 rounded-3xl bg-gradient-brand opacity-20 blur-3xl"></div>
            <div class="relative overflow-hidden rounded-2xl border border-border bg-card shadow-card">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-dashboard.jpg"
                     alt="DevHubStack performance dashboard"
                     width="1536"
                     height="1024"
                     class="h-auto w-full"
                     loading="lazy">
            </div>
        </div>

    </div>
</section>

<!-- ====================== FEATURED CATEGORIES ====================== -->
<section class="border-t border-border bg-surface">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">
                Featured Categories
            </h2>
            <p class="mt-3 text-muted-foreground">
                Explore curated stacks across the entire developer toolchain.
            </p>
        </div>

        <!-- Categories Grid -->
        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

            <!-- Card 1 -->
            <a href="<?php echo home_url('/category/wordpress'); ?>" class="group relative overflow-hidden rounded-xl border border-border bg-card p-6 transition-smooth hover:-translate-y-1 hover:border-brand/40 hover:shadow-card">
                <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-gradient-brand text-brand-foreground shadow-glow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap h-5 w-5" aria-hidden="true">
                        <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
                    </svg> 
                </div>
                <h3 class="mt-5 text-lg font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">WordPress Optimization</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted-foreground">Speed, caching, and Core Web Vitals tactics that actually move the needle.</p>
                <div class="mt-5 inline-flex items-center text-sm font-medium text-brand">
                    Explore 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="<?php echo home_url('/category/hosting'); ?>" class="group relative overflow-hidden rounded-xl border border-border bg-card p-6 transition-smooth hover:-translate-y-1 hover:border-brand/40 hover:shadow-card">
                <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-gradient-brand text-brand-foreground shadow-glow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-server h-5 w-5" aria-hidden="true">
                        <rect width="20" height="8" x="2" y="2" rx="2" ry="2"></rect>
                        <rect width="20" height="8" x="2" y="14" rx="2" ry="2"></rect>
                        <line x1="6" x2="6.01" y1="6" y2="6"></line>
                        <line x1="6" x2="6.01" y1="18" y2="18"></line>
                    </svg>
                </div>
                <h3 class="mt-5 text-lg font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">Hosting &amp; Performance</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted-foreground">Benchmarks of managed WordPress, VPS and edge hosting providers.</p>
                <div class="mt-5 inline-flex items-center text-sm font-medium text-brand">
                    Explore 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="<?php echo home_url('/category/ai-tools'); ?>" class="group relative overflow-hidden rounded-xl border border-border bg-card p-6 transition-smooth hover:-translate-y-1 hover:border-brand/40 hover:shadow-card">
                <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-gradient-brand text-brand-foreground shadow-glow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-brain h-5 w-5" aria-hidden="true">
                        <path d="M12 18V5"></path>
                        <path d="M15 13a4.17 4.17 0 0 1-3-4 4.17 4.17 0 0 1-3 4"></path>
                        <path d="M17.598 6.5A3 3 0 1 0 12 5a3 3 0 1 0-5.598 1.5"></path>
                        <path d="M17.997 5.125a4 4 0 0 1 2.526 5.77"></path>
                        <path d="M18 18a4 4 0 0 0 2-7.464"></path>
                        <path d="M19.967 17.483A4 4 0 1 1 12 18a4 4 0 1 1-7.967-.517"></path>
                        <path d="M6 18a4 4 0 0 1-2-7.464"></path>
                        <path d="M6.003 5.125a4 4 0 0 0-2.526 5.77"></path>
                    </svg>
                </div>
                <h3 class="mt-5 text-lg font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">AI Tools &amp; Automation</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted-foreground">Curated AI stacks for writers, coders and operators.</p>
                <div class="mt-5 inline-flex items-center text-sm font-medium text-brand">
                    Explore 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </div>
            </a>

            <!-- Card 4 -->
            <a href="<?php echo home_url('/category/dev-tools'); ?>" class="group relative overflow-hidden rounded-xl border border-border bg-card p-6 transition-smooth hover:-translate-y-1 hover:border-brand/40 hover:shadow-card">
                <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-gradient-brand text-brand-foreground shadow-glow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench h-5 w-5" aria-hidden="true">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"></path>
                    </svg>
                </div>
                <h3 class="mt-5 text-lg font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">Developer Productivity</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted-foreground">Editors, CLIs and workflows that make shipping effortless.</p>
                <div class="mt-5 inline-flex items-center text-sm font-medium text-brand">
                    Explore 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </div>
            </a>

            <!-- Card 5 -->
            <a href="<?php echo home_url('/category/reviews'); ?>" class="group relative overflow-hidden rounded-xl border border-border bg-card p-6 transition-smooth hover:-translate-y-1 hover:border-brand/40 hover:shadow-card">
                <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-gradient-brand text-brand-foreground shadow-glow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-5 w-5" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg>
                </div>
                <h3 class="mt-5 text-lg font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">SaaS Reviews</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted-foreground">Hands-on reviews with real benchmarks — no recycled marketing.</p>
                <div class="mt-5 inline-flex items-center text-sm font-medium text-brand">
                    Explore 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </div>
            </a>

            <!-- Card 6 -->
            <a href="<?php echo home_url('/category/comparisons'); ?>" class="group relative overflow-hidden rounded-xl border border-border bg-card p-6 transition-smooth hover:-translate-y-1 hover:border-brand/40 hover:shadow-card">
                <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-gradient-brand text-brand-foreground shadow-glow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-compare h-5 w-5" aria-hidden="true">
                        <circle cx="18" cy="18" r="3"></circle>
                        <circle cx="6" cy="6" r="3"></circle>
                        <path d="M13 6h3a2 2 0 0 1 2 2v7"></path>
                        <path d="M11 18H8a2 2 0 0 1-2-2V9"></path>
                    </svg>
                </div>
                <h3 class="mt-5 text-lg font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">Comparison Guides</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted-foreground">Side-by-side breakdowns to help you choose with confidence.</p>
                <div class="mt-5 inline-flex items-center text-sm font-medium text-brand">
                    Explore 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- ====================== FEATURED ARTICLES ====================== -->
<section class="border-t border-border">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex flex-wrap items-end justify-between gap-4">
            <div>
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">
                    Featured Articles
                </h2>
                <p class="mt-3 text-muted-foreground">Hand-picked deep dives, comparisons and tutorials.</p>
            </div>
            <a href="<?php echo home_url('/blog'); ?>" 
               class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent h-9 px-4 py-2 text-brand hover:text-brand">
                All articles 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 h-4 w-4" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <!-- Articles Grid -->
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

            <!-- Article Card 1 -->
            <a href="<?php echo home_url('/blog'); ?>" class="group flex flex-col overflow-hidden rounded-xl border border-border bg-card transition-smooth hover:-translate-y-1 hover:shadow-card">
                <div class="relative aspect-[16/10] overflow-hidden bg-surface">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/article-wp-hosting.jpg" 
                         alt="Best WordPress Hosting in 2026" 
                         width="1024" 
                         height="640" 
                         loading="lazy" 
                         class="h-full w-full object-cover transition-smooth group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-background/40 to-transparent"></div>
                    <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent shadow hover:bg-primary/80 absolute left-4 top-4 bg-background/80 text-foreground backdrop-blur">Hosting</div>
                </div>
                <div class="flex flex-1 flex-col p-6">
                    <h3 class="text-lg font-semibold leading-snug transition-smooth group-hover:text-brand" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">
                        Best WordPress Hosting in 2026
                    </h3>
                    <div class="mt-auto flex items-center gap-3 pt-5 text-xs text-muted-foreground">
                        <span class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 6v6l4 2"></path>
                            </svg> 
                            12 min
                        </span>
                        <span>•</span>
                        <span>2026</span>
                    </div>
                </div>
            </a>

            <!-- Article Card 2 -->
            <a href="<?php echo home_url('/blog'); ?>" class="group flex flex-col overflow-hidden rounded-xl border border-border bg-card transition-smooth hover:-translate-y-1 hover:shadow-card">
                <div class="relative aspect-[16/10] overflow-hidden bg-surface">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/article-ai-tools.jpg" 
                         alt="Best AI Tools for Developers" 
                         width="1024" 
                         height="640" 
                         loading="lazy" 
                         class="h-full w-full object-cover transition-smooth group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-background/40 to-transparent"></div>
                    <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent shadow hover:bg-primary/80 absolute left-4 top-4 bg-background/80 text-foreground backdrop-blur">AI Tools</div>
                </div>
                <div class="flex flex-1 flex-col p-6">
                    <h3 class="text-lg font-semibold leading-snug transition-smooth group-hover:text-brand" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">
                        Best AI Tools for Developers
                    </h3>
                    <div class="mt-auto flex items-center gap-3 pt-5 text-xs text-muted-foreground">
                        <span class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 6v6l4 2"></path>
                            </svg> 
                            9 min
                        </span>
                        <span>•</span>
                        <span>2026</span>
                    </div>
                </div>
            </a>

            <!-- Article Card 3 -->
            <a href="<?php echo home_url('/blog'); ?>" class="group flex flex-col overflow-hidden rounded-xl border border-border bg-card transition-smooth hover:-translate-y-1 hover:shadow-card">
                <div class="relative aspect-[16/10] overflow-hidden bg-surface">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/article-comparison.jpg" 
                         alt="GeneratePress vs Astra: A Real Test" 
                         width="1024" 
                         height="640" 
                         loading="lazy" 
                         class="h-full w-full object-cover transition-smooth group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-background/40 to-transparent"></div>
                    <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent shadow hover:bg-primary/80 absolute left-4 top-4 bg-background/80 text-foreground backdrop-blur">Comparison</div>
                </div>
                <div class="flex flex-1 flex-col p-6">
                    <h3 class="text-lg font-semibold leading-snug transition-smooth group-hover:text-brand" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">
                        GeneratePress vs Astra: A Real Test
                    </h3>
                    <div class="mt-auto flex items-center gap-3 pt-5 text-xs text-muted-foreground">
                        <span class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 6v6l4 2"></path>
                            </svg> 
                            8 min
                        </span>
                        <span>•</span>
                        <span>2026</span>
                    </div>
                </div>
            </a>

            <!-- Article Card 4 -->
            <a href="<?php echo home_url('/blog'); ?>" class="group flex flex-col overflow-hidden rounded-xl border border-border bg-card transition-smooth hover:-translate-y-1 hover:shadow-card">
                <div class="relative aspect-[16/10] overflow-hidden bg-surface">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/article-woocommerce.jpg" 
                         alt="Best VPS Hosting for WooCommerce" 
                         width="1024" 
                         height="640" 
                         loading="lazy" 
                         class="h-full w-full object-cover transition-smooth group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-background/40 to-transparent"></div>
                    <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent shadow hover:bg-primary/80 absolute left-4 top-4 bg-background/80 text-foreground backdrop-blur">WooCommerce</div>
                </div>
                <div class="flex flex-1 flex-col p-6">
                    <h3 class="text-lg font-semibold leading-snug transition-smooth group-hover:text-brand" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">
                        Best VPS Hosting for WooCommerce
                    </h3>
                    <div class="mt-auto flex items-center gap-3 pt-5 text-xs text-muted-foreground">
                        <span class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 6v6l4 2"></path>
                            </svg> 
                            11 min
                        </span>
                        <span>•</span>
                        <span>2026</span>
                    </div>
                </div>
            </a>

            <!-- Article Card 5 -->
            <a href="<?php echo home_url('/blog'); ?>" class="group flex flex-col overflow-hidden rounded-xl border border-border bg-card transition-smooth hover:-translate-y-1 hover:shadow-card">
                <div class="relative aspect-[16/10] overflow-hidden bg-surface">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/article-performance.jpg" 
                         alt="How to Speed Up WordPress in 2026" 
                         width="1024" 
                         height="640" 
                         loading="lazy" 
                         class="h-full w-full object-cover transition-smooth group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-background/40 to-transparent"></div>
                    <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent shadow hover:bg-primary/80 absolute left-4 top-4 bg-background/80 text-foreground backdrop-blur">Performance</div>
                </div>
                <div class="flex flex-1 flex-col p-6">
                    <h3 class="text-lg font-semibold leading-snug transition-smooth group-hover:text-brand" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">
                        How to Speed Up WordPress in 2026
                    </h3>
                    <div class="mt-auto flex items-center gap-3 pt-5 text-xs text-muted-foreground">
                        <span class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 6v6l4 2"></path>
                            </svg> 
                            14 min
                        </span>
                        <span>•</span>
                        <span>2026</span>
                    </div>
                </div>
            </a>

            <!-- Article Card 6 -->
            <a href="<?php echo home_url('/blog'); ?>" class="group flex flex-col overflow-hidden rounded-xl border border-border bg-card transition-smooth hover:-translate-y-1 hover:shadow-card">
                <div class="relative aspect-[16/10] overflow-hidden bg-surface">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/article-stack.jpg" 
                         alt="Our 2026 Stack for Indie Builders" 
                         width="1024" 
                         height="640" 
                         loading="lazy" 
                         class="h-full w-full object-cover transition-smooth group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-background/40 to-transparent"></div>
                    <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent shadow hover:bg-primary/80 absolute left-4 top-4 bg-background/80 text-foreground backdrop-blur">Editorial</div>
                </div>
                <div class="flex flex-1 flex-col p-6">
                    <h3 class="text-lg font-semibold leading-snug transition-smooth group-hover:text-brand" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">
                        Our 2026 Stack for Indie Builders
                    </h3>
                    <div class="mt-auto flex items-center gap-3 pt-5 text-xs text-muted-foreground">
                        <span class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 6v6l4 2"></path>
                            </svg> 
                            7 min
                        </span>
                        <span>•</span>
                        <span>2026</span>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- ====================== HOSTING COMPARISON TABLE ====================== -->
<section class="border-t border-border bg-surface">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="mx-auto max-w-2xl text-center">
            <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground mb-3">
                Head-to-head
            </div>
            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">
                Managed WordPress Hosting Compared
            </h2>
            <p class="mt-3 text-muted-foreground">Real benchmarks. Real workloads. No recycled marketing claims.</p>
        </div>

        <!-- Comparison Table -->
        <div class="mt-12 overflow-hidden rounded-xl border border-border bg-card shadow-card">
            
            <!-- Table Header -->
            <div class="hidden grid-cols-6 gap-4 border-b border-border bg-surface px-6 py-4 text-xs font-semibold uppercase tracking-wider text-muted-foreground sm:grid">
                <div class="col-span-2">Provider</div>
                <div>Price</div>
                <div>TTFB</div>
                <div>Rating</div>
                <div class="text-right">Action</div>
            </div>

            <!-- Table Row 1 - Kinsta -->
            <div class="grid grid-cols-1 items-center gap-4 border-b border-border px-6 py-5 last:border-b-0 sm:grid-cols-6">
                <div class="col-span-2 flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-brand text-brand-foreground font-semibold">K</div>
                    <div>
                        <div class="flex items-center gap-2">
                            <p class="font-semibold">Kinsta</p>
                            <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent shadow hover:bg-primary/80 bg-gradient-brand text-brand-foreground">Top pick</div>
                        </div>
                        <p class="text-xs text-muted-foreground">Excellent • Managed WP</p>
                    </div>
                </div>
                <div class="text-sm"><span class="sm:hidden text-muted-foreground">Price: </span>$35/mo</div>
                <div class="text-sm"><span class="sm:hidden text-muted-foreground">TTFB: </span>182ms</div>
                <div class="flex items-center gap-1 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-brand text-brand" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg> 
                    4.9
                </div>
                <div class="sm:text-right">
                    <a href="<?php echo home_url('/category/reviews'); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow hover:bg-primary/90 h-8 rounded-md px-3 text-xs bg-gradient-brand text-brand-foreground hover:opacity-90">
                        View Deal
                    </a>
                </div>
            </div>

            <!-- Table Row 2 - Cloudways -->
            <div class="grid grid-cols-1 items-center gap-4 border-b border-border px-6 py-5 last:border-b-0 sm:grid-cols-6">
                <div class="col-span-2 flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-brand text-brand-foreground font-semibold">C</div>
                    <div>
                        <div class="flex items-center gap-2">
                            <p class="font-semibold">Cloudways</p>
                        </div>
                        <p class="text-xs text-muted-foreground">Great • Managed WP</p>
                    </div>
                </div>
                <div class="text-sm"><span class="sm:hidden text-muted-foreground">Price: </span>$14/mo</div>
                <div class="text-sm"><span class="sm:hidden text-muted-foreground">TTFB: </span>210ms</div>
                <div class="flex items-center gap-1 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-brand text-brand" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg> 
                    4.7
                </div>
                <div class="sm:text-right">
                    <a href="<?php echo home_url('/category/reviews'); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow hover:bg-primary/90 h-8 rounded-md px-3 text-xs bg-gradient-brand text-brand-foreground hover:opacity-90">
                        View Deal
                    </a>
                </div>
            </div>

            <!-- Table Row 3 - SiteGround -->
            <div class="grid grid-cols-1 items-center gap-4 border-b border-border px-6 py-5 last:border-b-0 sm:grid-cols-6">
                <div class="col-span-2 flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-brand text-brand-foreground font-semibold">S</div>
                    <div>
                        <div class="flex items-center gap-2">
                            <p class="font-semibold">SiteGround</p>
                        </div>
                        <p class="text-xs text-muted-foreground">Easy • Managed WP</p>
                    </div>
                </div>
                <div class="text-sm"><span class="sm:hidden text-muted-foreground">Price: </span>$17/mo</div>
                <div class="text-sm"><span class="sm:hidden text-muted-foreground">TTFB: </span>245ms</div>
                <div class="flex items-center gap-1 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star h-4 w-4 fill-brand text-brand" aria-hidden="true">
                        <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                    </svg> 
                    4.5
                </div>
                <div class="sm:text-right">
                    <a href="<?php echo home_url('/category/reviews'); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow hover:bg-primary/90 h-8 rounded-md px-3 text-xs bg-gradient-brand text-brand-foreground hover:opacity-90">
                        View Deal
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ====================== WHY DEVHUBSTACK ====================== -->
<section class="border-t border-border">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">
                Why DevHubStack
            </h2>
            <p class="mt-3 text-muted-foreground">A trusted resource built on real testing and editorial honesty.</p>
        </div>

        <!-- Why Cards Grid -->
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

            <!-- Card 1 -->
            <div class="rounded-xl border border-border bg-card p-6 transition-smooth hover:border-brand/40">
                <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-accent text-brand">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check h-5 w-5" aria-hidden="true">
                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                </div>
                <h3 class="mt-5 font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">Real-world testing</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted-foreground">Every tool is benchmarked on real workloads, not lab conditions.</p>
            </div>

            <!-- Card 2 -->
            <div class="rounded-xl border border-border bg-card p-6 transition-smooth hover:border-brand/40">
                <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-accent text-brand">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up h-5 w-5" aria-hidden="true">
                        <path d="M16 7h6v6"></path>
                        <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                    </svg>
                </div>
                <h3 class="mt-5 font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">Performance-focused</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted-foreground">We measure speed, stability and ROI — not feature checklists.</p>
            </div>

            <!-- Card 3 -->
            <div class="rounded-xl border border-border bg-card p-6 transition-smooth hover:border-brand/40">
                <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-accent text-brand">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart h-5 w-5" aria-hidden="true">
                        <path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5"></path>
                    </svg>
                </div>
                <h3 class="mt-5 font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">Developer-first</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted-foreground">Written by engineers for engineers, creators and operators.</p>
            </div>

            <!-- Card 4 -->
            <div class="rounded-xl border border-border bg-card p-6 transition-smooth hover:border-brand/40">
                <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-accent text-brand">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye h-5 w-5" aria-hidden="true">
                        <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </div>
                <h3 class="mt-5 font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">No fake hype</h3>
                <p class="mt-2 text-sm leading-relaxed text-muted-foreground">Honest comparisons, even when the verdict isn't convenient.</p>
            </div>

        </div>
    </div>
</section>

<!-- ====================== NEWSLETTER SECTION ====================== -->
<section class="border-t border-border">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
        <div class="relative overflow-hidden rounded-3xl bg-gradient-dark px-6 py-16 text-center sm:px-12">
            <div class="absolute inset-0 bg-gradient-hero opacity-60"></div>
            <div class="relative mx-auto max-w-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail mx-auto h-10 w-10 text-brand" aria-hidden="true">
                    <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                    <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                </svg>
                <h2 class="mt-5 text-3xl font-bold tracking-tight text-white sm:text-4xl" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">
                    Get Better Tools &amp; Smarter Workflows
                </h2>
                <p class="mt-3 text-white/70">Join 12,000+ developers getting one curated email a week. No spam, ever.</p>

                <form class="mx-auto mt-8 flex max-w-md flex-col gap-3 sm:flex-row">
                    <input type="email" class="flex w-full rounded-md border px-3 py-1 text-base shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground focus-visible:outline-none focus-visible:ring-1 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm h-12 border-white/15 bg-white/10 text-white placeholder:text-white/50 focus-visible:ring-brand" required placeholder="you@domain.com">
                    <button type="submit" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow hover:bg-primary/90 rounded-md px-8 h-12 bg-gradient-brand text-brand-foreground shadow-glow hover:opacity-90">
                        Subscribe
                    </button>
                </form>

                <p class="mt-4 text-xs text-white/50">Unsubscribe anytime.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>