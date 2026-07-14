<!--header area start-->
<header class="header_area">
    <div class="container-fluid p-0">
        <!--header top start--> 
        <div class="header_top">
            <div class="row align-items-center no-gutters">
                <div class="col-lg-6 col-md-6">
                    <div class="welcome_text">
                        <p><strong>FREE SHIPPING:</strong> on Above on 200 AED ❤️</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="right_info text-right">
                        <ul>
                            <li class="language">
                                <a href="#">English <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul> 
                            </li> 
                            <?php if ( is_user_logged_in() ) : ?>
                                <li class="top_links"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">My Account</a></li> 
                                <li class="top_links"><a href="<?php echo site_url('/order-tracking'); ?>">Order Tracking</a></li> 
                                <li class="top_links"><a href="<?php echo wp_logout_url( get_permalink() ); ?>">Sign Out</a></li>
                            <?php else : ?>
                                <li class="top_links"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">Sign In / Register</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>    
        <!--header top end-->
        
        <!--header bottom start--> 
        <div class="header_bottom sticky-header">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo/logo.png" alt="<?php bloginfo( 'name' ); ?>">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="main_menu_inner">
                        <!-- Desktop Dynamic Menu -->
                        <div class="main_menu d-none d-lg-block"> 
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'header-menu',
                                'container'      => false,
                                'menu_class'     => '',
                                'fallback_cb'    => '__return_false'
                            ) );
                            ?>
                        </div>
                    </div>    
                </div>

                <!-- Search, Wishlist and WooCommerce Dynamic Mini-Cart -->
                <div class="col-lg-3">
                    <div class="search_area search_four search_five d-flex align-items-center justify-content-end">
                        <div class="search_dropdown mr-3">
                            <a class="search_button" href="#"><i class="fa fa-search"></i></a>
                        </div>  
                        
                        <div class="wishlist_box mr-3 position-relative">
                            <?php 
                            // Agar YITH Wishlist plugin active hai toh dynamic count show karega
                            $wishlist_count = function_exists( 'YITH_WCWL' ) ? YITH_WCWL()->count_products() : 0;
                            ?>
                            <a class="search_button" href="<?php echo function_exists( 'YITH_WCWL' ) ? esc_url( YITH_WCWL()->get_wishlist_url() ) : '#'; ?>"><i class="fa fa-heart-o"></i></a>
                            <span class="count" id="wishlist-count"><?php echo esc_html( $wishlist_count ); ?></span>
                        </div>                      
                        
                        <div class="shopping_cart cart_four position-relative">
                            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>"><i class="fa fa-shopping-cart"></i></a>
                            <!-- Dynamic Cart Items Count Badge -->
                            <span class="count" id="cart-qty-badge"><?php echo WC()->cart->get_cart_contents_count(); ?></span>

                            <!-- Mini Cart Dropdown Panel (Will update automatically via WordPress AJAX Fragments) -->
                            <div class="mini_cart" id="mini-cart-wrapper">
                                <div class="cart_gallery_scroll" style="max-height: 280px; overflow-y: auto;">
                                    <?php if ( ! WC()->cart->is_empty() ) : ?>
                                        <?php
                                        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                                            $_product = $cart_item['data'];
                                            $product_permalink = $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '';
                                            ?>
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="<?php echo esc_url( $product_permalink ); ?>">
                                                        <?php echo $_product->get_image(); ?>
                                                    </a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="<?php echo esc_url( $product_permalink ); ?>"><?php echo esc_html( $_product->get_name() ); ?></a>
                                                    <span class="quantity">Qty: <?php echo $cart_item['quantity']; ?></span>
                                                    <span class="cart_price"><?php echo WC()->cart->get_product_price( $_product ); ?></span>
                                                    <div class="cart_remove">
                                                        <a href="<?php echo esc_url( wc_get_cart_remove_url( $cart_item_key ) ); ?>" class="remove_from_cart_button" data-cart_item_key="<?php echo esc_attr( $cart_item_key ); ?>"><i class="fa fa-times-circle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php else : ?>
                                        <div class="text-center p-3 text-muted">Your cart is empty.</div>
                                    <?php endif; ?>
                                </div>
                                
                                <?php if ( ! WC()->cart->is_empty() ) : ?>
                                    <div class="total_price d-flex justify-content-between">
                                        <span>Subtotal:</span>
                                        <span class="prices" id="mini-cart-subtotal"><?php wc_cart_totals_subtotal_html(); ?></span>
                                    </div>
                                    <div class="cart_button">
                                        <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>">Check out</a>
                                        <a href="<?php echo esc_url( wc_get_cart_url() ); ?>">View Cart</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header area end-->
