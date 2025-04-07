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
            <p class="footer-email">
    📧 <a href="mailto:<?php echo esc_attr(get_theme_mod('footer_email')); ?>">
        <?php echo esc_html(get_theme_mod('footer_email')); ?>
    </a>
</p>

<p class="footer-phone">
    📞 <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', get_theme_mod('footer_phone')); ?>">
        <?php echo esc_html(get_theme_mod('footer_phone')); ?>
    </a>
</p>

<p class="footer-address">
    📍 <?php echo esc_html(get_theme_mod('footer_address')); ?>
</p>

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
    <p><?php echo esc_html(get_theme_mod('footer_texte_personnalise')); ?></p>

    </div>

    <?php wp_footer(); ?>
</footer>
