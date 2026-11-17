<?php
/**
 * Title: Footer
 * Slug: makani/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 *
 * @package Makani
 */

?>
<!-- wp:group {"metadata":{"name":"Footer"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php /* translators: 1: opening link tag, 2: closing link tag. */ echo sprintf( esc_html__( 'Makani theme by %1$sRoman Fink%2$s', 'makani' ), '<a href="' . esc_url( 'https://wordpress.org/themes/makani/' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><a href="#"><?php esc_html_e( 'Back to top ↑', 'makani' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
