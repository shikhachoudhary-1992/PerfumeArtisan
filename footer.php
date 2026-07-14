<footer class="luxury-footer">
    <div class="container">

        <!-- Top Area -->
        <div class="footer-top">
            <div class="row align-items-center gy-4">

                <!-- Logo (Dynamic Custom Logo) -->
                <div class="col-lg-3">
                    <div class="footer-logo">
                        <?php 
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else {
                            ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo/logo.png" alt="<?php bloginfo( 'name' ); ?>">
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <!-- Newsletter (Dynamic Form Placeholder) -->
                <div class="col-lg-6">
                    <div class="newsletter-box">
                        <div class="newsletter-head">
                            <h5><?php esc_html_e( 'Subscribe to Newsletter', 'ambrin' ); ?></h5>
                            <span><?php esc_html_e( 'Receive beauty drops & offers', 'ambrin' ); ?></span>
                        </div>
                        <form class="newsletter-form" action="#" method="post">
                            <input type="email" placeholder="<?php esc_attr_e( 'Your premium email address', 'ambrin' ); ?>" required>
                            <button type="submit"><i class="bi bi-send"></i></button>
                        </form>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="col-lg-3">
                    <div class="social-area">
                        <span><?php esc_html_e( 'FOLLOW US', 'ambrin' ); ?></span>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Middle Area -->
        <div class="footer-middle">
            <div class="row gy-5">

                <!-- Contact Info (Dynamic Widget) -->
                <div class="col-lg-4 col-md-6">
                    <?php if ( is_active_sidebar( 'footer-contact' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-contact' ); ?>
                    <?php else : ?>
                        <!-- Fallback static content if widget is empty -->
                        <div class="footer-widget">
                            <h4><?php esc_html_e( 'CONTACT INFO', 'ambrin' ); ?></h4>
                            <div class="contact-item">
                                <i class="bi bi-geo-alt"></i>
                                <div>
                                    <h6><?php esc_html_e( 'ADDRESS', 'ambrin' ); ?></h6>
                                    <p>2168 Ambrin Perfume, United Arab Emirates, UAE</p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Account (Dynamic WP Menu) -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h4><?php esc_html_e( 'ACCOUNT', 'ambrin' ); ?></h4>
                        <?php 
                        if ( has_nav_menu( 'footer_account_menu' ) ) {
                            wp_nav_menu( array(
                                'theme_location' => 'footer_account_menu',
                                'container'      => false,
                                'menu_class'     => '',
                                'fallback_cb'    => false,
                            ) );
                        } else {
                            echo '<ul><li><a href="#">Assign Account Menu</a></li></ul>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Information (Dynamic WP Menu) -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h4><?php esc_html_e( 'INFORMATION', 'ambrin' ); ?></h4>
                        <?php 
                        if ( has_nav_menu( 'footer_info_menu' ) ) {
                            wp_nav_menu( array(
                                'theme_location' => 'footer_info_menu',
                                'container'      => false,
                                'menu_class'     => '',
                                'fallback_cb'    => false,
                            ) );
                        } else {
                            echo '<ul><li><a href="#">Assign Info Menu</a></li></ul>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Payments (Dynamic Widget) -->
                <div class="col-lg-4 col-md-6">
                    <?php if ( is_active_sidebar( 'footer-payment' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-payment' ); ?>
                    <?php else : ?>
                        <div class="footer-widget">
                            <h4><?php esc_html_e( 'PAYMENT METHODS', 'ambrin' ); ?></h4>
                            <div class="payment-icons">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/payment.png" alt="Payments">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>

        <!-- Bottom -->
        <div class="footer-bottom">
            <div class="row align-items-center gy-3">
                <div class="col-md-6">
                    <p>© <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'ambrin' ); ?></p>
                </div>
                <div class="col-md-6 text-md-end">
                    <?php if ( get_privacy_policy_url() ) : ?>
                        <a href="<?php echo esc_url( get_privacy_policy_url() ); ?>"><?php esc_html_e( 'Privacy Policy', 'ambrin' ); ?></a>
                        <span>|</span>
                    <?php endif; ?>
                    <a href="#"><?php esc_html_e( 'Terms & Conditions', 'ambrin' ); ?></a>
                </div>
            </div>
        </div>

    </div>
</footer>

<!-- Quick View Modal Area --> 
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- (आपका पहले वाला Modal का पूरा HTML यहाँ रहेगा बिना किसी बदलाव के) -->
</div> 

<?php wp_footer(); ?>
</body>
</html>
