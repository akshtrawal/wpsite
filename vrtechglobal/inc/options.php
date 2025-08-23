<?php
/**
 * Theme options via Customizer
 *
 * @package vrtechglobal
 */

if ( ! function_exists( 'vrtech_sanitize_hero_slides' ) ) {
	function vrtech_sanitize_hero_slides( $value ) {
		if ( is_array( $value ) ) {
			return wp_json_encode( $value );
		}
		if ( is_string( $value ) ) {
			$value = trim( wp_unslash( $value ) );
			if ( $value === '' ) {
				return '';
			}
			$decoded = json_decode( $value, true );
			if ( is_array( $decoded ) ) {
				return wp_json_encode( $decoded );
			}
			return sanitize_textarea_field( $value );
		}
		return '';
	}
}

add_action( 'customize_register', function ( $wp_customize ) {
	$wp_customize->add_section( 'vrtech_home', array(
		'title'    => __( 'Homepage', 'vrtechglobal' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'vrtech_hero_slides', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'vrtech_sanitize_hero_slides',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vrtech_hero_slides_control', array(
		'label'       => __( 'Hero Slides (JSON array of {title,desc,btn,url,image})', 'vrtechglobal' ),
		'section'     => 'vrtech_home',
		'settings'    => 'vrtech_hero_slides',
		'type'        => 'textarea',
		'input_attrs' => array( 'rows' => 8, 'placeholder' => '[{"title":"Slide 1","desc":"...","btn":"Explore","url":"/services","image":"https://..."}]' ),
	) ) );

	$wp_customize->add_setting( 'vrtech_contact_email', array(
		'default'           => get_option( 'admin_email' ),
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_email',
	) );
	$wp_customize->add_control( 'vrtech_contact_email', array(
		'label'   => __( 'Contact form recipient email', 'vrtechglobal' ),
		'section' => 'title_tagline',
		'type'    => 'email',
	) );
} );