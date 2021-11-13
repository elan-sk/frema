<?php
/*
All the functions are in the PHP pages in the functions/ folder.
*/

require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/search.php');
require_once locate_template('/functions/feedback.php');
require_once locate_template('/functions/plugins.php');
require_once locate_template('/functions/post-types.php');

add_action('after_setup_theme', 'true_load_theme_textdomain');

function mytheme_setup() {
    add_theme_support('custom-logo');
}

function true_load_theme_textdomain(){
    load_theme_textdomain( 'bst', get_template_directory() . '/languages' );
}

function bake_my_wp_remove_storefront_sidebar() {
	if ( is_woocommerce() || is_checkout() ) {
		remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
	}
}
	
add_action( 'get_header', 'bake_my_wp_remove_storefront_sidebar' );
