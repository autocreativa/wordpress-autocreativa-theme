<?php
/**
 * Product Categories Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH') || !class_exists('WooCommerce')) {
    return;
}

$categories = autocreativa_get_product_categories(6);

if (empty($categories)) {
    return;
}
?>

<section class="shop-section categories-section">
    <div class="section-header">
        <div class="section-title-wrapper">
            <span class="section-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
            </span>
            <h2 class="section-title">
                <?php esc_html_e('Explorar Categorías', 'autocreativa'); ?>
            </h2>
        </div>
    </div>

    <div class="categories-grid">
        <?php
        $delay = 0;
        foreach ($categories as $category):
            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
            $image_url = wp_get_attachment_url($thumbnail_id);
            $category_link = get_term_link($category);
            $has_image = !empty($image_url);
            ?>
            <a href="<?php echo esc_url($category_link); ?>"
                class="category-card sport-card animate-fade-in <?php echo $has_image ? 'has-image' : 'no-image'; ?>"
                style="animation-delay: <?php echo esc_attr($delay * 0.1); ?>s">

                <div class="category-visual">
                    <?php if ($has_image): ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category->name); ?>"
                            loading="lazy">
                        <div class="category-overlay"></div>
                    <?php else: ?>
                        <div class="category-pattern">
                            <div class="pattern-grid"></div>
                            <div class="pattern-glow"></div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="category-content">
                    <h3 class="category-name">
                        <?php echo esc_html($category->name); ?>
                    </h3>
                    <span class="category-count">
                        <?php
                        printf(
                            /* translators: %s: product count */
                            _n('%s producto', '%s productos', $category->count, 'autocreativa'),
                            number_format_i18n($category->count)
                        );
                        ?>
                    </span>
                </div>
                <span class="category-arrow">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </span>
            </a>
            <?php
            $delay++;
        endforeach;
        ?>
    </div>
</section>

<style>
    /* Category Visual Container */
    .category-visual {
        position: relative;
        height: 160px;
        width: 100%;
        overflow: hidden;
        border-radius: var(--radius-sm);
        margin-bottom: 1rem;
        background: var(--bg-body);
    }

    .category-visual img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .category-card:hover .category-visual img {
        transform: scale(1.1);
    }

    /* Fallback Pattern Design */
    .category-pattern {
        width: 100%;
        height: 100%;
        position: relative;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.03) 0%, rgba(255, 255, 255, 0.01) 100%);
        overflow: hidden;
    }

    .pattern-grid {
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
        background-size: 20px 20px;
        mask-image: radial-gradient(circle at center, black 40%, transparent 100%);
    }

    .pattern-glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        height: 80%;
        background: radial-gradient(circle, var(--lime-primary) 0%, transparent 70%);
        opacity: 0.1;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .category-card:hover .pattern-glow {
        opacity: 0.25;
        transform: translate(-50%, -50%) scale(1.2);
    }

    .category-card.no-image .category-name {
        margin-top: 0.5rem;
    }

    /* Overlay for images */
    .category-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, transparent 100%);
        opacity: 0.6;
    }
</style>