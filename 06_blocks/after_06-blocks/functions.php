<?php

// --- navigation registrieren
add_action( 'after_setup_theme', 'navigation_registrieren' );
function navigation_registrieren() {
	register_nav_menu( 'headernavigation', 'Navigation im Header' );
};

// --- logofeld im customizer
add_action( 'after_setup_theme', 'theme_prefix_setup' );
function theme_prefix_setup() {
	add_theme_support( 'custom-logo' );
};

// --- beitragsbilder aktivieren
add_theme_support( 'post-thumbnails' );

// --- svg upload erlauben
function cc_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

// --- javascript-file verknüpfen
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );
function additional_custom_styles() {
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js' );
};

?>