<?php
function segucargo_register_service_post_type() {
    $labels = array(
        'name' => __('Services', 'segucargo'),
        'singular_name' => __('Service', 'segucargo'),
        'menu_name' => __('Services', 'segucargo'),
        'add_new' => __('Add New', 'segucargo'),
        'add_new_item' => __('Add New Service', 'segucargo'),
        'edit_item' => __('Edit Service', 'segucargo'),
        'new_item' => __('New Service', 'segucargo'),
        'view_item' => __('View Service', 'segucargo'),
        'search_items' => __('Search Services', 'segucargo'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-truck',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'services')
    );

    register_post_type('service', $args);
}
add_action('init', 'segucargo_register_service_post_type');