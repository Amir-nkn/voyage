<?php get_header(); ?>

<main class="erreur global">
    <h1 class="erreur__titre">😕 Erreur 404 - Page non trouvée</h1>
    <p class="erreur__texte">🚫 Désolé, la page que vous cherchez n'existe pas ou a été déplacée.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="erreur__bouton">🏠 Retour à l'accueil</a>
</main>

<?php get_footer(); ?>
