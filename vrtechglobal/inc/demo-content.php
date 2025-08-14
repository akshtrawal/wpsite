<?php
/**
 * Create demo pages and menus on theme activation (idempotent)
 *
 * @package vrtechglobal
 */

add_action( 'after_switch_theme', function () {
	// Create key pages if they do not exist.
	$pages = array(
		'Home'     => array( 'template' => 'home.php' ),
		'About'    => array( 'template' => 'page-about.php' ),
		'Services' => array( 'template' => 'page-services.php' ),
		'Blog'     => array( 'template' => 'page-blog.php' ),
		'Careers'  => array( 'template' => 'page-careers.php' ),
		'Contact'  => array( 'template' => 'page-contact.php' ),
	);

	$page_ids = array();
	foreach ( $pages as $title => $data ) {
		$existing = get_page_by_title( $title );
		if ( $existing ) {
			$page_ids[ $title ] = $existing->ID;
			continue;
		}
		$page_id = wp_insert_post( array(
			'post_title'   => $title,
			'post_type'    => 'page',
			'post_status'  => 'publish',
		) );
		if ( ! is_wp_error( $page_id ) ) {
			$page_ids[ $title ] = $page_id;
			if ( ! empty( $data['template'] ) ) {
				update_post_meta( $page_id, '_wp_page_template', $data['template'] );
			}
		}
	}

	// Set static front page and posts page.
	if ( ! empty( $page_ids['Home'] ) && ! empty( $page_ids['Blog'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', intval( $page_ids['Home'] ) );
		update_option( 'page_for_posts', intval( $page_ids['Blog'] ) );
	}

	// Create a primary menu with key items and assign it.
	$menu_name = 'Primary';
	$menu_id   = wp_create_nav_menu( $menu_name );
	if ( ! is_wp_error( $menu_id ) ) {
		$home_id     = $page_ids['Home'] ?? 0;
		$about_id    = $page_ids['About'] ?? 0;
		$services_id = $page_ids['Services'] ?? 0;
		$blog_id     = $page_ids['Blog'] ?? 0;
		$careers_id  = $page_ids['Careers'] ?? 0;
		$contact_id  = $page_ids['Contact'] ?? 0;

		$items = array( $home_id, $about_id, $services_id, $blog_id, $careers_id, $contact_id );
		foreach ( $items as $pid ) {
			if ( $pid ) {
				wp_update_nav_menu_item( $menu_id, 0, array(
					'menu-item-object-id' => $pid,
					'menu-item-object'    => 'page',
					'menu-item-type'      => 'post_type',
					'menu-item-status'    => 'publish',
				) );
			}
		}
		$locations = get_theme_mod( 'nav_menu_locations' );
		$locations['primary'] = $menu_id;
		set_theme_mod( 'nav_menu_locations', $locations );
	}
} );