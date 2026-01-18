<?php
/**
 * Auto-create pages on theme activation
 */
function autocreativa_create_pages()
{
    // Contact Page
    $page_slug = 'contacto';
    $page_title = 'Contacto';
    $page_content = '';
    $page_template = 'page-contacto.php';

    $page_check = get_page_by_path($page_slug);
    $page_id = null;

    if (!isset($page_check->ID)) {
        $page_id = wp_insert_post(array(
            'post_type' => 'page',
            'post_name' => $page_slug,
            'post_title' => $page_title,
            'post_content' => $page_content,
            'post_status' => 'publish',
            'post_author' => 1,
        ));

        if ($page_id && !is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', $page_template);
        }
    } else {
        $page_id = $page_check->ID;
        // Ensure template is set correctly even if page exists
        $current_template = get_post_meta($page_id, '_wp_page_template', true);
        if ($current_template !== $page_template) {
            update_post_meta($page_id, '_wp_page_template', $page_template);
        }
    }
}
add_action('after_switch_theme', 'autocreativa_create_pages');
add_action('init', 'autocreativa_create_pages'); // Run on init to fix missing page immediately