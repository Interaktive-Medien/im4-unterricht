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

// --- post type portfolioitems
function portfolioitem() {
	$labels = array(
		'name'                  => _x( 'Portfolioitems', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Portfolioitem', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Portfolioitem', 'text_domain' ),
		'name_admin_bar'        => __( 'Portfolioitem', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Alle Portfolioitems', 'text_domain' ),
		'add_new_item'          => __( 'Neues Portfolioitem hinzufügen', 'text_domain' ),
		'add_new'               => __( 'Neues Portfolioitem hinzufügen', 'text_domain' ),
		'new_item'              => __( 'Neues Portfolioitem', 'text_domain' ),
		'edit_item'             => __( 'Portfolioitem bearbeiten', 'text_domain' ),
		'update_item'           => __( 'Portfolioitem updaten', 'text_domain' ),
		'view_item'             => __( 'Portfolioitem ansehen', 'text_domain' ),
		'view_items'            => __( 'Portfolioitems ansehen', 'text_domain' ),
		'search_items'          => __( 'Portfolioitem suchen', 'text_domain' ),
		'not_found'             => __( 'Portfolioitem nicht gefunden', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Portfolioitem', 'text_domain' ),
		'description'           => __( 'Portfolioitem', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-open-folder',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'portfolioitem', $args );
}
add_action( 'init', 'portfolioitem', 0 );

?>