<?php

/**
 * Title: 404 Header
 * Slug: prestivo-lite/404-header
 * Categories: prestivo-lite, header
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["prestivo-lite","header"],"patternName":"prestivo-lite/404-header","name":"Archive Header"},"align":"full","className":"no-margin-top header-media-inner-post","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull no-margin-top header-media-inner-post" style="margin-top:0;margin-bottom:0"><!-- wp:group {"align":"full","layout":{"inherit":false}} -->
    <div class="wp-block-group alignfull"><!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri('/assets/images/inner-header-media.jpg')); ?>","id":18166,"dimRatio":30,"overlayColor":"color-dark","isUserOverlayColor":true,"sizeSlug":"full","className":"is-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|75","bottom":"var:preset|spacing|75","left":"var:preset|spacing|75","right":"var:preset|spacing|75"}},"elements":{"link":{"color":{"text":"var:preset|color|color-light"}}}},"textColor":"color-light","layout":{"type":"constrained"}} -->
        <div class="wp-block-cover is-dark has-color-light-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--75);padding-right:var(--wp--preset--spacing--75);padding-bottom:var(--wp--preset--spacing--75);padding-left:var(--wp--preset--spacing--75)"><img class="wp-block-cover__image-background wp-image-18166 size-full" alt="" src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/inner-header-media.jpg')); ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-color-dark-background-color has-background-dim-30 has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|95","bottom":"var:preset|spacing|65"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--95);padding-bottom:var(--wp--preset--spacing--65)"><!-- wp:group {"className":"alignwide","layout":{"type":"default"}} -->
                    <div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":1,"className":"wp-block-post-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|color-light"}}}},"textColor":"color-light","fontSize":"post-title-large"} -->
                        <h1 class="wp-block-heading has-text-align-center wp-block-post-title has-color-light-color has-text-color has-link-color has-post-title-large-font-size"><?php esc_html_e('404 Nothing Found', 'prestivo-lite'); ?></h1>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"className":"has-text-align-center"} -->
                        <p class="has-text-align-center">
                            <?php esc_html_e('Oops! That page can\'t be found', 'prestivo-lite'); ?></p>
                        <!-- /wp:paragraph -->
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
