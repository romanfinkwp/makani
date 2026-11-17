<?php
/**
 * Title: Contact
 * Slug: makani/contact
 * Categories: makani, call-to-action
 * Keywords: contact, email, cta, social
 * Viewport Width: 1440
 * Description: A centred call to action with a large heading, e-mail address and links.
 *
 * @package Makani
 */

?>
<!-- wp:group {"metadata":{"name":"Contact"},"anchor":"contact","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group" id="contact" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"className":"is-style-label","style":{"typography":{"textAlign":"center"}}} -->
<p class="is-style-label has-text-align-center"><?php esc_html_e( '05 — Contact', 'makani' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"textAlign":"center"}},"fontSize":"xxx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xxx-large-font-size"><?php esc_html_e( 'Have a story in mind?', 'makani' ); ?><br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color"><?php esc_html_e( 'Let’s make it together.', 'makani' ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontWeight":"300","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
<p class="has-text-align-center has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--40);font-weight:300;letter-spacing:-0.02em"><a href="<?php echo esc_url( 'mailto:' . __( 'hello@example.com', 'makani' ) ); ?>"><?php esc_html_e( 'hello@example.com', 'makani' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"small","style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Booking editorial and brand work from October 2026.', 'makani' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><a href="#"><?php esc_html_e( 'Instagram ↗', 'makani' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><a href="#"><?php esc_html_e( 'Newsletter ↗', 'makani' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><a href="#"><?php esc_html_e( 'Print shop ↗', 'makani' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
