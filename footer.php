<footer class="pied-de-page">
    <div class="pied-de-page__menu">
        <h2>Informations supplémentaires</h2>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => false,
            'menu_class' => 'footer-menu',
        ));
        ?>
    </div>

    <div class="pied-de-page__contact">
        <h2>Coordonnées du club</h2>
        <p>Notre adresse : 123 Av. M. Beauregard</p>
        <p>Téléphone : 01 800 0000</p>
        <p>Courriel : <a href="mailto:info@clubdevoyage.com">info@clubdevoyage.com</a></p>
    </div>

    <div class="pied-de-page__social">
        <h2>Réseaux sociaux</h2>
        <div class="pied-de-page__social-links">
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
    </div>



    <?php wp_footer(); ?>
</footer>