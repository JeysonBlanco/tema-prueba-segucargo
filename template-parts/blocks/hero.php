<?php
$background_image = get_field('hero_background');
$title = get_field('hero_title');
$description = get_field('hero_description');
$button_text = get_field('hero_button_text');
$button_url = get_field('hero_button_url');
?>

<section class="hero-section" style="background-image: url('<?php echo esc_url($background_image); ?>')">
    <div class="container">
        <h1><?php echo esc_html($title); ?></h1>
        <p><?php echo esc_html($description); ?></p>
        <?php if ($button_text && $button_url): ?>
            <a href="<?php echo esc_url($button_url); ?>" class="btn btn-primary"><?php echo esc_html($button_text); ?></a>
        <?php endif; ?>
    </div>
</section>