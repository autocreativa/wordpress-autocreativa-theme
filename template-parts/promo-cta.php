<?php
/**
 * Promotional CTA Banner
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="shop-section promo-cta-section">
    <div class="promo-banner sport-card">
        <div class="promo-content">
            <span class="promo-badge">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                <?php esc_html_e('Contacto', 'autocreativa'); ?>
            </span>

            <h2 class="promo-title">
                <?php esc_html_e('¿Nuestra primera impresión te convence?', 'autocreativa'); ?>
            </h2>

            <p class="promo-description">
                <?php esc_html_e('Te invitamos a escribirnos para comenzar tu proyecto.', 'autocreativa'); ?>
            </p>

            <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="action-btn promo-btn">
                <?php esc_html_e('Contáctanos', 'autocreativa'); ?>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
            </a>
        </div>

        <div class="promo-decoration">
            <div class="promo-circle promo-circle-1"></div>
            <div class="promo-circle promo-circle-2"></div>
            <svg class="promo-icon" width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="0.5">
                <rect x="1" y="3" width="15" height="13"></rect>
                <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                <circle cx="5.5" cy="18.5" r="2.5"></circle>
                <circle cx="18.5" cy="18.5" r="2.5"></circle>
            </svg>
        </div>
    </div>
</section>