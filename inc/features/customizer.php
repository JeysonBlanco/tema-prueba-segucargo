<?php
function segucargo_customize_register($wp_customize) {
    // Header Settings
    $wp_customize->add_section('segucargo_header', array(
        'title' => __('Header Settings', 'segucargo'),
        'priority' => 30,
    ));

    // Logo Height
    $wp_customize->add_setting('logo_height', array(
        'default' => '50',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('logo_height', array(
        'label' => __('Logo Height (px)', 'segucargo'),
        'section' => 'segucargo_header',
        'type' => 'number',
    ));

    // Colors
    $wp_customize->add_setting('primary_color', array(
        'default' => '#1a4f8b',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label' => __('Primary Color', 'segucargo'),
        'section' => 'colors',
    )));
}
add_action('customize_register', 'segucargo_customize_register');