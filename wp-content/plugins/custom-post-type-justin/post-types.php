<?php 
/*Plugin Name: Create Hotel Post Type
Description: This plugin registers the 'hotel' post type.
Version: 1.0
License: GPLv2
*/

// register custom post type to work with
function justin_create_post_type() {
	// set up labels
	$labels = array(
 		'name' => 'Hotels',
    	'singular_name' => 'Hotel',
    	'add_new' => 'Add New Hotel',
    	'add_new_item' => 'Add New Hotel',
    	'edit_item' => 'Edit Hotel',
    	'new_item' => 'New Hotel',
    	'all_items' => 'All Hotels',
    	'view_item' => 'View Hotel',
    	'search_items' => 'Search Hotels',
    	'not_found' =>  'No Hotels Found',
    	'not_found_in_trash' => 'No Hotels found in Trash', 
    	'parent_item_colon' => '',
    	'menu_name' => 'Hotels',
    );
    //register post type
	register_post_type( 'hotel', array(
		'labels' => $labels,
		'has_archive' => true,
 		'public' => true,
                'menu_icon'     => 'dashicons-store',
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
		'taxonomies' => array( 'post_tag', 'category' ),	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'hotels' ),
		'menu_position' => 20,
		'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes', 'comments' )
		)
	);
}
add_action( 'init', 'justin_create_post_type' );
?>