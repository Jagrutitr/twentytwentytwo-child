<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}

//Include required files
require_once('includes/cpt/listings.php');
require_once('includes/custom-dashboard-widgets/latest-listings.php');