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

            <?php if (!is_page('details-freelance') && get_query_var('pagename') !== 'details-freelance'): ?>
                <header class="page-header animate-fade-in">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php
            $content = get_the_content();
            if (!empty(trim($content))) {
                echo '<div class="page-content sport-card animate-fade-in">';
                the_content();
                echo '</div>';
            } else {
                ?>

                <?php get_template_part('template-parts/services-freelance'); ?>

                <?php
            }
            ?>

            <?php if (!is_page('details-freelance') && get_query_var('pagename') !== 'details-freelance'): ?>
                <?php get_template_part('template-parts/contact-links'); ?>
                <?php get_template_part('template-parts/signature'); ?>
            <?php endif; ?>

        <?php endwhile; ?>

    </div>
</main>

<?php
get_footer();
