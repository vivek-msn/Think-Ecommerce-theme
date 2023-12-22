<?php
/**
 * The template for displaying page results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Think Ecommerce
 */
?>
<article class="col">
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
    <?php
        if( comments_open() || get_comments_number() ):
            comments_template();
        endif;
    ?>
</article>