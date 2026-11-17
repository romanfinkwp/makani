<?php
/**
 * Title: Navigation overlay
 * Slug: makani/navigation-overlay
 * Categories: navigation
 * Block Types: core/template-part/navigation-overlay
 * Inserter: no
 *
 * @package Makani
 */

?>
<!-- wp:group {"metadata":{"name":"Navigation overlay"},"className":"makani-overlay","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"},"dimensions":{"minHeight":"100vh"}},"backgroundColor":"background","textColor":"primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group makani-overlay has-primary-color has-background-background-color has-text-color has-background" style="min-height:100vh;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0} /-->

<!-- wp:navigation-overlay-close {"displayMode":"text","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"typography":{"fontWeight":"300","letterSpacing":"-0.03em","lineHeight":"1.15"}},"fontSize":"xx-large"} -->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'About', 'makani' ); ?>","url":"<?php echo esc_url( home_url( '/#about' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Work', 'makani' ); ?>","url":"<?php echo esc_url( home_url( '/#work' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Services', 'makani' ); ?>","url":"<?php echo esc_url( home_url( '/#services' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Journal', 'makani' ); ?>","url":"<?php echo esc_url( home_url( '/#journal' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Contact', 'makani' ); ?>","url":"<?php echo esc_url( home_url( '/#contact' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem","margin":{"top":"auto"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:auto"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php esc_html_e( 'Based in Madrid, working worldwide', 'makani' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( 'mailto:' . __( 'hello@example.com', 'makani' ) ); ?>"><?php esc_html_e( 'hello@example.com', 'makani' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
