<?php
defined('ABSPATH') || exit;

class Segucargo_Options_Panel {
    private static $instance = null;

    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        add_action('admin_menu', [$this, 'add_options_menu']);
        add_action('admin_init', [$this, 'register_settings']);
    }

    public function add_options_menu() {
        add_menu_page(
            __('Theme Options', 'segucargo-theme'),
            __('Theme Options', 'segucargo-theme'),
            'manage_options',
            'segucargo-options',
            [$this, 'render_options_page'],
            'dashicons-admin-generic'
        );
    }

    public function register_settings() {
        register_setting('segucargo_options', 'segucargo_theme_options');
    }

    public function render_options_page() {
        // Options panel interface
        include SEGUCARGO_THEME_DIR . '/templates/admin/options-panel.php';
    }
}

Segucargo_Options_Panel::get_instance();