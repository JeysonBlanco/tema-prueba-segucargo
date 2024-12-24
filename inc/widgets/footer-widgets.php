<?php
if (!defined('ABSPATH')) exit;

function segucargo_register_footer_widgets() {
    register_sidebar(array(
        'name'          => __('Footer Widgets', 'segucargo'),
        'id'            => 'footer-widgets',
        'description'   => __('Add widgets here to appear in footer.', 'segucargo'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'segucargo_register_footer_widgets');