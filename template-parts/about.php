<?php
/**
 * Template Part: About Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

$description = get_theme_mod('about_description', autocreativa_string('about_desc'));
?>

<section class="about-section sport-card animate-fade-in stagger-1">
    <header class="section-header">
        <span class="section-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
        </span>
        <h2 class="section-title">
            <?php autocreativa_e('about_title'); ?>
        </h2>
    </header>

    <div class="about-content">
        <p class="text-muted about-description">
            <?php echo nl2br(esc_html($description)); ?>
        </p>

        <div class="about-details">
            <div class="detail-item">
                <div class="detail-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="2" y1="12" x2="22" y2="12"></line>
                        <path
                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                        </path>
                    </svg>
                </div>
                <div class="detail-text">
                    <strong>
                        <?php esc_html_e('Global Experience', 'autocreativa'); ?>
                    </strong>
                    <span class="text-subtle">
                        <?php esc_html_e('Projects across Latin America and Spanish-speaking countries.', 'autocreativa'); ?>
                    </span>
                </div>
            </div>

            <div class="detail-item">
                <div class="detail-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>
                </div>
                <div class="detail-text">
                    <strong>
                        <?php esc_html_e('Continuous improvement', 'autocreativa'); ?>
                    </strong>
                    <span class="text-subtle">
                        <?php esc_html_e('Skills developed with AI and vibe coding.', 'autocreativa'); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>