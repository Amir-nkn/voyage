<?php get_header(); ?>
<h1>single</h1>
<main class="single-container">
    <article class="single-article">
        <h1 class="single-title"><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="single-image" alt="<?php the_title(); ?>">
        <?php endif; ?>

        <div class="single-content">
            <?php the_content(); ?>
        </div>

        <?php if (function_exists('get_field')) : ?>
            <div class="single-temperatures">
                <p><strong>Température maximum:</strong> <?php the_field('temperature_maximum'); ?> °C</p>
                <p><strong>Température minimum:</strong> <?php the_field('temperature_minimum'); ?> °C</p>
            </div>
        <?php endif; ?>

        <div class="single-categories">
            <p><strong>Catégories:</strong> <?php the_category(', '); ?></p>
        </div>
    </article>
</main>

<?php get_footer(); ?>
