<?php
/**
 * Theme About Page
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( ! function_exists( 'prestivo_lite_notice_is_dismissed' ) ) :
	/**
	 * Whether the current user has dismissed the theme notice.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @return bool
	 */
	function prestivo_lite_notice_is_dismissed() {
		return (bool) get_user_meta( get_current_user_id(), 'prestivo_lite_notice_dismissed', true );
	}
endif;

if ( ! function_exists( 'prestivo_lite_dismiss_notice' ) ) :
	/**
	 * Persist the notice dismissal.
	 *
	 * Core's own dismiss button is JavaScript only - it hides the notice for the current
	 * page load and nothing more. The notice therefore renders its own link carrying the
	 * `notice-dismiss` class, which makeNoticesDismissible() treats as already handled, and
	 * that link lands here so the dismissal is stored against the user and survives a
	 * refresh.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @return void
	 */
	function prestivo_lite_dismiss_notice() {
		if ( ! isset( $_GET['prestivo_lite_dismiss'] ) || '1' !== $_GET['prestivo_lite_dismiss'] ) {
			return;
		}

		if ( ! current_user_can( 'edit_theme_options' ) ) {
			return;
		}

		$nonce = isset( $_GET['_wpnonce'] ) ? sanitize_text_field( wp_unslash( $_GET['_wpnonce'] ) ) : '';

		if ( ! wp_verify_nonce( $nonce, 'prestivo_lite_dismiss_notice' ) ) {
			return;
		}

		update_user_meta( get_current_user_id(), 'prestivo_lite_notice_dismissed', 1 );

		// Drop the trigger and nonce from the URL so a refresh is a plain page load.
		wp_safe_redirect( remove_query_arg( array( 'prestivo_lite_dismiss', '_wpnonce' ) ) );
		exit;
	}
endif;

add_action( 'admin_init', 'prestivo_lite_dismiss_notice', 1 );

if ( ! function_exists( 'prestivo_lite_should_show_notice' ) ) :
	/**
	 * Whether the theme notice should render on the current screen.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @return bool
	 */
	function prestivo_lite_should_show_notice() {
		if ( ! current_user_can( 'edit_theme_options' ) || prestivo_lite_notice_is_dismissed() ) {
			return false;
		}

		$screen = get_current_screen();

		// Never on the theme's own page - it already carries the same information.
		if ( $screen && ! empty( $screen->base ) && 'appearance_page_prestivo-lite-theme' === $screen->base ) {
			return false;
		}

		return true;
	}
endif;

if ( ! function_exists( 'prestivo_lite_admin_notice' ) ) :
	/**
	 * Render the theme notice.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @return void
	 */
	function prestivo_lite_admin_notice() {

		if ( ! prestivo_lite_should_show_notice() ) {
			return;
		}

		$dismiss_url = wp_nonce_url(
			add_query_arg( 'prestivo_lite_dismiss', '1' ),
			'prestivo_lite_dismiss_notice'
		);
		?>
		<div class="notice notice-info is-dismissible prestivo-lite-admin-notice">
			<div class="prestivo-lite-admin-notice-wrapper">
				<h2><?php esc_html_e( 'Upgrade to Prestivo', 'prestivo-lite' ); ?></h2>
				<p><?php esc_html_e( 'Take your online fashion store further with Prestivo. Get 36 Pre-Designed Block Patterns, 27 FSE Templates, and 16 Template Parts, plus a Dark style, a custom Slider block, product carousels, cross-sells and up-sells, and one-click demo import.', 'prestivo-lite' ); ?></p>
				<a target="_blank" class="button-primary button green" href="<?php echo esc_url( 'https://catchthemes.com/themes/prestivo/' ); ?>"><?php esc_html_e( 'Upgrade to Prestivo', 'prestivo-lite' ); ?></a>
        		<a class="button" href="<?php echo esc_url( admin_url( 'themes.php?page=prestivo-lite-theme' ) ); ?>"><?php esc_html_e( 'Getting Started', 'prestivo-lite' ); ?></a>
			</div>
			<a class="notice-dismiss" href="<?php echo esc_url( $dismiss_url ); ?>">
				<span class="screen-reader-text"><?php esc_html_e( 'Dismiss this notice.', 'prestivo-lite' ); ?></span>
			</a>
		</div>
		<?php
	}
endif;

add_action( 'admin_notices', 'prestivo_lite_admin_notice' );

if ( ! function_exists( 'prestivo_lite_theme_page_admin_style' ) ) :
	/**
	 * Enqueue the admin stylesheet only where it is used.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @param string $hook_suffix The current admin page.
	 * @return void
	 */
	function prestivo_lite_theme_page_admin_style( $hook_suffix ) {

		$is_theme_page = ( 'appearance_page_prestivo-lite-theme' === $hook_suffix );

		if ( ! $is_theme_page && ! prestivo_lite_should_show_notice() ) {
			return;
		}

		$theme_version = wp_get_theme( get_template() )->get( 'Version' );

		wp_enqueue_style(
			'prestivo-lite-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			is_string( $theme_version ) ? $theme_version : false
		);
	}
endif;

add_action( 'admin_enqueue_scripts', 'prestivo_lite_theme_page_admin_style' );

if ( ! function_exists( 'prestivo_lite_menu' ) ) :
	/**
	 * Add the theme page.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @return void
	 */
	function prestivo_lite_menu() {
		add_theme_page(
			esc_html__( 'Prestivo Lite', 'prestivo-lite' ),
			esc_html__( 'Prestivo Lite', 'prestivo-lite' ),
			'edit_theme_options',
			'prestivo-lite-theme',
			'prestivo_lite_theme_page_display'
		);
	}
endif;

add_action( 'admin_menu', 'prestivo_lite_menu' );

if ( ! function_exists( 'prestivo_lite_theme_page_display' ) ) :
	/**
	 * Display the About page.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @return void
	 */
	function prestivo_lite_theme_page_display() {
		$theme = wp_get_theme();

		if ( is_child_theme() ) {
			$parent = $theme->parent();

			// parent() returns false when the parent theme is missing.
			if ( $parent ) {
				$theme = $parent;
			}
		}
		?>

		<div id="welcome-panel" class="welcome-panel">
			<div class="welcome-panel-content">
				<div class="welcome-panel-header">
					<h2><?php echo esc_html( $theme->Name ); ?></h2>
					<p><?php esc_html_e( 'Free Fashion eCommerce WordPress Block Theme', 'prestivo-lite' ); ?></p>
				</div>

				<div class="welcome-panel-column-container">
					<div class="container-wrap">
						<div class="welcome-panel-column two-columns">
							<div class="welcome-panel-column-content">
								<h3><?php esc_html_e( 'Getting Started with Prestivo Lite!', 'prestivo-lite' ); ?></h3>
								<p><?php esc_html_e( 'Awesome! Prestivo Lite has been installed and activated successfully. Now you can start building your online fashion store with a wide range of highly customizable block patterns, templates, and template parts available in this theme.', 'prestivo-lite' ); ?></p>
								<a target="_blank" href="<?php echo esc_url( 'https://catchthemes.com/themes/prestivo-lite/#theme-instructions' ); ?>"><?php esc_html_e( 'Theme instructions', 'prestivo-lite' ); ?></a>
							</div>
						</div>

						<div class="welcome-panel-column two-columns">
							<div class="welcome-panel-column-content">
								<h3><?php esc_html_e( 'More Features with Prestivo Theme', 'prestivo-lite' ); ?></h3>
								<p><?php esc_html_e( 'To get more beautiful block patterns and templates, we recommend you upgrade to Prestivo. With the premium theme installed, you get:', 'prestivo-lite' ); ?></p>
								<ul>
									<li><?php esc_html_e( 'Dark style and demo', 'prestivo-lite' ); ?></li>
									<li><?php esc_html_e( 'Custom Slider block with Slider Featured pattern', 'prestivo-lite' ); ?></li>
									<li><?php esc_html_e( 'Products On Sale Carousel and Top Rated Products patterns', 'prestivo-lite' ); ?></li>
									<li><?php esc_html_e( 'Cross-Sells and Up-Sells product patterns', 'prestivo-lite' ); ?></li>
									<li><?php esc_html_e( 'Featured Category, New Collection and Offer Banner patterns', 'prestivo-lite' ); ?></li>
									<li><?php esc_html_e( 'Hero Content Full Width and Promotional Headline patterns', 'prestivo-lite' ); ?></li>
									<li><?php esc_html_e( 'Blogging homepage template', 'prestivo-lite' ); ?></li>
									<li><?php esc_html_e( 'Blog and single post/page layouts with left, right or no sidebar', 'prestivo-lite' ); ?></li>
									<li><?php esc_html_e( 'Single Product Vertical Gallery template', 'prestivo-lite' ); ?></li>
									<li><?php esc_html_e( 'One-click demo import and priority support', 'prestivo-lite' ); ?></li>
								</ul>
								<a target="_blank" class="button green button-primary button-hero green" href="<?php echo esc_url( 'https://catchthemes.com/themes/prestivo/' ); ?>"><?php esc_html_e( 'Buy Prestivo', 'prestivo-lite' ); ?></a>
							</div>
						</div>

					</div>
					<div class="sidebar">
						<div class="welcome-panel-column important-links">
							<div class="welcome-panel-column-content">
								<h3><?php esc_html_e( 'Important Links', 'prestivo-lite' ); ?></h3>
								<a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'Theme Info', 'prestivo-lite' ); ?></a>
								<a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( 'https://fse.catchthemes.com/prestivo-lite/' ); ?>"><?php esc_html_e( 'View Demo', 'prestivo-lite' ); ?></a>
								<a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( 'https://catchthemes.com/fse-faq' ); ?>"><?php esc_html_e( 'FSE FAQs', 'prestivo-lite' ); ?></a>
								<a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#changelog' ); ?>"><?php esc_html_e( 'Change log', 'prestivo-lite' ); ?></a>
								<a target="_blank" rel="noopener noreferrer" href="<?php echo esc_url( 'https://catchthemes.com/support-forum/forum/full-site-editing/' ); ?>"><?php esc_html_e( 'Support', 'prestivo-lite' ); ?></a>
							</div>
						</div>

						<div class="welcome-panel-column review">
							<div class="welcome-panel-column-content">
								<h3><?php esc_html_e( 'Leave us a review', 'prestivo-lite' ); ?></h3>
								<p><?php esc_html_e( 'Loved Prestivo Lite? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'prestivo-lite' ); ?></p>
								<a href="<?php echo esc_url( 'https://wordpress.org/support/theme/prestivo-lite/reviews/' ); ?>" class="button button-primary button-hero" style="text-decoration: none;" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Review', 'prestivo-lite' ); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
endif;
