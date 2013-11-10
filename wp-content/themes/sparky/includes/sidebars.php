<?php

if ( function_exists('register_sidebar') )
{
	$sidebar_defaults = [
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	];
	
	// Define the sidebars here.
	$sidebars = [
		[ 'name' => 'Home Page Sidebar' ],
		[ 'name' => 'Article Listing Sidebar' ],
		[ 'name' => 'Single Article Sidebar' ]
	];
	
	foreach( $sidebars as $sidebar )
	{
		register_sidebar( $sidebar + $sidebar_defaults );
	}
}
