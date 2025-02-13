<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Patricia Bravo">
    <meta name="description" content="TP1: Club de voyage">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>

<nav class="navigation" aria-label="Arborescence">
    <span>Club de voyage</span>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container' => false,
    ));
    ?>
    <aside>
        <label for="navigation__recherche" class="navigation__recherche">Recherche</label>
        <input type="search" autocomplete="on" id="navigation__recherche" placeholder="Voyage...">
    </aside>
</nav>