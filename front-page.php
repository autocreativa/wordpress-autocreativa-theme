<?php
/**
 * Front Page Template - WooCommerce Storefront
 *
 * @package Autocreativa
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main storefront-page">

    <?php if (class_exists('WooCommerce')): ?>

        <!-- Hero Section -->
        <?php get_template_part('template-parts/shop-hero'); ?>

        <div class="site-container">

            <!-- Sale Products -->
            <?php get_template_part('template-parts/sale-products'); ?>

            <!-- Product Categories -->
            <?php get_template_part('template-parts/product-categories'); ?>

            <!-- Freelance Services -->
            <?php get_template_part('template-parts/services-freelance'); ?>

            <!-- Featured Products -->
            <?php get_template_part('template-parts/featured-products'); ?>

            <!-- Promotional CTA Banner -->
            <?php get_template_part('template-parts/promo-cta'); ?>

            <!-- Latest Blog Posts -->
            <?php get_template_part('template-parts/latest-posts'); ?>

            <!-- Newsletter CTA -->
            <?php get_template_part('template-parts/newsletter-cta'); ?>

        </div>

    <?php else: ?>

        <!-- Fallback for non-WooCommerce -->
        <div class="site-container">
            <div class="no-woocommerce-notice sport-card">
                <h2><?php esc_html_e('Tienda en Construcción', 'autocreativa'); ?></h2>
                <p><?php esc_html_e('Por favor, activa WooCommerce para ver la tienda.', 'autocreativa'); ?></p>
            </div>
        </div>

    <?php endif; ?>

</main>

<?php
get_footer();
