<?php
/**
 * Title: Posts list
 * Slug: makani/hidden-posts-list
 * Inserter: no
 *
 * @package Makani
 */

?>
<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"makani-post-list"} -->
<div class="wp-block-query makani-post-list"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"0.25rem"}}} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-date /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"fontSize":"small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","sizeSlug":"medium_large"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"textColor":"secondary","fontSize":"large"} -->
<p class="has-secondary-color has-text-color has-large-font-size"><?php esc_html_e( 'Nothing here yet. Try another search or head back to the homepage.', 'makani' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
