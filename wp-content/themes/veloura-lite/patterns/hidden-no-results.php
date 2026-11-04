<?php
/**
 * Title: Hidden No Results Content
 * Slug: veloura-lite/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:paragraph -->
<p>
<?php echo esc_html_x( 'Nothing matched your search. Try a different keyword or explore the latest collection.', 'Message explaining that there are no results returned from a search', 'veloura-lite' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'veloura-lite' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'veloura-lite' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'veloura-lite' ); ?>","buttonUseIcon":true} /-->
