<?php

/*
|--------------------------------------------------------------------------
| Sparky - Main theme class
|--------------------------------------------------------------------------
| 
| This class will provide simplified methods to work with some of the
| functionality that WordPress provides.
| 
| The aim of this class is to act as a helper.
| 
*/

class Sparky {
	
	/**
	 * Adds custom image sizes so WordPress is aware and will resize into
	 * those sizes when an image is uploaded.
	 *
	 * @param array $sizes Array is expected to be formatted as such:
	 *                     'size-name' => '600x200'
	 */
	public static function add_custom_image_sizes( $sizes )
	{
		foreach ( $sizes as $name => $size ) {
			list( $w , $h ) = explode( 'x' , $size );
			add_image_size( $name , $w , $h , true );
		}
	}
	
}