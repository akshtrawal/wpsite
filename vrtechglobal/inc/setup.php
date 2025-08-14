<?php
/**
 * Theme setup
 *
 * @package vrtechglobal
 */

add_action( 'after_setup_theme', function () {
	load_theme_textdomain( 'vrtechglobal', VRTECH_THEME_PATH . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 64, 'width' => 200, 'flex-width' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'script', 'style' ) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'vrtechglobal' ),
		'footer'  => __( 'Footer Menu', 'vrtechglobal' ),
	) );

	add_image_size( 'card-thumb', 640, 360, true );
} );

add_action( 'widgets_init', function () {
	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'vrtechglobal' ),
		'id'            => 'footer-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
} );