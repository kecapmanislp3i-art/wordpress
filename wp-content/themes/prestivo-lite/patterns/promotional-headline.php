<?php

/**
 * Title: Promotional Headline
 * Slug: prestivo-lite/promotional-headline
 * Categories: prestivo-lite, featured, call-to-action
 * Viewport width: 1400
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["prestivo-lite","featured","call-to-action"],"patternName":"prestivo-lite/promotional-headline","name":"Promotional Headline"},"align":"full","className":"wp-block-section promo-section caos fade-in","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section promo-section caos fade-in" style="padding-top:0;padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri('/assets/images/promotional-headline.jpg')); ?>","id":18936,"alt":"Women playing football on ground","dimRatio":60,"overlayColor":"color-dark","isUserOverlayColor":true,"isDark":false,"sizeSlug":"full","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|42","left":"var:preset|spacing|42","top":"var:preset|spacing|42","bottom":"var:preset|spacing|42"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","layout":{"type":"constrained"}} -->
  <div class="wp-block-cover alignfull is-light has-background-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--42);padding-right:var(--wp--preset--spacing--42);padding-bottom:var(--wp--preset--spacing--42);padding-left:var(--wp--preset--spacing--42)"><img class="wp-block-cover__image-background wp-image-18936 size-full" alt="Women playing football on ground" src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/promotional-headline.jpg')); ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-color-dark-background-color has-background-dim-60 has-background-dim"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"700px"}} -->
      <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|95","bottom":"var:preset|spacing|95","left":"0","right":"0"}},"border":{"width":"0px","style":"none","radius":"0px"}},"backgroundColor":"dark","layout":{"type":"constrained","contentSize":""}} -->
        <div class="wp-block-group has-dark-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:var(--wp--preset--spacing--95);padding-right:0;padding-bottom:var(--wp--preset--spacing--95);padding-left:0">
          <!-- wp:heading {"className":"caos fade-in-down delay1","textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|color-light"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"color-light","fontSize":"post-title-large"} -->
          <h2 class="wp-block-heading has-text-align-center has-color-light-color has-text-color has-link-color has-post-title-large-font-size caos fade-in-down delay1" style="font-style:normal;font-weight:700"><?php esc_html_e('Thoughtfully Designed for the Season Ahead', 'prestivo-lite'); ?></h2>
          <!-- /wp:heading -->

          <!-- wp:paragraph {"className":"caos fade-in-up delay2","align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|color-light"}}}},"textColor":"color-light","fontSize":"body-default"} -->
          <p class="has-text-align-center has-color-light-color has-text-color has-link-color has-body-default-font-size caos fade-in-up delay2"><?php esc_html_e('From everyday essentials to distinctive statement pieces, our latest collection combines premium craftsmanship with timeless design to elevate your wardrobe for the months ahead.', 'prestivo-lite'); ?></p>
          <!-- /wp:paragraph -->

          <!-- wp:buttons {"className":"caos fade-in-up delay3","layout":{"type":"flex","justifyContent":"center"}} -->
          <div class="wp-block-buttons caos fade-in-up delay3"><!-- wp:button {"className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Shop Now', 'prestivo-lite'); ?></a></div>
            <!-- /wp:button -->
          </div>
          <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
  </div>
  <!-- /wp:cover -->
</div>
<!-- /wp:group -->
