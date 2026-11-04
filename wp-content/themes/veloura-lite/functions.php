<?php
/**
 * Veloura Lite functions
 */

if ( ! function_exists( 'veloura_lite_setup' ) ) :
function veloura_lite_setup() {
    load_theme_textdomain( 'veloura-lite', get_template_directory() . '/languages' );
	
	/**
	* About Theme Function
	*/
	require get_theme_file_path( '/about-theme/about-theme.php' );
}
endif; 
add_action( 'after_setup_theme', 'veloura_lite_setup' );

//Admin css
	add_editor_style( array( 'assets/css/admin.css' ) );

if ( ! function_exists( 'veloura_lite_styles' ) ) :
	function veloura_lite_styles() {
		// Register theme stylesheet.
		wp_register_style('veloura-lite-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);
		
		wp_enqueue_style( 
			'fontawesome-style', 
			get_template_directory_uri() .'/assets/fontawesome/css/all.css' 
		);

		wp_enqueue_script('veloura-lite-js',
        	get_template_directory_uri() . '/assets/js/effects.js',array(),
        	wp_get_theme()->get('Version'),true 
   		);

		wp_enqueue_script(
			'veloura-lite-slider',
			get_template_directory_uri() . '/assets/js/veloura-slider.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);

		// Scroll to top CSS and JS
		wp_enqueue_style( 'dashicons' );
		
		wp_enqueue_style( 'scroll-to-top-style',
			get_template_directory_uri() . '/assets/css/scroll-to-top.css',
			array(),
			wp_get_theme()->get('Version')
		);

		wp_enqueue_script( 'scroll-to-top-js',
			get_template_directory_uri() . '/assets/js/scroll-to-top.js',
			array(),
			wp_get_theme()->get('Version'),
			true
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'veloura-lite-style' );

		wp_style_add_data( 'veloura-lite-style', 'rtl', 'replace' );

	}
endif;
add_action( 'wp_enqueue_scripts', 'veloura_lite_styles' );

