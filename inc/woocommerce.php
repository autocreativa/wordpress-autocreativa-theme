<?php
/**
 * WooCommerce Compatibility File
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * WooCommerce setup function.
 */
function autocreativa_woocommerce_setup()
{
    add_theme_support('woocommerce');

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
}
add_action('after_setup_theme', 'autocreativa_woocommerce_setup');

/**
 * Disable the default WooCommerce stylesheet.
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

/**
 * Add custom WooCommerce styles
 */
function autocreativa_woocommerce_scripts()
{
    wp_enqueue_style(
        'nelsonramos-woocommerce-style',
        get_template_directory_uri() . '/assets/css/woocommerce.css',
        array('nelsonramos-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'autocreativa_woocommerce_scripts');

/**
 * Change products per page
 */
function autocreativa_loop_columns()
{
    return 3;
}
add_filter('loop_shop_columns', 'autocreativa_loop_columns');

/**
 * Products per page
 */
function autocreativa_products_per_page()
{
    return 12;
}
add_filter('loop_shop_per_page', 'autocreativa_products_per_page');

/**
 * Add custom class to body when WooCommerce is active
 */
function autocreativa_woo_body_class($classes)
{
    if (class_exists('WooCommerce')) {
        $classes[] = 'woocommerce-active';

        if (is_shop() || is_product_category() || is_product_tag()) {
            $classes[] = 'woocommerce-shop-page';
        }

        if (is_product()) {
            $classes[] = 'woocommerce-single-product';
        }

        if (is_cart()) {
            $classes[] = 'woocommerce-cart-page';
        }

        if (is_checkout()) {
            $classes[] = 'woocommerce-checkout-page';
        }
    }
    return $classes;
}
add_filter('body_class', 'autocreativa_woo_body_class');

/**
 * Wrap WooCommerce content
 */
function autocreativa_woocommerce_wrapper_before()
{
    echo '<div class="site-container">';
    echo '<main id="primary" class="site-main woocommerce-main">';
}
add_action('woocommerce_before_main_content', 'autocreativa_woocommerce_wrapper_before');

function autocreativa_woocommerce_wrapper_after()
{
    echo '</main>';
    echo '</div>';
}
add_action('woocommerce_after_main_content', 'autocreativa_woocommerce_wrapper_after');

/**
 * Remove default WooCommerce sidebar
 */
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

/**
 * Customize product card
 */
function autocreativa_before_shop_loop_item()
{
    echo '<div class="product-card sport-card">';
}
add_action('woocommerce_before_shop_loop_item', 'autocreativa_before_shop_loop_item', 1);

function autocreativa_after_shop_loop_item()
{
    echo '</div>';
}
add_action('woocommerce_after_shop_loop_item', 'autocreativa_after_shop_loop_item', 99);

/**
 * Customize add to cart button
 */
function autocreativa_loop_add_to_cart_args($args)
{
    $args['class'] = str_replace('button', 'action-btn', $args['class']);
    return $args;
}
add_filter('woocommerce_loop_add_to_cart_args', 'autocreativa_loop_add_to_cart_args');

/**
 * Customize product thumbnail
 */
function autocreativa_product_thumbnail_wrapper_open()
{
    echo '<div class="product-thumbnail-wrapper">';
}
add_action('woocommerce_before_shop_loop_item_title', 'autocreativa_product_thumbnail_wrapper_open', 9);

function autocreativa_product_thumbnail_wrapper_close()
{
    echo '</div>';
}
add_action('woocommerce_before_shop_loop_item_title', 'autocreativa_product_thumbnail_wrapper_close', 11);

/**
 * Customize cart fragments for mini-cart
 */
function autocreativa_cart_fragments($fragments)
{
    ob_start();
    ?>
    <span class="cart-count">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
    </span>
    <?php
    $fragments['.cart-count'] = ob_get_clean();

    return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'autocreativa_cart_fragments');

/**
 * Customize checkout fields
 */
function autocreativa_checkout_fields($fields)
{
    // Add custom styling classes to checkout fields
    foreach ($fields as $fieldset_key => $fieldset) {
        foreach ($fieldset as $field_key => $field) {
            $fields[$fieldset_key][$field_key]['input_class'][] = 'form-input';
            $fields[$fieldset_key][$field_key]['label_class'][] = 'form-label';
        }
    }
    return $fields;
}
add_filter('woocommerce_checkout_fields', 'autocreativa_checkout_fields');

/**
 * Change sale flash text
 */
function autocreativa_sale_flash()
{
    return '<span class="onsale">' . esc_html__('OFERTA', 'autocreativa') . '</span>';
}
add_filter('woocommerce_sale_flash', 'autocreativa_sale_flash');

/**
 * Custom product badges
 */
function autocreativa_product_badges()
{
    global $product;

    echo '<div class="product-badges">';

    if ($product->is_on_sale()) {
        echo '<span class="badge badge-sale">' . esc_html__('OFERTA', 'autocreativa') . '</span>';
    }

    if ($product->is_featured()) {
        echo '<span class="badge badge-featured">' . esc_html__('Featured', 'autocreativa') . '</span>';
    }

    // New product (last 30 days)
    $post_date = get_the_date('U', $product->get_id());
    $days_ago = 30 * 24 * 60 * 60;
    if ((time() - $post_date) < $days_ago) {
        echo '<span class="badge badge-new">' . esc_html__('New', 'autocreativa') . '</span>';
    }

    echo '</div>';
}
add_action('woocommerce_before_shop_loop_item_title', 'autocreativa_product_badges', 8);

/**
 * Empty cart redirect
 */
function autocreativa_empty_cart_redirect_url()
{
    return wc_get_page_permalink('shop');
}
add_filter('woocommerce_return_to_shop_redirect', 'autocreativa_empty_cart_redirect_url');

/**
 * Customize breadcrumbs
 */
function autocreativa_woocommerce_breadcrumbs()
{
    return array(
        'delimiter' => '<span class="breadcrumb-separator"> / </span>',
        'wrap_before' => '<nav class="woocommerce-breadcrumb breadcrumbs" aria-label="Breadcrumbs">',
        'wrap_after' => '</nav>',
        'before' => '<span class="breadcrumb-item">',
        'after' => '</span>',
        'home' => _x('Home', 'breadcrumb', 'autocreativa'),
    );
}
add_filter('woocommerce_breadcrumb_defaults', 'autocreativa_woocommerce_breadcrumbs');

/**
 * Add "Continue Shopping" button after add to cart
 * Note: Disabled - user requested removal
 */
function autocreativa_continue_shopping_button()
{
    $shop_page_url = get_permalink(wc_get_page_id('shop'));
    echo '<a href="' . esc_url($shop_page_url) . '" class="btn-secondary continue-shopping">';
    echo esc_html__('Continue Shopping', 'autocreativa');
    echo '</a>';
}
// Disabled: add_action('woocommerce_after_add_to_cart_button', 'autocreativa_continue_shopping_button');

/**
 * Ajax add to cart single product
 */
function autocreativa_ajax_add_to_cart()
{
    check_ajax_referer('autocreativa_nonce', 'nonce');

    $product_id = isset($_POST['product_id']) ? absint($_POST['product_id']) : 0;
    $quantity = isset($_POST['quantity']) ? absint($_POST['quantity']) : 1;

    if (!$product_id) {
        wp_send_json_error(array('message' => __('Invalid product', 'autocreativa')));
    }

    $added = WC()->cart->add_to_cart($product_id, $quantity);

    if ($added) {
        wp_send_json_success(array(
            'message' => __('Product added to cart!', 'autocreativa'),
            'cart_count' => WC()->cart->get_cart_contents_count(),
            'cart_total' => WC()->cart->get_cart_total(),
        ));
    } else {
        wp_send_json_error(array('message' => __('Could not add product to cart', 'autocreativa')));
    }
}
add_action('wp_ajax_autocreativa_add_to_cart', 'autocreativa_ajax_add_to_cart');
add_action('wp_ajax_nopriv_autocreativa_add_to_cart', 'autocreativa_ajax_add_to_cart');

/**
 * Get products on sale
 *
 * @param int $limit Number of products to return
 * @return array Array of WC_Product objects
 */
function autocreativa_get_sale_products($limit = 4)
{
    return wc_get_products(array(
        'limit' => $limit,
        'status' => 'publish',
        'on_sale' => true,
        'orderby' => 'date',
        'order' => 'DESC',
    ));
}

/**
 * Get featured products
 *
 * @param int $limit Number of products to return
 * @return array Array of WC_Product objects
 */
function autocreativa_get_featured_products($limit = 8)
{
    return wc_get_products(array(
        'limit' => $limit,
        'status' => 'publish',
        'featured' => true,
        'orderby' => 'date',
        'order' => 'DESC',
    ));
}

/**
 * Get best selling products
 *
 * @param int $limit Number of products to return
 * @return array Array of WC_Product objects
 */
function autocreativa_get_bestseller_products($limit = 4)
{
    return wc_get_products(array(
        'limit' => $limit,
        'status' => 'publish',
        'orderby' => 'meta_value_num',
        'meta_key' => 'total_sales',
        'order' => 'DESC',
    ));
}

/**
 * Get newest products
 *
 * @param int $limit Number of products to return
 * @return array Array of WC_Product objects
 */
function autocreativa_get_new_products($limit = 4)
{
    return wc_get_products(array(
        'limit' => $limit,
        'status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    ));
}

/**
 * Get product categories with thumbnails
 *
 * @param int $limit Number of categories to return
 * @return array Array of term objects
 */
function autocreativa_get_product_categories($limit = 6)
{
    $categories = get_terms(array(
        'taxonomy' => 'product_cat',
        'hide_empty' => true,
        'number' => $limit,
        'exclude' => array(get_option('default_product_cat')), // Exclude "Uncategorized"
        'orderby' => 'count',
        'order' => 'DESC',
    ));

    if (is_wp_error($categories)) {
        return array();
    }

    return $categories;
}

/**
 * Get category thumbnail URL
 *
 * @param int $term_id Category term ID
 * @return string Image URL or placeholder
 */
function autocreativa_get_category_thumbnail($term_id)
{
    $thumbnail_id = get_term_meta($term_id, 'thumbnail_id', true);

    if ($thumbnail_id) {
        $image = wp_get_attachment_image_url($thumbnail_id, 'medium');
        if ($image) {
            return $image;
        }
    }

    return wc_placeholder_img_src('medium');
}

/**
 * Calculate sale percentage for a product
 *
 * @param WC_Product $product The product object
 * @return int Percentage discount
 */
function autocreativa_get_sale_percentage($product)
{
    if (!$product->is_on_sale()) {
        return 0;
    }

    if ($product->is_type('variable')) {
        $percentages = array();
        $prices = $product->get_variation_prices();

        foreach ($prices['price'] as $key => $price) {
            if ($prices['regular_price'][$key] !== $price) {
                $percentages[] = round(100 - (floatval($price) / floatval($prices['regular_price'][$key]) * 100));
            }
        }

        return max($percentages);
    } else {
        $regular_price = (float) $product->get_regular_price();
        $sale_price = (float) $product->get_sale_price();

        if ($regular_price > 0) {
            return round(100 - ($sale_price / $regular_price * 100));
        }
    }

    return 0;
}

/**
 * Get mini cart HTML for AJAX updates
 */
function autocreativa_get_mini_cart()
{
    ob_start();
    woocommerce_mini_cart();
    return ob_get_clean();
}

/**
 * Add mini cart fragment
 */
function autocreativa_mini_cart_fragment($fragments)
{
    ob_start();
    ?>
    <div class="mini-cart-content">
        <?php woocommerce_mini_cart(); ?>
    </div>
    <?php
    $fragments['.mini-cart-content'] = ob_get_clean();

    return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'autocreativa_mini_cart_fragment');

/**
 * Custom price display for zero-price products
 */
function autocreativa_custom_price_html($price, $product)
{
    // Check if price is 0 or empty
    if ($product->get_price() == 0 || $product->get_price() === '' || $product->get_price() === null) {
        return '<span class="price-on-request">' . esc_html__('Precio a convenir - Contáctanos', 'autocreativa') . '</span>';
    }
    return $price;
}
add_filter('woocommerce_get_price_html', 'autocreativa_custom_price_html', 10, 2);

/**
 * Register Shop Navigation Menu
 */
function autocreativa_register_shop_menus()
{
    register_nav_menus(array(
        'shop' => esc_html__('Shop Menu', 'autocreativa'),
    ));
}
add_action('after_setup_theme', 'autocreativa_register_shop_menus');
