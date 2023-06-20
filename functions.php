<?php
/**
 * For Editors functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since For Editors 1.0
 */


if ( ! function_exists( 'foreditors_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since For Editors 1.0
	 *
	 * @return void
	 */
	function foreditors_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'foreditors_support' );

if ( ! function_exists( 'foreditors_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since For Editors 1.0
	 *
	 * @return void
	 */
	function foreditors_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'foreditors-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'foreditors-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'foreditors_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Register my Own Pattern Categories
 */

function afn_block_pattern_category() {

	register_block_pattern_category( 'book-portfolio', array(
		'label' => __( 'Book Portfolio', 'text-domain' ),
		'description' => __( 'Block patterns for book portfolio pages' ),
	) );

	register_block_pattern_category( 
		'page-sections', 
		 array(
			 'label' => __( 'Page Sections', 'text-domain' ),
			 'description' => __( 'various sections to build landing and other pages quickly', 'text-domain' ),
		 ) 
	 );
}

add_action( 'init', 'afn_block_pattern_category' );

/**
 * Remove default WordPress Pattern Categories
 */

function afn_unregister_category() {
	unregister_block_pattern_category( 'gallery');
}

add_action( 'init', 'afn_unregister_category' );