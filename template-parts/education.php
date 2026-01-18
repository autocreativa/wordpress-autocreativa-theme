<?php
/**
 * Template Part: Education Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

$education = autocreativa_get_education();
?>

<section class="education-section sport-card animate-fade-in stagger-4">
    <header class="section-header">
        <span class="section-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
            </svg>
        </span>
        <h2 class="section-title">
            <?php autocreativa_e('education_title'); ?>
        </h2>
    </header>

    <div class="education-list">
        <?php foreach ($education as $degree): ?>
            <div class="education-item">
                <div class="education-icon graduated">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <div class="education-info">
                    <h4 class="education-title">
                        <?php echo esc_html($degree['title']); ?>
                    </h4>
                    <p class="education-institution">
                        <?php echo esc_html($degree['institution']); ?> •
                        <?php echo esc_html($degree['period']); ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>