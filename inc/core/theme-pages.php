<?php
if (!defined('ABSPATH')) exit;

function segucargo_create_default_pages() {
    // Array of pages to create
    $pages = array(
        'servicios-mudanzas-internacionales' => array(
            'title' => 'Servicios de Mudanzas Internacionales',
            'template' => 'templates/international-moving.php',
            'content' => file_get_contents(SEGUCARGO_DIR . '/inc/content/moving-services.txt')
        ),
        'proceso-mudanza' => array(
            'title' => 'Guía del Proceso de Mudanza',
            'template' => 'templates/moving-process.php',
            'content' => file_get_contents(SEGUCARGO_DIR . '/inc/content/moving-process.txt')
        ),
        'servicios-embalaje' => array(
            'title' => 'Servicios de Embalaje Profesional',
            'template' => 'templates/packing-services.php',
            'content' => file_get_contents(SEGUCARGO_DIR . '/inc/content/packing-services.txt')
        ),
        'soluciones-almacenamiento' => array(
            'title' => 'Soluciones de Almacenamiento',
            'template' => 'templates/storage-solutions.php',
            'content' => file_get_contents(SEGUCARGO_DIR . '/inc/content/storage-solutions.txt')
        ),
        'aduanas-documentacion' => array(
            'title' => 'Guía de Aduanas y Documentación',
            'template' => 'templates/customs-documentation.php',
            'content' => file_get_contents(SEGUCARGO_DIR . '/inc/content/customs-documentation.txt')
        )
    );

    foreach ($pages as $slug => $page_data) {
        // Check if page already exists
        $existing_page = get_page_by_path($slug);
        
        if (!$existing_page) {
            // Create the page
            $page_id = wp_insert_post(array(
                'post_title' => $page_data['title'],
                'post_name' => $slug,
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_content' => $page_data['content'],
                'page_template' => $page_data['template']
            ));
        }
    }
}