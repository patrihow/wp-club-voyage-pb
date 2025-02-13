
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
    <div class="contact">
    <p><a href="https://github.com/patrihow">github.com/patrihow</a></p>
        <p>Conçue et codée avec ❤️ par @patrihow.</p>
        <p>Patricia Bravo - Étudiante en développement web et designer spécialisée en création de sites sur mesure.</p>
        <p>© 2025 Club de voyage. Tous droits réservés.</p>
    </div>
    <div class="social-media">
        <h2>Suivez-nous</h2>
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
        </ul>
    </div>
    <?php wp_footer(); ?>
</footer>


