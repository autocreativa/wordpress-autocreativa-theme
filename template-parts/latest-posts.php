<?php
/**
 * Latest Blog Posts Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$latest_posts = get_posts(array(
    'numberposts' => 3,
    'post_status' => 'publish',
));

if (empty($latest_posts)) {
    return;
}
?>

<section class="shop-section blog-section">
    <div class="section-header">
        <div class="section-title-wrapper">
            <span class="section-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                </svg>
            </span>
            <h2 class="section-title"><?php esc_html_e('Del Blog', 'autocreativa'); ?></h2>
        </div>
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="section-link">
            <?php esc_html_e('Ver todos', 'autocreativa'); ?>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </a>
    </div>

    <div class="blog-grid">
        <?php
        $delay = 0;
        foreach ($latest_posts as $post):
            setup_postdata($post);
            $thumbnail_url = get_the_post_thumbnail_url($post->ID, 'medium_large');
            ?>
            <article class="blog-card sport-card animate-fade-in"
                style="animation-delay: <?php echo esc_attr($delay * 0.15); ?>s">
                <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="blog-card-link">
                    <div class="blog-thumbnail">
                        <?php if ($thumbnail_url): ?>
                            <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($post->post_title); ?>"
                                loading="lazy">
                        <?php else: ?>
                            <div class="blog-thumbnail-placeholder">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg>
                            </div>
                        <?php endif; ?>
                        <div class="blog-overlay"></div>
                    </div>

                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <?php echo get_the_date('d M, Y', $post->ID); ?>
                            </span>
                            <?php
                            $categories = get_the_category($post->ID);
                            if (!empty($categories)):
                                ?>
                                <span class="blog-category"><?php echo esc_html($categories[0]->name); ?></span>
                            <?php endif; ?>
                        </div>

                        <h3 class="blog-title"><?php echo esc_html($post->post_title); ?></h3>

                        <p class="blog-excerpt">
                            <?php echo wp_trim_words(get_the_excerpt($post->ID), 15, '...'); ?>
                        </p>

                        <span class="blog-read-more">
                            <?php esc_html_e('Leer más', 'autocreativa'); ?>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </span>
                    </div>
                </a>
            </article>
            <?php
            $delay++;
        endforeach;
        wp_reset_postdata();
        ?>
    </div>
</section>