<footer id="footer" class="footer">
    <!-- Begin Footer
    ================================================== -->
    <footer id="colophon" class="site-footer">
        <div class="footer-container">
            <div class="footer-column">
                <h2>Nhóm 7 CMS</h2>
                <!-- Begin Logo -->
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                if ($custom_logo_id) {
                    $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');
                    $logo_url = $logo_url[0];

                    echo ' <img src=' . esc_url($logo_url) . ' alt="logo">';
                } ?>
                <!-- End Logo -->
            </div>
            <div class="footer-column">
                <h2>Explore </h2>
                <!-- Begin Menu -->
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'explore_footer',
                    'fallback_cb' => false,
                    'depth' => 1,
                ));
                ?>
                <!-- End Menu -->
            </div>
            <div class="footer-column">
                <h2>Learn </h2>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'learn_footer',
                    'fallback_cb' => false,
                    'depth' => 1,
                ));
                ?>
                <!-- End Menu -->
            </div>
        </div>
        <div class="site-info">
            <p>&copy; <?php echo date('Y'); ?> Your Site Name. All Rights Reserved.</p>
        </div>
        <!-- End Footer
    ================================================== -->
    </footer>

    <?php wp_footer(); ?>
    </body>

    </html>