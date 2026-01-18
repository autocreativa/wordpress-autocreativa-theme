<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Preconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary">
            <?php esc_html_e('Skip to content', 'autocreativa'); ?>
        </a>

        <!-- Theme Controls (Dark/Light Mode & Language) -->
        <?php if (get_theme_mod('show_theme_toggle', true) || get_theme_mod('show_language_switcher', true)): ?>
            <div class="theme-controls no-print">
                <?php if (get_theme_mod('show_language_switcher', true)): ?>
                    <?php get_template_part('template-parts/language-switcher'); ?>
                <?php endif; ?>

                <?php if (get_theme_mod('show_theme_toggle', true)): ?>
                    <button type="button" class="btn-icon theme-toggle" id="theme-toggle"
                        aria-label="<?php esc_attr_e('Toggle theme', 'autocreativa'); ?>">
                        <svg class="icon-sun" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                        <svg class="icon-moon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </button>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- Site Header -->
        <header id="masthead" class="site-header">
            <div class="site-container">
                <div class="header-inner">
                    <div class="site-branding">
                        <?php if (has_custom_logo()): ?>
                            <?php the_custom_logo(); ?>
                        <?php else: ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title" rel="home">
                                Autocreativa
                            </a>
                        <?php endif; ?>
                    </div>

                    <nav id="site-navigation" class="main-navigation"
                        aria-label="<?php esc_attr_e('Primary Navigation', 'autocreativa'); ?>">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_id' => 'primary-menu',
                            'menu_class' => 'nav-menu',
                            'container' => false,
                            'fallback_cb' => 'autocreativa_default_shop_menu',
                        ));
                        ?>
                    </nav>

                    <?php if (class_exists('WooCommerce')): ?>
                        <div class="header-actions">
                            <!-- Search -->
                            <button type="button" class="btn-icon search-toggle" id="search-toggle"
                                aria-label="<?php esc_attr_e('Search', 'autocreativa'); ?>">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </button>

                            <!-- My Account -->
                            <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>"
                                class="btn-icon account-link"
                                aria-label="<?php esc_attr_e('My Account', 'autocreativa'); ?>">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </a>

                            <!-- Cart -->
                            <div class="header-cart">
                                <button type="button" class="cart-toggle btn-icon" id="cart-toggle"
                                    aria-label="<?php esc_attr_e('View cart', 'autocreativa'); ?>">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="9" cy="21" r="1"></circle>
                                        <circle cx="20" cy="21" r="1"></circle>
                                        <path d="m1 1 4 4 0 0 2.68 9.39a2 2 0 0 0 1.92 1.43H18a2 2 0 0 0 1.93-1.46L23 6H6">
                                        </path>
                                    </svg>
                                    <span class="cart-count">
                                        <?php echo WC()->cart->get_cart_contents_count(); ?>
                                    </span>
                                </button>

                                <!-- Mini Cart Dropdown -->
                                <div class="mini-cart-dropdown" id="mini-cart-dropdown">
                                    <div class="mini-cart-header">
                                        <h4><?php esc_html_e('Carrito de Compras', 'autocreativa'); ?></h4>
                                        <button type="button" class="mini-cart-close" id="mini-cart-close">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mini-cart-content">
                                        <?php woocommerce_mini_cart(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Menu Toggle -->
                        <button type="button" class="mobile-menu-toggle btn-icon" id="mobile-menu-toggle"
                            aria-label="<?php esc_attr_e('Menu', 'autocreativa'); ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </button>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Search Overlay -->
            <div class="search-overlay" id="search-overlay">
                <div class="search-overlay-content">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="search" class="search-input"
                            placeholder="<?php esc_attr_e('Buscar productos...', 'autocreativa'); ?>"
                            value="<?php echo get_search_query(); ?>" name="s">
                        <input type="hidden" name="post_type" value="product">
                        <button type="submit" class="search-submit action-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </form>
                    <button type="button" class="search-close" id="search-close">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <div id="content" class="site-content">