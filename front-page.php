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
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="carte">
                    <header>
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="image-mise-en-avant"> <!-- Image mise en avant -->
                        <?php } ?>
                        <h3><?php the_title(); ?></h3>
                    </header>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 25, " ... "); ?></p> 
                    <a href="<?php the_permalink(); ?>">Découvrir</a>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    
    <!-- Galerie des images -->
    
<section class="cartes full-bleed">
    <h2>Notre Galerie</h2>
    <p>En couple ou en famille ? Pour un trekking ou un safari ? Plutôt culture ou aventure ? Découvrez plus de 8000 idées de voyage sélectionnées par nos agences locales spécialisées.</p>
    <div class="grille"> 
    <?php
    $galerie_id = 83; 

    
    $galerie_page = get_post($galerie_id); 

    if ($galerie_page) {
        
        
        echo apply_filters('the_content', $galerie_page->post_content);
    } else {
        echo '<h2>Galería no encontrada</h2>'; 
    }
    ?>
    </div>
</section>
</section>

</main>

<?php get_footer(); ?>