<?php
defined('ABSPATH') || exit;

class Segucargo_Header_Builder {
    private static $instance = null;

    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        add_action('admin_menu', [$this, 'add_header_builder_menu']);
    }

    public function add_header_builder_menu() {
        add_submenu_page(
            'themes.php',
            __('Header Builder', 'segucargo-theme'),
            __('Header Builder', 'segucargo-theme'),
            'manage_options',
            'segucargo-header-builder',
            [$this, 'render_builder_page']
        );
    }

    public function render_builder_page() {
        // Header builder interface
        include SEGUCARGO_THEME_DIR . '/templates/admin/header-builder.php';
    }
}

Segucargo_Header_Builder::get_instance();