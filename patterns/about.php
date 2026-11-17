<?php
/**
 * Title: About
 * Slug: makani/about
 * Categories: makani, about
 * Keywords: about, bio, biography, facts
 * Viewport Width: 1440
 * Description: A light statement with a short biography and a list of quick facts.
 *
 * @package Makani
 */

$makani_facts = array(
	__( 'Based in', 'makani' )  => __( 'Madrid, Spain', 'makani' ),
	__( 'Working', 'makani' )   => __( 'Worldwide', 'makani' ),
	__( 'Medium', 'makani' )    => __( 'Film & digital', 'makani' ),
	__( 'Languages', 'makani' ) => __( 'English, Spanish', 'makani' ),
);
?>
<!-- wp:group {"metadata":{"name":"About"},"anchor":"about","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" id="about" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php esc_html_e( '01 — About', 'makani' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"300","letterSpacing":"-0.025em","lineHeight":"1.3"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-weight:300;letter-spacing:-0.025em;line-height:1.3"><?php esc_html_e( 'I photograph people and places shaped by the wind — fishing towns, island roads and cities in motion.', 'makani' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color"><?php esc_html_e( 'For twelve years I have made long-form stories for magazines, NGOs and brands that care about the details.', 'makani' ); ?></mark></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<p class="has-secondary-color has-text-color" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Born in Honolulu and based in Madrid since 2016, I work between the Atlantic islands, Southern Europe and wherever an assignment takes me. I believe the best images come from time spent, not time saved: I stay longer, return often and let the story set the pace.', 'makani' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:group {"className":"makani-rows","style":{"spacing":{"blockGap":"0"},"border":{"top":{"color":"var:preset|color|line","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group makani-rows" style="border-top-color:var(--wp--preset--color--line);border-top-style:solid;border-top-width:1px">
<?php foreach ( $makani_facts as $makani_fact_label => $makani_fact_value ) : ?>
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|line","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"0.85rem","bottom":"0.85rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-style:solid;border-bottom-width:1px;padding-top:0.85rem;padding-bottom:0.85rem"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo esc_html( $makani_fact_label ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html( $makani_fact_value ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
