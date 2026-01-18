<?php
/**
 * Template Part: Soft Skills Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

$soft_skills = array(
    autocreativa_string('soft_skill_1'),
    autocreativa_string('soft_skill_2'),
    autocreativa_string('soft_skill_3'),
);
?>

<section class="soft-skills-section sport-card animate-fade-in">
    <header class="section-header">
        <span class="section-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path
                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                </path>
            </svg>
        </span>
        <h2 class="section-title">
            <?php autocreativa_e('soft_skills_title'); ?>
        </h2>
    </header>

    <ul class="soft-skills-list">
        <?php foreach ($soft_skills as $skill): ?>
            <li class="soft-skill-item">
                <svg class="check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
                <span class="text-muted">
                    <?php echo esc_html($skill); ?>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>
</section>