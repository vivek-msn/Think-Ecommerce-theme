<?php
/*
Template Name: Home Page
*/

get_header(); ?>
<div class="content-area">
<main>
<section class="slider">
<div class="flexslider">
    <ul class="slides">
        <?php
        // Getting data from Customizer to display the Slider section
        for ($i=1; $i < 4; $i++) :
            $slider_page[$i]                  = get_theme_mod( 'set_slider_page' . $i );
            $slider_button_text[$i]           = get_theme_mod( 'set_slider_button_text' . $i );
            $slider_button_url[$i]            = get_theme_mod( 'set_slider_button_url' . $i );                            
        endfor;

        // Custom Loop Starts Here
        $args = array(
            'post_type'         =>'page',
            'posts_per_page'    => 3,
            'post__in'          => $slider_page,
            'orderby'           => 'post__in',
        );

        $slider_loop = new WP_Query( $args );
        $j = 1;
        // Custom Loop
        if( $slider_loop->have_posts() ):
            while( $slider_loop->have_posts() ):
                $slider_loop->the_post();
        ?>
        <li>
            <?php the_post_thumbnail( 'Think-ecommerce',array( 'class' => 'img-fluid ') ); ?>
                <div class="container">
                    <div class="slider-details-container">
                        <div class="slider-title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="slider-description">
                            <div class="subtitle"><?php the_content(); ?></div>
                            <a href="<?php echo $slider_button_url[$j]; ?>" class="link"><?php echo $slider_button_text[$j]; ?></a>
                        </div>
                    </div>
                </div>
        </li>
        <?php
        $j++;
        endwhile;
        wp_reset_postdata();
        endif;
        ?>
        <!-- Custom Loop Ends here----->

    </ul>
</div>
</section>
<section class="popular-products">
    <?php
    $popular_limit        = get_theme_mod( 'set_popular_max_num', 4 );
    $popular_col          = get_theme_mod( 'set_popular_max_col', 4 );
    $arrivals_limit       = get_theme_mod( 'set_new_arrivals_max_num', 4 );
    $arrivals_col         = get_theme_mod( 'set_new_arrivals_max_col', 4 );

    ?>
    <div class="container">
        <div class="section-title">
            <h2><?php echo get_theme_mod( 'set_popular_title', __( 'Popular Products' , 'think-ecommerce' ) ); ?></h2>
        </div>        
        <?php echo do_shortcode( '[products limit=" ' . $popular_limit . ' " columns=" ' . $popular_col . ' " orderby="popularity"]' ); ?>
    </div> 
</section>
<section class="new-arrivals">
    <div class="container">
        <div class="section-title">
            <h2><?php echo get_theme_mod( 'set_new_arrivals_title', __( 'New Arrivals' , 'think-ecommerce' ) ); ?></h2>
        </div>        
        <?php echo do_shortcode( '[products limit=" ' . $arrivals_limit . ' " columns=" ' . $arrivals_col . ' " orderby="date"]' ); ?>
    </div>
</section>
<?php
$showdeal = get_theme_mod('set_deal_show', 0);
$deal = get_theme_mod('set_deal');
$currency = get_woocommerce_currency_symbol();
$regular = get_post_meta($deal, '_regular_price', true);
$sale = get_post_meta($deal, '_sale_price', true);

if ($showdeal == 1 && !empty($deal) && is_numeric($regular) && is_numeric($sale) && $regular != 0) {
    $discount_percentage = absint(100 - (($sale / $regular) * 100));
} else {
    $discount_percentage = 0; // Set a default value or handle the case when calculation is not possible
}
?>

<?php if ($showdeal == 1 && !empty($deal)) : ?>
    <section class="deal-of-the-week">
        <div class="container">
            <div class="section-title">
                <h2><?php echo get_theme_mod( 'set_deal_title', __( 'Deal of the Week' , 'think-ecommerce' ) ); ?></h2>
            </div>
            <div class="row d-flex align-items-center">
                <div class="deal-img col-md-6 col-12 ml-auto text-center">
                    <?php echo get_the_post_thumbnail($deal, 'large', array('class' => 'img-fluid')); ?>
                </div>
                <div class="deal-desc col-md-4 col-12 mr-auto text-center">
                    <p><?php echo esc_html__('Discount:', 'your-text-domain'); ?> <?php echo $discount_percentage; ?>%</p>
                    <!-- Add more deal information here -->
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="lab-blog">
        <div class="container">
            <div class="row">
                <?php

                $args = array(
                    'post_type'             => 'post',
                    'posts_per_page'        => 2,
                );

                $blog_posts = new WP_Query( $args );

                    // If there are any posts
                    if( $blog_posts->have_posts() ):

                        // Load posts loop
                        while( $blog_posts->have_posts() ): $blog_posts->the_post();
                            ?>
                                <article class="col-12 col-md-6">
                                    <?php
                                        if( has_post_thumbnail() ):
                                            the_post_thumbnail( 'Think-ecommerce-blog', array( 'class' => 'img-fluid' ) );
                                        endif;
                                    ?>
                                    <h3>
                                       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="excerpt"><?php the_excerpt(); ?></div>
                                </article>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                ?> 
                    <p><?php _e( 'Nothing to display', 'think-ecommerce'); ?></p> 
                <?php endif; ?>              
            </div>
        </div>
    </section>
</main>
</div>
<?php get_footer(); ?>        