<?php

function microsite_scripts_styles() {
    //carga de la hoja principal de estilos
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
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