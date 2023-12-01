<?php
/**
 * Template for displaying search forms in Think Ecommerce
 *
 * @package Think Ecommerce
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'Think Ecommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'Think Ecommerce' ); ?></span></button>
    <?php if( class_exists( 'WooCommerce' )): ?>
        <input type="hidden" value="product" name="post_type" id="post_type">
    <?php endif; ?>    
</form>