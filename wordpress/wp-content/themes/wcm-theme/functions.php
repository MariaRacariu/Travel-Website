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

function create_posttype() {
  
    register_post_type( 'movies',
    // Custom Post Types Options
        array(
            'labels' => array(
                'name' => __( 'wcm_travel' ),
                'singular_name' => __( 'Travel' )
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
  
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
?>