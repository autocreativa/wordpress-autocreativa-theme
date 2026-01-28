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

    // Freelance Details Page
    $page_slug = 'details-freelance';
    $page_title = 'Freelance';
    $page_content = '';
    $page_template = 'template-freelance.php';

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
        $current_template = get_post_meta($page_id, '_wp_page_template', true);
        if ($current_template !== $page_template) {
            update_post_meta($page_id, '_wp_page_template', $page_template);
        }
    }

    // Legal Pages
    $legal_pages = array(
        array(
            'slug' => 'terminos-y-condiciones',
            'title' => 'Términos y Condiciones',
            'template' => 'page-terminos-y-condiciones.php'
        ),
        array(
            'slug' => 'politica-de-privacidad',
            'title' => 'Política de Privacidad',
            'template' => 'page-politica-de-privacidad.php'
        ),
        array(
            'slug' => 'politica-de-cookies',
            'title' => 'Política de Cookies',
            'template' => 'page-politica-de-cookies.php'
        ),
    );

    foreach ($legal_pages as $legal_page) {
        $page_check = get_page_by_path($legal_page['slug']);
        $page_id = null;

        if (!isset($page_check->ID)) {
            $page_id = wp_insert_post(array(
                'post_type' => 'page',
                'post_name' => $legal_page['slug'],
                'post_title' => $legal_page['title'],
                'post_content' => '',
                'post_status' => 'publish',
                'post_author' => 1,
            ));

            if ($page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', $legal_page['template']);
            }
        } else {
            $page_id = $page_check->ID;
            $current_template = get_post_meta($page_id, '_wp_page_template', true);
            if ($current_template !== $legal_page['template']) {
                update_post_meta($page_id, '_wp_page_template', $legal_page['template']);
            }
        }
    }

    // Help Pages
    $help_pages = array(
        array(
            'slug' => 'preguntas-frecuentes',
            'title' => 'Preguntas Frecuentes',
            'template' => 'page-preguntas-frecuentes.php'
        ),
        array(
            'slug' => 'envios',
            'title' => 'Envíos y Entregas',
            'template' => 'page-envios.php'
        ),
        array(
            'slug' => 'devoluciones',
            'title' => 'Devoluciones',
            'template' => 'page-devoluciones.php'
        ),
        array(
            'slug' => 'metodos-de-pago',
            'title' => 'Métodos de Pago',
            'template' => 'page-metodos-de-pago.php'
        ),
    );

    foreach ($help_pages as $help_page) {
        $page_check = get_page_by_path($help_page['slug']);
        $page_id = null;

        if (!isset($page_check->ID)) {
            $page_id = wp_insert_post(array(
                'post_type' => 'page',
                'post_name' => $help_page['slug'],
                'post_title' => $help_page['title'],
                'post_content' => '',
                'post_status' => 'publish',
                'post_author' => 1,
            ));

            if ($page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', $help_page['template']);
            }
        } else {
            $page_id = $page_check->ID;
            $current_template = get_post_meta($page_id, '_wp_page_template', true);
            if ($current_template !== $help_page['template']) {
                update_post_meta($page_id, '_wp_page_template', $help_page['template']);
            }
        }
    }
}
add_action('after_switch_theme', 'autocreativa_create_pages');
add_action('init', 'autocreativa_create_pages'); // Run on init to fix missing page immediately