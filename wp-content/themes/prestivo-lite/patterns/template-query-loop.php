<?php

/**
 * Title: List of posts, 1 column
 * Slug: prestivo-lite/template-query-loop
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 1 column, with featured image and post date.
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:query {"queryId":25,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"},"className":"has-excerpt-drop-cap"} -->
<div class="wp-block-query has-excerpt-drop-cap">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|56"}},"layout":{"type":"default","columnCount":1}} -->
	<!-- wp:template-part {"slug":"post-template-query-loop","tagName":"div"} /-->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"className":"caos fade-in-up","paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
	<!-- wp:query-pagination-previous /-->

	<!-- wp:query-pagination-numbers /-->

	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
