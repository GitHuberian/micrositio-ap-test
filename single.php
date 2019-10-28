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
    <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
    <div class="microsite-post-full-content">
        <?php
        if (have_posts()) :
        while (have_posts()) :
            the_post();
        ?>
                <div class="microsite">
                    <div class="microsite_featured-img">
                        <div class="microsite_featured-img_filter"></div>
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
                <h2><?php the_title(); ?></h2>
                <div class="microsite-single-content">
                    <?php the_content(); ?>
                </div>
        <?php
        endwhile;
        endif;
        ?>
    </div>
    <div class="microsite-separator-bot"></div>
    <div>
        <p class="postmetadata">
        Ver en: <?php the_category(', ') ?> 
    </div>

</main>
<section id="contacto">
    <h1>Contacto</h1>
    <div class="microsite-separator-bot"></div>
    <form action="">
        <p>Si deseas contactarnos o enviar tus recetas para compartirlas, escríbenos</p>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" value="Escribe tu nombre">
        </div>
        <div class="form-group">
            <label for="name">E-mail</label>
            <input type="text" name="email" value="Escribe tu correo">
        </div>
        <div class="form-group">
            <label for="name">Mensaje</label>
            <textarea name="mensaje"></textarea>
        </div>
        <button class="btn">Enviar Mensaje</button>
    </form>
</section>
<?php include 'footer.php'; ?>