<?php
defined('ABSPATH') || exit;

function segucargo_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    // Register menus
    register_nav_menus([
        'main-menu' => __('Main Menu', 'segucargo-theme'),
        'footer-menu' => __('Footer Menu', 'segucargo-theme')
    ]);

    // Image sizes
    add_image_size('segucargo-large', 1200, 675, true);
    add_image_size('segucargo-medium', 800, 450, true);
    add_image_size('segucargo-small', 400, 225, true);
}
add_action('after_setup_theme', 'segucargo_setup');