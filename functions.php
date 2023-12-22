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
    require_once get_template_directory() . '/inc/customizer.php';

 /**
* Enqueue scripts and styles.
*/
 function think_ecommerce_scripts(){
    //Bootstrap javascript and CSS files
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/inc/bootstrap.min.js', array('jquery'),'5.3.2', true);
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/inc/bootstrap.min.css', array(), '5.3.2', 'all' );

    // Theme's main stylesheet
    wp_enqueue_style( 'think-ecommerce-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    

    //Bootstrap javascript and CSS files
    wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri().'/inc/flexslider/jquery.flexslider-min.js', array('jquery'),'', true);
    wp_enqueue_style( 'flexslider-css', get_template_directory_uri().'/inc/flexslider/flexslider.css', array(), '', 'all' );
    wp_enqueue_script( 'flexslider-js', get_template_directory_uri().'/inc/flexslider/flexslider.js', array('jquery'),'', true);
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

        add_theme_support( 'custom-logo',array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        )  );

        add_theme_support( 'post-thumbnails');
        add_image_size('Think-ecommerce-blog', 960, 640, array( 'centre', 'centre' ) );
        
        // Add custom image size function declaration.
        add_image_size('Think-ecommerce-slider', 1920, 800, array( 'centre', 'centre' ) );

        if ( ! isset( $content_width ) ) {
            $content_width = 600;
        }

        add_theme_support( 'title-tag' );
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

/**
 * Show cart contents / total Ajax
 */
add_filter( 'think_ecommerce_woocommerce_add_to_cart_fragments', 'think_ecommerce_woocommerce_header_add_to_cart_fragment' );

function think_ecommerce_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count();?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}

add_action( 'widgets_init', 'think_ecommerce_sidebars' );
function think_ecommerce_sidebars(){
    register_sidebar( array(
        'name'          => 'Think Ecommerce Main Sidebar',
        'id'            => 'think-ecommerce-siderbar-1',
        'description'   => 'Drag and drop your widgets here',
        'before_widgets'=>  '<div id="%1$s" class="widget %2$s widget-wrapper">',
        'after_widgets' =>  '</div>',
        'before_title'  =>  '<h4 class="widget-title">',
        'after_title'   =>  '</h4>',
    ) );
}