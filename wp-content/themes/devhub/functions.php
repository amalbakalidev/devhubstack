<?php 

add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    // Register menu
    register_nav_menus([
        'primary' => __('Primary Menu', 'devhub'),
        'footer-menu' => __('Footer Menu', 'devhub'),
    ]);
});

function devhub_assets() {

    // wp_enqueue_style(
    //     'main-style',
    //     get_template_directory_uri() . '/assets/index.css',
    //     [],
    //     '1.0'
    // );

    // wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/index.js',
    //     [],
    //     '1.0',
    //     true
    // );
}

add_action('wp_enqueue_scripts', 'devhub_assets');


//wp_enqueue_style('devhub-output', get_template_directory_uri() . '/src/output.css');

function devhub_enqueue_styles() {    
    wp_enqueue_style('my-style', get_stylesheet_uri(), array(), '1.0.6');
    wp_enqueue_style('devhub', get_template_directory_uri() . '/src/output.css');
    wp_enqueue_style('devhub-lovable', get_template_directory_uri() . '/assets/styles-DTFdP2c1.css', array(), '1.0.4');
    //wp_enqueue_script('devhub-lovable-js', get_template_directory_uri() . '/assets/index-B_vtuAvk.js', array(), '1.0.4');
    //wp_enqueue_script('devhub-lovable-js', get_template_directory_uri() . '/assets/index-B_vtuAvk.js', array(), '1.0.4');
}
add_action('wp_enqueue_scripts', 'devhub_enqueue_styles');




// Custom Walker for Tailwind Menu
class Tailwind_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));

        // Add active class handling
        $active = in_array('current-menu-item', $classes) || in_array('current_page_item', $classes) ? ' active' : '';

        $output .= '<a href="' . esc_url($item->url) . '" class="rounded-md px-3 py-2 text-sm font-medium text-muted-foreground transition-smooth hover:bg-accent hover:text-foreground data-[status=active]:text-foreground' . $active . '">';
        
        $output .= $item->title;
        $output .= '</a>';
    }
}




// =============================================
// Custom Category Subtitle Field
// =============================================

function devhub_register_category_subtitle() {
    add_action('category_add_form_fields', 'devhub_category_subtitle_field', 10, 2);
    add_action('category_edit_form_fields', 'devhub_category_subtitle_field_edit', 10, 2);
    
    add_action('created_category', 'devhub_save_category_subtitle', 10, 2);
    add_action('edited_category', 'devhub_save_category_subtitle', 10, 2);
}
add_action('admin_init', 'devhub_register_category_subtitle');

// Add field on "Add New Category" page
function devhub_category_subtitle_field($taxonomy) {
    ?>
    <div class="form-field">
        <label for="category_subtitle">Longer Subtitle</label>
        <input type="text" name="category_subtitle" id="category_subtitle" value="" size="40" />
        <p class="description">Add a longer subtitle for this category (appears below main title)</p>
    </div>
    <?php
}

// Add field on "Edit Category" page
function devhub_category_subtitle_field_edit($term) {
    $subtitle = get_term_meta($term->term_id, 'category_subtitle', true);
    ?>
    <tr class="form-field">
        <th scope="row"><label for="category_subtitle">Longer Subtitle</label></th>
        <td>
            <input type="text" name="category_subtitle" id="category_subtitle" value="<?php echo esc_attr($subtitle); ?>" size="40" />
            <p class="description">Add a longer subtitle for this category</p>
        </td>
    </tr>
    <?php
}

// Save the field
function devhub_save_category_subtitle($term_id) {
    if (isset($_POST['category_subtitle'])) {
        $subtitle = sanitize_text_field($_POST['category_subtitle']);
        update_term_meta($term_id, 'category_subtitle', $subtitle);
    }
}




// ====================== CATEGORY ICON ======================
// 

function devhub_category_icon_field() {
    add_action('category_add_form_fields', 'devhub_category_icon_add', 10);
    add_action('category_edit_form_fields', 'devhub_category_icon_edit', 10, 2);
    
    add_action('created_category', 'devhub_save_category_icon', 10, 2);
    add_action('edited_category', 'devhub_save_category_icon', 10, 2);
}
add_action('admin_init', 'devhub_category_icon_field');

function devhub_category_icon_add() {
    ?>
    <div class="form-field">
        <label for="category_icon">Category Icon (SVG Code)</label>
        <textarea name="category_icon" id="category_icon" rows="4" placeholder="<svg ...></svg>"></textarea>
        <p class="description">Paste Lucide SVG code for this category</p>
    </div>
    <?php
}

function devhub_category_icon_edit($term) {
    $icon = get_term_meta($term->term_id, 'category_icon', true);
    ?>
    <tr class="form-field">
        <th scope="row"><label for="category_icon">Category Icon (SVG Code)</label></th>
        <td>
            <textarea name="category_icon" id="category_icon" rows="4"><?php echo esc_textarea($icon); ?></textarea>
            <p class="description">Paste Lucide SVG code here</p>
        </td>
    </tr>
    <?php
}

// Save Category Icon - Allow SVG
function devhub_save_category_icon($term_id) {
    if (isset($_POST['category_icon'])) {
        $icon = $_POST['category_icon'];
        
        // Allow SVG tags and necessary attributes
        $allowed_tags = array(
            'svg' => array(
                'xmlns' => true,
                'width' => true,
                'height' => true,
                'viewBox' => true,
                'fill' => true,
                'stroke' => true,
                'stroke-width' => true,
                'stroke-linecap' => true,
                'stroke-linejoin' => true,
                'class' => true,
                'aria-hidden' => true,
            ),
            'path' => array(
                'd' => true,
                'fill' => true,
            ),
            'circle' => array(
                'cx' => true,
                'cy' => true,
                'r' => true,
            ),
            'rect' => array(
                'width' => true,
                'height' => true,
                'x' => true,
                'y' => true,
                'rx' => true,
                'ry' => true,
            ),
            'line' => array(
                'x1' => true,
                'x2' => true,
                'y1' => true,
                'y2' => true,
            ),
        );

        $sanitized_icon = wp_kses($icon, $allowed_tags);
        update_term_meta($term_id, 'category_icon', $sanitized_icon);
    }
}