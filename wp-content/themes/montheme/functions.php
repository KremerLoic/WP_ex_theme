<?php

//include 'inc/addPostType.php';
//include 'inc/widgets.php';
/*
 * Signale à WordPress que le thème possède des menus
 */
register_nav_menus(array(
    'main-menu' => __('Menu primaire', 'menu-primaire')
));
if (!function_exists('base_theme_enqueue_styles')) {
    /**
     * Enqueue scripts
     *
     * @param string $handle Script name
     * @param string $src Script url
     * @param array $deps (optional) Array of script names on which this script depends
     * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
     * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
     */
    function base_theme_enqueue_styles()
    {
        /*
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/vendor/jquery/jquery-2.2.4.js', array(), false, true);
        wp_enqueue_script('boostrap-js', get_stylesheet_directory_uri().'/vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js', array('jquery'), false, true);
        */
        wp_enqueue_script('mainJs', get_stylesheet_directory_uri().'/js/main.js', array('boostrap-js'), false, true);
        //wp_enqueue_style('boostrap-css', get_stylesheet_directory_uri() . '/vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css');
        wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.min.css');
    }
    add_action('wp_enqueue_scripts', 'base_theme_enqueue_styles');
}
function wp_base_theme_theme_setup(){
    /*
     * Signale à WordPress que votre theme possède des traductions
     */
    load_theme_textdomain( 'wp-theme-base-translate', get_template_directory() . '/languages' );
    /*
     * Ajout du champs "Image à la Une" dans les articles
     */
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wp_base_theme_theme_setup' );



// Ajouter des nouveaux types de contenu (article, page, etc...)

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'produits',
        array(
            'labels' => array(
                'name' => __( 'Produits' ),
                'singular_name' => __( 'Produits' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}

// Signaler à WordPress que vous avec des menus

register_nav_menus(array(
    'main-menu' => __('Menu primaire', 'menu-primaire')
));

// Ajouter des fichiers Javascript et CSS


function base_theme_enqueue_styles()
{

    wp_enqueue_script('mainJs', get_stylesheet_directory_uri().'/js/main.js', array('boostrap-js'), false, true);

    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.min.css');
}

add_action('wp_enqueue_scripts', 'base_theme_enqueue_styles');



// Ajouter dans le back-office la possibilité d'ajouter une image à vos pages

add_theme_support( 'post-thumbnails' );


// Signaler à WordPress à que votre thème possède des widget

function wp_base_theme_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Bloc de texte', 'wp-theme-base-translate' ),
        'id'            => 'text-bloc',
        'description'   => __( 'Ajout d\'un bloc texte ou autre sur le site', 'wp-theme-base-translate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wp_base_theme_widgets_init' );

register_nav_menus(
    array(
        'main-menu' => 'Description du menu',
        'footer-menu' => 'Description du menu footer',
    )
);

// Version bootstrap
function add_additional_class_on_li($classes, $item, $args)
{
    $classes[] = 'nav-item';
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 0, 3);

function add_class_a($atts)
{
    $atts['class'] = "nav-link";
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_class_a', 100, 1);






