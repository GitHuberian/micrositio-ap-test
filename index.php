<?php include 'header.php'; ?>
<main id="site-content">
    <h1>Blog Posts</h1>
    <div class="microsite-separator-bot"></div>

    <div class="microsite-posts-grid">
        <?php while(have_posts()): the_post(); ?>
        <article class="microsite-posts-grid_post">
            <div class="microsite-posts-grid_post_thumbnail">
                <div class="microsite-posts-grid_post_thumbnail_filter"></div>
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="microsite-posts-grid_post_data">
                <p class="date"><?php the_date(); ?></p>
                <p class="author"><span>Por</span> <?php the_author(); ?></p>
            </div>
            <div class="microsite-posts-grid_post_content">
                <h3><?php the_title(); ?></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
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