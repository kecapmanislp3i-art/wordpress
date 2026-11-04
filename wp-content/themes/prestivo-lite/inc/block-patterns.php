<?php

/**
 * Block Patterns
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */
function prestivo_lite_register_block_patterns()
{
	$block_pattern_categories = array(
		'prestivo-lite' => array(
			'label' => esc_html__( 'Prestivo Lite', 'prestivo-lite' ),
		),
		'prestivo_lite_page' => array(
			'label'       => _x( 'Pages', 'Block pattern category', 'prestivo-lite' ),
			'description' => __( 'A collection of full page layouts.', 'prestivo-lite' ),
		),
		'prestivo_lite_sidebar' => array(
			'label'       => _x( 'Sidebar', 'Block pattern category', 'prestivo-lite' ),
			'description' => __( 'A collection of sidebar layouts.', 'prestivo-lite' ),
		),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters('prestivo_lite_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}
add_action('init', 'prestivo_lite_register_block_patterns', 9);
