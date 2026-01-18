<?php
/**
 * The main template file
 *
 * @package Autocreativa
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="site-container">

        <?php if (have_posts()): ?>

            <header class="page-header">
                <?php if (is_home() && !is_front_page()): ?>
                    <h1 class="page-title section-title">
                        <?php single_post_title(); ?>
                    </h1>
                <?php elseif (is_archive()): ?>
                    <?php the_archive_title('<h1 class="page-title section-title">', '</h1>'); ?>
                    <?php the_archive_description('<div class="archive-description text-muted">', '</div>'); ?>
                <?php elseif (is_search()): ?>
                    <h1 class="page-title section-title">
                        <?php printf(esc_html__('Search Results for: %s', 'autocreativa'), '<span>' . get_search_query() . '</span>'); ?>
                    </h1>
                <?php endif; ?>
            </header>

            <div class="posts-grid">
                <?php while (have_posts()):
                    the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card sport-card'); ?>>
                        <?php if (has_post_thumbnail()): ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large'); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="post-content">
                            <header class="entry-header">
                                <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>

                                <div class="entry-meta text-subtle">
                                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                        <?php echo esc_html(get_the_date()); ?>
                                    </time>
                                    <?php if (get_the_category_list()): ?>
                                        <span class="meta-separator">•</span>
                                        <?php echo get_the_category_list(', '); ?>
                                    <?php endif; ?>
                                </div>
                            </header>

                            <div class="entry-excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <footer class="entry-footer">
                                <a href="<?php the_permalink(); ?>" class="action-btn">
                                    <?php esc_html_e('Read More', 'autocreativa'); ?>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </a>
                            </footer>
                        </div>
                    </article>

                <?php endwhile; ?>
            </div>

            <?php the_posts_pagination(array(
                'prev_text' => '<span class="nav-prev-text">' . esc_html__('Previous', 'autocreativa') . '</span>',
                'next_text' => '<span class="nav-next-text">' . esc_html__('Next', 'autocreativa') . '</span>',
            )); ?>

        <?php else: ?>

            <section class="no-results sport-card">
                <header class="page-header">
                    <h1 class="page-title section-title">
                        <?php esc_html_e('Nothing Found', 'autocreativa'); ?>
                    </h1>
                </header>

                <div class="page-content">
                    <?php if (is_search()): ?>
                        <p class="text-muted">
                            <?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with different keywords.', 'autocreativa'); ?>
                        </p>
                        <?php get_search_form(); ?>
                    <?php else: ?>
                        <p class="text-muted">
                            <?php esc_html_e('It seems we can\'t find what you\'re looking for.', 'autocreativa'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </section>

        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
