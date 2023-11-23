<?php

/**
 * think ecommerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package think ecommerce
 */

 function think_ecommerce_scripts(){
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/inc/bootstrap.min.js', array('jquery'),'5.3.2', true);
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/inc/bootstrap.min.css', array(), '5.3.2', 'all' );
    wp_enqueue_style( 'think-ecommerce-style', get_stylesheet_uri(), array(), '1.0', 'all' );
 }
 add_action( 'wp_enqueue_scripts', 'think_ecommerce_scripts' );

 function think_ecommerce_config(){
    register_nav_menus(
        array(
            'think_ecommerce_main_menu' => 'Think Ecommerce Main Menu',
            'think_ecommerce_footer_menu' => 'Think Ecommerce Footer Menu'
        )
    );

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
 add_action('after_setup_theme','think_ecommerce_config', 0);