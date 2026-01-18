<?php
/**
 * Autocreativa Portfolio Theme Functions
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function autocreativa_setup()
{
    // Make theme available for translation
    load_theme_textdomain('autocreativa', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'autocreativa'),
        'footer' => esc_html__('Footer Menu', 'autocreativa'),
        'social' => esc_html__('Social Links', 'autocreativa'),
    ));

    // Switch default core markup to HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height' => 250,
        'width' => 250,
        'flex-width' => true,
        'flex-height' => true,
    ));

    // Add support for custom background
    add_theme_support('custom-background', array(
        'default-color' => '000000',
    ));

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');

    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');

    // Add support for Block Editor color palette
    add_theme_support('editor-color-palette', array(
        array(
            'name' => esc_html__('Lime Primary', 'autocreativa'),
            'slug' => 'lime-primary',
            'color' => '#bef264',
        ),
        array(
            'name' => esc_html__('Accent Purple', 'autocreativa'),
            'slug' => 'accent-purple',
            'color' => '#a855f7',
        ),
        array(
            'name' => esc_html__('Accent Blue', 'autocreativa'),
            'slug' => 'accent-blue',
            'color' => '#3b82f6',
        ),
        array(
            'name' => esc_html__('Dark Background', 'autocreativa'),
            'slug' => 'bg-dark',
            'color' => '#000000',
        ),
        array(
            'name' => esc_html__('Card Background', 'autocreativa'),
            'slug' => 'bg-card',
            'color' => '#1c1c1e',
        ),
    ));
}
add_action('after_setup_theme', 'autocreativa_setup');

/**
 * Set the content width in pixels
 */
function autocreativa_content_width()
{
    $GLOBALS['content_width'] = apply_filters('autocreativa_content_width', 1280);
}
add_action('after_setup_theme', 'autocreativa_content_width', 0);

/**
 * Register widget area
 */
function autocreativa_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'autocreativa'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'autocreativa'),
        'before_widget' => '<section id="%1$s" class="widget sport-card %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title section-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer Widgets', 'autocreativa'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets for footer.', 'autocreativa'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-widget-title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'autocreativa_widgets_init');

/**
 * Enqueue scripts and styles
 */
function autocreativa_scripts()
{
    // Google Fonts
    wp_enqueue_style(
        'nelsonramos-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Syne:wght@400;700;800&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'nelsonramos-style',
        get_stylesheet_uri(),
        array('nelsonramos-google-fonts'),
        wp_get_theme()->get('Version')
    );

    // Additional CSS
    wp_enqueue_style(
        'nelsonramos-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array('nelsonramos-style'),
        wp_get_theme()->get('Version')
    );

    // Main JavaScript
    wp_enqueue_script(
        'nelsonramos-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Localize script for AJAX and other dynamic data
    wp_localize_script('nelsonramos-main', 'autocreativaData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('autocreativa_nonce'),
        'themeUrl' => get_template_directory_uri(),
        'siteUrl' => home_url(),
    ));

    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'autocreativa_scripts');

/**
 * Include WooCommerce support
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Include Customizer additions
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Include i18n helpers
 */
require get_template_directory() . '/inc/i18n.php';

/**
 * Auto-create pages
 */
require get_template_directory() . '/inc/auto-pages.php';

/**
 * Theme Mode Cookie Handler
 */
function autocreativa_set_theme_mode()
{
    $mode = isset($_GET['theme_mode']) ? sanitize_text_field($_GET['theme_mode']) : '';
    if (in_array($mode, array('dark', 'light'))) {
        setcookie('autocreativa_theme_mode', $mode, time() + (365 * 24 * 60 * 60), '/');
    }
}
add_action('init', 'autocreativa_set_theme_mode');

/**
 * Get current theme mode
 */
function autocreativa_get_theme_mode()
{
    if (isset($_COOKIE['autocreativa_theme_mode'])) {
        return sanitize_text_field($_COOKIE['autocreativa_theme_mode']);
    }
    return 'dark'; // Default
}

/**
 * Add theme mode class to body
 */
function autocreativa_body_class($classes)
{
    $mode = autocreativa_get_theme_mode();
    $classes[] = $mode . '-mode';
    return $classes;
}
add_filter('body_class', 'autocreativa_body_class');

/**
 * Custom excerpt length
 */
function autocreativa_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'autocreativa_excerpt_length');

/**
 * Custom excerpt more
 */
function autocreativa_excerpt_more($more)
{
    return '&hellip;';
}
add_filter('excerpt_more', 'autocreativa_excerpt_more');

/**
 * SVG Support
 */
function autocreativa_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'autocreativa_mime_types');

/**
 * Helper function: Get theme asset URL
 */
function autocreativa_asset($path)
{
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

/**
 * Helper function: Include template part with data
 */
function autocreativa_get_template_part($slug, $name = null, $args = array())
{
    if (!empty($args) && is_array($args)) {
        extract($args);
    }
    get_template_part($slug, $name, $args);
}

/**
 * AJAX handler for contact form
 */
function autocreativa_contact_form_handler()
{
    check_ajax_referer('autocreativa_nonce', 'nonce');

    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $subject_type = isset($_POST['subject']) ? sanitize_text_field($_POST['subject']) : 'General';
    $message_content = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';

    if (empty($name) || !is_email($email) || empty($message_content)) {
        wp_send_json_error(array('message' => __('Por favor completa todos los campos requeridos correctamente.', 'autocreativa')));
    }

    // Send notification email
    $to = get_option('admin_email');
    $subject = sprintf(__('Nuevo contacto: %s - %s', 'autocreativa'), $subject_type, get_bloginfo('name'));

    $body = "Has recibido un nuevo mensaje de contacto:\n\n";
    $body .= "Nombre: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Asunto: " . $subject_type . "\n";
    $body .= "Mensaje:\n" . $message_content . "\n\n";
    $body .= "--\n";
    $body .= get_bloginfo('name');

    $headers = array('Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>');

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => __('¡Gracias! Hemos recibido tu mensaje y te responderemos pronto.', 'autocreativa')));
    } else {
        wp_send_json_error(array('message' => __('Hubo un error al enviar el mensaje. Inténtalo de nuevo más tarde.', 'autocreativa')));
    }
}
add_action('wp_ajax_autocreativa_contact_form', 'autocreativa_contact_form_handler');
add_action('wp_ajax_nopriv_autocreativa_contact_form', 'autocreativa_contact_form_handler');

/**
 * Default Shop Menu Fallback
 */
function autocreativa_default_shop_menu()
{
    if (!class_exists('WooCommerce')) {
        return;
    }

    echo '<ul id="primary-menu" class="nav-menu">';

    // Home
    echo '<li class="menu-item' . (is_front_page() ? ' current-menu-item' : '') . '">';
    echo '<a href="' . esc_url(home_url('/')) . '">' . esc_html__('Inicio', 'autocreativa') . '</a>';
    echo '</li>';

    // Shop
    echo '<li class="menu-item' . (is_shop() ? ' current-menu-item' : '') . '">';
    echo '<a href="' . esc_url(get_permalink(wc_get_page_id('shop'))) . '">' . esc_html__('Tienda', 'autocreativa') . '</a>';
    echo '</li>';

    // Product Categories (top level)
    $categories = get_terms(array(
        'taxonomy' => 'product_cat',
        'hide_empty' => true,
        'parent' => 0,
        'number' => 5,
    ));

    if (!is_wp_error($categories) && !empty($categories)) {
        echo '<li class="menu-item menu-item-has-children">';
        echo '<a href="#">' . esc_html__('Categorías', 'autocreativa') . '</a>';
        echo '<ul class="sub-menu">';
        foreach ($categories as $cat) {
            echo '<li class="menu-item">';
            echo '<a href="' . esc_url(get_term_link($cat)) . '">' . esc_html($cat->name) . '</a>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</li>';
    }

    // Cart
    echo '<li class="menu-item' . (is_cart() ? ' current-menu-item' : '') . '">';
    echo '<a href="' . esc_url(wc_get_cart_url()) . '">' . esc_html__('Carrito', 'autocreativa') . '</a>';
    echo '</li>';

    echo '</ul>';
}
