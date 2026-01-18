<?php
/**
 * Template Part: Skills Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

$skills = autocreativa_get_skills();
$skill_rings = autocreativa_get_skill_rings();
?>

<section class="skills-section sport-card animate-fade-in stagger-3">
    <header class="section-header">
        <span class="section-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                <rect x="9" y="9" width="6" height="6"></rect>
                <line x1="9" y1="1" x2="9" y2="4"></line>
                <line x1="15" y1="1" x2="15" y2="4"></line>
                <line x1="9" y1="20" x2="9" y2="23"></line>
                <line x1="15" y1="20" x2="15" y2="23"></line>
                <line x1="20" y1="9" x2="23" y2="9"></line>
                <line x1="20" y1="14" x2="23" y2="14"></line>
                <line x1="1" y1="9" x2="4" y2="9"></line>
                <line x1="1" y1="14" x2="4" y2="14"></line>
            </svg>
        </span>
        <h2 class="section-title">
            <?php autocreativa_e('skills_title'); ?>
        </h2>
    </header>

    <!-- Skill Rings -->
    <div class="skill-rings-grid">
        <?php foreach ($skill_rings as $ring):
            $offset = 175.9 - (175.9 * $ring['percent']) / 100;
            ?>
            <div class="skill-ring">
                <div class="skill-ring-container">
                    <svg class="skill-ring-svg" viewBox="0 0 64 64">
                        <circle class="skill-ring-bg" cx="32" cy="32" r="28"></circle>
                        <circle class="skill-ring-progress" cx="32" cy="32" r="28"
                            stroke="<?php echo esc_attr($ring['color']); ?>"
                            style="stroke-dashoffset: <?php echo esc_attr($offset); ?>;"></circle>
                    </svg>
                    <span class="skill-ring-label">
                        <?php echo esc_html($ring['percent']); ?>%
                    </span>
                </div>
                <span class="skill-ring-name">
                    <?php echo esc_html($ring['label']); ?>
                </span>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Skill Bars -->
    <div class="skill-bars">
        <h4 class="skill-bars-title">
            <?php autocreativa_e('skills_top_languages'); ?>
        </h4>

        <?php foreach ($skills as $skill): ?>
            <div class="skill-bar-container">
                <div class="skill-bar-header">
                    <span class="skill-bar-name">
                        <?php echo esc_html($skill['name']); ?>
                    </span>
                    <span class="skill-bar-level">
                        <?php echo esc_html($skill['level']); ?>%
                    </span>
                </div>
                <div class="skill-bar-track">
                    <div class="skill-bar-fill" style="width: <?php echo esc_attr($skill['level']); ?>%;"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <button type="button" class="btn-secondary view-full-stack no-print" id="view-full-stack">
        <?php autocreativa_e('skills_view_full_stack'); ?>
    </button>
</section>

<!-- Skills Modal -->
<div class="skills-modal" id="skills-modal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="modal-backdrop"></div>
    <div class="modal-content sport-card">
        <header class="modal-header">
            <h3 class="modal-title">
                <?php esc_html_e('Full Stack', 'autocreativa'); ?>
            </h3>
            <button type="button" class="modal-close" id="close-skills-modal"
                aria-label="<?php esc_attr_e('Close', 'autocreativa'); ?>">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </header>

        <div class="modal-body">
            <div class="skills-grid">
                <!-- Languages -->
                <div class="skill-category">
                    <div class="category-header">
                        <div class="category-icon" style="background-color: rgba(190, 242, 100, 0.14);">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#bef264"
                                stroke-width="2">
                                <polyline points="16 18 22 12 16 6"></polyline>
                                <polyline points="8 6 2 12 8 18"></polyline>
                            </svg>
                        </div>
                        <h4>
                            <?php esc_html_e('Languages', 'autocreativa'); ?>
                        </h4>
                    </div>
                    <div class="category-tags">
                        <span class="skill-tag" style="--tag-color: #bef264;">JavaScript / TypeScript</span>
                        <span class="skill-tag" style="--tag-color: #bef264;">Java</span>
                        <span class="skill-tag" style="--tag-color: #bef264;">Python</span>
                        <span class="skill-tag" style="--tag-color: #bef264;">SQL</span>
                    </div>
                </div>

                <!-- Frameworks -->
                <div class="skill-category">
                    <div class="category-header">
                        <div class="category-icon" style="background-color: rgba(168, 85, 247, 0.14);">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#a855f7"
                                stroke-width="2">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                            </svg>
                        </div>
                        <h4>
                            <?php esc_html_e('Frameworks', 'autocreativa'); ?>
                        </h4>
                    </div>
                    <div class="category-tags">
                        <span class="skill-tag" style="--tag-color: #a855f7;">NestJS, Express, Hapi</span>
                        <span class="skill-tag" style="--tag-color: #a855f7;">Angular, Vue 3</span>
                        <span class="skill-tag" style="--tag-color: #a855f7;">Spring Boot, Spring Batch</span>
                        <span class="skill-tag" style="--tag-color: #a855f7;">Odoo, Puppeteer</span>
                    </div>
                </div>

                <!-- Databases -->
                <div class="skill-category">
                    <div class="category-header">
                        <div class="category-icon" style="background-color: rgba(59, 130, 246, 0.14);">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#3b82f6"
                                stroke-width="2">
                                <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                            </svg>
                        </div>
                        <h4>
                            <?php esc_html_e('Databases', 'autocreativa'); ?>
                        </h4>
                    </div>
                    <div class="category-tags">
                        <span class="skill-tag" style="--tag-color: #3b82f6;">MongoDB, PostgreSQL</span>
                        <span class="skill-tag" style="--tag-color: #3b82f6;">MySQL, Microsoft SQL Server</span>
                    </div>
                </div>

                <!-- Tools & DevOps -->
                <div class="skill-category">
                    <div class="category-header">
                        <div class="category-icon" style="background-color: rgba(249, 115, 22, 0.14);">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#f97316"
                                stroke-width="2">
                                <path
                                    d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z">
                                </path>
                            </svg>
                        </div>
                        <h4>
                            <?php esc_html_e('Tools & DevOps', 'autocreativa'); ?>
                        </h4>
                    </div>
                    <div class="category-tags">
                        <span class="skill-tag" style="--tag-color: #f97316;">Git, GitHub, GitLab CI/CD</span>
                        <span class="skill-tag" style="--tag-color: #f97316;">Jenkins, Docker</span>
                        <span class="skill-tag" style="--tag-color: #f97316;">Postman, DBeaver</span>
                        <span class="skill-tag" style="--tag-color: #f97316;">VS Code, IntelliJ</span>
                    </div>
                </div>

                <!-- Best Practices -->
                <div class="skill-category">
                    <div class="category-header">
                        <div class="category-icon" style="background-color: rgba(34, 197, 94, 0.14);">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22c55e"
                                stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <h4>
                            <?php esc_html_e('Best Practices', 'autocreativa'); ?>
                        </h4>
                    </div>
                    <div class="category-tags">
                        <span class="skill-tag" style="--tag-color: #22c55e;">SOLID, OOP, Design Patterns</span>
                        <span class="skill-tag" style="--tag-color: #22c55e;">Scrum, CI/CD</span>
                    </div>
                </div>

                <!-- Applied In -->
                <div class="skill-category">
                    <div class="category-header">
                        <div class="category-icon" style="background-color: rgba(234, 179, 8, 0.14);">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#eab308"
                                stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path
                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                </path>
                            </svg>
                        </div>
                        <h4>
                            <?php esc_html_e('Applied In', 'autocreativa'); ?>
                        </h4>
                    </div>
                    <div class="category-tags">
                        <span class="skill-tag" style="--tag-color: #eab308;">Fintech</span>
                        <span class="skill-tag" style="--tag-color: #eab308;">Retail & eCommerce</span>
                        <span class="skill-tag" style="--tag-color: #eab308;">SSO / Identity</span>
                        <span class="skill-tag" style="--tag-color: #eab308;">ERP / Odoo</span>
                    </div>
                </div>
            </div>
        </div>

        <footer class="modal-footer">
            <button type="button" class="btn-secondary" id="close-skills-modal-btn">
                <?php autocreativa_e('skills_close'); ?>
            </button>
        </footer>
    </div>
</div>