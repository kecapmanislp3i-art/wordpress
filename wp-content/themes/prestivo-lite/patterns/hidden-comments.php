<?php

/**
 * Title: Comments
 * Slug: prestivo-lite/hidden-comments
 * Inserter: no
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:comments {"style":{"spacing":{"margin":{"top":"var:preset|spacing|42","bottom":"0"}}},"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--42);margin-bottom:0">
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php echo esc_html_e('Comments', 'prestivo-lite'); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:comments-title {"level":4} /-->
	<!-- wp:comment-template -->
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:avatar {"size":40} /-->
			<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:comment-author-name /-->

				<!-- wp:comment-date /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:comment-content /-->
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:comment-edit-link /-->
			<!-- wp:comment-reply-link /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- /wp:comment-template -->
	<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:comments-pagination-previous /-->
	<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->
	<!-- wp:post-comments-form {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"secondary"} /-->
</div>
<!-- /wp:comments -->
