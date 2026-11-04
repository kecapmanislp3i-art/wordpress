<?php

/**
 * Title: Footer
 * Slug: prestivo-lite/footer
 * Categories: prestivo-lite, footer
 * Block Types: core/template-part/footer
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["prestivo-lite","footer"],"patternName":"prestivo-lite/footer","name":"Footer"},"align":"full","className":"bottom-footer wp-block-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|24","bottom":"var:preset|spacing|24"},"margin":{"top":"var:preset|spacing|0"}}},"backgroundColor":"color-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull bottom-footer wp-block-footer has-color-dark-background-color has-background" style="margin-top:var(--wp--preset--spacing--0);padding-top:var(--wp--preset--spacing--24);padding-bottom:var(--wp--preset--spacing--24)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","textTransform":"uppercase","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|footer-text"}}}},"textColor":"footer-text"} -->
  <p class="has-text-align-center has-footer-text-color has-text-color has-link-color" style="font-size:12px;text-transform:uppercase"> <?php
                                                                                                                                                                // Dynamic copyright notice
                                                                                                                                                                printf(
                                                                                                                                                                  esc_html__('Copyright © %1$s %2$s. All Rights Reserved.', 'prestivo-lite'),
                                                                                                                                                                  esc_html(date_i18n('Y')), // Current year
                                                                                                                                                                  '<a target="_blank" href="https://catchthemes.com">Catch Themes</a>'
                                                                                                                                                                );
                                                                                                                                                                ?></p>
  <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
