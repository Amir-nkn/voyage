<?php get_header(); ?>

<main class="search-main">
    <section class="search-results">
        <?php
        global $wp_query;
        $total_results = $wp_query->found_posts;
        $search_query = get_search_query();
        ?>
        <h2>Résultats de recherche pour : "<?php echo esc_html($search_query); ?>"</h2>
        <p><?php echo $total_results; ?> résultat(s) trouvé(s)</p>

        <?php if (have_posts()) : ?>
            <div class="search-container">
                <?php while (have_posts()) : the_post(); ?>

                    <?php if (in_category('galerie')) : ?>
                        <!-- نمایش گالری -->
                        <?php
                        $gallery = get_post_gallery(get_the_ID(), false);
                        if ($gallery) :
                            $image_ids = explode(',', $gallery['ids']);
                            foreach ($image_ids as $image_id) :
                        ?>
                                <article class="gallery-item">
                                    <img src="<?php echo wp_get_attachment_url($image_id); ?>" alt="Gallery Image">
                                </article>
                        <?php endforeach;
                        endif; ?>

                    <?php elseif (in_category('populaire')) : ?>
                        <!-- نمایش مقالات `populaire` -->
                        <article class="populaire-article">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 25, " ... "); ?></p>
                        </article>

                    <?php else : ?>
                        <!-- نمایش سایر مقالات -->
                        <article class="search-article">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 60); ?></p>
                        </article>
                    <?php endif; ?>

                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <nav class="search-pagination">
                <?php
                the_posts_pagination(array(
                    'prev_text' => 'Précédent',
                    'next_text' => 'Suivant',
                    'mid_size'  => 2,
                ));
                ?>
            </nav>
        <?php else : ?>
            <div class="no-results">
                <h3>Aucun résultat trouvé</h3>
                <p>Désolé, rien ne correspond à "<?php echo esc_html($search_query); ?>". Essayez d’autres mots-clés !</p>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
