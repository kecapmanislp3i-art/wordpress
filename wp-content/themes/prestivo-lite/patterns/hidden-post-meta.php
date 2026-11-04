<?php

/**
 * Title: Post meta
 * Slug: prestivo-lite/hidden-post-meta
 * Categories: prestivo-lite, featured
 * Viewport width: 1400
 * Inserter: no
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->
		<!-- wp:paragraph {"textColor":"body-text"} -->
		<p class="has-body-text-color has-text-color">—</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"body-text","fontSize":"default"} -->
		<p class="has-body-text-color has-text-color has-default-font-size"><?php esc_html_e('by', 'prestivo-lite'); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:post-author-name {"isLink":true} /-->
		<!-- wp:post-terms {"term":"category","prefix":"in "} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
