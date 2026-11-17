<?php
/**
 * Title: Header
 * Slug: makani/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * @package Makani
 */

?>
<!-- wp:group {"metadata":{"name":"Header"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"makani-header","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group makani-header"><!-- wp:site-title {"level":0} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlay":"navigation-overlay","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'About', 'makani' ); ?>","url":"<?php echo esc_url( home_url( '/#about' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Work', 'makani' ); ?>","url":"<?php echo esc_url( home_url( '/#work' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Services', 'makani' ); ?>","url":"<?php echo esc_url( home_url( '/#services' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Journal', 'makani' ); ?>","url":"<?php echo esc_url( home_url( '/#journal' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"metadata":{"blockVisibility":{"viewport":{"mobile":false}}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Contact', 'makani' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
