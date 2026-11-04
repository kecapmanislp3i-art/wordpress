<?php
/**
 * Title: Shipping Features
 * Slug: veloura-lite/shipping-features
 * Categories: featured
 * Block Types: core/group
 */
?>

<!-- wp:group {"align":"full","className":"veloura-shipping-features","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","right":"0","left":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull veloura-shipping-features has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:columns {"align":"full","className":"veloura-shipping-features__columns","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
	<div class="wp-block-columns alignfull veloura-shipping-features__columns">

		<!-- wp:column {"className":"veloura-shipping-feature"} -->
		<div class="wp-block-column veloura-shipping-feature">
			<!-- wp:group {"className":"veloura-shipping-feature__inner","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
			<div class="wp-block-group veloura-shipping-feature__inner">
				<!-- wp:html --><i class="fas fa-truck veloura-shipping-feature__icon" aria-hidden="true"></i><!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"veloura-shipping-feature__title" ,"fontFamily":"veloura-serif"} -->
				<h3 class="wp-block-heading veloura-shipping-feature__title"><?php esc_html_e( 'WORLDWIDE<br>SHIPPING', 'veloura-lite' ); ?></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"veloura-shipping-feature"} -->
		<div class="wp-block-column veloura-shipping-feature">
			<!-- wp:group {"className":"veloura-shipping-feature__inner","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
			<div class="wp-block-group veloura-shipping-feature__inner">
				<!-- wp:html --><i class="fas fa-box-open veloura-shipping-feature__icon" aria-hidden="true"></i><!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"veloura-shipping-feature__title" ,"fontFamily":"veloura-serif"} -->
				<h3 class="wp-block-heading veloura-shipping-feature__title"><?php echo wp_kses_post( __( 'FREE<br>RETURNS', 'veloura-lite' ) ); ?></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"veloura-shipping-feature"} -->
		<div class="wp-block-column veloura-shipping-feature">
			<!-- wp:group {"className":"veloura-shipping-feature__inner","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
			<div class="wp-block-group veloura-shipping-feature__inner">
				<!-- wp:html --><i class="fas fa-shield-alt veloura-shipping-feature__icon" aria-hidden="true"></i><!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"veloura-shipping-feature__title" ,"fontFamily":"veloura-serif"} -->
				<h3 class="wp-block-heading veloura-shipping-feature__title"><?php echo wp_kses_post( __( 'ORDER<br>TRACKING', 'veloura-lite' ) ); ?></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"veloura-shipping-feature"} -->
		<div class="wp-block-column veloura-shipping-feature">
			<!-- wp:group {"className":"veloura-shipping-feature__inner","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
			<div class="wp-block-group veloura-shipping-feature__inner">
				<!-- wp:html --><i class="fas fa-headset veloura-shipping-feature__icon" aria-hidden="true"></i><!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"veloura-shipping-feature__title" ,"fontFamily":"veloura-serif"} -->
				<h3 class="wp-block-heading veloura-shipping-feature__title"><?php echo wp_kses_post( __( 'FAST<br>DELIVERY', 'veloura-lite' ) ); ?></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
