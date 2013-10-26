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
$includes_dir = $current_dir . 'includes/';
$theme_dir    = get_stylesheet_directory_uri() . '/'; // This is mainly for the img/css/js helper functions.

require $includes_dir . 'config.class.php';
require $includes_dir . 'helpers.php';
require $includes_dir . 'sparky.class.php';

/*
|--------------------------------------------------------------------------
| Config
|--------------------------------------------------------------------------
| 
| Store config variables here and they'll be accessible everywhere within
| the theme.
| 
| WARNING:
| These directory config settings should not be removed (dir.*).
| They're used throughout the theme and there will be some errors if
| they're removed or modified.
| 
*/

Config::set( 'dir.partials' , $current_dir . '_partials/' );
Config::set( 'dir.theme' , $theme_dir );
Config::set( 'dir.css' , $theme_dir . 'css/' );
Config::set( 'dir.img' , $theme_dir . 'img/' );
Config::set( 'dir.js' , $theme_dir . 'js/' );


// Initialise the Sparky class. It enables a few necessary features.
Sparky::init();


// Set custom image sizes for WordPress to resize when uploading new images.
// Sparky::add_custom_image_sizes(array(
// 	'blog-feature' => '600x200',
// 	'gallery-thumbnail' => '200x200'
// ));


// If required, you can load a custom post type.
// require $includes_dir . 'custom_post_types.php';
