<?php
/**
 * Theme options via Customizer
 *
 * @package vrtechglobal
 */

add_action( 'customize_register', function ( $wp_customize ) {
	$wp_customize->add_section( 'vrtech_home', array(
		'title'    => __( 'Homepage', 'vrtechglobal' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'vrtech_hero_slides', array( 'default' => array(), 'transport' => 'refresh' ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vrtech_hero_slides_control', array(
		'label'       => __( 'Hero Slides (JSON array of {title,desc,btn,url})', 'vrtechglobal' ),
		'section'     => 'vrtech_home',
		'settings'    => 'vrtech_hero_slides',
		'type'        => 'textarea',
		'input_attrs' => array( 'rows' => 8, 'placeholder' => '[{"title":"Slide 1","desc":"...","btn":"Explore","url":"/services"}]' ),
	) ) );

	$wp_customize->add_setting( 'vrtech_contact_email', array( 'default' => get_option( 'admin_email' ), 'transport' => 'refresh' ) );
	$wp_customize->add_control( 'vrtech_contact_email', array(
		'label'   => __( 'Contact form recipient email', 'vrtechglobal' ),
		'section' => 'title_tagline',
		'type'    => 'email',
	) );
} );