<?php
/**
 * The Footer for our theme
 *
 * This is the template that displays all of the footer section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package think ecommerce
 */
?>
        <footer>
            <section class="footer-widgets">
                <div class="container">
                    <div class="row">Footer Widgets</div>
                </div>
            </section>   
            <section class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="copyright-text col-12 col-md-6">Copyright</div>
                        <nav class="footer-menu col-12 col-md-6 text-start text-md-end">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'think_ecommerce_footer_menu'
                                    )
                                );
                            ?>
                        </nav>
                    </div>
                </div>    
            </section>
        </footer>
    </div>
<?php wp_footer();?>
</body>
</html>