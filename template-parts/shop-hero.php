<?php
/**
 * Shop Hero Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// Get customizer settings or defaults
$hero_title = get_theme_mod('shop_hero_title', __('Productos digitales', 'autocreativa'));
$hero_subtitle = get_theme_mod('shop_hero_subtitle', __('Tienda de productos digitales. Tecnología con IA, Innovación constante y Acceso global.', 'autocreativa'));
$hero_cta_text = get_theme_mod('shop_hero_cta', __('Ir a la Tienda', 'autocreativa'));
$hero_cta_url = get_permalink(wc_get_page_id('shop'));
?>

<section class="shop-hero">
    <div class="shop-hero-bg">
        <div class="shop-hero-gradient"></div>
        <div class="shop-hero-grid"></div>
    </div>

    <div class="shop-hero-content">
        <span class="shop-hero-badge animate-fade-in">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
            </svg>
            <?php esc_html_e('Agencia Digital', 'autocreativa'); ?>
        </span>

        <h1 class="shop-hero-title animate-fade-in stagger-1">
            <?php echo esc_html($hero_title); ?>
        </h1>

        <p class="shop-hero-subtitle animate-fade-in stagger-2">
            <?php echo esc_html($hero_subtitle); ?>
        </p>

        <div class="shop-hero-actions animate-fade-in stagger-3">
            <a href="<?php echo esc_url($hero_cta_url); ?>" class="action-btn">
                <?php echo esc_html($hero_cta_text); ?>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>

            <?php if (class_exists('WooCommerce')): ?>
                <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" class="btn-secondary">
                    <?php esc_html_e('Mi Cuenta', 'autocreativa'); ?>
                </a>
            <?php endif; ?>
        </div>

        <!-- Quick Stats -->
        <div class="shop-hero-stats animate-fade-in stagger-4">
            <div class="stat-item">
                <span class="stat-number">
                    100%
                </span>
                <span class="stat-label">
                    <?php esc_html_e('Dedicación', 'autocreativa'); ?>
                </span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <span class="stat-number">
                    <?php esc_html_e('Diseño', 'autocreativa'); ?>
                </span>
                <span class="stat-label">
                    <?php esc_html_e('Innovador', 'autocreativa'); ?>
                </span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <span class="stat-number">
                    <?php esc_html_e('Trato', 'autocreativa'); ?>
                </span>
                <span class="stat-label">
                    <?php esc_html_e('Personal', 'autocreativa'); ?>
                </span>
            </div>
        </div>
    </div>
</section>