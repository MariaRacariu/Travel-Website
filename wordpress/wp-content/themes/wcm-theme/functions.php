<?php
function setup_wcm_theme(){
    //Add theme support
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-logo');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'setup_wcm_theme');

function create_custom_posttypes() {
    // Custom Post Types Options
    register_post_type( 'wcm_travel',
        array(
            'labels' => array(
                'name' => __( 'Travel' ),
                'singular_name' => __( 'Travel' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
        )
    );
    // Custom Post Types Options
    register_post_type( 'travel_matches',
        array(
            'labels' => array(
                'name' => __( 'Travel Matches' ),
                'singular_name' => __( 'Matches' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
        )
    );
    // Custom Post Types Options
    register_post_type( 'travel_cup',
        array(
            'labels' => array(
                'name' => __( 'Travel Cup' ),
                'singular_name' => __( 'Cup' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
        )
    );
    // Custom Post Types Options
    register_post_type( 'travel_camp',
        array(
            'labels' => array(
                'name' => __( 'Travel Camp' ),
                'singular_name' => __( 'Camp' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
        )
    );
    // Custom Post Types Options
    register_post_type( 'travel_soccer',
        array(
            'labels' => array(
                'name' => __( 'Travel Soccer' ),
                'singular_name' => __( 'Soccer' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
        )
    );  
    // Custom Post Types Options
    register_post_type( 'netr_team',
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'Team' ),
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
        )
    );  
}
// Hooking up our function to theme setup
add_action( 'init', 'create_custom_posttypes');
?>