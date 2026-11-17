<?php
/**
 * Title: 404
 * Slug: makani/hidden-404
 * Inserter: no
 *
 * @package Makani
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php esc_html_e( 'Error 404', 'makani' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.045em","lineHeight":"0.98"}},"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size" style="letter-spacing:-0.045em;line-height:0.98"><?php echo wp_kses_post( __( 'This page drifted<br>away with the wind.', 'makani' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<p class="has-secondary-color has-text-color" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'The link may be broken, or the page may have been moved. Try a search or start from the homepage.', 'makani' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'makani' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search the site…', 'makani' ); ?>","width":480,"widthUnit":"px","buttonText":"<?php echo esc_attr__( 'Search', 'makani' ); ?>"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( '← Back to the homepage', 'makani' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
