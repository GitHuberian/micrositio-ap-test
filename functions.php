<?php

function microsite_scripts_styles() {
    //carga de la hoja principal de estilos
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}

    //longitud del excerpt/subtitulo a 50 caracteres
function get_excerpt(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 50);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'... <a href="'.get_the_permalink().'">| Ver más</a>';
    return $excerpt;
}

add_action('wp_enqueue_scripts', 'microsite_scripts_styles');

    //agregando la imagen destacada para un post
add_theme_support('post-thumbnails');

    //soporte para personalizar el logotipo del sitio
add_theme_support( 'custom-logo' );

    //soporte para imagen de fondo del tema
add_theme_support( 'custom-background' );

    //soporte para imagen del heroe/header
add_theme_support( 'custom-header' );


function microsite_menus(){
    //registrar el menú principal del tema
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'microsite')
    ));
}
add_action('init', 'microsite_menus');

    //funcion de llamada para la navegacion o breadcrumbs 
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    }
}