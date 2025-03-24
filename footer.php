<footer class="footer">

    <!-- Menu externe -->
    <?php wp_nav_menu(array(
        "menu" => "externe",
        "container" => "nav",
        "container_class" => "footer-nav"
    )); ?>

    <div class="footer-container">

        <!-- Section contact -->
        <section class="footer-contact">
            <h2 class="footer-title">Contact</h2>
            <p class="footer-email">📧 <a href="mailto:info@mondovoyages.com">info@mondovoyages.com</a></p>
            <p class="footer-phone">📞 <a href="tel:+15142547131">+1 (514) 254-7131</a></p>
            <p class="footer-address">📍 3800, rue Sherbrooke, Montreal</p>
        </section>

        <!-- Section horaire -->
        <section class="footer-horaire">
            <h2 class="footer-title">Horaire</h2>
            <p class="footer-jour">Lundi au Vendredi</p>
            <p class="footer-heure">8h00 - 17h00</p>
        </section>

        <!-- Section réseaux sociaux -->
        <section class="footer-social">
            <h2 class="footer-title">Suivez-nous</h2>
            <?php get_template_part('gabarits/icone-sociaux'); ?>
        </section>
    </div>

    <!-- Formulaire de recherche -->
    <div class="footer-search">
        <?php get_search_form(); ?>
    </div>

    <!-- Bas de page -->
    <div class="footer-bottom">
        <p>© <?php echo date("Y"); ?> Mondo Voyages - Tous droits réservés.</p>
    </div>

    <?php wp_footer(); ?>
</footer>
