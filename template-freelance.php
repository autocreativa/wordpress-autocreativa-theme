<?php
/**
 * Template Name: Freelance
 *
 * @package Autocreativa
 * @since 1.0.0
 */

get_header();

$cv_url = get_theme_mod('freelance_cv_url', 'https://nelsonramos.cl/assets/Curriculum_NelsonRamos-CMmcSwhh.pdf');
$website_url = get_theme_mod('freelance_website_url', 'https://www.nelsonramos.cl');
?>

<main id="primary" class="site-main freelance-page">
    <div class="site-container">

        <?php while (have_posts()):
            the_post(); ?>

            <header class="page-header animate-fade-in">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </header>

            <?php
            $content = get_the_content();
            if (!empty(trim($content))) {
                echo '<div class="page-content sport-card animate-fade-in">';
                the_content();
                echo '</div>';
            } else {
                ?>

                <section class="sport-card animate-fade-in">
                    <h2 class="section-title" style="margin-bottom: 0.75rem;">Nelson Ramos</h2>
                    <p class="text-muted" style="margin: 0; line-height: 1.7;">
                        Trabajo bajo una filosofía que me ha permitido entregar proyectos sólidos, eficientes y con un toque
                        único: Trabajo Remoto y Vibe Coding.
                    </p>
                </section>

                <section class="sport-card animate-fade-in" style="margin-top: 1.5rem;">
                    <h3 class="section-title" style="font-size: 1.25rem; margin-bottom: 0.75rem;">🌍 Trabajo Remoto</h3>
                    <p class="text-muted" style="margin: 0; line-height: 1.7;">
                        No importa dónde estés, puedo desarrollar, optimizar y entregar soluciones sin límites geográficos.
                        Esto me da la flexibilidad de trabajar de forma estratégica, manteniendo un flujo constante y una
                        comunicación ágil para que todo avance sin fricciones.
                    </p>
                </section>

                <section class="sport-card animate-fade-in" style="margin-top: 1.5rem;">
                    <h3 class="section-title" style="font-size: 1.25rem; margin-bottom: 0.75rem;">💻 Vibe Coding</h3>
                    <p class="text-muted" style="margin: 0; line-height: 1.7;">
                        Para mí, programar es más que escribir líneas de código: es un ambiente, una energía. Mi kit incluye
                        Cursor para acelerar el desarrollo con IA, VS Code y suite de Jetbrains para personalizar cada
                        proyecto y sí… una buena taza de café y música lo-fi que me acompañan hasta en las madrugadas de inspiración.
                        El resultado: código limpio, escalable y pensado para durar.
                    </p>
                </section>

                <section class="sport-card animate-fade-in" style="margin-top: 1.5rem;">
                    <h3 class="section-title" style="font-size: 1.25rem; margin-bottom: 0.75rem;">✨ Mi promesa</h3>
                    <p class="text-muted" style="margin: 0; line-height: 1.7;">
                        Cada proyecto lo trato como si fuera propio: cuidando los detalles, optimizando recursos y asegurando
                        que el resultado no solo cumpla, sino que impresione. Aquí no hay excusas, solo compromiso y resultados.
                    </p>
                </section>

                <section class="sport-card animate-fade-in" style="margin-top: 1.5rem;">
                    <div style="display: flex; flex-wrap: wrap; gap: 0.75rem;">
                        <a href="<?php echo esc_url($website_url); ?>" class="action-btn" target="_blank" rel="noopener noreferrer">
                            <?php esc_html_e('Visita mi sitio web', 'autocreativa'); ?>
                        </a>
                        <?php if (!empty($cv_url)): ?>
                            <a href="<?php echo esc_url($cv_url); ?>" class="action-btn" target="_blank" rel="noopener noreferrer">
                                <?php esc_html_e('Descargar mi CV', 'autocreativa'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </section>

                <?php
            }
            ?>

            <?php get_template_part('template-parts/contact-links'); ?>
            <?php get_template_part('template-parts/signature'); ?>

        <?php endwhile; ?>

    </div>
</main>

<?php
get_footer();
