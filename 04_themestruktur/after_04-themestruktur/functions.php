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

?>