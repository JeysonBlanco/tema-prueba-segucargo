<?php
if (!defined('ABSPATH')) exit;

function segucargo_enqueue_scripts() {
    wp_enqueue_style(
        'segucargo-style',
        get_stylesheet_uri(),
        array(),
        SEGUCARGO_VERSION
    );
    
    wp_enqueue_style(
        'segucargo-main',
        SEGUCARGO_URI . '/assets/css/main.css',
        array(),
        SEGUCARGO_VERSION
    );

    wp_enqueue_script(
        'segucargo-main',
        SEGUCARGO_URI . '/assets/js/main.js',
        array('jquery'),
        SEGUCARGO_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'segucargo_enqueue_scripts');