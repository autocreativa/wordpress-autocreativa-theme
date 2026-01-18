<?php
/**
 * Newsletter CTA Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="shop-section newsletter-section">
    <div class="newsletter-card">
        <div class="newsletter-bg">
            <div class="newsletter-gradient"></div>
            <div class="newsletter-pattern"></div>
        </div>

        <div class="newsletter-content">
            <div class="newsletter-icon">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
            </div>

            <h2 class="newsletter-title">
                <?php esc_html_e('¡Suscríbete a nuestro newsletter!', 'autocreativa'); ?>
            </h2>

            <p class="newsletter-description">
                <?php esc_html_e('Recibe ofertas exclusivas, novedades y un 10% de descuento en tu primera compra.', 'autocreativa'); ?>
            </p>

            <form class="newsletter-form" id="newsletter-form">
                <div class="newsletter-input-wrapper">
                    <input type="email" name="email" class="newsletter-input"
                        placeholder="<?php esc_attr_e('Tu correo electrónico', 'autocreativa'); ?>" required>
                    <button type="submit" class="newsletter-submit action-btn">
                        <span class="submit-text">
                            <?php esc_html_e('Suscribirse', 'autocreativa'); ?>
                        </span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                    </button>
                </div>
                <div class="newsletter-message" id="newsletter-message"></div>
            </form>

            <p class="newsletter-privacy">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
                <?php esc_html_e('Respetamos tu privacidad. Puedes darte de baja en cualquier momento.', 'autocreativa'); ?>
            </p>
        </div>
    </div>
</section>