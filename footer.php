<footer class="pied-de-page full-bleed">
    <nav>
        <h2>Information additionnelle</h2>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => false,
        ));
        ?>
    </nav>
    
    <div class="social-media">
        <h2>Suivez-nous</h2>
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
            <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
            <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
        </ul>
    </div>
    <?php wp_footer(); ?>
</footer>