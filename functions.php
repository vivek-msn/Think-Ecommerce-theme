<?php

/**
 * think ecommerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package think ecommerce
 */

/**
 * Register Custom Navigation Walker
 */
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

 /**
* Enqueue scripts and styles.
*/
 function think_ecommerce_scripts(){
    //Bootstrap javascript and CSS files
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/inc/bootstrap.min.js', array('jquery'),'5.3.2', true);
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/inc/bootstrap.min.css', array(), '5.3.2', 'all' );

    // Theme's main stylesheet
    wp_enqueue_style( 'think-ecommerce-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
 }
 add_action( 'wp_enqueue_scripts', 'think_ecommerce_scripts' );

 /**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*/
 function think_ecommerce_config(){

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(
            array(
                'think_ecommerce_main_menu' => 'Think Ecommerce Main Menu',
                'think_ecommerce_footer_menu' => 'Think Ecommerce Footer Menu'
            )
        );

        // This theme is WooCommerce compatible, so we're adding support to WooCommerce
        add_theme_support( 'woocommerce', array(
            'thumbnail_image_width' => 255,
            'single_image_width'    =>255,
            'product_grid'          => array(
                'default_rows'      => 10,
                'min_rows'          => 5,
                'max_rows'          => 10,
                'default_columns'   => 1,
                'min_columns'       => 1,
                'max_columns'       => 1,
            )
        ) );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        if ( ! isset( $content_width ) ) {
            $content_width = 600;
        }
 }
 add_action( 'after_setup_theme', 'think_ecommerce_config', 0 );

 if( class_exists( 'WooCommerce')){
    require get_template_directory() . '/inc/wc-modifications.php';
 }

 add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}