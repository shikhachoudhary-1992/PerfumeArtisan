<?php get_header(); ?>

    <!-- Slider Start -->
    <div class="slider-area">
        <div class="slider-active owl-dot-style owl-carousel">
            <!-- स्लाइडर 1 -->
            <div class="single-slider ptb-240 bg-img" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/slider/slider-1.jpg);">
                <div class="container">
                    <div class="slider-content slider-animated-1 text-left">
                        <h1 class="animated">Exclusive <br>Perfume Collection</h1>
                        <p class="animated">New luxury scents arriving every week. Free shipping on orders over $50.</p>
                        <div class="slider-btn mt-30">
                            <a class="animated default-btn" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- स्लाइडर 2 -->
            <div class="single-slider ptb-240 bg-img" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/slider/slider-2.jpg);">
                <div class="container">
                    <div class="slider-content slider-animated-1 text-right">
                        <h1 class="animated">Find Your <br>Signature Scent</h1>
                        <p class="animated">Explore our curated collection of premium fragrances.</p>
                        <div class="slider-btn mt-30">
                            <a class="animated default-btn" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- यहाँ आप अपने WooCommerce के लूप्स या प्रोडक्ट्स दिखा सकते हैं -->
    <main id="primary" class="site-main container mt-5">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endboard;
        endif;
        ?>
    </main>

<?php get_footer(); ?>
