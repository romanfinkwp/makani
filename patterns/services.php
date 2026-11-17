<?php
/**
 * Title: Services
 * Slug: makani/services
 * Categories: makani, services
 * Keywords: services, offer, pricing, numbered list
 * Viewport Width: 1440
 * Description: Section heading and a numbered list of services separated by hairlines.
 *
 * @package Makani
 */

$makani_services = array(
	array(
		'title' => __( 'Editorial & documentary', 'makani' ),
		'text'  => __( 'Long-form stories and features for magazines, newspapers and NGOs. Research, access and sequencing are part of the job.', 'makani' ),
		'meta'  => __( 'Assignments · Worldwide', 'makani' ),
	),
	array(
		'title' => __( 'Brand & campaign', 'makani' ),
		'text'  => __( 'Honest imagery for brands with a sense of place — hospitality, outdoor, craft and food. Shot on location, in natural light.', 'makani' ),
		'meta'  => __( 'Campaigns · Lookbooks', 'makani' ),
	),
	array(
		'title' => __( 'Portraits', 'makani' ),
		'text'  => __( 'Environmental portraits of founders, artists and teams — at work, at home or outdoors.', 'makani' ),
		'meta'  => __( 'Half day · Full day', 'makani' ),
	),
);
?>
<!-- wp:group {"metadata":{"name":"Services"},"anchor":"services","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" id="services" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php esc_html_e( '03 — Services', 'makani' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'How I can help', 'makani' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"makani-rows","style":{"spacing":{"blockGap":"0"},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group makani-rows" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px">
<?php foreach ( $makani_services as $makani_index => $makani_service ) : ?>
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"8%"} -->
<div class="wp-block-column" style="flex-basis:8%"><!-- wp:paragraph {"className":"is-style-label","style":{"spacing":{"padding":{"top":"0.45rem"}}}} -->
<p class="is-style-label" style="padding-top:0.45rem"><?php echo esc_html( sprintf( '%02d', $makani_index + 1 ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html( $makani_service['title'] ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html( $makani_service['text'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-label","textColor":"primary"} -->
<p class="is-style-label has-primary-color has-text-color"><?php echo esc_html( $makani_service['meta'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
