<?php
/**
 * The template for displaying content results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Think Ecommerce
 */
?>
<article <?php post_class(); ?>>
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <div class="post-thumbnail">
        <?php
        if( has_post_thumbnail() ):
            the_post_thumbnail( 'Think-ecommerce-blog' , array( 'class' => 'img-fluid') );
        endif;
        ?>
    </div>
    <div class="meta">
            <p><?php esc_html_e( 'Published by', 'think-ecommerce' ); ?> <?php the_author_posts_link(); ?> <?php _e( 'on', 'think-ecommerce' ); ?> <?php echo get_the_date(); ?>
            <br/>
            <?php if( has_category() ): ?>
                <?php esc_html_e( 'Categories', 'think-ecommerce'); ?>: <span><?php the_category(''); ?></span>
            <?php endif; ?>
            <?php if( has_tag() ): ?>
                <?php esc_html_e( 'Tags', 'think-ecommerce') ;?>: <span><?php the_tags( '', ', ' ); ?></span>
            <?php endif; ?>
            </p>
    <div>
        <?php the_excerpt(); ?>
    </div>
</article>