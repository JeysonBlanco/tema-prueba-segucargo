<?php
defined('ABSPATH') || exit;

function segucargo_enqueue_scripts() {
    // Styles
    wp_enqueue_style(
        'segucargo-style',
        SEGUCARGO_THEME_URI . '/assets/css/main.css',
        [],
        SEGUCARGO_THEME_VERSION
    );

    // Scripts
    wp_enqueue_script(
        'segucargo-main',
        SEGUCARGO_THEME_URI . '/assets/js/main.js',
        ['jquery'],
        SEGUCARGO_THEME_VERSION,
        true
    );

    // Localize script
    wp_localize_script('segucargo-main', 'segucargoData', [
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('segucargo-nonce')
    ]);
}
add_action('wp_enqueue_scripts', 'segucargo_enqueue_scripts');