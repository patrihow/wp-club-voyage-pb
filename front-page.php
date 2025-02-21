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
    <div class="galerie-images">
        <?php 
        
        $destination = array(
            "https://gftnth00.mywhc.ca/33w3/wp-content/uploads/2025/02/pexels-suju-28540673-1024x683.jpg",
            "https://gftnth00.mywhc.ca/33w3/wp-content/uploads/2025/02/pexels-suju-28540745-1024x576.jpg",
            "https://gftnth00.mywhc.ca/33w3/wp-content/uploads/2025/02/pexels-iloveswitzerland-58496263-7938506-1024x682.jpg",
            "https://gftnth00.mywhc.ca/33w3/wp-content/uploads/2025/02/pexels-gropiuslab-6997529-1024x678.jpg"
        );

        foreach ($destination as $destination) {
            echo '<figure class="wp-block-image size-large"><img src="' . $destination . '" alt="" class="wp-image"/></figure>';
        }
        ?>

    </div>
    <div class="navigation-galerie">
    <a class="button" href="https://gftnth00.mywhc.ca/33w3/?page_id=162">Voir notre galerie</a>
    </div>

</section>


    <section class="cartes full-bleed">
        <h2>Destinations à contre-courant</h2>
        <p>L’anti-tendance</p>

        <div class="grille">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="carte">
                    <header>
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="image-mise-en-avant"> 
                        <?php } ?>
                        <h3><?php the_title(); ?></h3>
                    </header>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 25, " ... "); ?></p> 
                    <a href="<?php the_permalink(); ?>">Découvrir</a>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    
    <article class="newsletter full-bleed">
        <h2>Inscrivez-vous à notre infolettre</h2>
        <p>Pour recevoir les dernières promotions et nouvelles de notre club de voyage</p>
    <form action="#" method="post">
        <input type="email" placeholder="Votre adresse e-mail" required>
        <button type="submit">S'inscrire</button>
    </form>
    </article>
    
    

</section>

</main>

<?php get_footer(); ?>