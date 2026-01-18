<?php
/**
 * Sale Products Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH') || !class_exists('WooCommerce')) {
    return;
}

$sale_products = autocreativa_get_sale_products(4);

if (empty($sale_products)) {
    return;
}
?>

<section class="shop-section sale-products-section">
    <div class="section-header">
        <div class="section-title-wrapper">
            <span class="section-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                    <line x1="7" y1="7" x2="7.01" y2="7"></line>
                </svg>
            </span>
            <h2 class="section-title">
                <?php esc_html_e('Ofertas Especiales', 'autocreativa'); ?>
            </h2>
        </div>
        <a href="<?php echo esc_url(add_query_arg('on_sale', 'true', get_permalink(wc_get_page_id('shop')))); ?>"
            class="section-link">
            <?php esc_html_e('Ver todas', 'autocreativa'); ?>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </a>
    </div>

    <div class="products-grid sale-products-grid">
        <?php foreach ($sale_products as $product):
            $product_id = $product->get_id();
            $permalink = get_permalink($product_id);
            $image = wp_get_attachment_image_url($product->get_image_id(), 'woocommerce_thumbnail');
            $sale_percentage = autocreativa_get_sale_percentage($product);
            ?>
            <article class="product-card sport-card animate-fade-in">
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
                            <span class="badge badge-sale">-
                                <?php echo esc_html($sale_percentage); ?>%
                            </span>
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
                        <h3 class="product-title">
                            <?php echo esc_html($product->get_name()); ?>
                        </h3>

                        <div class="product-price">
                            <span class="price-original">
                                <?php echo wc_price($product->get_regular_price()); ?>
                            </span>
                            <span class="price-sale">
                                <?php echo wc_price($product->get_sale_price()); ?>
                            </span>
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
        <?php endforeach; ?>
    </div>
</section>