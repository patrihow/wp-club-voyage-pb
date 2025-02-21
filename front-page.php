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
         <!-- Galerie des images -->
        <p class="contenu__textes">Nos dernières idées de voyages sur-mesure 100 % personnalisables</p>
        <div class="galerie-images">
        <figure class="wp-block-image size-large"><img src="https://gftnth00.mywhc.ca/33w3/wp-content/uploads/2025/02/pexels-suju-28540673-1024x683.jpg" alt="" class="wp-image-186"/></figure>
        <figure class="wp-block-image size-large"><img src="https://gftnth00.mywhc.ca/33w3/wp-content/uploads/2025/02/pexels-suju-28540745-1024x576.jpg" alt="" class="wp-image-187"/></figure>
        <figure class="wp-block-image size-large"><img src="https://gftnth00.mywhc.ca/33w3/wp-content/uploads/2025/02/pexels-iloveswitzerland-58496263-7938506-1024x682.jpg" alt="" class="wp-image-188"/></figure>
        <figure class="wp-block-image size-large"><img src="https://gftnth00.mywhc.ca/33w3/wp-content/uploads/2025/02/pexels-sami-1479628-6094326-819x1024.jpg" alt="" class="wp-image-189"/></figure>
        <figure class="wp-block-image size-large"><img src="https://gftnth00.mywhc.ca/33w3/wp-content/uploads/2025/02/pexels-gropiuslab-6997529-1024x678.jpg" alt="" class="wp-image-183"/></figure>
        <figure class="wp-block-image size-large"><img src="https://gftnth00.mywhc.ca/33w3/wp-content/uploads/2025/02/pexels-duc-tinh-ngo-2147637857-30727627-1024x684.jpg" alt="" class="wp-image-181"/></figure>
        
        </div>
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
    
    
    

</section>

</main>

<?php get_footer(); ?>