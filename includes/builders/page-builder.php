<?php
defined('ABSPATH') || exit;

class Segucargo_Page_Builder {
    private static $instance = null;

    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        add_action('admin_menu', [$this, 'add_page_builder_menu']);
        add_action('add_meta_boxes', [$this, 'add_page_builder_meta_box']);
    }

    public function add_page_builder_menu() {
        add_menu_page(
            __('Page Builder', 'segucargo-theme'),
            __('Page Builder', 'segucargo-theme'),
            'manage_options',
            'segucargo-page-builder',
            [$this, 'render_builder_page'],
            'dashicons-layout'
        );
    }

    public function add_page_builder_meta_box() {
        add_meta_box(
            'segucargo-page-builder',
            __('Page Builder', 'segucargo-theme'),
            [$this, 'render_meta_box'],
            ['page', 'post']
        );
    }

    public function render_builder_page() {
        // Page builder interface
        include SEGUCARGO_THEME_DIR . '/templates/admin/page-builder.php';
    }

    public function render_meta_box($post) {
        // Meta box interface
        include SEGUCARGO_THEME_DIR . '/templates/admin/page-builder-meta-box.php';
    }
}

Segucargo_Page_Builder::get_instance();