<?php
function mytheme_enqueue_styles() {
    wp_enqueue_style('larris-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');


add_action( 'wp_enqueue_scripts', 'larris_enqueue_style' );

function larris_enqueue_style() {
	wp_enqueue_style(
		'theme-slug-style', 
		get_stylesheet_uri()
	);

	wp_enqueue_style( 
		'theme-slug-primary',
		get_parent_theme_file_uri( 'assets/css/primary.css' )
	);
}


add_action( 'wp_enqueue_scripts', 'larris_enqueue_script' );

function larris_enqueue_script() {
	wp_enqueue_script( 
		'larris-primary-script',
		get_parent_theme_file_uri( 'assets/js/main.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}



// Include the TGM Plugin Activation class from the includes folder
require_once get_template_directory() . '/includes/tgmpa-settings/class-tgm-plugin-activation.php';
// Include the TGM Plugin Activation configuration file
require_once get_template_directory() . '/includes/tgmpa-settings/tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'register_required_plugins' );