<?php get_header(); ?>

<main class="contenu">
    <h1><?php single_cat_title(); ?></h1> <!-- Affiche le titre de la catégorie actuelle -->
    <p><?php echo category_description(); ?></p> <!-- Affiche la description de la catégorie -->

    <?php if (have_posts()) : ?>
        <div class="grille">
            <?php
            // Itérer sur les publications de la catégorie
            while (have_posts()) : the_post(); ?>
                <article class="carte">
                    <header>
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Imagen por defecto"> <!-- Image par défaut -->
                        <?php } ?>
                        <h3><?php the_title(); ?></h3>
                    </header>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p> <!-- Limiter à 20 mots -->
                    <a href="<?php the_permalink(); ?>">Découvrir</a>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p><?php _e('Aucune publication trouvée dans cette catégorie.', 'textdomain'); ?></p> <!-- Message si aucune publication n'est trouvée -->
    <?php endif; ?>
</main>

<?php get_footer(); ?>