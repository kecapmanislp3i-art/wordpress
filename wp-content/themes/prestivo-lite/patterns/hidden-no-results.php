<?php

/**
 * Title: No results
 * Slug: prestivo-lite/hidden-no-results
 * Inserter: no
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

?>

<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":19178,"sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}}} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_parent_theme_file_uri('/assets/images/error.png')); ?>" alt="" class="wp-image-19178" /></figure>
        <!-- /wp:image -->

        <!-- wp:heading {"textAlign":"left","fontSize":"entry-title"} -->
        <h2 class="wp-block-heading has-text-align-left has-entry-title-font-size"><?php echo esc_html_x('No posts were found.', 'Message explaining that there are no results returned from a search', 'prestivo-lite'); ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta"}}}},"textColor":"meta"} -->
    <p class="has-text-align-left has-meta-color has-text-color has-link-color"><?php echo esc_html_x('Try adjusting your search or using different keywords', 'Message explaining that there are no results returned from a search', 'prestivo-lite'); ?></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
