<?php
/**
 * VRTech Global Theme functions and definitions
 *
 * @package vrtechglobal
 */

if ( ! defined( 'VRTECH_THEME_VERSION' ) ) {
	define( 'VRTECH_THEME_VERSION', '1.0.0' );
}

if ( ! defined( 'VRTECH_THEME_PATH' ) ) {
	define( 'VRTECH_THEME_PATH', get_template_directory() );
}

if ( ! defined( 'VRTECH_THEME_URI' ) ) {
	define( 'VRTECH_THEME_URI', get_template_directory_uri() );
}

// Include theme files.
require_once VRTECH_THEME_PATH . '/inc/setup.php';
require_once VRTECH_THEME_PATH . '/inc/assets.php';
require_once VRTECH_THEME_PATH . '/inc/cpt.php';
require_once VRTECH_THEME_PATH . '/inc/metaboxes.php';
require_once VRTECH_THEME_PATH . '/inc/options.php';
require_once VRTECH_THEME_PATH . '/inc/demo-content.php';
require_once VRTECH_THEME_PATH . '/inc/template-tags.php';