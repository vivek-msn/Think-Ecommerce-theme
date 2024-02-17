<?php
/**
 * This template for displaying all pages
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Think Ecommerce
 */

get_header(); ?>
        <div class="content-area">
            <main>
                <div class="container">
                    <div class="row">
                        <?php
                            // Load posts loop
                            while( have_posts() ): the_post();
                                get_template_part( 'template-parts/content', 'page' );
                            endwhile;
                        ?>             
                    </div>
                </div>
            </main>
        </div>
<?php get_footer(); ?>        
        
