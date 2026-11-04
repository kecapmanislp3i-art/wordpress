<?php

/**
 * Title: Header
 * Slug: prestivo-lite/header
 * Categories: prestivo-lite, header
 * Block Types: core/template-part/header
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:group {"metadata":{"patternName":"prestivo-lite/header","name":"Header","categories":["prestivo-lite","header"]},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"wp-block-main-header header-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|75","left":"var:preset|spacing|75","top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"layout":{"type":"default"}} -->
  <div class="wp-block-group alignfull wp-block-main-header header-default" style="padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--75);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--75)"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|35"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignfull"><!-- wp:group {"className":"wp-site-logo","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} -->
      <div class="wp-block-group wp-site-logo"><!-- wp:site-logo {"width":32,"shouldSyncIcon":false} /-->

        <!-- wp:group {"className":"wp-block-site-identity"} -->
        <div class="wp-block-group wp-block-site-identity"><!-- wp:site-title {"textAlign":"left"} /-->

          <!-- wp:site-tagline {"textAlign":"left","style":{"spacing":{"margin":{"top":"2px"}}}} /-->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:navigation {"icon":"menu","overlayBackgroundColor":"secondary","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"spacing":{"blockGap":"var:preset|spacing|48"}},"fontSize":"small","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"}} /-->

      <!-- wp:group {"className":"wp-header-search-cart","layout":{"type":"flex","flexWrap":"wrap"}} -->
      <div class="wp-block-group wp-header-search-cart"><!-- wp:group {"className":"wp-primary-search","layout":{"type":"default"}} -->
        <div class="wp-block-group wp-primary-search"><!-- wp:group {"className":"wp-search-toggle-container","layout":{"type":"default"}} -->
          <div class="wp-block-group wp-search-toggle-container"><!-- wp:buttons {"className":"wp-search-toggle"} -->
            <div class="wp-block-buttons wp-search-toggle"><!-- wp:button -->
              <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Search', 'prestivo-lite'); ?></a></div>
              <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group {"className":"wp-search-container","layout":{"type":"default"}} -->
          <div class="wp-block-group wp-search-container"><!-- wp:search {"label":"Looking for something?","placeholder":"Search for Products, Brands and More","buttonText":"Search","buttonPosition":"button-inside","query":{"post_type":"product"},"namespace":"woocommerce/product-search"} /--></div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line"} /-->

        <!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag"} /-->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
