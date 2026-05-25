<?php
/**
 * Theme Header
 *
 * Displays all of the <head> section and everything up until <div id="content">
 *
 * @package DevHub
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <title><?php wp_title('|', true, 'right'); ?></title>
   
    <?php wp_head(); ?>
    
    <style>
        /* Active menu item */
        nav a.active,
        nav .current-menu-item a,
        nav .current_page_item a {
            background-color: oklch(94% .04 220);
        }
        
        /* Hover effect */
        .menu-item a {
            @apply rounded-md px-3 py-2 text-sm font-medium text-muted-foreground transition-smooth hover:bg-accent hover:text-foreground;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Skip to content -->
    <a class="sr-only focus:not-sr-only" href="#content">
        <?php esc_html_e('Skip to content', 'devhub'); ?>
    </a>

    <div class="flex min-h-screen flex-col bg-background">
        
        <header class="sticky top-0 z-50 w-full border-b border-border/60 bg-background/80 backdrop-blur-xl supports-[backdrop-filter]:bg-background/60">
            <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                
                <!-- Logo Area -->
                
                    
                <?php 
                // Dynamic WordPress Custom Logo
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    // Fallback SVG Logo
                ?>
                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-brand shadow-glow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code-xml h-4 w-4 text-brand-foreground" aria-hidden="true">
                            <path d="m18 16 4-4-4-4"></path>
                            <path d="m6 8-4 4 4 4"></path>
                            <path d="m14.5 4-5 16"></path>
                        </svg>
                    </span>
                <?php } ?>      

                <!-- Hidden Tagline for SEO -->
                <span class="sr-only">
                    <?php bloginfo('description'); ?>
                </span>

                <!-- Desktop Navigation -->
                <nav class="hidden items-center gap-1 lg:flex main-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        //'menu_class'     => 'flex items-center gap-1',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                        'link_before'    => '',
                        'link_after'     => '',
                        'items_wrap'     => '%3$s',
                        'walker'         => new Tailwind_Menu_Walker(),
                    ));
                    ?>
                </nav>

                <!-- CTA Button (Desktop) -->
                <div class="hidden lg:block">
                    <a href="<?php echo home_url('/reviews'); ?>" 
                       class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow hover:bg-primary/90 h-9 px-4 py-2 bg-gradient-brand text-brand-foreground shadow-glow hover:opacity-90">
                        Explore Tools
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" aria-label="Toggle menu" class="lg:hidden rounded-md p-2 hover:bg-accent">
                    <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu h-5 w-5" aria-hidden="true">
                        <path d="M4 5h16"></path>
                        <path d="M4 12h16"></path>
                        <path d="M4 19h16"></path>
                    </svg>
                </button>
            </div>

            <!-- ====================== MOBILE MENU PANEL ====================== -->
            <div id="mobile-menu" class="hidden lg:hidden border-t border-border bg-background main-menu">
                <div class="mx-auto max-w-7xl px-4 py-6 flex flex-col gap-1">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        //'menu_class'     => 'flex flex-col gap-1 main-menu',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                        'items_wrap'     => '%3$s',
                        'walker'         => new Tailwind_Menu_Walker(),
                    ));
                    ?>
                    
                    <!-- Mobile CTA Button -->
                    <a href="<?php echo home_url('/category/reviews'); ?>" 
                       class="mt-4 inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow hover:bg-primary/90 h-11 bg-gradient-brand text-brand-foreground shadow-glow">
                        Explore Tools
                    </a>
                </div>
            </div>
        </header>

        <main class="flex-1">