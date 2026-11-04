<?php

/**
 * Title: Sidebar
 * Slug: prestivo-lite/sidebar
 * Categories: prestivo-lite, prestivo_lite_sidebar
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:group {"metadata":{"name":"Sidebar","categories":["prestivo-lite","featured","sidebar"],"patternName":"prestivo-lite/sidebar"},"className":"sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|42"}},"layout":{"type":"default"}} -->
<div class="wp-block-group sidebar"><!-- wp:group {"className":"widget","style":{"border":{"bottom":{"color":"var:preset|color|border-default-color","width":"3px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|42"}}},"layout":{"type":"default"}} -->
  <div class="wp-block-group widget" style="border-bottom-color:var(--wp--preset--color--border-default-color);border-bottom-width:3px;padding-bottom:var(--wp--preset--spacing--42)"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.4","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500","textAlign":"center"},"spacing":{"margin":{"bottom":"var:preset|spacing|42"}}},"fontSize":"body-default"} -->
    <h2 class="wp-block-heading has-text-align-center has-body-default-font-size" style="margin-bottom:var(--wp--preset--spacing--42);font-style:normal;font-weight:500;line-height:1.4;text-transform:capitalize"><em><?php esc_html_e('About Prestivo Lite', 'prestivo-lite'); ?></em></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":18074,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
      <figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/sidebar-about-us.jpg')); ?>" alt="" class="wp-image-18074" /></figure>
      <!-- /wp:image -->

      <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|14"}},"typography":{"lineHeight":"1.5"}}} -->
      <p style="margin-top:var(--wp--preset--spacing--14);line-height:1.5"><?php esc_html_e('Prestivo Lite is a modern eCommerce brand dedicated to creating seamless online shopping experiences through thoughtfully designed digital storefronts. We combine style, functionality, and performance to help businesses showcase their products effectively while providing customers with an enjoyable and intuitive shopping journey.', 'prestivo-lite'); ?></p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-link"},":hover":{"color":{"text":"var:preset|color|foreground"}}}}},"fontSize":"extra-small"} -->
      <p class="has-link-color has-extra-small-font-size"><a href="#"><?php esc_html_e('Read More', 'prestivo-lite'); ?></a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"widget","style":{"border":{"bottom":{"color":"var:preset|color|border-default-color","width":"3px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|42"}}},"layout":{"type":"default"}} -->
  <div class="wp-block-group widget" style="border-bottom-color:var(--wp--preset--color--border-default-color);border-bottom-width:3px;padding-bottom:var(--wp--preset--spacing--42)"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.4","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500","textAlign":"center"},"spacing":{"margin":{"bottom":"var:preset|spacing|42"}}},"fontSize":"body-default"} -->
    <h2 class="wp-block-heading has-text-align-center has-body-default-font-size" style="margin-bottom:var(--wp--preset--spacing--42);font-style:normal;font-weight:500;line-height:1.4;text-transform:capitalize"><em><?php esc_html_e('Latest Posts', 'prestivo-lite'); ?></em></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:latest-posts {"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|21","bottom":"0"}}},"fontSize":"body-default"} /--></div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"widget","style":{"border":{"bottom":{"color":"var:preset|color|border-default-color","width":"3px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|42"}}},"layout":{"type":"default"}} -->
  <div class="wp-block-group widget" style="border-bottom-color:var(--wp--preset--color--border-default-color);border-bottom-width:3px;padding-bottom:var(--wp--preset--spacing--42)"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.4","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500","textAlign":"center"},"spacing":{"margin":{"bottom":"var:preset|spacing|42"}}},"fontSize":"body-default"} -->
    <h2 class="wp-block-heading has-text-align-center has-body-default-font-size" style="margin-bottom:var(--wp--preset--spacing--42);font-style:normal;font-weight:500;line-height:1.4;text-transform:capitalize"><em><?php esc_html_e('Categories', 'prestivo-lite'); ?></em></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:categories /--></div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"widget","style":{"border":{"bottom":{"color":"var:preset|color|border-default-color","width":"3px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|42"}}},"layout":{"type":"default"}} -->
  <div class="wp-block-group widget" style="border-bottom-color:var(--wp--preset--color--border-default-color);border-bottom-width:3px;padding-bottom:var(--wp--preset--spacing--42)"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.4","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500","textAlign":"center"},"spacing":{"margin":{"bottom":"var:preset|spacing|42"}}},"fontSize":"body-default"} -->
    <h2 class="wp-block-heading has-text-align-center has-body-default-font-size" style="margin-bottom:var(--wp--preset--spacing--42);font-style:normal;font-weight:500;line-height:1.4;text-transform:capitalize"><em><?php esc_html_e('Search Keyword', 'prestivo-lite'); ?></em></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"widget","style":{"border":{"bottom":{"color":"var:preset|color|border-default-color","width":"3px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|42"}}},"layout":{"type":"default"}} -->
  <div class="wp-block-group widget" style="border-bottom-color:var(--wp--preset--color--border-default-color);border-bottom-width:3px;padding-bottom:var(--wp--preset--spacing--42)"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.4","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500","textAlign":"center"},"spacing":{"margin":{"bottom":"var:preset|spacing|42"}}},"fontSize":"body-default"} -->
    <h2 class="wp-block-heading has-text-align-center has-body-default-font-size" style="margin-bottom:var(--wp--preset--spacing--42);font-style:normal;font-weight:500;line-height:1.4;text-transform:capitalize"><em><?php esc_html_e('Tags', 'prestivo-lite'); ?></em></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:tag-cloud /--></div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"widget","style":{"border":{"bottom":{"color":"var:preset|color|border-default-color","width":"3px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|42"}}},"layout":{"type":"default"}} -->
  <div class="wp-block-group widget" style="border-bottom-color:var(--wp--preset--color--border-default-color);border-bottom-width:3px;padding-bottom:var(--wp--preset--spacing--42)"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.4","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500","textAlign":"center"},"spacing":{"margin":{"bottom":"var:preset|spacing|42"}}},"fontSize":"body-default"} -->
    <h2 class="wp-block-heading has-text-align-center has-body-default-font-size" style="margin-bottom:var(--wp--preset--spacing--42);font-style:normal;font-weight:500;line-height:1.4;text-transform:capitalize"><em><?php esc_html_e('Photo Gallery', 'prestivo-lite'); ?></em></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:gallery {"linkTo":"none","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
      <figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/promotional-headline.jpg')); ?>" alt="" class="" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/girl-front.jpg')); ?>" alt="" class="" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/girl-back.jpg')); ?>" alt="" class="" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/sidebar-about-us.jpg')); ?>" alt="" class="" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/featured-content-1.jpg')); ?>" alt="" class="" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/featured-content-2.jpg')); ?>" alt="" class="" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/featured-content-3.jpg')); ?>" alt="" class="" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/hero-content.jpg')); ?>" alt="" class="" /></figure>
        <!-- /wp:image -->
      </figure>
      <!-- /wp:gallery -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group {"className":"widget","style":{"border":{"bottom":{"color":"var:preset|color|border-default-color","width":"3px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|42"}}},"layout":{"type":"default"}} -->
  <div class="wp-block-group widget" style="border-bottom-color:var(--wp--preset--color--border-default-color);border-bottom-width:3px;padding-bottom:var(--wp--preset--spacing--42)"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.4","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500","textAlign":"center"},"spacing":{"margin":{"bottom":"var:preset|spacing|42"}}},"fontSize":"body-default"} -->
    <h2 class="wp-block-heading has-text-align-center has-body-default-font-size" style="margin-bottom:var(--wp--preset--spacing--42);font-style:normal;font-weight:500;line-height:1.4;text-transform:capitalize"><em><?php esc_html_e('Featured Video', 'prestivo-lite'); ?></em></h2>
    <!-- /wp:heading -->

    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:embed {"url":"https://vimeo.com/153749393","type":"video","providerNameSlug":"vimeo","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
      <figure class="wp-block-embed is-type-video is-provider-vimeo wp-block-embed-vimeo wp-embed-aspect-16-9 wp-has-aspect-ratio">
        <div class="wp-block-embed__wrapper">
          https://vimeo.com/153749393
        </div>
      </figure>
      <!-- /wp:embed -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
