<?php
/**
 * Template helpers
 *
 * @package vrtechglobal
 */

function vrtech_sr_only( $text ) {
	return '<span class="sr-only">' . esc_html( $text ) . '</span>';
}

function vrtech_menu_fallback() {
	echo '<ul id="primaryMenu" class="menu">';
	wp_list_pages( array( 'title_li' => '' ) );
	echo '</ul>';
}