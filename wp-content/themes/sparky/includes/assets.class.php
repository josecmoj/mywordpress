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
	 *
	 * @param string  $file
	 * @param integer $order
	 * 
	 * @return boolean
	 */
	public static function add( $file , $order = 0 )
	{
		$extension = pathinfo( $file , PATHINFO_EXTENSION );
		
		switch ( $extension )
		{
			case 'js':
				self::$assets['js'][] = array( 'file' => $file , 'order' => $order );
				break;
			case 'css':
				self::$assets['css'][] = array( 'file' => $file , 'order' => $order );
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
		
		foreach( $files as $file ) echo '<link rel="stylesheet" href="'. $file['file'] .'">';
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
		
		foreach( $files as $file ) echo '<script src="'. $file['file'] .'"></script>';
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