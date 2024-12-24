<?php
/**
 * Template Name: Home
 */

get_header();

// Hero Section
get_template_part('template-parts/blocks/hero');

// Services Preview
get_template_part('template-parts/blocks/services-preview');

// Features
get_template_part('template-parts/blocks/features');

// Testimonials
get_template_part('template-parts/blocks/testimonials');

// CTA
get_template_part('template-parts/blocks/cta');

get_footer();