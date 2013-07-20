
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
 * @param  string  $file Name of the file stored in the _partials directory. Extension is optional.
 * @param  array   $vars List of variables to pass to the view.
 * @param  boolean $echo Whether to output the content or return it.
 *
 * @return mixed         String or void.
 */
function partial( $file , $vars = null , $echo = true )
{
	// If variables are provided, make them available for the required file.
	if ( is_array( $vars ) && !empty( $vars ) )
	{
		extract( $vars );
	}
	
	// Get extension if it's set, or default to php.
	$extension = pathinfo( $filename , PATHINFO_EXTENSION );
	if ( !$extension ) $extension = 'php';
	
	// Start the output buffer.
	ob_start();
	
	// Include our file.
	require Config::get('dir.partials') . $file . '.' . $extension;
	
	// Let's get what the output buffer has rendered.
	$content = ob_get_clean();
	
	// If we're not echoing the data, lets return it.
	if ( !$echo ) return $content;
	
	// Output the data to the view.
	echo $content;
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
	
	return ( !empty( $req ) && strtolower( $req ) == 'xmlhttprequest' ) ? true : false;
}
