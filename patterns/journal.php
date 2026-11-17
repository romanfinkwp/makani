<?php
/**
 * Title: Journal — latest posts
 * Slug: makani/journal
 * Categories: makani, query
 * Keywords: blog, posts, journal, news, latest
 * Viewport Width: 1440
 * Description: Section heading and the three latest posts as rows with monospaced dates.
 *
 * @package Makani
 */

?>
<!-- wp:group {"metadata":{"name":"Journal"},"anchor":"journal","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" id="journal" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php esc_html_e( '04 — Journal', 'makani' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Notes from the road', 'makani' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"makani-post-list","style":{"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}}} -->
<div class="wp-block-query makani-post-list" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:post-date /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:post-title {"isLink":true,"fontSize":"large"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%","metadata":{"blockVisibility":{"viewport":{"mobile":false}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:read-more {"content":"<?php echo esc_attr__( 'Read →', 'makani' ); ?>"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"textColor":"secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}}} -->
<p class="has-secondary-color has-text-color" style="padding-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Notes from the road will appear here soon.', 'makani' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
