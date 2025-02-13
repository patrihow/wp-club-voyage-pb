<?php get_header(); ?>

<main class="contenu">
    <section class="entete">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Hero Club de Voyage">
        <h1 class="entete__titre">
            <span class="entete__titre-main">Explorez</span>
            <span class="entete__titre-sub"> le monde à votre façon</span>
        </h1>
    </section>

    <section class="contenu__liens full-bleed"></section>
    <section class="cartes full-bleed"></section>

    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>