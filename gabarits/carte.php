
<article class="carte">
    <?php if (has_post_thumbnail()) : ?>
        <div class="carte__image">
            <?php the_post_thumbnail('thumbnail'); ?>
        </div>
    <?php endif; ?>

    <div class="carte__contenu">
        <h2 class="carte__titre"><?php the_title(); ?></h2>
        <p class="carte__description"><?php echo wp_trim_words(get_the_excerpt(), 25, " ... "); ?></p>

        <?php if (function_exists('get_field')) : ?>
            <p><strong>Température maximum:</strong> <?php the_field('temperature_maximum'); ?> °C</p>
            <p><strong>Température minimum:</strong> <?php the_field('temperature_minimum'); ?> °C</p>
        <?php endif; ?>

   
        <a href="<?php the_permalink(); ?>" class="carte__bouton">Lire la suite</a>

    </div>
</article>
