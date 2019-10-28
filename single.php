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