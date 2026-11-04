<?php
/**
 * Prestivo Lite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( ! function_exists( 'prestivo_lite_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @return void
	 */
	function prestivo_lite_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'prestivo_lite_support' );

if ( ! function_exists( 'prestivo_lite_woocommerce_body_class' ) ) :
	/**
	 * Flag WooCommerce screens so the header can adapt.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @param array $classes Body classes.
	 * @return array
	 */
	function prestivo_lite_woocommerce_body_class( $classes ) {
		if ( class_exists( 'WooCommerce' ) ) {
			if ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) {
				$classes[] = 'has-woocommerce-header';
			}
		}

		return $classes;
	}
endif;

add_filter( 'body_class', 'prestivo_lite_woocommerce_body_class' );

if ( ! function_exists( 'prestivo_lite_theme_version' ) ) :
	/**
	 * Return the theme version, used to cache-bust enqueued assets.
	 *
	 * Uses the theme version rather than filemtime(): filemtime() resolves against the
	 * child theme when one is active, while the asset URLs always point at the parent,
	 * and it produces a different version on every server.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @return string|false
	 */
	function prestivo_lite_theme_version() {
		$version = wp_get_theme( get_template() )->get( 'Version' );

		return is_string( $version ) ? $version : false;
	}
endif;

if ( ! function_exists( 'prestivo_lite_styles' ) ) :

	/**
	 * Enqueue front end styles and scripts.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @return void
	 */
	function prestivo_lite_styles() {
		$version = prestivo_lite_theme_version();

		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'prestivo-lite-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version
		);

		/*
		 * Load rtl.css after the main stylesheet on RTL locales. Passing the URL (rather
		 * than 'replace') makes WordPress append it, which is what we want: rtl.css is a
		 * small set of overrides, not a full right-to-left build of style.css.
		 */
		wp_style_add_data( 'prestivo-lite-style', 'rtl', get_theme_file_uri( 'rtl.css' ) );

		wp_enqueue_script(
			'prestivo-lite-script',
			get_theme_file_uri( 'assets/js/custom.min.js' ),
			array(),
			$version,
			true
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'prestivo_lite_styles' );

if ( ! function_exists( 'prestivo_lite_block_editor_styles' ) ) :

	/**
	 * Enqueue RTL editor styles.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @return void
	 */
	function prestivo_lite_block_editor_styles() {
		if ( is_rtl() ) {
			wp_enqueue_style(
				'prestivo-lite-rtl',
				get_theme_file_uri( 'rtl.css' ),
				array(),
				prestivo_lite_theme_version()
			);
		}
	}

endif;

add_action( 'enqueue_block_editor_assets', 'prestivo_lite_block_editor_styles' );

if ( ! function_exists( 'prestivo_lite_render_post_comments_count' ) ) :
	/**
	 * Render the post comments count with a link to the post.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @param string $block_content The block content.
	 * @param array  $block         The parsed block.
	 * @return string
	 */
	function prestivo_lite_render_post_comments_count( $block_content, $block ) {

		// The post ID comes from the block context when the block is inside a query loop.
		$post_id = isset( $block['context']['postId'] ) ? $block['context']['postId'] : get_the_ID();

		if ( ! $post_id ) {
			return $block_content;
		}

		$count = (int) get_comments_number( $post_id );
		$url   = get_permalink( $post_id );

		$text = sprintf(
			/* translators: %s: the number of comments, already formatted for the locale. */
			_n( '%s Comment', '%s Comments', $count, 'prestivo-lite' ),
			number_format_i18n( $count )
		);

		return sprintf(
			'<div class="wp-block-post-comments-count"><a href="%s" class="wp-block-post-comments-count__link">%s</a></div>',
			esc_url( $url ),
			esc_html( $text )
		);
	}
endif;

add_filter( 'render_block_core/post-comments-count', 'prestivo_lite_render_post_comments_count', 10, 2 );

if ( ! function_exists( 'prestivo_lite_shop_products_per_page' ) ) :
	/**
	 * Number of products shown per page on WooCommerce archives.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @return int
	 */
	function prestivo_lite_shop_products_per_page() {
		return 24;
	}
endif;

add_filter( 'loop_shop_per_page', 'prestivo_lite_shop_products_per_page', 20 );

if ( ! function_exists( 'prestivo_lite_hide_woocommerce_blocks_when_inactive' ) ) :
	/**
	 * Hide WooCommerce blocks when the plugin is deactivated.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @param string $block_content The block content.
	 * @param array  $block         The parsed block.
	 * @return string
	 */
	function prestivo_lite_hide_woocommerce_blocks_when_inactive( $block_content, $block ) {

		// WooCommerce active? Render normally.
		if ( class_exists( 'WooCommerce' ) ) {
			return $block_content;
		}

		// Missing block name.
		if ( empty( $block['blockName'] ) ) {
			return $block_content;
		}

		// Hide all WooCommerce blocks.
		if ( 0 === strpos( $block['blockName'], 'woocommerce/' ) ) {
			return '';
		}

		return $block_content;
	}
endif;

add_filter( 'render_block', 'prestivo_lite_hide_woocommerce_blocks_when_inactive', 10, 2 );

// Remove the core block patterns so only the theme's patterns are offered.
remove_theme_support( 'core-block-patterns' );

// Add block patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles.
require get_template_directory() . '/inc/block-styles.php';

// Block Filters.
require get_template_directory() . '/inc/block-filters.php';

// Svg icons.
require get_template_directory() . '/inc/icon-function.php';

// Theme About Page.
require get_template_directory() . '/inc/about.php';
