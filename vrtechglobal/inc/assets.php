<?php
/**
 * Enqueue theme assets
 *
 * @package vrtechglobal
 */

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'vrtech-aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', array(), '2.3.4' );
	wp_enqueue_style( 'vrtech-main', VRTECH_THEME_URI . '/assets/css/main.css', array( 'vrtech-aos' ), VRTECH_THEME_VERSION );

	wp_enqueue_script( 'vrtech-aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), '2.3.4', true );
	wp_enqueue_script( 'vrtech-main', VRTECH_THEME_URI . '/assets/js/main.js', array( 'vrtech-aos' ), VRTECH_THEME_VERSION, true );
} );