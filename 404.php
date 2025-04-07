<?php get_header(); ?>

<main class="erreur-404 global">
    <h1>😕 Erreur 404 - Page non trouvée</h1>
    <p>🚫 Désolé, la page que vous cherchez n'existe pas ou a été déplacée.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="bouton-retour">🏠 Retour à l'accueil</a>
</main>

<?php get_footer(); ?>
