<?php
/**
 * Register widget areas
 */

function ff_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widgets', 'freight-forwarder'),
        'id'            => 'footer-widgets',
        'description'   => __('Add widgets here to appear in footer.', 'freight-forwarder'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'ff_widgets_init');