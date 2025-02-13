<?php get_header(); ?>

<header class="entete">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Hero">
    <h1 class="entete__titre">
        <span class="entete__titre-main">Explorez</span>
        <span class="entete__titre-sub"> le monde à votre façon</span>
    </h1>
</header>

<main class="contenu">
    <section class="contenu__liens full-bleed">
        <h2 class="contenu__titre">À la une</h2>
        <p class="contenu__textes">Nos dernières idées de voyages sur-mesure 100 % personnalisables</p>
        <ul>
            <li><h3><a href="#">Italie</a></h3></li>
            <li><h3><a href="#">Japon</a></h3></li>
            <li><h3><a href="#">Brésil</a></h3></li>
            <li><h3><a href="#">Canada</a></h3></li>
        </ul>
    </section>

    <article class="banner full-bleed">
        <h2>L’esprit du club de voyage</h2>
        <p>Voyager librement, selon vos envies, vos idées et vos passions.</p>
        <a href="#">Rejoignez-nous</a>
    </article>

    <section class="cartes full-bleed">
        <h2>Destinations à contre-courant</h2>
        <p>L’anti-tendance</p>

        <div class="grille">
            <?php
            // Définir les catégories que vous souhaitez afficher
            $categories = array(
                'aventure',      // Slug de la catégorie 1
                'croisiere',     // Slug de la catégorie 2
                'culturel',      // Slug de la catégorie 3
                'economique',    // Slug de la catégorie 4
                'pleine-nature'  // Slug de la catégorie 5
            );

            // Itérer sur chaque catégorie
            foreach ($categories as $category_slug) {
                // Obtenir la catégorie par slug
                $category = get_category_by_slug($category_slug);
                if ($category) {
                    // Obtenir une seule publication de la catégorie
                    $args = array(
                        'category' => $category->term_id,
                        'posts_per_page' => 1, // Limiter à 1 publication par catégorie
                    );
                    $query = new WP_Query($args);

                    // Vérifier s'il y a des publications
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post(); ?>
                            <article class="carte">
                                <header>
                                    <?php if (has_post_thumbnail()) { ?>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    <?php } else { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Imagen por defecto"> <!-- Cambia esto por una imagen por defecto -->
                                    <?php } ?>
                                    <h3><?php the_title(); ?></h3>
                                </header>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p> <!-- Limitar à 20 mots -->
                                <a href="<?php the_permalink(); ?>">Découvrir</a>
                            </article>
                            <?php
                        }
                    } else {
                        // Message si aucune publication n'est trouvée dans la catégorie
                        echo '<p>Aucune publication trouvée dans cette catégorie.</p>';
                    }
                    // Réinitialiser la requête
                    wp_reset_postdata();
                }
            }
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>