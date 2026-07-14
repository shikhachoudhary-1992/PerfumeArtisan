<?php
function ambrin_perfume_setup() {
    // वर्डप्रेस फीचर्स का सपोर्ट जोड़ें
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    
    // WooCommerce सपोर्ट चालू करें
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    // मेनू रजिस्टर करें
    register_nav_menus( array(
        'main-menu' => esc_html__( 'Primary Menu', 'ambrin' ),
    ) );
}
add_action( 'after_setup_theme', 'ambrin_perfume_setup' );

// CSS और JS फाइलों को सही तरीके से Enqueue करना
function ambrin_perfume_scripts() {
    // All CSS
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.0.0' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.0.0' );
    wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), '1.0.0' );
    wp_enqueue_style( 'choosen', get_template_directory_uri() . '/assets/css/choosen.css', array(), '1.0.0' );
    wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css', array(), '2.0.0' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0' );
    wp_enqueue_style( 'simple-line-icons', get_template_directory_uri() . '/assets/css/simple-line-icons.css', array(), '1.0.0' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0' );
    wp_enqueue_style( 'ambrin-style', get_stylesheet_uri(), array(), '1.0.0' ); // style.css
    wp_enqueue_style( 'ambrin-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0' );

    // All JS Scripts
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array(), '2.8.3', false );
    
    // वर्डप्रेस का डिफ़ॉल्ट jQuery इस्तेमाल करें
    wp_enqueue_script( 'jquery' );
    
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.0.0', true );
    wp_enqueue_script( 'ambrin-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'ambrin-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'ambrin_perfume_scripts' );

// AJAX के जरिए मिनी कार्ट की गिनती को लाइव अपडेट (Fragments) करने के लिए
function ambrin_woocommerce_header_add_to_cart_fragment( $fragments ) {
    ob_start();
    ?>
    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="wp-custom-cart-count">
        <i class="ion-bag"></i>
        <span><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
    </a>
    <?php
    $fragments['a.wp-custom-cart-count'] = ob_get_clean();
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'ambrin_woocommerce_header_add_to_cart_fragment' );
