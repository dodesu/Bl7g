<?php
/**
 * Admin Class
 *
 * Handles the Admin side functionality of plugin
 *
 * @package WP News and Scrolling Widgets
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>

<div id="wpbaw_welcome_tabs" class="wpbaw-vtab-cnt wpbaw_welcome_tabs wpbaw-clearfix">

	<!-- <div class="wpbaw-deal-offer-wrap">
		<h3 style="font-weight: bold; font-size: 30px; color:#ffef00; text-align:center; margin: 15px 0 5px 0;">Why Invest Time On Free Version?</h3>

		<h3 style="font-size: 18px; text-align:center; margin:0; color:#fff;">Explore WP Blog and Widgets Pro with Essential Bundle Free for 5 Days.</h3>			

		<div class="wpbaw-deal-free-offer">
			<a href="<?php //echo esc_url( WPBAW_PLUGIN_BUNDLE_LINK ); ?>" target="_blank" class="wpbaw-sf-free-btn"><span class="dashicons dashicons-cart"></span> Try Pro For 5 Days Free</a>
		</div>
	</div> -->

	<div class="wpbaw-black-friday-banner-wrp">
		<a href="<?php echo esc_url( WPBAW_PLUGIN_BUNDLE_LINK ); ?>" target="_blank"><img style="width: 100%;" src="<?php echo esc_url( WPBAW_URL ); ?>assets/images/black-friday-banner.png" alt="black-friday-banner" /></a>
	</div>

	<div style="padding: 30px;border-radius: 10px;border: 1px solid #e5ecf6; text-align: center;">
		<div>
			<div style="font-size: 22px; font-weight:700; margin-bottom: 15px;">Display customizable <span class="wpbaw-sf-blue">blog layouts, vertical scrolling blog widgets </span> in the most engaging and customized way.</div>
			<h5 class="wpbaw-sf-content" style="font-size: 20px; font-weight:700; margin-bottom: 18px;">Experience <span class="wpbaw-sf-blue">8 Layouts</span>, <span class="wpbaw-sf-blue">70+ stunning designs</span>. </h5>
			<h5 class="wpbaw-sf-content" style="font-size: 18px; font-weight:700; margin-bottom: 18px;"><span class="wpbaw-sf-blue">10,000+ </span>websites are using <span class="wpbaw-sf-blue">Blog Builder</span>.</h5>
		</div>
		<div style="margin: 30px 0; text-transform: uppercase; text-align:center;">
			<a href="<?php echo esc_url( $wpbaw_add_link ); ?>" class="wpbaw-sf-btn">Launch Blog With Free Features</a>
		</div>
	</div>	
</div>