<?php
/**
 * The template for the sidebar containing the shop widget area
 *
 * @package Think Ecommerce
 */
?>

<?php if( is_active_sidebar( 'think-ecommerce-sidebar-shop' ) ): ?>
        <?php dynamic_sidebar( 'think-ecommerce-sidebar-shop' ); ?>
<?php endif;