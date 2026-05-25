<?php
/**
 * Theme Footer
 *
 * @package DevHub
 * @since 1.0.0
 */
?>

    </main><!-- #content -->

    <footer class="border-t border-border bg-surface">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
            
            <div class="grid gap-10 lg:grid-cols-6">
                
                <!-- Logo & Description -->
                <div class="lg:col-span-2">
                    <a class="flex items-center gap-2 ftr-logo" href="<?php echo home_url('/'); ?>">
                        <?php $image_id = 91; echo wp_get_attachment_image( $image_id, 'full' );  ?></a>

                        <span class="text-lg font-bold"><img src="<?php echo get_template_directory_uri('/wp-content/uploads/2026/05/dev-hub-footer-logo-original-white-resized.png'); ?>" alt=""></span>                    </a>
                    <p class="mt-4 max-w-xs text-sm text-muted-foreground">
                        Honest reviews, performance-focused comparisons, and the smartest tools for modern developers.
                    </p>
                    
                    
                    <!-- Social Links -->
                    <div class="mt-6 flex gap-3" style="display: none;">
                        <a href="#" aria-label="Twitter" class="flex h-9 w-9 items-center justify-center rounded-md border border-border text-muted-foreground transition-smooth hover:border-brand hover:text-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter h-4 w-4" aria-hidden="true">
                                <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                            </svg>
                        </a>
                        <a href="#" aria-label="GitHub" class="flex h-9 w-9 items-center justify-center rounded-md border border-border text-muted-foreground transition-smooth hover:border-brand hover:text-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github h-4 w-4" aria-hidden="true">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                                <path d="M9 18c-4.51 2-5-2-7-2"></path>
                            </svg>
                        </a>
                        <a href="#" aria-label="LinkedIn" class="flex h-9 w-9 items-center justify-center rounded-md border border-border text-muted-foreground transition-smooth hover:border-brand hover:text-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin h-4 w-4" aria-hidden="true">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect width="4" height="12" x="2" y="9"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                        <a href="#" aria-label="RSS" class="flex h-9 w-9 items-center justify-center rounded-md border border-border text-muted-foreground transition-smooth hover:border-brand hover:text-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rss h-4 w-4" aria-hidden="true">
                                <path d="M4 11a9 9 0 0 1 9 9"></path>
                                <path d="M4 4a16 16 0 0 1 16 16"></path>
                                <circle cx="5" cy="19" r="1"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Categories -->
                <div>
                    <h4 class="text-sm font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">Categories</h4>
                    <ul class="mt-4 space-y-3">
                        <li><a href="<?php echo home_url('/category/wordpress'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">WordPress</a></li>
                        <li><a href="<?php echo home_url('/category/hosting'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Hosting</a></li>
                        <li><a href="<?php echo home_url('/category/ai-tools'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">AI Tools</a></li>
                        <li><a href="<?php echo home_url('/category/dev-tools'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Dev Tools</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h4 class="text-sm font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">Resources</h4>
                    <ul class="mt-4 space-y-3">
                        <li><a href="<?php echo home_url('/category/reviews'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Reviews</a></li>
                        <li><a href="<?php echo home_url('/category/comparisons'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Comparisons</a></li>
                        <li><a href="<?php echo home_url('/blog'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Blog</a></li>
                        <li><a href="<?php echo home_url('/blog'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Guides</a></li>
                    </ul>
                </div>

                <!-- About -->
                <div>
                    <h4 class="text-sm font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">About</h4>
                    <ul class="mt-4 space-y-3">
                        <li><a href="<?php echo home_url('/'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Our Mission</a></li>
                        <li><a href="<?php echo home_url('/'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Editorial Policy</a></li>
                        <li><a href="<?php echo home_url('/'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Disclosure</a></li>
                        <li><a href="<?php echo home_url('/'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Privacy</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-sm font-semibold" style="font-family: Inter, ui-sans-serif, system-ui, Bangla1053, sans-serif;">Contact</h4>
                    <ul class="mt-4 space-y-3">
                        <li><a href="<?php echo home_url('/'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Get in Touch</a></li>
                        <li><a href="<?php echo home_url('/'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Partnerships</a></li>
                        <li><a href="<?php echo home_url('/'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Submit a Tool</a></li>
                        <li><a href="<?php echo home_url('/'); ?>" class="text-sm text-muted-foreground transition-smooth hover:text-foreground">Press</a></li>
                    </ul>
                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="mt-12 flex flex-col items-start justify-between gap-3 border-t border-border pt-8 sm:flex-row sm:items-center">
                <p class="text-xs text-muted-foreground">© 2026 DevHubStack. All rights reserved.</p>
                <p class="text-xs text-muted-foreground">Some links are affiliate links — we may earn a commission at no extra cost to you.</p>
            </div>

        </div>
    </footer>

    </div>

    <?php wp_footer(); ?>
    <script>
const mobileButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const menuIcon = document.getElementById('menu-icon');

mobileButton.addEventListener('click', function() {
    mobileMenu.classList.toggle('hidden');
    
    // Toggle between menu and X icon
    if (mobileMenu.classList.contains('hidden')) {
        menuIcon.innerHTML = `
            <path d="M4 5h16"></path>
            <path d="M4 12h16"></path>
            <path d="M4 19h16"></path>
        `;
    } else {
        menuIcon.innerHTML = `
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
        `;
    }
});
</script>

</body>
</html>