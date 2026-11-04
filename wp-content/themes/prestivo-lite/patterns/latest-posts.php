<?php

/**
 * Title: Latest Posts
 * Slug: prestivo-lite/latest-posts
 * Categories: prestivo-lite, prestivo_lite_page
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:group {"metadata":{"categories":["prestivo-lite","page"],"patternName":"prestivo-lite/latest-posts-three-col","name":"Latest Posts"},"align":"full","className":"wp-block-section wp-block-latest-posts posts-three-col","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-latest-posts posts-three-col">

    <!-- wp:group {"align":"wide","className":"wp-block-group-heading caos fade-in-down delay1","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div class="wp-block-group alignwide wp-block-group-heading caos fade-in-down delay1" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","contentSize":"620px","justifyContent":"left"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"style":{"typography":{"textAlign":"left"}}} -->
            <h2 class="wp-block-heading has-text-align-left"><?php esc_html_e('From The Blog', 'prestivo-lite') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"align":"wide"} -->
    <div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
        <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"layout":{"type":"default"}} -->
            <div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|0","padding":{"top":"var:preset|spacing|21","bottom":"var:preset|spacing|21","left":"var:preset|spacing|21","right":"var:preset|spacing|21"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"620px"}} -->
                <div class="wp-block-group has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--21);padding-right:var(--wp--preset--spacing--21);padding-bottom:var(--wp--preset--spacing--21);padding-left:var(--wp--preset--spacing--21)"><!-- wp:post-terms {"term":"category","style":{"typography":{"textAlign":"center","textTransform":"uppercase","fontSize":"12px"},"spacing":{"margin":{"bottom":"var:preset|spacing|0"}},"elements":{"link":{"color":{"text":"var:preset|color|meta"},":hover":{"color":{"text":"var:preset|color|text-link"}}}}}} /-->

                    <!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|title-color"},":hover":{"color":{"text":"var:preset|color|text-link"}}}}},"fontSize":"entry-title"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|0"}}}} /-->

                <!-- wp:group {"className":"taxonomy-meta","style":{"spacing":{"blockGap":"var:preset|spacing|0","padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}}},"backgroundColor":"secondary","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
                <div class="wp-block-group taxonomy-meta has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:post-date {"isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|meta"},":hover":{"color":{"text":"var:preset|color|text-link"}}}}}} /-->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|meta"}}}},"textColor":"meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group has-meta-color has-text-color has-link-color"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text","fontFamily":"fraunces"} -->
                        <p class="has-body-text-color has-text-color has-link-color has-fraunces-font-family"><em><?php esc_html_e('by', 'prestivo-lite') ?></em>
                        </p>
                        <!-- /wp:paragraph -->

                        <!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|meta"},":hover":{"color":{"text":"var:preset|color|text-link"}}}}},"fontSize":"tiny"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:post-comments-count {"style":{"typography":{"textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|meta"}}}},"textColor":"meta","fontSize":"tiny"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|42"}},"border":{"bottom":{"color":"var:preset|color|border-default-color","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"default"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-default-color);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--42)"><!-- wp:post-excerpt {"moreText":"Continue Reading","excerptLength":40} /--></div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|border-default-color","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"margin":{"top":"var:preset|spacing|8"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-default-color);border-bottom-width:1px;margin-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"7px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"tiny"} -->
                        <p class="has-tiny-font-size"><em><?php esc_html_e('Reading time:', 'prestivo-lite') ?></em></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:post-time-to-read {"style":{"typography":{"textAlign":"left"},"elements":{"link":{"color":{"text":"var:preset|color|meta"}}}},"textColor":"meta","fontSize":"tiny"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:post-terms {"term":"post_tag","style":{"typography":{"textAlign":"right","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|meta"},":hover":{"color":{"text":"var:preset|color|text-link"}}}}}} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->
