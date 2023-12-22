<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package think ecommerce
 */
?>

<?php if( is_active_sidebar( 'think-ecommerce-siderbar-1' ) ): ?>
    <aside class="col-lg-3 col-md-4 col-12 h-100">
        <?php dynamic_sidebar( 'think-ecommerce-siderbar-1' ); ?>
    </aside>   
<?php endif;