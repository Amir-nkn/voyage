<?php
// Section Hero
function theme_tp_customize_register($wp_customize) {
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Hero', 'theme_tp'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_auteur', array(
   'default' => __("Nom de l'auteur", 'theme_tp'),

        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_telephone', array(
        'default' => __('000-000-0000', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('hero_telephone', array(
        'label' => __('Téléphone', 'theme_tp'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Image de fond', 'theme_tp'),
        'section' => 'hero_section',
    )));

    $wp_customize->add_setting('hero_couleur', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Couleur du texte', 'theme_tp'),
        'section' => 'hero_section',
    )));

// === Section Footer (si pas déjà créée) ===
$wp_customize->add_section('footer_section', array(
    'title' => __('Pied de page', 'theme_tp'),
    'priority' => 40,
));

// === Email ===
$wp_customize->add_setting('footer_email', array(
    'default' => 'info@mondovoyages.com',
    'sanitize_callback' => 'sanitize_email',
));
$wp_customize->add_control('footer_email', array(
    'label' => __('Adresse courriel', 'theme_tp'),
    'section' => 'footer_section',
    'type' => 'text',
));

// === Téléphone ===
$wp_customize->add_setting('footer_phone', array(
    'default' => '+1 (514) 254-7131',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('footer_phone', array(
    'label' => __('Numéro de téléphone', 'theme_tp'),
    'section' => 'footer_section',
    'type' => 'text',
));

// === Adresse ===
$wp_customize->add_setting('footer_address', array(
    'default' => '3800, rue Sherbrooke, Montreal',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('footer_address', array(
    'label' => __('Adresse postale', 'theme_tp'),
    'section' => 'footer_section',
    'type' => 'text',
));

$wp_customize->add_setting('footer_texte_personnalise', array(
    'default' => '© ' . date('Y') . ' Mondo Voyages - Tous droits réservés.',
    'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('footer_texte_personnalise', array(
    'label' => __('Texte personnalisé du bas de page', 'theme_tp'),
    'section' => 'footer_section', 
    'type' => 'text'
));

}
add_action('customize_register', 'theme_tp_customize_register');


function erreur_404_customizer($wp_customize) {
    $wp_customize->add_section('section_404', array(
        'title' => __('Page 404', 'theme_tp'),
        'priority' => 30,
    ));

    //  Image de fond
    $wp_customize->add_setting('erreur_404_image', array(
        'default' => get_template_directory_uri() . '/images/404-default.jpg',
        'sanitize_callback' => 'esc_url'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_404_image', array(
        'label' => __('Image de fond', 'theme_tp'),
        'section' => 'section_404',
        'settings' => 'erreur_404_image',
    )));

    //  Titre
    $wp_customize->add_setting('erreur_404_titre', array(
        'default' => "Oops, vous avez échoué sur l'île 404 !",
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('erreur_404_titre', array(
        'label' => __('Titre', 'theme_tp'),
        'section' => 'section_404',
        'type' => 'text',
    ));

    //  Message
    $wp_customize->add_setting('erreur_404_message', array(
        'default' => "Pas de panique, cette page n'existe pas mais vous pouvez revenir à l'accueil !",
        'sanitize_callback' => 'sanitize_textarea_field'
    ));
    $wp_customize->add_control('erreur_404_message', array(
        'label' => __('Message', 'theme_tp'),
        'section' => 'section_404',
        'type' => 'textarea',
    ));

    //  Couleur du bouton
    $wp_customize->add_setting('erreur_404_couleur_bouton', array(
        'default' => '#ffd700',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control('erreur_404_couleur_bouton', array(
        'label' => __('Couleur du bouton', 'theme_tp'),
        'section' => 'section_404',
        'type' => 'color',
    ));

    //  Couleur de fond du champ recherche
    $wp_customize->add_setting('erreur_404_couleur_input', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control('erreur_404_couleur_input', array(
        'label' => __('Couleur du champ de recherche', 'theme_tp'),
        'section' => 'section_404',
        'type' => 'color',
    ));
}
add_action('customize_register', 'erreur_404_customizer');
