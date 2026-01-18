<?php
/**
 * The template for displaying all single posts
 *
 * @package Autocreativa
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="site-container">
        
        <?php while (have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-post sport-card'); ?>>
                
                <header class="entry-header">
                    <div class="entry-meta text-subtle">
                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                            <?php echo esc_html(get_the_date()); ?>
                        </time>
                        <span class="meta-separator">•</span>
                        <?php the_category(', '); ?>
                    </div>
                    
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    
                    <div class="entry-author">
                        <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                        <div class="author-info">
                            <span class="author-name"><?php the_author(); ?></span>
                            <span class="reading-time text-subtle">
                                <?php
                                $content = get_the_content();
                                $word_count = str_word_count(strip_tags($content));
                                $reading_time = ceil($word_count / 200);
                                printf(
                                    esc_html(_n('%d min read', '%d min read', $reading_time, 'autocreativa')),
                                    $reading_time
                                );
                                ?>
                            </span>
                        </div>
                    </div>
                </header>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'autocreativa'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
                
                <footer class="entry-footer">
                    <?php
                    $tags_list = get_the_tag_list('', ', ');
                    if ($tags_list) :
                    ?>
                        <div class="post-tags">
                            <span class="tags-label"><?php esc_html_e('Tags:', 'autocreativa'); ?></span>
                            <?php echo $tags_list; ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="post-share no-print">
                        <span class="share-label"><?php esc_html_e('Share:', 'autocreativa'); ?></span>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer" class="share-link">
                            Twitter
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer" class="share-link">
                            LinkedIn
                        </a>
                    </div>
                </footer>
                
            </article>
            
            <nav class="post-navigation">
                <div class="nav-links">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    
                    <?php if ($prev_post) : ?>
                        <a href="<?php echo get_permalink($prev_post); ?>" class="nav-previous sport-card">
                            <span class="nav-label text-subtle"><?php esc_html_e('Previous', 'autocreativa'); ?></span>
                            <span class="nav-title"><?php echo esc_html($prev_post->post_title); ?></span>
                        </a>
                    <?php endif; ?>
                    
                    <?php if ($next_post) : ?>
                        <a href="<?php echo get_permalink($next_post); ?>" class="nav-next sport-card">
                            <span class="nav-label text-subtle"><?php esc_html_e('Next', 'autocreativa'); ?></span>
                            <span class="nav-title"><?php echo esc_html($next_post->post_title); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            </nav>
            
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
            
        <?php endwhile; ?>
        
    </div>
</main>

<?php
get_footer();
