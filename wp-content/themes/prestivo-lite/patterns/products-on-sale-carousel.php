<?php

/**
 * Title: Products On Sale - Carousel
 * Slug: prestivo-lite/products-on-sale-carousel
 * Categories: prestivo-lite, featured
 * Viewport width: 1400
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["prestivo-lite","featured"],"patternName":"prestivo-lite/products-on-sale-carousel","name":"Products On Sale - Carousel"},"align":"full","className":"wp-block-section wp-block-section-products wp-block-products-on-sale caos","style":{"spacing":{"padding":{"top":"var:preset|spacing|75","bottom":"var:preset|spacing|75"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-section-products wp-block-products-on-sale caos" style="padding-top:var(--wp--preset--spacing--75);padding-bottom:var(--wp--preset--spacing--75)"><!-- wp:group {"align":"wide","className":"section-heading caos fade-in-down delay1","style":{"spacing":{"blockGap":"7px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
  <div class="wp-block-group alignwide section-heading caos fade-in-down delay1"><!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textAlign":"left"}},"fontSize":"section-title"} -->
      <h2 class="wp-block-heading has-text-align-left has-section-title-font-size"><?php esc_html_e('Sale Products', 'prestivo-lite'); ?></h2>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:woocommerce/product-collection {"queryId":6,"query":{"perPage":12,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":true,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"carousel","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/on-sale","hideControls":["inherit","on-sale","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"align":"wide"} -->
  <div class="wp-block-woocommerce-product-collection alignwide">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group">
      <!-- wp:woocommerce/product-gallery-large-image-next-previous {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
      <div class="wp-block-woocommerce-product-gallery-large-image-next-previous"></div>
      <!-- /wp:woocommerce/product-gallery-large-image-next-previous -->
    </div>
    <!-- /wp:group -->

    <!-- wp:woocommerce/product-template {"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"top","flexWrap":"nowrap","orientation":"horizontal"}} -->
    <!-- wp:template-part {"slug":"product-collection"} /-->
    <!-- /wp:woocommerce/product-template -->
  </div>
  <!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
