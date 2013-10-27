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

require DIR_INCLUDES . 'config.class.php';
require DIR_INCLUDES . 'helpers.php';
require DIR_INCLUDES . 'sparky.class.php';

// When using the Options plugin with ACF - we might find the Options class useful
// as it can retrieve values and cache them for any consecutive queries.
// require DIR_INCLUDES . 'options.class.php';


// Initialise the Sparky class. It enables a few necessary features.
Sparky::init();


// Set custom image sizes for WordPress to resize when uploading new images.
// Sparky::add_custom_image_sizes([
// 	'blog-feature' => '600x200',
// 	'gallery-thumbnail' => '200x200'
// ]);


// Load some additional custom post types.
// require DIR_INCLUDES . 'custom_post_types.php';

// Define sidebars, if necessary.
// require DIR_INCLUDES . 'sidebars.php';