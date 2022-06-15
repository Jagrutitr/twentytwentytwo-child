<?php
function create_listings_posttype() {
  register_post_type( 'listings',
    // CPT Options
    array(
      'labels' => array(
      'name' => __( 'Listings' ),
      'singular_name' => __( 'Listing' ),
      'add_new_item'        => __( 'Add New Listing' ),
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'listings'),
    'supports' => array( 'title','editor','author')
    )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_listings_posttype' );