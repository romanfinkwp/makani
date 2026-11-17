<?php
/**
 * Title: Search heading
 * Slug: makani/hidden-search-heading
 * Inserter: no
 *
 * @package Makani
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:query-title {"type":"search","fontSize":"xxx-large"} /-->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'makani' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search the site…', 'makani' ); ?>","width":480,"widthUnit":"px","buttonText":"<?php echo esc_attr__( 'Search', 'makani' ); ?>"} /--></div>
<!-- /wp:group -->
