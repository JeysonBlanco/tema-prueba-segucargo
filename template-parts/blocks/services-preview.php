<?php
$args = array(
    'post_type' => 'service',
    'posts_per_page' => 3,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

$services = new WP_Query($args);

if ($services->have_posts()) : ?>
    <section class="services-preview">
        <div class="container">
            <h2><?php echo esc_html__('Our Services', 'segucargo'); ?></h2>
            <div class="service-grid">
                <?php while ($services->have_posts()) : $services->the_post(); ?>
                    <div class="service-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="service-image">
                                <?php the_post_thumbnail('service-thumb'); ?>
                            </div>
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <div class="service-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e('Learn More', 'segucargo'); ?></a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php 
endif;
wp_reset_postdata();