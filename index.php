<?php include 'header.php'; ?>
<header>
    <?php
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
    if (has_custom_logo()) {
        echo '<img src="' . esc_url($logo) . '" alt="' . get_bloginfo('name') . '">';
    } else {
        echo '<h1 class="microsite-title">' . get_bloginfo('name') . '</h1>';
    }
    ?>
    <nav class="microsite-nav">
        <div class="microsite-separator-top"></div>
        <a href="javascript:void(0);" class="icon" onclick="mobile_menu()">
            <!--<img src="<?php //echo get_template_directory_uri(); ?>/assets/bars-solid.svg" width="30" height="30" alt="menu">  -->
            MENU
        </a>
        <?php wp_nav_menu(array(
            'theme_location' => 'menu-principal',
            'container' => 'div',
            'menu_id' => 'microsite-menu'
        )); ?>
        <div class="microsite-separator-bot"></div>
    </nav>
    <div class="microsite">
        <div class="microsite_featured-img">
            <div class="microsite_featured-img_filter"></div>
            <img src="<?php header_image(); ?>" />
        </div>
        <h1 class="microsite__title">El sabor de un momento para compartir</h1>
        <p class="microsite__description">Disfruta de las recetas que hacemos con amor y pasión</p>
    </div>
</header>
<main id="site-content">
    <h1>Blog Posts</h1>
    <div class="microsite-separator-bot"></div>

    <div class="microsite-posts-grid">
        <?php while (have_posts()) : the_post(); ?>
            <article class="microsite-posts-grid_post">
                <div class="microsite-posts-grid_post_thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <div class="microsite-posts-grid_post_thumbnail_filter"></div>
                            <?php the_post_thumbnail(); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="microsite-posts-grid_post_data">
                    <p class="date"><?php echo get_the_date(); ?></p>
                    <p class="author"><span>Por</span> <?php the_author(); ?></p>
                </div>
                <div class="microsite-posts-grid_post_content">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo get_excerpt(); ?></p>
                </div>
            </article>
        <?php endwhile; ?>
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