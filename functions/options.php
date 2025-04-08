
<?php
function mon_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'mon_theme_supports');

function theme_tp_enqueue_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');
    wp_enqueue_style(
        'main-styles',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );

    wp_enqueue_script(
        'destination_restapi',
        get_template_directory_uri() . '/js/destination.js',
        array(),
        filemtime(get_template_directory() . '/js/destination.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');

function modifie_requete_principal($query)
{
    if ($query->is_home() && $query->is_main_query() && !is_admin()) {
        $query->set('category_name', 'populaire');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'modifie_requete_principal');


function ajouter_prix_a_api_rest() {
    register_rest_field('post', 'prix', array(
        'get_callback' => function ($post_arr) {
            return get_field('prix', $post_arr['id']); 
        },
        'schema' => null,
    ));
}
add_action('rest_api_init', 'ajouter_prix_a_api_rest');







register_nav_menus(array(
    'menu_erreur' => __('Menu page 404'),
    'menu_footer' => __('Menu footer'),
));
  