<?php get_header(); ?>

<main class="contenu">
    <?php
    
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article class="destination">
                <header>
                    <?php if (has_post_thumbnail()) { ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="image-mise-en-avant"> 
                    <?php } ?>
                    <h1><?php the_title(); ?></h1> 
                </header>
                <div class="description">
                    <?php the_content(); ?> 
                </div>

                <?php
                
                if (have_rows('galerie_images')) : ?>
                    <div class="galerie">
                        <h2>Galerie d'images</h2>
                        <div class="grille-galerie">
                            <?php while (have_rows('galerie_images')) : the_row(); ?>
                                <?php $image = get_sub_field('image'); ?>
                                <div class="image-galerie">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </article>
        <?php endwhile;
    else : ?>
        <p><?php _e('A ucune destination trouvée.', 'textdomain'); ?></p> 
    <?php endif; ?>
</main>

<?php get_footer(); ?>