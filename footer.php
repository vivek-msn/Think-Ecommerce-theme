<?php
/**
 * The Footer template
 *
 * @package Think_Ecommerce
 */

?>

<footer id="colophon" class="site-footer">
    <!-- Footer Widgets -->
    <?php if ( is_active_sidebar( 'think-ecommerce-sidebar-footer1' ) 
        || is_active_sidebar( 'think-ecommerce-sidebar-footer2' ) 
        || is_active_sidebar( 'think-ecommerce-sidebar-footer3' ) ) : ?>
        
        <section class="footer-widgets py-5">
            <div class="container">
                <div class="row">
                    <?php for ( $i = 1; $i <= 3; $i++ ) : ?>
                        <?php if ( is_active_sidebar( "think-ecommerce-sidebar-footer{$i}" ) ) : ?>
                            <div class="col-md-4 col-12 mb-4 mb-md-0">
                                <?php dynamic_sidebar( "think-ecommerce-sidebar-footer{$i}" ); ?>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </section>

    <?php endif; ?>

    <!-- Copyright Section -->
    <section class="copyright border-top py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 text-center text-md-start mb-2 mb-md-0">
                    <p class="mb-0">
                        <?php
                        echo esc_html(
                            get_theme_mod(
                                'set_copyright',
                                __( '© Think Ecommerce. All Rights Reserved.', 'think-ecommerce' )
                            )
                        );
                        ?>
                    </p>
                </div>
                <div class="col-12 col-md-6 text-center text-md-end">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'think_ecommerce_footer_menu',
                            'container'      => false,
                            'fallback_cb'    => false,
                            'menu_class'     => 'footer-menu list-inline mb-0',
                            'depth'          => 1,
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>