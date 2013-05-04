<?php

// let's create the function for the custom type. This is for custom Staff.
// This may be edited to whatever you need it to be.
// http://codex.wordpress.org/Function_Reference/register_post_type
function custom_type_staff()
{
	register_post_type( 'custom_type_staff' , array(
		'labels' => array(
			'name' => 'Staff', // This is the title of the group
			'singular_name' => 'Staff', // This is the individual type
			'all_items' => 'All Staff', // The all items menu item
			'add_new' => 'Add New', // The add new menu item
			'add_new_item' => 'Add New Staff', // Add new display title
			'edit' =>  'Edit', // Edit dialog
			'edit_item' => 'Edit Staff', // Edit item title
			'new_item' => 'New Staff', // New item title
			'view_item' => 'View Staff', // View display title
			'search_items' => 'Search Staff', // Search custom type title
			'not_found' =>  'No staff found in the Database.', // This displays if there are no entries yet
			'not_found_in_trash' => 'No staff found in Trash', // This displays if there is nothing in the trash
			'parent_item_colon' => ''
		),
		
		'description' => 'Staff members custom post type.', // Custom Type Description
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'show_ui' => true,
		'query_var' => true,
		'menu_position' => 8, // this is what order you want it to appear in on the left hand side menu
		'menu_icon' => img('assets/custom-post-icon.png'), // the icon for the custom post type menu (doesn't exist)
		'rewrite'	=> array( 'slug' => 'staff', 'with_front' => false ), // you can specify its url slug
		// 'has_archive' => 'staff', // Uncomment this if this custom post automatically archives after a week or so.
		'capability_type' => 'post',
		'hierarchical' => false,
		
		// the next one is important, it tells what's enabled in the post editor
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	));
	
	/* this adds your post categories to your custom post type */
	// register_taxonomy_for_object_type('category', 'staff');
	/* this adds your post tags to your custom post type */
	// register_taxonomy_for_object_type('post_tag', 'staff');
	
} 

// adding the function to the Wordpress init
add_action( 'init', 'custom_type_staff');
