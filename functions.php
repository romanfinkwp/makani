<?php
/**
 * Makani theme functions.
 *
 * @package Makani
 */

if ( ! function_exists( 'makani_setup' ) ) {
	/**
	 * Theme setup.
	 */
	function makani_setup() {
		load_theme_textdomain( 'makani', get_template_directory() . '/languages' );
		add_theme_support( 'wp-block-styles' );
		add_editor_style( 'style.css' );
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'makani_setup' );

if ( ! function_exists( 'makani_enqueue_styles' ) ) {
	/**
	 * Enqueue the theme stylesheet on the front end.
	 */
	function makani_enqueue_styles() {
		wp_enqueue_style(
			'makani-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'makani_enqueue_styles' );

// Only theme patterns in the inserter.
add_filter( 'should_load_remote_block_patterns', '__return_false' );

if ( ! function_exists( 'makani_register_pattern_categories' ) ) {
	/**
	 * Register the theme pattern category.
	 */
	function makani_register_pattern_categories() {
		register_block_pattern_category(
			'makani',
			array(
				'label'       => __( 'Makani', 'makani' ),
				'description' => __( 'Sections of the Makani homepage.', 'makani' ),
			)
		);
	}
}
add_action( 'init', 'makani_register_pattern_categories' );

/*
 * Welcome notice and Appearance > About Makani page.
 */

if ( ! function_exists( 'makani_pro_url' ) ) {
	/**
	 * Makani PRO demo URL with a campaign source.
	 *
	 * @param string $source Where the link is shown.
	 * @return string
	 */
	function makani_pro_url( $source ) {
		return add_query_arg( 'utm_source', $source, 'https://wordpress.org/themes/makani/' );
	}
}

if ( ! function_exists( 'makani_show_notice' ) ) {
	/**
	 * Whether the welcome notice is shown to the current user.
	 *
	 * @return bool
	 */
	function makani_show_notice() {
		return current_user_can( 'edit_theme_options' ) && ! get_option( 'makani_setup_notice_dismissed' );
	}
}

if ( ! function_exists( 'makani_setup_notice' ) ) {
	/**
	 * Print the dismissible welcome notice.
	 */
	function makani_setup_notice() {
		if ( ! makani_show_notice() ) {
			return;
		}
		?>
		<div id="makani-notice" class="notice notice-info is-dismissible">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/me.jpg' ); ?>" class="makani-notice-photo" width="120" height="120" alt="" />
			<div class="makani-notice-text">
				<h3><?php esc_html_e( 'Hi, I\'m Roman Fink, the creator of the Makani theme!', 'makani' ); ?> 😊</h3>
				<p class="makani-notice-close"><strong><?php esc_html_e( 'Just close this notice to hide it. Thanks for using the Makani theme!', 'makani' ); ?> 🚀</strong></p>
			</div>
		</div>
		<?php
	}
}
add_action( 'admin_notices', 'makani_setup_notice' );

if ( ! function_exists( 'makani_notice_assets' ) ) {
	/**
	 * Enqueue the notice style and the dismiss script while the notice is shown.
	 */
	function makani_notice_assets() {
		if ( ! makani_show_notice() ) {
			return;
		}
		$version = wp_get_theme( get_template() )->get( 'Version' );
		wp_enqueue_style( 'makani-admin-notice', get_template_directory_uri() . '/assets/css/admin-notice.css', array(), $version );
		wp_enqueue_script( 'makani-admin-notice', get_template_directory_uri() . '/assets/js/admin-notice.js', array(), $version, true );
		wp_localize_script(
			'makani-admin-notice',
			'makaniNotice',
			array(
				'ajaxUrl' => admin_url( 'admin-ajax.php' ),
				'nonce'   => wp_create_nonce( 'makani_dismiss_notice' ),
			)
		);
	}
}
add_action( 'admin_enqueue_scripts', 'makani_notice_assets' );

if ( ! function_exists( 'makani_dismiss_notice' ) ) {
	/**
	 * Remember that the welcome notice was dismissed.
	 */
	function makani_dismiss_notice() {
		check_ajax_referer( 'makani_dismiss_notice', 'nonce' );
		if ( current_user_can( 'edit_theme_options' ) ) {
			update_option( 'makani_setup_notice_dismissed', true );
		}
		wp_die();
	}
}
add_action( 'wp_ajax_makani_dismiss_notice', 'makani_dismiss_notice' );

if ( ! function_exists( 'makani_add_about_page' ) ) {
	/**
	 * Add Appearance > About Makani.
	 */
	function makani_add_about_page() {
		add_theme_page(
			__( 'About Makani', 'makani' ),
			__( 'About Makani', 'makani' ),
			'edit_theme_options',
			'makani-about',
			'makani_about_page_html'
		);
	}
}
add_action( 'admin_menu', 'makani_add_about_page' );

if ( ! function_exists( 'makani_about_page_styles' ) ) {
	/**
	 * Enqueue the About page style on that page only.
	 *
	 * @param string $hook Current admin page.
	 */
	function makani_about_page_styles( $hook ) {
		if ( 'appearance_page_makani-about' !== $hook ) {
			return;
		}
		wp_enqueue_style( 'makani-about-page', get_template_directory_uri() . '/assets/css/admin-about.css', array(), wp_get_theme( get_template() )->get( 'Version' ) );
	}
}
add_action( 'admin_enqueue_scripts', 'makani_about_page_styles' );

if ( ! function_exists( 'makani_about_page_html' ) ) {
	/**
	 * Render the About Makani page.
	 */
	function makani_about_page_html() {
		?>
		<div class="wrap makani-about-wrap">
			<h1><?php esc_html_e( 'Makani Theme', 'makani' ); ?> <span class="makani-version"><?php echo esc_html( wp_get_theme( get_template() )->get( 'Version' ) ); ?></span></h1>

			<div class="makani-about-columns">
				<div class="makani-about-card makani-about-author">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/me.jpg' ); ?>" alt="<?php esc_attr_e( 'Roman Fink', 'makani' ); ?>" class="makani-author-photo" width="120" height="120" />
					<h2><?php esc_html_e( 'Hi, I\'m Roman Fink', 'makani' ); ?></h2>
					<p><?php esc_html_e( 'The creator of the Makani theme!', 'makani' ); ?> 😊</p>
				</div>



			</div>
		</div>
		<?php
	}
}
