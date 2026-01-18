<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Autocreativa
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main error-404-page">
    <div class="site-container">

        <section class="error-404 sport-card">
            <div class="error-content">
                <div class="error-code text-lime">404</div>

                <h1 class="error-title">
                    <?php esc_html_e('Page Not Found', 'autocreativa'); ?>
                </h1>

                <p class="error-description text-muted">
                    <?php esc_html_e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'autocreativa'); ?>
                </p>

                <div class="error-actions">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="action-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <?php esc_html_e('Back to Home', 'autocreativa'); ?>
                    </a>

                    <?php if (class_exists('WooCommerce')): ?>
                        <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="btn-secondary">
                            <?php esc_html_e('Visit Shop', 'autocreativa'); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="error-search">
                    <p class="search-label text-subtle">
                        <?php esc_html_e('Or try searching:', 'autocreativa'); ?>
                    </p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </section>

    </div>
</main>

<style>
    .error-404-page {
        min-height: 70vh;
        display: flex;
        align-items: center;
    }

    .error-404 {
        text-align: center;
        padding: 4rem 2rem;
        max-width: 600px;
        margin: 0 auto;
    }

    .error-code {
        font-size: 8rem;
        font-weight: 800;
        line-height: 1;
        font-family: var(--font-display);
        margin-bottom: 1rem;
    }

    .error-title {
        font-size: 2rem;
        margin-bottom: 1rem;
    }

    .error-description {
        font-size: 1rem;
        margin-bottom: 2rem;
    }

    .error-actions {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
        margin-bottom: 3rem;
    }

    .error-search {
        max-width: 400px;
        margin: 0 auto;
    }

    .search-label {
        margin-bottom: 1rem;
    }

    .search-form {
        display: flex;
        gap: 0.5rem;
    }

    .search-form .search-field {
        flex: 1;
        padding: 0.75rem 1rem;
        background: var(--bg-input);
        border: 1px solid var(--card-glass-border);
        border-radius: 12px;
        color: var(--primary);
        font-size: 1rem;
    }

    .search-form .search-submit {
        padding: 0.75rem 1.5rem;
        background: var(--lime-primary);
        color: #000;
        border: none;
        border-radius: 12px;
        font-weight: 600;
        cursor: pointer;
    }
</style>

<?php
get_footer();
