<?php

/**
 * Title: Archive Header
 * Slug: prestivo-lite/archive-header
 * Categories: prestivo-lite, header
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["prestivo-lite","header"],"patternName":"prestivo-lite/archive-header","name":"Archive Header"},"align":"full","className":"no-margin-top header-media-inner-post","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull no-margin-top header-media-inner-post" style="margin-top:0;margin-bottom:0"><!-- wp:group {"align":"full","layout":{"inherit":false}} -->
    <div class="wp-block-group alignfull"><!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri('/assets/images/inner-header-media.jpg')); ?>","id":18166,"dimRatio":30,"overlayColor":"color-dark","isUserOverlayColor":true,"sizeSlug":"full","className":"is-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|75","bottom":"var:preset|spacing|75","left":"var:preset|spacing|75","right":"var:preset|spacing|75"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-cover is-dark" style="padding-top:var(--wp--preset--spacing--75);padding-right:var(--wp--preset--spacing--75);padding-bottom:var(--wp--preset--spacing--75);padding-left:var(--wp--preset--spacing--75)"><img class="wp-block-cover__image-background wp-image-18166 size-full" alt="" src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/inner-header-media.jpg')); ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-color-dark-background-color has-background-dim-30 has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|95","bottom":"var:preset|spacing|65"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--95);padding-bottom:var(--wp--preset--spacing--65)"><!-- wp:group {"className":"alignwide","layout":{"type":"default"}} -->
                    <div class="wp-block-group alignwide"><!-- wp:query-title {"type":"archive","textAlign":"center","fontSize":"post-title-large"} /-->

                        <!-- wp:term-description {"textAlign":"center"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
