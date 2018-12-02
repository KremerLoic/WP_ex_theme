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