<?php
/**
 * Enqueue theme assets
 *
 * @package vrtechglobal
 */

add_action( 'wp_enqueue_scripts', function () {
	// Styles
	wp_enqueue_style( 'vrtech-aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', array(), '2.3.4' );
	wp_enqueue_style( 'vrtech-utilities', VRTECH_THEME_URI . '/assets/css/components/_utilities.css', array( 'vrtech-aos' ), VRTECH_THEME_VERSION );
	wp_enqueue_style( 'vrtech-header', VRTECH_THEME_URI . '/assets/css/components/_header.css', array( 'vrtech-utilities' ), VRTECH_THEME_VERSION );
	wp_enqueue_style( 'vrtech-hero', VRTECH_THEME_URI . '/assets/css/components/_hero.css', array( 'vrtech-header' ), VRTECH_THEME_VERSION );
	wp_enqueue_style( 'vrtech-sections', VRTECH_THEME_URI . '/assets/css/components/_sections.css', array( 'vrtech-hero' ), VRTECH_THEME_VERSION );
	wp_enqueue_style( 'vrtech-footer', VRTECH_THEME_URI . '/assets/css/components/_footer.css', array( 'vrtech-sections' ), VRTECH_THEME_VERSION );
	wp_enqueue_style( 'vrtech-newsletter', VRTECH_THEME_URI . '/assets/css/components/_newsletter.css', array( 'vrtech-footer' ), VRTECH_THEME_VERSION );
	wp_enqueue_style( 'vrtech-main', VRTECH_THEME_URI . '/assets/css/main.css', array( 'vrtech-newsletter' ), VRTECH_THEME_VERSION );

	// Scripts
	wp_enqueue_script( 'vrtech-aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), '2.3.4', true );
	wp_enqueue_script( 'vrtech-main', VRTECH_THEME_URI . '/assets/js/main.js', array( 'vrtech-aos' ), VRTECH_THEME_VERSION, true );
} );