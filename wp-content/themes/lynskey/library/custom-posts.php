<?php

add_action( 'init', 'codex_recipe_init' );
/**
 * Register a product post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_recipe_init() {
    $labels = array(
        'name'               => _x( 'Recipes', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Recipe', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Recipes', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Recipe', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'recipe', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Recipe', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Recipe', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Recipe', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Recipe', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Recipe', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Recipes', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Recipes:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No bios found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No bios found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(

        'labels' 				=> $labels,
        'public' 				=> true,
        'publicly_queryable' 	=> true,
        'has_archive' 			=> true,
        'show_ui'				=> true,
        'query_var' 			=> true,
        'rewrite' 				=> true,
        'capability_type' 		=> 'post',
        'hierarchical' 			=> false,
        'menu_position' 		=> null,
        'supports' 				=> array('title','thumbnail'),
//        'supports' 				=> array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'),
        'taxonomies'		 => array( 'category' )
    );

    register_post_type( 'recipe', $args );
}

add_action( 'init', 'codex_location_init' );
/**
 * Register a product post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_location_init() {
    $labels = array(
        'name'               => _x( 'Locations', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Location', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Locations', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Location', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'locations', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Location', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Location', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Location', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Location', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Locations', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Locations', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Locations:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No locations found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No locations found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(

        'labels' 				=> $labels,
        'public' 				=> true,
        'publicly_queryable' 	=> true,
        'has_archive' 			=> true,
        'show_ui'				=> true,
        'query_var' 			=> true,
        'rewrite' 				=> true,
        'capability_type' 		=> 'post',
        'hierarchical' 			=> false,
        'menu_position' 		=> null,
        'supports' 				=> array('title','thumbnail'),
        'taxonomies'		 => array( 'category' )
    );

    register_post_type( 'location', $args );
}

add_action( 'init', 'codex_snapchat_init' );
/**
 * Register a product post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_snapchat_init() {
    $labels = array(
        'name'               => _x( 'Snapchats', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Snapchat', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Snapchats', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Snapchat', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'snapchat', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Snapchat', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Snapchat', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Snapchat', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Snapchat', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Snapchat', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Snapchats', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Snapchats:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No snapchats found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No snapchats found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(

        'labels' 				=> $labels,
        'public' 				=> true,
        'publicly_queryable' 	=> true,
        'has_archive' 			=> true,
        'show_ui'				=> true,
        'query_var' 			=> true,
        'rewrite' 				=> true,
        'capability_type' 		=> 'post',
        'hierarchical' 			=> false,
        'menu_position' 		=> null,
        'supports' 				=> array('title','thumbnail'),
//        'supports' 				=> array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'),
        'taxonomies'		 => array( 'category' )
    );

    register_post_type( 'snapchat', $args );
}

?>