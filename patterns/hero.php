<?php
/**
 * Title: Hero — introduction with arch portrait
 * Slug: makani/hero
 * Categories: makani, banner
 * Keywords: hero, intro, about, portrait
 * Viewport Width: 1440
 * Description: Availability line, a two-tone introduction, two buttons and an arch-shaped portrait.
 *
 * @package Makani
 */

?>
<!-- wp:group {"metadata":{"name":"Hero"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:paragraph {"className":"is-style-status"} -->
<p class="is-style-status"><?php esc_html_e( 'Available for commissions from October 2026', 'makani' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'I’m Makani', 'makani' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color"><?php esc_html_e( ', a documentary photographer based in Madrid, working worldwide.', 'makani' ); ?></mark></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<p class="has-secondary-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Quiet, long-form stories about people and places shaped by the wind — for magazines, NGOs and brands that care about the details.', 'makani' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#work"><?php esc_html_e( 'Selected work', 'makani' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Get in touch', 'makani' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-arch"} -->
<figure class="wp-block-image size-full is-style-arch"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/portrait.jpg' ); ?>" alt="<?php esc_attr_e( 'Makani photographing by a lake', 'makani' ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
