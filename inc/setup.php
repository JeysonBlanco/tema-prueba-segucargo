<?php
function segucargo_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true
    ));
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'segucargo'),
        'footer' => __('Footer Menu', 'segucargo')
    ));

    add_image_size('service-thumb', 600, 400, true);
    add_image_size('hero-banner', 1920, 600, true);
}
add_action('after_setup_theme', 'segucargo_setup');