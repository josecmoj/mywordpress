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
function partial( $file , $vars = array() , $echo = true )
{
	// Get extension if it's set, or default to php.
	$extension = pathinfo( $file , PATHINFO_EXTENSION );
	if ( !$extension ) $extension = 'php';
	
	
	// Start the output buffer.
	ob_start();
	
	// Make the variables available for the required file.
	extract( $vars );
	
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



/**
 * Redirect to another page. It's best to perform redirects before
 * anything has been rendered.
 *
 * @param  string $location
 *
 * @return void
 */
function redirect( $location )
{
	header( "location: $location" );
	exit;
}



/**
 * A very simple HTML email method.
 *
 * @param  string $from
 * @param  string $to
 * @param  string $subject
 * @param  string $message
 *
 * @return boolean
 */
function send_email( $from , $to , $subject , $message ) {
	$headers  = "From: {$from}\r\n";
	$headers .= "Reply-To: {$from}\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";
	
	return @mail( $to , $subject , $message , $headers );
}



/**
 * Determine if a string starts with a given needle.
 *
 * @param  string  $haystack
 * @param  string|array  $needles
 * @return bool
 */
function starts_with( $haystack , $needles )
{
	foreach ( (array) $needles as $needle )
	{
		if ( strpos( $haystack , $needle ) === 0 ) return true;
	}

	return false;
}



/**
 * Determine if a given string ends with a given needle.
 *
 * @param string $haystack
 * @param string|array $needles
 * @return bool
 */
function ends_with( $haystack , $needles )
{
	foreach ( (array) $needles as $needle )
	{
		if ( $needle == substr( $haystack , strlen( $haystack ) - strlen( $needle ) ) ) return true;
	}

	return false;
}



/**
 * Determine if a given string contains a given sub-string.
 *
 * @param  string        $haystack
 * @param  string|array  $needle
 * @return bool
 */
function str_contains( $haystack , $needle )
{
	foreach ( (array) $needle as $n )
	{
		if ( strpos( $haystack , $n ) !== false ) return true;
	}

	return false;
}