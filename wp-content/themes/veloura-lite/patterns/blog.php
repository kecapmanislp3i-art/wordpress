<?php
/**
 * Title: Style Journal
 * Slug: veloura-lite/blog
 * Categories: blog
 * Block Types: core/template-part/blog
 */
?>

<!-- wp:group {"className":"our-blog","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"50px","bottom":"50px"}}}} -->
<div class="wp-block-group our-blog" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0;padding-bottom:50px;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"blog-heading","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group blog-heading" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":6,"className":"short-heading-banner","style":{"elements":{"link":{"color":{"text":"#9A6F56"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0px","left":"0","right":"0"}},"border":{"radius":"4px"}},"textColor":"contrast","fontFamily":"veloura-serif"} -->
<h6 class="wp-block-heading has-text-align-center short-heading-banner has-contrast-color has-text-color has-link-color has-veloura-serif-font-family" style="border-radius:4px;margin-top:0;margin-right:0;margin-bottom:0px;margin-left:0;font-size:25px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('The Veloura Journal','veloura-lite'); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"managerclass","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast","fontFamily":"inter"} -->
<p class="has-text-align-center managerclass has-contrast-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e('Style notes, seasonal edits, and inspiration for building a wardrobe that feels distinctly yours.','veloura-lite'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"30px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="margin-top:30px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":12,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"post-column-div","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"className":"service-box-single","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"},"width":"0px","style":"none"},"shadow":"var:preset|shadow|deep","spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-box-single has-base-background-color has-background" style="border-style:solid;border-width:1px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px;"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0"><!-- wp:group {"className":"blog-meta","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group blog-meta"><!-- wp:group {"className":"post-date-box","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group post-date-box" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":40,"style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}}}} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700"}},"textColor":"black","fontFamily":"inter"} /-->

<!-- wp:post-date {"format":"j/n/Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"elements":{"link":{"color":{"text":"#707070"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"#707070"}},"fontFamily":"inter"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"showPostTitle":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast","fontFamily":"inter"} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-image","style":{"dimensions":{"minHeight":"280px"},"border":{"radius":"20px"}},"backgroundColor":"contrast","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group blog-image has-secondary-background-color has-background" style="border-radius:20px;min-height:280px"><!-- wp:post-featured-image {"isLink":true,"height":"280px","overlayColor":"contrast","align":"wide","style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"20px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div id="service-content-single" class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"inter"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
