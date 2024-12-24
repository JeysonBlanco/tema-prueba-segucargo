<?php
if (!defined('ABSPATH')) exit;

// Define theme constants
define('SEGUCARGO_VERSION', '1.0.0');
define('SEGUCARGO_DIR', get_template_directory());
define('SEGUCARGO_URI', get_template_directory_uri());

// Core functionality
require_once SEGUCARGO_DIR . '/inc/core/setup.php';
require_once SEGUCARGO_DIR . '/inc/core/enqueue.php';
require_once SEGUCARGO_DIR . '/inc/core/theme-pages.php';

// Post types
require_once SEGUCARGO_DIR . '/inc/post-types/services.php';

// Features
require_once SEGUCARGO_DIR . '/inc/features/customizer.php';

// Widgets
require_once SEGUCARGO_DIR . '/inc/widgets/footer-widgets.php';

// Create default pages on theme activation
function segucargo_theme_activation() {
    segucargo_create_default_pages();
}
add_action('after_switch_theme', 'segucargo_theme_activation');