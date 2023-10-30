<?php
/**
 * Enroute functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Enroute
 * @since Enroute 1.0
 */


if ( ! function_exists( 'enroute_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Enroute 1.0
	 *
	 * @return void
	 */
	function enroute_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'enroute' );
	}

endif;

add_action( 'after_setup_theme', 'enroute_support' );

if ( ! function_exists( 'enroute_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Enroute 1.0
	 *
	 * @return void
	 */
	function enroute_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'enroute-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'enroute-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'enroute_styles' );
