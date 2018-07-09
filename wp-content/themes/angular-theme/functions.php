<?php

add_action( 'wp_enqueue_scripts', 'parent_styles');
function parent_styles(){
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
}

$script_loc = get_template_directory_uri() . '/dist/';
if ( defined( name: 'WP_ENV') && 'LOCAL' === WP_ENV){
	
}
