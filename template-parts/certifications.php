<?php
/**
 * Template Part: Certifications Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

$certifications = autocreativa_get_certifications();
?>

<section class="certifications-section sport-card animate-fade-in stagger-1">
    <header class="section-header">
        <span class="section-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="8" r="7"></circle>
                <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
            </svg>
        </span>
        <h2 class="section-title">
            <?php autocreativa_e('certifications_title'); ?>
        </h2>
    </header>

    <div class="cert-platforms">
        <?php foreach ($certifications as $platform): ?>
            <span class="cert-badge">
                <?php echo esc_html($platform); ?>
            </span>
        <?php endforeach; ?>
    </div>
</section>