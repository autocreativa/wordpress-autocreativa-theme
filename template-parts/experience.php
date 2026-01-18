<?php
/**
 * Template Part: Experience Timeline
 *
 * @package Autocreativa
 * @since 1.0.0
 */

$experience = autocreativa_get_experience();
$cv_url = autocreativa_asset('images/Curriculum_Autocreativa.pdf');
?>

<section class="experience-section sport-card animate-fade-in stagger-2">
    <header class="section-header">
        <div class="header-left">
            <span class="section-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                </svg>
            </span>
            <h2 class="section-title">
                <?php autocreativa_e('experience_title'); ?>
            </h2>
        </div>

        <a href="<?php echo esc_url($cv_url); ?>" download class="action-btn no-print">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                <polyline points="7 10 12 15 17 10"></polyline>
                <line x1="12" y1="15" x2="12" y2="3"></line>
            </svg>
            <?php autocreativa_e('experience_download_cv'); ?>
        </a>
    </header>

    <div class="timeline">
        <?php foreach ($experience as $index => $job): ?>
            <div class="timeline-item animate-slide-in stagger-<?php echo ($index + 1); ?>">
                <div class="timeline-dot <?php echo esc_attr($job['color']); ?>"></div>
                <h4 class="timeline-company">
                    <?php echo esc_html($job['company']); ?>
                </h4>
                <p class="timeline-meta">
                    <?php echo esc_html($job['role']); ?> •
                    <?php echo esc_html($job['period']); ?>
                </p>
                <p class="timeline-desc">
                    <?php echo esc_html($job['desc']); ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>