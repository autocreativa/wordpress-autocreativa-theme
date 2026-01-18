<?php
/**
 * Template Part: Signature Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

$theme_mode = autocreativa_get_theme_mode();
$signature_light = autocreativa_asset('images/firma_light.png');
$signature_dark = autocreativa_asset('images/firma.png');
?>

<section class="signature-section sport-card animate-fade-in stagger-3">
    <div class="signature-content">
        <img src="<?php echo esc_url($theme_mode === 'light' ? $signature_light : $signature_dark); ?>"
            alt="<?php esc_attr_e('Signature', 'autocreativa'); ?>" class="signature-image" id="signature-image"
            data-light="<?php echo esc_url($signature_light); ?>" data-dark="<?php echo esc_url($signature_dark); ?>">
        <p class="signature-date text-subtle">
            <?php echo date('Y'); ?> • Santiago, Chile
        </p>
    </div>
</section>