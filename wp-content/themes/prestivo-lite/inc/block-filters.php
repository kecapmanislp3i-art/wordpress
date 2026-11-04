<?php
/**
 * Block Filters
 *
 * @package Catch Themes
 * @subpackage Prestivo Lite
 * @since Prestivo Lite 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( ! function_exists( 'prestivo_lite_block_wrapper' ) ) :
	/**
	 * Add theme icons to a handful of core blocks.
	 *
	 * Note: $block here is the *parsed* block, so its attributes contain only what was
	 * explicitly set in the markup — block.json defaults are not merged in. Every
	 * attribute read below therefore has to be checked with isset() first.
	 *
	 * @since Prestivo Lite 1.0
	 *
	 * @param string $block_content The block content.
	 * @param array  $block         The parsed block.
	 * @return string
	 */
	function prestivo_lite_block_wrapper( $block_content, $block ) {

		if ( empty( $block['blockName'] ) ) {
			return $block_content;
		}

		if ( 'core/button' === $block['blockName'] ) {

			// strpos() can legitimately return 0 here, so compare against false explicitly.
			if ( isset( $block['attrs']['className'] ) && false !== strpos( $block['attrs']['className'], 'has-arrow' ) ) {
				$block_content = str_replace(
					'</a>',
					prestivo_lite_get_svg( array( 'icon' => 'caret-circle-right' ) ) . '</a>',
					$block_content
				);

				return $block_content;
			}
		}

		if ( ! is_single() ) {

			if ( 'core/post-terms' === $block['blockName'] ) {
				$term = isset( $block['attrs']['term'] ) ? $block['attrs']['term'] : '';

				if ( 'post_tag' === $term ) {
					$block_content = str_replace(
						'<div class="taxonomy-post_tag wp-block-post-terms">',
						'<div class="taxonomy-post_tag wp-block-post-terms flex">' . prestivo_lite_get_svg( array( 'icon' => 'tags' ) ),
						$block_content
					);
				}

				if ( 'category' === $term ) {
					$block_content = str_replace(
						'<div class="taxonomy-category wp-block-post-terms">',
						'<div class="taxonomy-category wp-block-post-terms flex">' . prestivo_lite_get_svg( array( 'icon' => 'category' ) ),
						$block_content
					);
				}

				return $block_content;
			}

			if ( 'core/post-date' === $block['blockName'] ) {
				return str_replace(
					'<div class="wp-block-post-date">',
					'<div class="wp-block-post-date flex">' . prestivo_lite_get_svg( array( 'icon' => 'calendar' ) ),
					$block_content
				);
			}

			if ( 'core/post-author' === $block['blockName'] ) {
				return str_replace(
					'<div class="wp-block-post-author">',
					'<div class="wp-block-post-author flex">' . prestivo_lite_get_svg( array( 'icon' => 'user' ) ),
					$block_content
				);
			}
		}

		if ( is_single() && 'core/post-navigation-link' === $block['blockName'] ) {

			$type = isset( $block['attrs']['type'] ) ? $block['attrs']['type'] : 'next';

			/*
			 * Match the label element rather than its text. The previous implementation
			 * looked for the literal string "Next Post", so the icon disappeared on any
			 * site running a translation or a custom label.
			 */
			$icon = ( 'previous' === $type )
				? prestivo_lite_get_svg( array( 'icon' => 'prev' ) )
				: prestivo_lite_get_svg( array( 'icon' => 'next' ) );

			$block_content = preg_replace_callback(
				'#(<span class="post-navigation-link__label">)(.*?)(</span>)#s',
				static function ( $matches ) use ( $icon, $type ) {
					return ( 'previous' === $type )
						? $matches[1] . $icon . $matches[2] . $matches[3]
						: $matches[1] . $matches[2] . $icon . $matches[3];
				},
				$block_content,
				1
			);

			return $block_content;
		}

		return $block_content;
	}
endif;

add_filter( 'render_block', 'prestivo_lite_block_wrapper', 10, 2 );
