<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/style-beige.css' );
}

pll_register_string('Card-title', 'Mon Panier');
pll_register_string('Account-title', 'Mon compte');

?>