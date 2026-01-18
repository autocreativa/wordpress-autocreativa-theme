<?php
/**
 * The template for displaying all pages
 *
 * @package Autocreativa
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="site-container">

        <?php while (have_posts()):
            the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('page-content sport-card'); ?>>

                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title section-title">', '</h1>'); ?>
                </header>

                <?php if (has_post_thumbnail()): ?>
                    <div class="entry-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'autocreativa'),
                        'after' => '</div>',
                    ));
                    ?>
                </div>

                <?php if (get_edit_post_link()): ?>
                    <footer class="entry-footer">
                        <?php
                        edit_post_link(
                            sprintf(
                                wp_kses(
                                    __('Edit <span class="screen-reader-text">%s</span>', 'autocreativa'),
                                    array('span' => array('class' => array()))
                                ),
                                wp_kses_post(get_the_title())
                            ),
                            '<span class="edit-link">',
                            '</span>'
                        );
                        ?>
                    </footer>
                <?php endif; ?>

            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()):
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>

    </div>
</main>

<?php
get_footer();
