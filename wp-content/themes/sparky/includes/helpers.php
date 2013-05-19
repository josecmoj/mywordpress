<?php

/*
|--------------------------------------------------------------------------
| Helpers
|--------------------------------------------------------------------------
| 
| Small functions can be considers as helpers, these are used throughout
| the code but are too small to turn into a class.
| 
*/



/**
 * Get a value if it's set and not empty, or returns a default value
 * that can be defined in the second parameter.
 *
 * @param  mixed $value
 * @param  mixed $default
 *
 * @return mixed
 */
function get( $value , $default = null )
{
	if ( isset($value) && !empty($value) ) return $value;
	
	return $default;
}



/**
 * Outputs the content of a file that is located in the _partials directory.
 *
 * @param  string $file      File name without the extension.
 * @param  string $extension Optionally pass a file extension.
 *
 * @return void
 */
function partial( $file , $extension = 'php' )
{
	require Config::get('dir.partials') . $file . '.' . $extension;
}



/**
 * Returns the path to an image.
 *
 * @param  string $filename
 *
 * @return string
 */
function img( $filename )
{
	return Config::get('dir.img') . $filename;
}



/**
 * Returns the path to a JavaScript file.
 *
 * @param  string $filename
 *
 * @return string
 */
function js( $filename )
{
	return Config::get('dir.js') . $filename;
}



/**
 * Returns the path to a CSS file.
 *
 * @param  string $filename
 *
 * @return string
 */
function css( $filename )
{
	return Config::get('dir.css') . $filename;
}



/**
 * Determines if the current request is ajax or not.
 *
 * @return boolean
 */
function ajax_request()
{
	$req = $_SERVER['HTTP_X_REQUESTED_WITH'];
	
	return (!empty($req) && strtolower($req) == 'xmlhttprequest') ? true : false;
}