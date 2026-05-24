<?php
/**
 * Template Part: Blog Grid - Tag First Logic
 * Shows Tags as small badge (preferred), falls back to Category
 */

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = 9;
$current_category_id = is_category() ? get_queried_object_id() : 0;
?>

<section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

        <?php
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => $posts_per_page,
            'paged'          => $paged,
            'orderby'        => 'date',
            'order'          => 'DESC',
        );

        // Filter posts by current category on archive pages
        if (is_category()) {
            $args['cat'] = $current_category_id;
        }

        $blog_query = new WP_Query($args);

        if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post();
                
                $reading_time = get_post_meta(get_the_ID(), 'reading_time', true);
                if (empty($reading_time)) {
                    $reading_time = ceil(str_word_count(wp_strip_all_tags(get_the_content())) / 200);
                }

                // === Tag First Logic ===
                $badge_text = 'General';
                
                $tags = get_the_tags();
                if ($tags && !empty($tags)) {
                    $badge_text = $tags[0]->name;           // Show first tag (preferred)
                } else {
                    // Fallback to category
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        // If on a category archive, try to show a different category if available
                        if (is_category() && count($categories) > 1) {
                            foreach ($categories as $cat) {
                                if ($cat->term_id != $current_category_id) {
                                    $badge_text = $cat->name;
                                    break;
                                }
                            }
                        }
                        if ($badge_text === 'General') {
                            $badge_text = $categories[0]->name;
                        }
                    }
                }
        ?>

            <a href="<?php the_permalink(); ?>" class="group flex flex-col rounded-xl border border-border bg-card p-6 transition-smooth hover:-translate-y-1 hover:border-brand/40 hover:shadow-card">
                
                <!-- Badge: Tag preferred -->
                <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground w-fit">
                    <?php echo esc_html($badge_text); ?>
                </div>

                <!-- Title -->
                <h3 class="mt-4 text-lg font-semibold leading-snug transition-smooth group-hover:text-brand">
                    <?php the_title(); ?>
                </h3>

                <!-- Excerpt -->
                <p class="mt-2 flex-1 text-sm text-muted-foreground">
                    <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
                </p>

                <!-- Meta -->
                <div class="mt-5 flex items-center justify-between text-xs text-muted-foreground">
                    <span class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-3 w-3" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 6v6l4 2"></path>
                        </svg>
                        <?php echo $reading_time; ?> min
                    </span>
                    <span class="flex items-center text-brand">
                        Read 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 h-3 w-3" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </span>
                </div>
            </a>

        <?php 
            endwhile;
        else :
        ?>
            <p class="col-span-3 text-center py-10 text-muted-foreground">No posts found in this section.</p>
        <?php 
        endif;
        wp_reset_postdata();
        ?>

    </div>

    <!-- Modern Pagination -->
    <?php if ( $blog_query->max_num_pages > 1 ) : ?>

        <div class="mt-16 flex justify-center">

            <?php
                echo paginate_links( array(
                    'total'      => $blog_query->max_num_pages,
                    'current'    => max( 1, $paged ),
                    'mid_size'   => 2,
                    'end_size'   => 1,
                    'prev_text'  => '<span class="inline-flex items-center gap-2">← <span>Previous</span></span>',
                    'next_text'  => '<span class="inline-flex items-center gap-2"><span>Next</span> →</span>',
                    'type'       => 'list',
                ) );
            ?>

        </div>

    <?php endif; ?>
</section>