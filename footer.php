<footer class="pied-de-page">
    <nav class="pied-de-page__menu">
        <h2>Information additionnelle</h2>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => false,
            'menu_class' => 'footer-menu',
        ));
        ?>
    </nav>


    
    <div class="pied-de-page__social">
        <h2>Coordonnées du club </h2>
        <ul>
            <li>Notre adresse: 123 Av. M. Beauregard</li>
            <li>Téléphone: 01 800 0000</li>
            <li>Courriel: info@clubdevoyage.com</li>
        </ul>
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
            <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
            <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
        </ul>
    </div>
    
    <?php wp_footer(); ?>
</footer>
