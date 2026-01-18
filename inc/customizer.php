<?php
/**
 * Theme Customizer
 *
 * @package Autocreativa
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 */
function autocreativa_customize_register($wp_customize)
{

    // Add selective refresh support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    // Remove default sections we don't need
    $wp_customize->remove_section('colors');

    // =========================================================================
    // PORTFOLIO SECTION
    // =========================================================================
    $wp_customize->add_panel('autocreativa_portfolio', array(
        'title' => __('Portfolio Settings', 'autocreativa'),
        'description' => __('Customize your portfolio content', 'autocreativa'),
        'priority' => 30,
    ));

    // -------------------------------------------------------------------------
    // Hero Section
    // -------------------------------------------------------------------------
    $wp_customize->add_section('autocreativa_hero', array(
        'title' => __('Hero Section', 'autocreativa'),
        'panel' => 'autocreativa_portfolio',
        'priority' => 10,
    ));

    $wp_customize->add_setting('hero_name', array(
        'default' => 'Nelson Ramos',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('hero_name', array(
        'label' => __('Name', 'autocreativa'),
        'section' => 'autocreativa_hero',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_role', array(
        'default' => __('Software Engineer', 'autocreativa'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('hero_role', array(
        'label' => __('Role / Title', 'autocreativa'),
        'section' => 'autocreativa_hero',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_profile_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_profile_image', array(
        'label' => __('Profile Image', 'autocreativa'),
        'section' => 'autocreativa_hero',
    )));

    $wp_customize->add_setting('hero_whatsapp', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_whatsapp', array(
        'label' => __('WhatsApp Number', 'autocreativa'),
        'description' => __('Include country code, e.g., 56985917608', 'autocreativa'),
        'section' => 'autocreativa_hero',
        'type' => 'text',
    ));

    // -------------------------------------------------------------------------
    // About Section
    // -------------------------------------------------------------------------
    $wp_customize->add_section('autocreativa_about', array(
        'title' => __('About Section', 'autocreativa'),
        'panel' => 'autocreativa_portfolio',
        'priority' => 20,
    ));

    $wp_customize->add_setting('about_description', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('about_description', array(
        'label' => __('About Description', 'autocreativa'),
        'section' => 'autocreativa_about',
        'type' => 'textarea',
    ));

    // -------------------------------------------------------------------------
    // Contact Section
    // -------------------------------------------------------------------------
    $wp_customize->add_section('autocreativa_contact', array(
        'title' => __('Contact Section', 'autocreativa'),
        'panel' => 'autocreativa_portfolio',
        'priority' => 30,
    ));

    $wp_customize->add_setting('contact_email', array(
        'default' => 'contacto@autocreativa.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('contact_email', array(
        'label' => __('Contact Email', 'autocreativa'),
        'section' => 'autocreativa_contact',
        'type' => 'email',
    ));

    $wp_customize->add_setting('contact_github', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('contact_github', array(
        'label' => __('GitHub URL', 'autocreativa'),
        'section' => 'autocreativa_contact',
        'type' => 'url',
    ));

    $wp_customize->add_setting('contact_linkedin', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('contact_linkedin', array(
        'label' => __('LinkedIn URL', 'autocreativa'),
        'section' => 'autocreativa_contact',
        'type' => 'url',
    ));

    $wp_customize->add_setting('contact_instagram', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('contact_instagram', array(
        'label' => __('Instagram URL', 'autocreativa'),
        'section' => 'autocreativa_contact',
        'type' => 'url',
    ));

    $wp_customize->add_setting('contact_facebook', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('contact_facebook', array(
        'label' => __('Facebook URL', 'autocreativa'),
        'section' => 'autocreativa_contact',
        'type' => 'url',
    ));

    // =========================================================================
    // THEME OPTIONS
    // =========================================================================
    $wp_customize->add_section('autocreativa_theme_options', array(
        'title' => __('Theme Options', 'autocreativa'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('default_theme_mode', array(
        'default' => 'dark',
        'sanitize_callback' => 'autocreativa_sanitize_theme_mode',
    ));
    $wp_customize->add_control('default_theme_mode', array(
        'label' => __('Default Theme Mode', 'autocreativa'),
        'section' => 'autocreativa_theme_options',
        'type' => 'radio',
        'choices' => array(
            'dark' => __('Dark Mode', 'autocreativa'),
            'light' => __('Light Mode', 'autocreativa'),
        ),
    ));

    $wp_customize->add_setting('show_theme_toggle', array(
        'default' => true,
        'sanitize_callback' => 'autocreativa_sanitize_checkbox',
    ));
    $wp_customize->add_control('show_theme_toggle', array(
        'label' => __('Show Theme Toggle Button', 'autocreativa'),
        'section' => 'autocreativa_theme_options',
        'type' => 'checkbox',
    ));

    $wp_customize->add_setting('show_language_switcher', array(
        'default' => true,
        'sanitize_callback' => 'autocreativa_sanitize_checkbox',
    ));
    $wp_customize->add_control('show_language_switcher', array(
        'label' => __('Show Language Switcher', 'autocreativa'),
        'section' => 'autocreativa_theme_options',
        'type' => 'checkbox',
    ));

    // =========================================================================
    // COLORS
    // =========================================================================
    $wp_customize->add_section('autocreativa_colors', array(
        'title' => __('Theme Colors', 'autocreativa'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('color_lime_primary', array(
        'default' => '#bef264',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_lime_primary', array(
        'label' => __('Primary Accent Color', 'autocreativa'),
        'section' => 'autocreativa_colors',
    )));

    $wp_customize->add_setting('color_accent_purple', array(
        'default' => '#a855f7',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_accent_purple', array(
        'label' => __('Secondary Accent (Purple)', 'autocreativa'),
        'section' => 'autocreativa_colors',
    )));

    $wp_customize->add_setting('color_accent_blue', array(
        'default' => '#3b82f6',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_accent_blue', array(
        'label' => __('Tertiary Accent (Blue)', 'autocreativa'),
        'section' => 'autocreativa_colors',
    )));
}
add_action('customize_register', 'autocreativa_customize_register');

/**
 * Sanitize theme mode selection
 */
function autocreativa_sanitize_theme_mode($input)
{
    $valid = array('dark', 'light');
    return in_array($input, $valid) ? $input : 'dark';
}

/**
 * Sanitize checkbox
 */
function autocreativa_sanitize_checkbox($input)
{
    return (bool) $input;
}

/**
 * Output Customizer CSS
 */
function autocreativa_customizer_css()
{
    $lime = get_theme_mod('color_lime_primary', '#bef264');
    $purple = get_theme_mod('color_accent_purple', '#a855f7');
    $blue = get_theme_mod('color_accent_blue', '#3b82f6');

    if ($lime !== '#bef264' || $purple !== '#a855f7' || $blue !== '#3b82f6') {
        echo '<style id="nelsonramos-customizer-css">';
        echo ':root {';
        if ($lime !== '#bef264') {
            echo '--lime-primary: ' . esc_attr($lime) . ';';
        }
        if ($purple !== '#a855f7') {
            echo '--accent-purple: ' . esc_attr($purple) . ';';
        }
        if ($blue !== '#3b82f6') {
            echo '--accent-blue: ' . esc_attr($blue) . ';';
        }
        echo '}';
        echo '</style>';
    }
}
add_action('wp_head', 'autocreativa_customizer_css');

/**
 * Enqueue Customizer preview script
 */
function autocreativa_customize_preview_js()
{
    wp_enqueue_script(
        'nelsonramos-customizer',
        get_template_directory_uri() . '/assets/js/customizer.js',
        array('customize-preview'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('customize_preview_init', 'autocreativa_customize_preview_js');
