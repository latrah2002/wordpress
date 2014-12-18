<?php
/**
* The functions file for the One page style child theme
*/

function lander_scripts() {
	if ( is_front_page() ) {
		wp_enqueue_style( 'lander-styles', get_stylesheet_directory_uri() . '/lander-style.css');
		
		wp_enqueue_script( 'lander-scripts', get_stylesheet_directory_uri() . '/js/landerscripts.js', array('jquery'), '20140602', false);
        
	}
}

		
add_action ('wp_enqueue_scripts', 'lander_scripts');

add_image_size ('testimonial-mug', 253, 253, true);

function exclude_testimonials( $query ){
    if ( !$query->is_category('testimonial') && $query->is_main_query() ) {
        $query->set( 'cat', '-52' );
    }
}
add_action( 'pre_get_posts', 'exclude_testimonials' );

?>