<?php

/*
|--------------------------------------------------------------------------
| Sparky - Main theme class
|--------------------------------------------------------------------------
| 
| This class will provide simplified methods to work with some of the
| functionality that WordPress provides.
| 
| The aim of this class is to act as a helper, so feel free to modify it.
| 
*/

class Sparky {
	
	/**
	 * Initialise and run any kind that needs to be called in the beginning.
	 *
	 * @return void
	 */
	public static function init()
	{
		add_theme_support( 'menus' );
		add_theme_support( 'post-thumbnails' );
	}
	
	
	
	/**
	 * Outputs/returns a string and allows you to perform a find and replace for special
	 * keywords. For example:
	 * 		$output = '<h1>{title}</h1>';
	 * 		$replacements = array( '{title}' => 'My Title' );
	 * 		Sparky::render( $output , $replacements );
	 *
	 * @param  string  $output
	 * @param  array   $replacements
	 * @param  boolean $echo
	 *
	 * @return void
	 */
	public static function render( $output , $replacements = array() , $echo = true ) {
		$find = array_keys( $replacements );
		$replace = array_values( $replacements );
		
		$html = str_replace( $find , $replace , $output );
		
		if ( !$echo ) return $html;
		
		echo $html;
	}
	
	
	
	/**
	 * Outputs a generic title.
	 * Edit this as to your liking.
	 *
	 * @return void
	 */
	public static function title() {
		echo is_front_page() ? 'Home | ' : wp_title( '|' , false , 'right' );
		bloginfo('name');
	}
	
	
	
	/**
	 * Adds custom image sizes so WordPress is aware and will resize into
	 * those sizes when an image is uploaded.
	 *
	 * @param array $sizes Array is expected to be formatted as such:
	 *                     'size-name' => '600x200'
	 */
	public static function add_custom_image_sizes( $sizes )
	{
		if ( empty($sizes) ) return false;
		
		foreach ( $sizes as $name => $size ) {
			list( $w , $h ) = explode( 'x' , $size );
			add_image_size( $name , $w , $h , true );
		}
	}
	
	
	
	/**
	 * Returns a menu based on what you have named it in the WP Admin section.
	 *
	 * @param  string $name
	 *
	 * @return void string
	 */
	public static function menu( $name )
	{
		$args = array(
			'echo' => false,
			'menu' => $name
		);
		
		return wp_nav_menu( $args );
	}
	
	
	
	/**
	 * Retrieves the source for the feature image.
	 *
	 * @param  string $size
	 * @param  mixed  $post_id passing null will retrieve the current post's ID.
	 *
	 * @return mixed           returns null or a string
	 */
	public static function feature_image( $size = 'full' , $post_id = null )
	{
		if ( !has_post_thumbnail() ) return null;
		
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ) , $size );
		
		return $image[0];
	}
	
	
	
	/**
	 * Return a list of recent posts.
	 * Returns false if none are found.
	 *
	 * @param  integer $count
	 * @param  string  $type
	 *
	 * @return mixed
	 */
	public static function recent_posts( $count = 5 , $type = 'post' )
	{
		$args = array(
			'numberposts' => $count,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'post_type' => $type,
			'post_status' => 'publish'
		);
		
		$recent_posts = wp_get_recent_posts( $args );
		
		// Return false if no posts are found.
		if ( !count($recent_posts) ) return false;
		
		return $recent_posts;
	}
	
	
	
	/**
	 * Returns an array of pages.
	 *
	 * @param  mixed $child_of  'null' will retrieve the current page's ID
	 *                          '0' will return all the top-level pages
	 *                          '1' or more will retrieve the children of that page ID.
	 *                          By default, it will return the current page's children.
	 *                          
	 *
	 * @return array
	 */
	public static function pages( $child_of = null )
	{
		// If the child_of is specifically NULL, we will retrieve the current page's ID.
		if ( is_null($child_of) ) {
			$child_of = get_the_ID();
		}
		
		$args = array(
			'sort_order' => 'ASC',
			'sort_column' => 'menu_order,post_title',
			'hierarchical' => 1,
			'child_of' => $child_of,
			'parent' => -1,
			'post_type' => 'page',
			'post_status' => 'publish'
		);
		
		return get_pages( $args );
	}
}
