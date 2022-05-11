<?php
 //Add theme support
function setup_wcm_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-logo');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support('title-tag');
}
// Hooking up the function to theme setup
add_action('after_setup_theme', 'setup_wcm_theme');

//Creating custom post types
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
// Hooking up the function to init
add_action( 'init', 'create_custom_posttypes');

//Creating custom taxonomy 
function register_custom_taxonomy(){
    $labels = array(
        'name'              => _x('Ages','Ages'),
        'singular_name'     => _x('Age', 'Age'),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );
    register_taxonomy('travel_age', ['wcm_travel', 'travel_camp', 'travel_cup', 'page'], $args);

    $labels = array(
        'name'              => _x('Countries','Countries'),
        'singular_name'     => _x('Country', 'Country'),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );
    register_taxonomy('travel_country', ['wcm_travel', 'travel_camp', 'travel_cup', 'travel_soccer', 'page'], $args);

    $labels = array(
        'name'              => _x('Sport Leagues','Sport Leagues'),
        'singular_name'     => _x('Sport League', 'Sport League'),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );
    register_taxonomy('travel_sport_league', ['wcm_travel', 'travel_soccer','travel_matches', 'page'], $args);

    $labels = array(
        'name'              => _x('Sport Types','Sport Types'),
        'singular_name'     => _x('Sport Type', 'Sport Type'),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );
    register_taxonomy('travel_sport_type', ['wcm_travel', 'travel_camp', 'travel_cup', 'travel_soccer', 'page'], $args);

    $labels = array(
        'name'              => _x('Travel Types','Travel Types'),
        'singular_name'     => _x('Travel Types', 'Travel Types'),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );
    register_taxonomy('travel_type', ['wcm_travel', 'travel_camp', 'travel_cup', 'travel_matches', 'page'], $args);

}
// Hooking up the function to init
add_action( 'init', 'register_custom_taxonomy');

//Linking main.css
function add_theme_scripts(){
    wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/main.css', array(),'1.0','all');
}
// Hooking up the function to scripts startup
add_action('wp_enqueue_scripts','add_theme_scripts');

//Navigation
function menus(){
    $location = array(
        'primary' => 'Desktop Primary Navigation'
    );

    register_nav_menus($location);
}
//Hooking up the function to init
add_action('init', 'menus');