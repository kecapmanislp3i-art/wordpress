<?php

/**
 * Title: Sidebar Products
 * Slug: prestivo-lite/sidebar-products
 * Categories: prestivo-lite, prestivo_lite_sidebar
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:woocommerce/product-filters {"metadata":{"patternName":"prestivo-lite/sidebar-products","categories":["prestivo-lite","page"]}} -->
<div class="wp-block-woocommerce-product-filters wc-block-product-filters" style="--wc-product-filters-text-color:#111;--wc-product-filters-background-color:#fff"><!-- wp:woocommerce/product-filter-active -->
	<div class="wp-block-woocommerce-product-filter-active"><!-- wp:woocommerce/product-filter-removable-chips -->
		<div class="wp-block-woocommerce-product-filter-removable-chips wc-block-product-filter-removable-chips"></div>
		<!-- /wp:woocommerce/product-filter-removable-chips -->

		<!-- wp:woocommerce/product-filter-clear-button -->
		<!-- wp:buttons {"layout":{"type":"flex","verticalAlignment":"stretched"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"wc-block-product-filter-clear-button is-style-outline","style":{"border":{"width":"1px"},"typography":{"textDecoration":"none","textAlign":"center"},"outline":"none","fontSize":"medium","spacing":{"padding":{"left":"8px","right":"8px","top":"5px","bottom":"5px"}}}} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100 wc-block-product-filter-clear-button is-style-outline"><a class="wp-block-button__link has-text-align-center wp-element-button" style="border-width:1px;padding-top:5px;padding-right:8px;padding-bottom:5px;padding-left:8px;text-decoration:none"><?php esc_html_e('Clear filters', 'prestivo-lite'); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		<!-- /wp:woocommerce/product-filter-clear-button -->
	</div>
	<!-- /wp:woocommerce/product-filter-active -->

	<!-- wp:woocommerce/product-filter-price -->
	<div class="wp-block-woocommerce-product-filter-price"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"1rem"}}} -->
		<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0.625rem;font-size:1rem;font-style:normal;font-weight:700"><?php esc_html_e('Price', 'prestivo-lite'); ?></h3><!-- /wp:heading -->

		<!-- wp:woocommerce/product-filter-price-slider -->
		<div class="wp-block-woocommerce-product-filter-price-slider wc-block-product-filter-price-slider"></div>
		<!-- /wp:woocommerce/product-filter-price-slider -->
	</div>
	<!-- /wp:woocommerce/product-filter-price -->

	<!-- wp:woocommerce/product-filter-rating -->
	<div class="wp-block-woocommerce-product-filter-rating"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"1rem"}}} -->
		<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0.625rem;font-size:1rem;font-style:normal;font-weight:700"><?php esc_html_e('Rating', 'prestivo-lite'); ?></h3><!-- /wp:heading -->

		<!-- wp:woocommerce/product-filter-checkbox-list -->
		<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"></div>
		<!-- /wp:woocommerce/product-filter-checkbox-list -->
	</div>
	<!-- /wp:woocommerce/product-filter-rating -->

	<!-- wp:woocommerce/product-filter-taxonomy {"taxonomy":"product_brand"} -->
	<div class="wp-block-woocommerce-product-filter-taxonomy"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}}}} -->
		<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0.625rem"><?php esc_html_e('Brand', 'prestivo-lite'); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/product-filter-checkbox-list -->
		<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"></div>
		<!-- /wp:woocommerce/product-filter-checkbox-list -->
	</div>
	<!-- /wp:woocommerce/product-filter-taxonomy -->

	<!-- wp:woocommerce/product-filter-attribute {"displayStyle":"woocommerce/product-filter-chips"} -->
	<div class="wp-block-woocommerce-product-filter-attribute"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"1rem"}}} -->
		<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0.625rem;font-size:1rem;font-style:normal;font-weight:700"><?php esc_html_e('Color', 'prestivo-lite'); ?></h3><!-- /wp:heading -->

		<!-- wp:woocommerce/product-filter-chips -->
		<div class="wp-block-woocommerce-product-filter-chips wc-block-product-filter-chips"></div>
		<!-- /wp:woocommerce/product-filter-chips -->
	</div>
	<!-- /wp:woocommerce/product-filter-attribute -->

	<!-- wp:woocommerce/product-filter-taxonomy -->
	<div class="wp-block-woocommerce-product-filter-taxonomy"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"1rem"}}} -->
		<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0.625rem;font-size:1rem;font-style:normal;font-weight:700"><?php esc_html_e('Category', 'prestivo-lite'); ?></h3><!-- /wp:heading -->

		<!-- wp:woocommerce/product-filter-checkbox-list -->
		<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"></div>
		<!-- /wp:woocommerce/product-filter-checkbox-list -->
	</div>
	<!-- /wp:woocommerce/product-filter-taxonomy -->

	<!-- wp:woocommerce/product-filter-attribute {"attributeId":2,"displayStyle":"woocommerce/product-filter-chips"} -->
	<div class="wp-block-woocommerce-product-filter-attribute"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"1rem"}}} -->
		<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0.625rem;font-size:1rem;font-style:normal;font-weight:700"><?php esc_html_e('Size', 'prestivo-lite'); ?></h3><!-- /wp:heading -->

		<!-- wp:woocommerce/product-filter-chips -->
		<div class="wp-block-woocommerce-product-filter-chips wc-block-product-filter-chips"></div>
		<!-- /wp:woocommerce/product-filter-chips -->
	</div>
	<!-- /wp:woocommerce/product-filter-attribute -->

	<!-- wp:woocommerce/product-filter-taxonomy {"taxonomy":"product_tag"} -->
	<div class="wp-block-woocommerce-product-filter-taxonomy"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}}}} -->
		<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0.625rem"><?php esc_html_e('Tag', 'prestivo-lite'); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/product-filter-checkbox-list -->
		<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"></div>
		<!-- /wp:woocommerce/product-filter-checkbox-list -->
	</div>
	<!-- /wp:woocommerce/product-filter-taxonomy -->

	<!-- wp:woocommerce/product-filter-status -->
	<div class="wp-block-woocommerce-product-filter-status"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0.625rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"1rem"}}} -->
		<h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0.625rem;font-size:1rem;font-style:normal;font-weight:700"><?php esc_html_e('Status', 'prestivo-lite'); ?></h3><!-- /wp:heading -->

		<!-- wp:woocommerce/product-filter-checkbox-list -->
		<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"></div>
		<!-- /wp:woocommerce/product-filter-checkbox-list -->
	</div>
	<!-- /wp:woocommerce/product-filter-status -->
</div>
<!-- /wp:woocommerce/product-filters -->
