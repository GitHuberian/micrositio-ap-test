<?php include 'header.php'; ?>
<main id="site-content">
    <?php
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
    if (has_custom_logo()) {
        echo '<img src="' . esc_url($logo) . '" alt="' . get_bloginfo('name') . '">';
    } else {
        echo '<h1 class="microsite-title">' . get_bloginfo('name') . '</h1>';
    }
    ?>
    <div class="microsite-separator-bot"></div>
    <div class="microsite-breadcrumbs"><?php get_breadcrumb(); ?></div>
    <div class="microsite-posts-grid">
        <?php get_template_part('template-parts/loop'); ?>
    </div>
</main>
<?php get_template_part('template-parts/contact'); ?>
<?php include 'footer.php'; ?>