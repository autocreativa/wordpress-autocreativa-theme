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

<?php
 $is_details_freelance = is_page('details-freelance') || is_page_template('template-freelance.php');
 $cv_url = get_theme_mod('freelance_cv_url', 'https://nelsonramos.cl/assets/Curriculum_NelsonRamos-CMmcSwhh.pdf');
 $website_url = get_theme_mod('freelance_website_url', 'https://www.nelsonramos.cl');
 ?>

<?php if ($is_details_freelance): ?>

    <?php
    $theme_mode = autocreativa_get_theme_mode();
    $signature_light = autocreativa_asset('images/firma_light.png');
    $signature_dark = autocreativa_asset('images/firma.png');
    $profile_image = autocreativa_asset('images/perfil.png');

    $email = get_theme_mod('contact_email', 'contacto@autocreativa.com');
    $github = get_theme_mod('contact_github', 'https://github.com/nelsonalejandro');
    $linkedin = get_theme_mod('contact_linkedin', 'https://www.linkedin.com/in/nelsonalejandroramosrivera/');
    $instagram = get_theme_mod('contact_instagram', 'https://www.instagram.com/nelsonalejandroramos/');
    $facebook = get_theme_mod('contact_facebook', 'https://www.facebook.com/nelsonalejandro');
    ?>

    <section class="freelance-details-section">
        <div class="freelance-details-card sport-card animate-fade-in">
            <div class="freelance-avatar">
                <img src="<?php echo esc_url($profile_image); ?>" alt="<?php esc_attr_e('Profile image', 'autocreativa'); ?>"
                    class="freelance-avatar-img">
            </div>

            <h2 class="freelance-name">Nelson Ramos</h2>

            <p class="freelance-intro text-muted">
                Trabajo bajo una filosofía que me ha permitido entregar proyectos sólidos, eficientes y con un toque único:
                Trabajo Remoto y Vibe Coding.
            </p>

            <div class="freelance-highlights">
                <div class="freelance-highlight">
                    <h3 class="freelance-highlight-title">
                        <span class="freelance-highlight-icon">🌍</span>
                        <?php esc_html_e('Trabajo Remoto', 'autocreativa'); ?>
                    </h3>
                    <p class="text-muted">
                        No importa dónde estés, puedo desarrollar, optimizar y entregar soluciones sin límites geográficos.
                        Esto me da la flexibilidad de trabajar de forma estratégica, manteniendo un flujo constante y una
                        comunicación ágil para que todo avance sin fricciones.
                    </p>
                </div>

                <div class="freelance-highlight">
                    <h3 class="freelance-highlight-title">
                        <span class="freelance-highlight-icon">💻</span>
                        <?php esc_html_e('Vibe Coding', 'autocreativa'); ?>
                    </h3>
                    <p class="text-muted">
                        Para mí, programar es más que escribir líneas de código: es un ambiente, una energía. Mi kit incluye
                        Cursor para acelerar el desarrollo con IA, VS Code y suite de Jetbrains para personalizar cada
                        proyecto y sí… una buena taza de café y música lo-fi que me acompañan hasta en las madrugadas de inspiración.
                        El resultado: código limpio, escalable y pensado para durar.
                    </p>
                </div>

                <div class="freelance-highlight">
                    <h3 class="freelance-highlight-title">
                        <span class="freelance-highlight-icon">✨</span>
                        <?php esc_html_e('Mi promesa', 'autocreativa'); ?>
                    </h3>
                    <p class="text-muted">
                        Cada proyecto lo trato como si fuera propio: cuidando los detalles, optimizando recursos y asegurando
                        que el resultado no solo cumpla, sino que impresione. Aquí no hay excusas, solo compromiso y resultados.
                    </p>
                </div>
            </div>

            <div class="freelance-signature-inline">
                <img src="<?php echo esc_url($theme_mode === 'light' ? $signature_light : $signature_dark); ?>"
                    alt="<?php esc_attr_e('Signature', 'autocreativa'); ?>" class="freelance-signature-image">
                <span class="freelance-signature-separator" aria-hidden="true"></span>
            </div>

            <div class="freelance-actions">
                <a href="<?php echo esc_url($website_url); ?>" class="freelance-action-btn" target="_blank" rel="noopener noreferrer">
                    <?php esc_html_e('Visita mi sitio web', 'autocreativa'); ?>
                </a>
                <?php if (!empty($cv_url)): ?>
                    <a href="<?php echo esc_url($cv_url); ?>" class="freelance-action-btn" target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('Descargar mi CV', 'autocreativa'); ?>
                    </a>
                <?php endif; ?>
            </div>

            <div class="freelance-social-links no-print">
                <?php if ($github): ?>
                    <a href="<?php echo esc_url($github); ?>" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="GitHub">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                <?php endif; ?>

                <?php if ($linkedin): ?>
                    <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" class="social-link"
                        aria-label="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                <?php endif; ?>

                <?php if ($instagram): ?>
                    <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener noreferrer" class="social-link"
                        aria-label="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                <?php endif; ?>

                <?php if ($facebook): ?>
                    <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener noreferrer" class="social-link"
                        aria-label="Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>

            <?php if (!empty($email)): ?>
                <div class="freelance-email-wrapper">
                    <a href="mailto:<?php echo esc_attr($email); ?>" class="freelance-email-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <?php echo esc_html($email); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php else: ?>

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
        <a href="<?php echo esc_url(home_url('/details-freelance')); ?>" class="section-link">
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

<?php endif; ?>