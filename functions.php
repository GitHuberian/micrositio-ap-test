<?php

function microsite_scripts_styles() {
    //carga de la hoja principal de estilos
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'microsite_scripts_styles');

    //agregando la imagen destacada para un post
add_theme_support('post-thumbnails');

function microsite_menus(){
    //registrar el menú principal del tema
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'microsite')
    ));
}
add_action('init', 'microsite_menus');