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
    <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
        <label>
            <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Rechercher des destinations...', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" />
        </label>
        <button type="submit" class="search-submit"><?php echo esc_html_x('Search', 'submit button') ?></button>
    </form>

</nav>