<?php
/**
 * Title: Selected work
 * Slug: makani/work
 * Categories: makani, gallery, portfolio
 * Keywords: work, portfolio, projects, gallery, grid
 * Viewport Width: 1440
 * Description: Section heading and a three-column grid of projects with gallery-style captions.
 *
 * @package Makani
 */

$makani_works = array(
	array(
		'image' => 'work-01.jpg',
		'title' => __( 'Long Shadows', 'makani' ),
		'year'  => '2025',
		'meta'  => __( 'Lisbon · 24 photographs', 'makani' ),
		'alt'   => __( 'Two people walking with long shadows on the pavement', 'makani' ),
	),
	array(
		'image' => 'work-02.jpg',
		'title' => __( 'Salt & Wind', 'makani' ),
		'year'  => '2025',
		'meta'  => __( 'Nazaré · 18 photographs', 'makani' ),
		'alt'   => __( 'Sea foam sliding over wet sand', 'makani' ),
	),
	array(
		'image' => 'work-03.jpg',
		'title' => __( 'Neighbours', 'makani' ),
		'year'  => '2023',
		'meta'  => __( 'Alfama · 40 portraits', 'makani' ),
		'alt'   => __( 'Portrait of an elderly woman looking over her shoulder', 'makani' ),
	),
);
?>
<!-- wp:group {"metadata":{"name":"Selected work"},"anchor":"work","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" id="work" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php esc_html_e( '02 — Portfolio', 'makani' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Selected work', 'makani' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><a href="#"><?php esc_html_e( 'All series →', 'makani' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group">
<?php foreach ( $makani_works as $makani_work ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $makani_work['image'] ); ?>" alt="<?php echo esc_attr( $makani_work['alt'] ); ?>" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:paragraph -->
<p><?php echo esc_html( $makani_work['title'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo esc_html( $makani_work['year'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"small","style":{"spacing":{"margin":{"top":"0.125rem"}}}} -->
<p class="has-secondary-color has-text-color has-small-font-size" style="margin-top:0.125rem"><?php echo esc_html( $makani_work['meta'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
