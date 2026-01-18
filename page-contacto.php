<?php
/**
 * Template Name: Contact Page
 *
 * @package Autocreativa
 * @since 1.0.0
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="site-container">

        <header class="page-header animate-fade-in">
            <h1 class="page-title"><?php esc_html_e('Contacto', 'autocreativa'); ?></h1>
            <p class="page-subtitle"><?php esc_html_e('¿Tienes un proyecto en mente? ¡Hablemos!', 'autocreativa'); ?></p>
        </header>

        <div class="contact-page-content">
            <?php
            // 1. Plugin Compatibility: Display page content if exists (e.g., Shortcodes)
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    $content = get_the_content();
                    if (!empty(trim($content))) {
                        echo '<div class="contact-content-plugin animate-fade-in">';
                        the_content();
                        echo '</div>';
                    } else {
                        // 2. Default Custom Form (only if no content/plugin is present)
                        get_template_part('template-parts/contact-form');
                    }
                endwhile;
            endif;

            // 3. Contact Links (ALWAYS display at bottom)
            get_template_part('template-parts/contact-links');
            ?>
        </div>

    </div>
</main>

<style>
    .contact-page-content {
        max-width: 800px;
        /* Reduced width for better form focus */
        margin: 0 auto;
        padding: 2rem 0;
    }

    .page-header {
        text-align: center;
        margin-bottom: 3rem;
        padding-top: 2rem;
    }

    .page-title {
        font-size: 3rem;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, var(--lime-primary) 0%, var(--accent-blue) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .page-subtitle {
        font-size: 1.25rem;
        color: var(--text-muted);
    }

    .contact-content-plugin {
        background: var(--bg-card);
        padding: 2rem;
        border-radius: var(--radius-card);
        border: 1px solid var(--card-glass-border);
    }
</style>

<?php
get_footer();
