<?php
// ===== fichier 404.php =====
get_header();

?>
<section class="erreur">
  <div class="erreur__contenu" style="background-image: url('<?php echo esc_url(get_theme_mod('erreur_404_image')); ?>');">

    <h1 class="erreur__titre">
      <?php echo esc_html(get_theme_mod('erreur_404_titre', "Oops, vous avez échoué sur l'île 404 !")); ?>
    </h1>

    <p class="erreur__texte">
      <?php echo esc_html(get_theme_mod('erreur_404_message', "Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !")); ?>
    </p>

    <a href="<?php echo esc_url(home_url('/')); ?>" class="erreur__bouton"
       style="background-color:<?php echo get_theme_mod('erreur_404_couleur_bouton'); ?>;">
      Retour à l'accueil
    </a>


    <section class="erreur__destinations">
  <div class="erreur__boutons">

    <?php
    $populaire_query = new WP_Query(array(
        'category_name' => 'populaire',
        'posts_per_page' => 4,
        'orderby' => 'rand'
    ));

    if ($populaire_query->have_posts()) :
        while ($populaire_query->have_posts()) : $populaire_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="erreur__btn">
              <?php the_title(); ?>
            </a>
    <?php endwhile; wp_reset_postdata(); endif; ?>
    
  </div>
</section>


 

    <!-- Champ de recherche -->
    <form action="<?php echo home_url('/'); ?>" class="erreur__form">
      <input type="search" name="s" class="erreur__input" placeholder="Rechercher..."
             style="background-color:<?php echo get_theme_mod('erreur_404_couleur_input'); ?>;">
    </form>

  </div>
</section>

<?php get_footer(); ?>