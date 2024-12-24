<?php
defined('ABSPATH') || exit;

class BeTheme_Mega_Menu {
    private static $instance = null;

    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        add_filter('wp_nav_menu_args', [$this, 'modify_nav_menu_args']);
        add_filter('walker_nav_menu_start_el', [$this, 'add_mega_menu_markup'], 10, 4);
    }

    public function modify_nav_menu_args($args) {
        if (isset($args['theme_location']) && $args['theme_location'] === 'main-menu') {
            $args['walker'] = new BeTheme_Mega_Menu_Walker();
        }
        return $args;
    }

    public function add_mega_menu_markup($item_output, $item, $depth, $args) {
        // Add mega menu markup for top-level items
        if ($depth === 0 && $item->mega_menu === 'enabled') {
            // Add mega menu container and content
            $item_output .= $this->get_mega_menu_content($item->ID);
        }
        return $item_output;
    }

    private function get_mega_menu_content($menu_item_id) {
        // Get mega menu content from options
        $content = get_post_meta($menu_item_id, '_betheme_mega_menu_content', true);
        return $content ? '<div class="mega-menu-container">' . $content . '</div>' : '';
    }
}

BeTheme_Mega_Menu::get_instance();