<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Vidaloka&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <h1 class="microsite-title"><?php wp_title(); ?></h1>
        <nav class="microsite-nav">
            <div class="microsite-separator-top"></div>
            <?php wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'container' => 'div'
            )); ?>
            <div class="microsite-separator-bot"></div>
        </nav>
        <div class="microsite-latest-post">
            <div class="microsite-latest-post_featured-img">
                <div class="microsite-latest-post_featured-img_filter"></div>
                <img src="./assets/img/bakery-bread-cake-669735.jpg" alt="">
            </div>
            <h1 class="microsite-latest-post__title">El sabor de un momento para compartir</h1>
            <p class="microsite-latest-post__excerpt">Disfruta de las recetas que hacemos con amor y pasión</p>
        </div>
    </header>