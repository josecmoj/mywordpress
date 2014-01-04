<?php

/*
|--------------------------------------------------------------------------
| Functions (What is this file?)
|--------------------------------------------------------------------------
| 
| This file is automatically loaded by WordPress and allows us to do quite
| a bit of awesome things. Such as override some functionality, add new
| features, new image sizes, new post types and a lot more.
| 
*/


/*
|--------------------------------------------------------------------------
| Includes
|--------------------------------------------------------------------------
| 
| Let's load the files we need from our 'includes' directory.
| You can comment out any file that you do not need. None of these files
| are absolutely required.
| 
*/

$current_dir  = dirname( __FILE__ ) . '/';

define( 'DIR_INCLUDES' , $current_dir . 'includes/' );
define( 'DIR_THEME'    , get_stylesheet_directory_uri() . '/' );
define( 'DIR_PARTIALS' , $current_dir . '_partials/' );

require_once DIR_INCLUDES . 'helpers.php';
require_once DIR_INCLUDES . 'sparky.class.php';
require_once DIR_INCLUDES . 'assets.class.php';

// When using the Options plugin with ACF - we might find the Options class useful
// as it can retrieve values and cache them for any consecutive queries.
// require_once DIR_INCLUDES . 'options.class.php';


// Initialise the Sparky class. It enables a few necessary features.
Sparky::init();


// Add the global assets required for our theme and define minified versions for staging/production.
if ( WP_ENV === 'local' )
{
	// JS.
	Assets::add( '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js' , 0 , 'lt IE 9' );
	Assets::add( '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.js' , 0 , 'gte IE 9' );
	Assets::add( DIR_THEME . 'js/main.src.js' , 1 );
	
	// CSS.
	Assets::add( DIR_THEME . 'css/main.src.css' , 0 );
}
else
{
	// JS.
	Assets::add( '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' , 0 , 'lt IE 9' );
	Assets::add( '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js' , 0 , 'gte IE 9' );
	Assets::add( DIR_THEME . 'js/main.min.js' , 1 );
	
	// CSS.
	Assets::add( DIR_THEME . 'css/main.min.css' , 0 );
}



// Set custom image sizes for WordPress to resize when uploading new images.
// Sparky::add_custom_image_sizes([
// 	'blog-feature' => '600x200',
// 	'gallery-thumbnail' => '200x200'
// ]);


// Load some additional custom post types.
// require_once DIR_INCLUDES . 'custom-post-types.php';

// Define sidebars, if necessary.
// require_once DIR_INCLUDES . 'sidebars.php';

// Define shortcodes, if necessary.
// require_once DIR_INCLUDES . 'shortcodes.php';

// Load custom hooks, if necessary.
// require_once DIR_INCLUDES . 'hooks.php';

// Define ACF Options pages, if necessary.
// if ( is_admin() )
// {
// 	// Advanced Custom Fields - Options pages
// 	if ( function_exists('acf_add_options_sub_page') )
// 	{
// 		acf_set_options_page_title( 'Site Options' );
		
// 		acf_add_options_sub_page( 'General' );
// 	}
// }
