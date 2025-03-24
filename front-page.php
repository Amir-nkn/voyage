<?php get_header(); ?>

<?php

$hero_auteur = get_theme_mod('hero_auteur', 'Nom de l’auteur');
$hero_telephone = get_theme_mod('hero_telephone', '000-000-0000');
$hero_background = get_theme_mod('hero_background', '');
$hero_couleur = get_theme_mod('hero_couleur', '#000000');
?>

<style>
    .hero__contenu {
        color: <?php echo esc_html($hero_couleur); ?>;
    }
</style>

<section class="hero" style="background-image: url('<?php echo esc_url($hero_background); ?>')">
    <div class="hero__contenu global">
        <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
        <p class="hero__description"><?php bloginfo('description'); ?></p>
        <p class="hero__courriel"><a href="mailto:<?php echo get_bloginfo('admin_email'); ?>"><?php echo get_bloginfo('admin_email'); ?></a></p>
        <p class="hero__adresse">3800, rue Sherbrooke, Montreal</p>
        <p class="hero__auteur">Auteur : <?php echo esc_html($hero_auteur); ?></p>
        <p class="hero__auteur">Téléphone : <?php echo esc_html($hero_telephone); ?></p>
        <section class="hero__icone-app">
        <?php get_template_part('gabarits/icone-sociaux'); ?>
        </section>
    </div>

    <form class="hero__form">
        <div class="form__group">
            <label for="nom" class="form__label">Nom</label>
            <input type="text" id="nom" class="hero__form-input" placeholder="Écrivez votre nom">
        </div>
        <div class="form__group">
            <label for="prenom" class="form__label">Prénom</label>
            <input type="text" id="prenom" class="hero__form-input" placeholder="Écrivez votre prénom">
        </div>
        <div class="form__group">
            <label for="courriel" class="form__label">Courriel</label>
            <input type="email" id="courriel" class="hero__form-input" placeholder="Écrivez votre courriel">
        </div>
        <div class="form__group">
            <label for="telephone" class="form__label">Téléphone</label>
            <input type="tel" id="telephone" class="hero__form-input" placeholder="Écrivez votre téléphone">
        </div>
        <div class="form__group">
            <label for="submit-btn" class="form__label"><br></label>
            <input type="submit" id="submit-btn" value="S'INSCRIRE" class="hero__form-input">
        </div>
    </form>
</section>

<section class="galerie">
    <div class="galerie__contenu global">
        <?php
     
        $galerie_query = new WP_Query(array(
            'category_name' => 'galerie',
            'posts_per_page' => -1
        ));
        if ($galerie_query->have_posts()) :
            while ($galerie_query->have_posts()) : $galerie_query->the_post(); ?>
                <article class="carte">
                    <?php the_content(); ?>
                </article>
        <?php endwhile; endif;
        wp_reset_postdata();
        ?>
    </div>
</section>

<section class="populaire">
    <div class="global">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                if (!in_category('galerie')) :
                    get_template_part('gabarits/carte');
                endif;
            endwhile;
        endif;
        ?>
    </div>
</section>


<section class="destination">
    <div class="global">
        <div class="button__destination">
            <button  data-categorie="2">Aventure</button>
            <button data-categorie="8">Croisire</button>
            <button data-categorie="3">Culturel</button>
        </div>

    <h2>Articles de la catégorie</h2>
    <div class="destination__list"></div>
    </div>
</section>
<?php get_footer(); ?>
</body>
</html>
