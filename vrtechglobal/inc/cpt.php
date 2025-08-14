<?php
/**
 * Custom post types
 *
 * @package vrtechglobal
 */

add_action( 'init', function () {
	$labels = array(
		'name'               => _x( 'Case Studies', 'post type general name', 'vrtechglobal' ),
		'singular_name'      => _x( 'Case Study', 'post type singular name', 'vrtechglobal' ),
		'menu_name'          => _x( 'Case Studies', 'admin menu', 'vrtechglobal' ),
		'name_admin_bar'     => _x( 'Case Study', 'add new on admin bar', 'vrtechglobal' ),
		'add_new'            => _x( 'Add New', 'case study', 'vrtechglobal' ),
		'add_new_item'       => __( 'Add New Case Study', 'vrtechglobal' ),
		'new_item'           => __( 'New Case Study', 'vrtechglobal' ),
		'edit_item'          => __( 'Edit Case Study', 'vrtechglobal' ),
		'view_item'          => __( 'View Case Study', 'vrtechglobal' ),
		'all_items'          => __( 'All Case Studies', 'vrtechglobal' ),
		'featured_image'     => __( 'Featured Image', 'vrtechglobal' ),
		'set_featured_image' => __( 'Set featured image', 'vrtechglobal' ),
		'archives'           => __( 'Case Study Archives', 'vrtechglobal' ),
	);

	register_post_type( 'case_study', array(
		'labels'             => $labels,
		'public'             => true,
		'show_in_rest'       => true,
		'has_archive'        => true,
		'menu_icon'          => 'dashicons-analytics',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	) );
} );