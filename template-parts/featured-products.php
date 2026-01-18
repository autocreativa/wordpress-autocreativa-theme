<?php
/**
 * Featured Products Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH') || !class_exists('WooCommerce')) {
    return;
}

$featured_products = autocreativa_get_featured_products(8);

// If no featured products, get newest products instead
if (empty($featured_products)) {
    $featured_products = autocreativa_get_new_products(8);
}

if (empty($featured_products)) {
    return;
}
?>

<section class="shop-section featured-products-section">
    <div class="section-header">
        <div class="section-title-wrapper">
            <span class="section-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polygon
                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                    </polygon>
                </svg>
            </span>
            <h2 class="section-title"><?php esc_html_e('Productos Destacados', 'autocreativa'); ?></h2>
        </div>
        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="section-link">
            <?php esc_html_e('Ver todos', 'autocreativa'); ?>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </a>
    </div>

    <div class="products-grid featured-products-grid">
        <?php
        $delay = 0;
        foreach ($featured_products as $product):
            $product_id = $product->get_id();
            $permalink = get_permalink($product_id);
            $image = wp_get_attachment_image_url($product->get_image_id(), 'woocommerce_thumbnail');
            $is_on_sale = $product->is_on_sale();
            $is_new = (time() - get_post_time('U', false, $product_id)) < (30 * 24 * 60 * 60);
            ?>
            <article class="product-card sport-card animate-fade-in"
                style="animation-delay: <?php echo esc_attr($delay * 0.1); ?>s">
                <a href="<?php echo esc_url($permalink); ?>" class="product-card-link">
                    <div class="product-thumbnail-wrapper">
                        <?php if ($image): ?>
                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($product->get_name()); ?>"
                                loading="lazy">
                        <?php else: ?>
                            <img src="<?php echo esc_url(wc_placeholder_img_src()); ?>"
                                alt="<?php echo esc_attr($product->get_name()); ?>">
                        <?php endif; ?>

                        <div class="product-badges">
                            <?php if ($product->is_featured()): ?>
                                <span class="badge badge-featured"><?php esc_html_e('Destacado', 'autocreativa'); ?></span>
                            <?php endif; ?>
                            <?php if ($is_new): ?>
                                <span class="badge badge-new"><?php esc_html_e('Nuevo', 'autocreativa'); ?></span>
                            <?php endif; ?>
                            <?php if ($is_on_sale): ?>
                                <span class="badge badge-sale"><?php esc_html_e('Oferta', 'autocreativa'); ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="product-overlay">
                            <span class="quick-view-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="product-info">
                        <h3 class="product-title"><?php echo esc_html($product->get_name()); ?></h3>

                        <div class="product-price">
                            <?php if ($is_on_sale): ?>
                                <span class="price-original"><?php echo wc_price($product->get_regular_price()); ?></span>
                                <span class="price-sale"><?php echo wc_price($product->get_sale_price()); ?></span>
                            <?php else: ?>
                                <span class="price-current"><?php echo wc_price($product->get_price()); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </a>

                <button type="button" class="add-to-cart-btn action-btn"
                    data-product-id="<?php echo esc_attr($product_id); ?>"
                    aria-label="<?php esc_attr_e('Agregar al carrito', 'autocreativa'); ?>">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="m1 1 4 4 0 0 2.68 9.39a2 2 0 0 0 1.92 1.43H18a2 2 0 0 0 1.93-1.46L23 6H6"></path>
                    </svg>
                    <?php esc_html_e('Agregar', 'autocreativa'); ?>
                </button>
            </article>
            <?php
            $delay++;
        endforeach;
        ?>
    </div>
</section>