<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Header Start -->
    <header class="header-area">
        <div class="header-top ptb-10 ptb-md-20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="header-top-links text-center text-lg-left">
                            <ul>
                                <!-- करेंसी और लैंग्वेज के लिए आमतौर पर Polylang या WPML प्लगइन्स शॉर्टकोड या हुक्स का उपयोग करते हैं -->
                                <li><a href="#">USD</a>
                                    <ul class="dropdown-list-menu">
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">GBP</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">English</a>
                                    <ul class="dropdown-list-menu">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">German</a></li>
                                        <li><a href="#">Italian</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="header-top-links text-center text-lg-right">
                            <ul>
                                <?php if ( is_user_logged_in() ) : ?>
                                    <li><a href="<?php echo esc_url( wc_get_account_endpoint_url( 'dashboard' ) ); ?>">My Account</a></li>
                                    <li><a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>">Logout</a></li>
                                <?php else : ?>
                                    <li><a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>">Sign In / Register</a></li>
                                <?php endif; ?>
                                
                                <?php if ( function_exists( 'YITH_WCWL' ) ) : ?>
                                    <li><a href="<?php echo esc_url( YITH_WCWL()->get_wishlist_url() ); ?>">Wishlist</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom menu-sticky ptb-20 ptb-md-20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="logo">
                            <?php 
                            if ( has_custom_logo() ) {
                                the_custom_logo();
                            } else {
                                echo '<a href="' . esc_url( home_url( '/' ) ) . '"><h2>' . get_bloginfo( 'name' ) . '</h2></a>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="main-menu text-center">
                            <nav>
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'main-menu',
                                    'container'      => false,
                                    'fallback_cb'    => false,
                                    'items_wrap'     => '<ul>%3$s</ul>',
                                ) );
                                ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-8 col-6">
                        <div class="header-cart-search text-right">
                            <div class="header-search">
                                <a href="#"><i class="ion-ios-search-strong"></i></a>
                                <div class="search-box">
                                    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <input type="text" name="s" placeholder="Search entire store here..." value="<?php echo get_search_query(); ?>">
                                        <input type="hidden" name="post_type" value="product" />
                                        <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                </div>
                            </div>
                            
                            <!-- WooCommerce Dynamic Mini Cart -->
                            <div class="header-cart position-relative">
                                <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="wp-custom-cart-count">
                                        <i class="ion-bag"></i>
                                        <span><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
                                    </a>
                                    <div class="shopping-cart-content widget_shopping_cart_content">
                                        <?php woocommerce_mini_cart(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
