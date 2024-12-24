<?php
/**
 * Page hero section
 */
?>
<section class="page-header">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php if (get_post_type() === 'page'): ?>
            <div class="page-description">
                <?php echo get_the_excerpt(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>