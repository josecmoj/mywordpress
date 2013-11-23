<?php

class Assets {
	
	/**
	 * Stores all the asset files and gets them ready to output.
	 *
	 * @var array
	 */
	private static $assets = [];
	
	/**
	 * Adds a file to the assets list to be output.
	 * The asset type is automatically detected, whether it's a JS or a CSS file.
	 *
	 * @param string  $file
	 * @param integer $order
	 * @param boolean $conditional
	 * 
	 * @return boolean
	 */
	public static function add( $file , $order = 0 , $conditional = null )
	{
		$extension = pathinfo( $file , PATHINFO_EXTENSION );
		
		switch ( $extension )
		{
			case 'js':
				self::$assets['js'][] = array( 'file' => $file , 'order' => $order , 'conditional' => $conditional );
				break;
			case 'css':
				self::$assets['css'][] = array( 'file' => $file , 'order' => $order , 'conditional' => $conditional );
				break;
			default:
				return false;
				break;
		}
		
		return true;
	}
	
	/**
	 * Dumps out all the stylesheet files after sorting them by the order.
	 *
	 * @return void
	 */
	public static function css()
	{
		if ( empty( self::$assets['css'] ) ) return;
		
		$files = self::sort( self::$assets['css'] );
		
		foreach( $files as $file ) self::output( 'css' , $file );
	}
	
	/**
	 * Dumps out all the javascript files after sorting them by the order.
	 *
	 * @return void
	 */
	public static function js()
	{
		if ( empty( self::$assets['js'] ) ) return;
		
		$files = self::sort( self::$assets['js'] );
		
		foreach( $files as $file ) self::output( 'js' , $file );
	}
	
	/**
	 * Renders the markup and outputs it to the browser.
	 *
	 * @param  string $type Either 'css' or 'js'.
	 * @param  array  $file The file array, containing the file path and conditional comment, if available.
	 *
	 * @return void
	 */
	private static function output( $type , $file )
	{
		$url         = $file['file'];
		$conditional = $file['conditional'];
		
		if ( $conditional ) echo '<!--[if '. $conditional .']>';
		
		echo $type == 'js' ? '<script src="'. $url .'"></script>' : '<link rel="stylesheet" href="'. $url .'">';
		
		if ( $conditional ) echo '<![endif]-->';
	}
	
	/**
	 * Sorts the assets by the order field.
	 *
	 * @param  array $assets
	 *
	 * @return array
	 */
	private static function sort( $assets )
	{
		usort( $assets , function( $a , $b ) {
			return $a[ 'order'] - $b[ 'order' ];
		});
		
		return $assets;
	}
	
}