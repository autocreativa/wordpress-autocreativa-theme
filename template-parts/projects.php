<?php
/**
 * Template Part: Projects Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

// Get projects from custom post type or use defaults
$projects_query = new WP_Query(array(
    'post_type' => 'portfolio',
    'posts_per_page' => 6,
    'post_status' => 'publish',
));

// Default projects if no custom post type exists
$default_projects = array(
    array(
        'title' => 'RedPay Integration',
        'type' => 'Fintech Core',
        'image' => '',
    ),
    array(
        'title' => 'Odoo AI Suite',
        'type' => 'Enterprise Modules',
        'image' => '',
    ),
    array(
        'title' => 'Keycloak SSO',
        'type' => 'Security',
        'image' => '',
    ),
);

$has_projects = $projects_query->have_posts();
?>

<section class="projects-section animate-fade-in stagger-1">
    <?php if ($has_projects || !empty($default_projects)): ?>

        <header class="section-header">
            <div class="header-left">
                <span class="section-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 17 12 22 22 17"></polyline>
                        <polyline points="2 12 12 17 22 12"></polyline>
                    </svg>
                </span>
                <h2 class="section-title">
                    <?php autocreativa_e('projects_title'); ?>
                </h2>
            </div>

            <?php if ($has_projects): ?>
                <a href="<?php echo get_post_type_archive_link('portfolio'); ?>" class="view-all-link text-lime">
                    <?php autocreativa_e('projects_view_all'); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            <?php endif; ?>
        </header>

        <div class="projects-grid">
            <?php if ($has_projects): ?>
                <?php while ($projects_query->have_posts()):
                    $projects_query->the_post(); ?>
                    <article class="project-card">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('large', array('class' => 'project-image')); ?>
                        <?php else: ?>
                            <div class="project-placeholder"></div>
                        <?php endif; ?>

                        <div class="project-overlay"></div>

                        <div class="project-content">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'portfolio_category');
                            if ($terms && !is_wp_error($terms)):
                                ?>
                                <span class="project-type">
                                    <?php echo esc_html($terms[0]->name); ?>
                                </span>
                            <?php endif; ?>

                            <h3 class="project-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <!-- Show placeholder projects when no custom post type -->
                <?php foreach ($default_projects as $project): ?>
                    <article class="project-card placeholder-project">
                        <div class="project-placeholder"></div>
                        <div class="project-overlay"></div>
                        <div class="project-content">
                            <span class="project-type">
                                <?php echo esc_html($project['type']); ?>
                            </span>
                            <h3 class="project-title">
                                <?php echo esc_html($project['title']); ?>
                            </h3>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    <?php endif; ?>
</section>