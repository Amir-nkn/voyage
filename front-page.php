<?php get_header();?>
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
                <div class="hero__icone-app">
                    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20"
                        alt="logo facebook">
                    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20"
                        alt="logo linkedin">
                    <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20"
                        alt="logo paypal">
                    <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20"
                        alt="logo stackoverflow">
                </div>
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
        <section class="promotion">
            <div class="carte carte--grande">
                <div class="carte__image">
                    <img src="images/pexels1.jpg" alt="Image de voyage">
                </div>
                <div class="carte__image">
                    <img src="images/pexels2.jpg" alt="Image de voyage">
                </div>
                <div class="carte__image">
                    <img src="images/pexels3.jpg" alt="Image de voyage">
                </div>
                <div class="carte__image">
                    <img src="images/pexels4.jpg" alt="Image de voyage">
                </div>
                <div class="carte__image">
                    <img src="images/pexels5.jpg" alt="Image de voyage">
                </div>
                <div class="carte__image">
                    <img src="images/pexels6.jpg" alt="Image de voyage">
                </div>
                <div class="carte__image">
                    <img src="images/pexels7.jpg" alt="Image de voyage">
                </div>
                <div class="carte__image">
                    <img src="images/pexels8.jpg" alt="Image de voyage">
                </div>
                <div class="carte__image">
                    <img src="images/pexels9.jpg" alt="Image de voyage">
                </div>
                <div class="carte__image">
                    <img src="images/pexels10.jpg" alt="Image de voyage">
                </div>
                <div class="carte__contenu">
                    <h2 class="carte__titre">Destination de rêve</h2>
                    <p class="carte__description">
                        Découvrez des endroits magnifiques à travers le monde.
                    </p>
                    <button class="carte__bouton carte__bouton--actif">Réserver</button>
                </div>
            </div>
        </section>

        <section class="populaire">
        <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <div><?php echo wp_trim_words(get_the_excerpt(), 25, "..."); ?></div>
    </article>
       <?php endwhile; endif; ?>
        </div>
        </section>
    </main>
    <?php get_footer() ?>
</body>

</html>