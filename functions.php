<?php
/**
 * Theme functions and definitions.
 *
 * @package Larris
 */

/**
 * Enqueue the main theme stylesheet.
 *
 * @return void
 */
function larris_enqueue_styles() {
	// Enqueue the main style.css from the theme root.
	wp_enqueue_style(
		'yourtheme-style', // Handle.
		get_stylesheet_uri(), // Points to style.css in theme root.
		array(), // Dependencies.
		filemtime( get_template_directory() . '/style.css' ) // Version: file modification time for cache-busting.
	);
}
add_action( 'wp_enqueue_scripts', 'larris_enqueue_styles' );