<?php get_header(); ?>

<main class="single-container">
    <article class="single-article">
        <h1 class="single-title"><?php the_title(); ?></h1>
        
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('large'); ?>" class="single-image" alt="<?php the_title(); ?>">
        <?php endif; ?>
        
        <div class="single-content">
            <?php the_content(); ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>
