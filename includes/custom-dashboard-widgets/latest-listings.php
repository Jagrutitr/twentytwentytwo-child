<?php
add_action('wp_dashboard_setup', 'dashboard_listings_widgets');
  
function dashboard_listings_widgets() {
    global $wp_meta_boxes;
 
    wp_add_dashboard_widget('dashboard_listings', 'My Listings', 'dashboard_listings');
}
 
function dashboard_listings() {
    $args = array(  
        'post_type' => 'listings',
        'post_status' => 'publish',
        'posts_per_page' => 5, 
        
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
        $author = get_the_author_meta( 'nicename' );    ?>
        <div class="dashboard__listing_wrap activity-block">
            <h3><?php the_title(); ?></h3>
            <div class="meta-date"><?php echo  "<b>" . __('Date Published: ') . "</b>". get_the_date(); ?></div>
            <div class="meta-author"><?php echo  "<b>" . __('Author: ') . "</b>". $author; ?></div> 
            
        </div><?php
    endwhile;

    wp_reset_postdata(); 
}