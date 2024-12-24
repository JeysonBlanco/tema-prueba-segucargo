<?php
/**
 * Theme setup functions
 */

function ff_custom_image_sizes() {
    add_image_size('service-thumb', 400, 300, true);
    add_image_size('hero-banner', 1920, 600, true);
}
add_action('after_setup_theme', 'ff_custom_image_sizes');

function ff_custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'ff_custom_logo_setup');