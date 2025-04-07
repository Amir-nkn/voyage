<?php get_header(); ?>

<?php
if (!have_posts()) {
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    get_header();
    include(get_template_directory() . '/gabarits/404.php');
    get_footer();
    exit;
}
?>



<main class="recherche">
  <section class="recherche__contenu">
    <?php
    if (!have_posts()) {
        echo '<div class="recherche__aucun">Aucun résultat trouvé</div>';
        return;
    }
    $total_results = $wp_query->found_posts;
    $search_query = get_search_query();
    ?>

    <h2 class="recherche__titre">Résultats de recherche pour : "<?php echo esc_html($search_query); ?>"</h2>
    <p class="recherche__sous-titre"><?php echo $total_results; ?> résultat(s) trouvé(s)</p>

    <div class="recherche__grille">
      <?php while (have_posts()) : the_post(); ?>

        <?php if (in_category('galerie')) :
          $gallery = get_post_gallery(get_the_ID(), false);
          if ($gallery) :
              $image_ids = explode(',', $gallery['ids']);
              foreach ($image_ids as $image_id) : ?>
                  <article class="recherche__galerie">
                      <img src="<?php echo wp_get_attachment_url($image_id); ?>" alt="Gallery Image">
                  </article>
        <?php endforeach; endif; ?>

        <?php else : ?>
          <article class="recherche__article">
            <?php if (has_post_thumbnail()) : ?>
              <img class="recherche__image" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <h5 class="recherche__titre-article"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p class="recherche__texte"><?php echo wp_trim_words(get_the_excerpt(), 25, " ... "); ?></p>
          </article>
        <?php endif; ?>

      <?php endwhile; ?>
    </div>

    <nav class="recherche__pagination">
      <?php the_posts_pagination([
          'prev_text' => 'Précédent',
          'next_text' => 'Suivant',
          'mid_size'  => 2,
      ]); ?>
    </nav>
  </section>
</main>

<?php get_footer(); ?>
