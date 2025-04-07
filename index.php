<?php get_header();?>

<h1>index.php</h1>
        <section class="hero">
            <div class="hero__contenu global">
                <h1 class="hero__titre">
                    Partez à l'aventure avec Mondo Voyages !
                </h1>
                <p class="hero__description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                    aspernatur est officiis, mollitia minus asperiores quas libero saepe
                    consequuntur at blanditiis et eligendi, sequi sit quae laboriosam,
                    ex delectus nesciunt.
                </p>
            </div>
            <div class="hero__courriel">
                <a href="mailto:info@cmaisonneuve.qc.ca"><strong>info@cmaisonneuve.qc.ca</strong></a>
                <p><strong>3800, rue Sherbrooke, Montreal</strong></p>
                <p><strong>514-254-7131</strong></p>
            </div>
            <div class="hero__bouton-container">
                <button class="hero__bouton">
                    S'INSCRIRE
                </button>
                <section class="hero__sociaux">
            <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="32" height="32">
            <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="32" height="32">
            <img src="https://s2.svgbox.net/social.svg?ic=wordpress&color=000000" width="32" height="32">
            <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="32" height="32">
            <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="32" height="32">

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
       

        <section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>

                </article>
        <?php endwhile;
        endif; ?>
    </div>
</section>
        <?php get_footer() ?>
    </main>
</body>

</html>