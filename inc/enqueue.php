<?php
/**
 * Enqueue scripts and styles
 */

function ff_enqueue_scripts() {
    // Styles
    wp_enqueue_style(
        'freight-forwarder-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.0'
    );

    // Scripts
    wp_enqueue_script(
        'freight-forwarder-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // Localize script
    wp_localize_script('freight-forwarder-main', 'ffData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ff-nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'ff_enqueue_scripts');