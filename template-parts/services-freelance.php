<?php
/**
 * Freelance Services Section
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="shop-section services-freelance-section">
    <div class="section-header">
        <div class="section-title-wrapper">
            <span class="section-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </span>
            <h2 class="section-title">
                <?php esc_html_e('Servicios Freelance', 'autocreativa'); ?>
            </h2>
        </div>
        <a href="<?php echo esc_url(home_url('/freelance')); ?>" class="section-link">
            <?php esc_html_e('Ver detalles', 'autocreativa'); ?>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </a>
    </div>

    <div class="services-grid">
        <!-- Servicio 1: Trabajo Remoto -->
        <article class="service-card sport-card animate-fade-in" style="animation-delay: 0.1s">
            <div class="service-icon-wrapper">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                </svg>
            </div>
            <h3 class="service-title">
                <?php esc_html_e('Trabajo Remoto', 'autocreativa'); ?>
            </h3>
            <p class="service-description">
                <?php esc_html_e('Ofrecemos servicios freelance de manera remota, brindando soluciones profesionales y personalizadas a clientes de diferentes industrias.', 'autocreativa'); ?>
            </p>
        </article>

        <!-- Servicio 2: IA como Socio -->
        <article class="service-card sport-card animate-fade-in" style="animation-delay: 0.2s">
            <div class="service-icon-wrapper">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"></path>
                    <path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6zm0 10a4 4 0 1 1 4-4 4 4 0 0 1-4 4z"></path>
                </svg>
            </div>
            <h3 class="service-title">
                <?php esc_html_e('IA como Socio', 'autocreativa'); ?>
            </h3>
            <p class="service-description">
                <?php esc_html_e('Nuestros desarrollos son asistidos por IA, lo que nos permite optimizar procesos y ofrecer soluciones personalizadas con Vibe Coding.', 'autocreativa'); ?>
            </p>
        </article>

        <!-- Servicio 3: Capacitación -->
        <article class="service-card sport-card animate-fade-in" style="animation-delay: 0.3s">
            <div class="service-icon-wrapper">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                </svg>
            </div>
            <h3 class="service-title">
                <?php esc_html_e('Te capacitamos', 'autocreativa'); ?>
            </h3>
            <p class="service-description">
                <?php esc_html_e('Si necesitas aprender o informarte sobre alguna herramienta digital, podemos ofrecerte una serie de reuniones personalizadas.', 'autocreativa'); ?>
            </p>
        </article>
    </div>
</section>

<style>
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .service-card {
        padding: 2rem;
        border: 1px solid var(--card-glass-border);
        border-radius: var(--radius-card);
        background: var(--bg-card);
        transition: all 0.3s ease;
    }

    .service-card:hover {
        border-color: var(--lime-primary);
        transform: translateY(-5px);
    }

    .service-icon-wrapper {
        color: var(--lime-primary);
        margin-bottom: 1.5rem;
    }

    .service-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: var(--primary);
    }

    .service-description {
        color: var(--text-muted);
        font-size: 0.95rem;
        line-height: 1.6;
    }
</style>