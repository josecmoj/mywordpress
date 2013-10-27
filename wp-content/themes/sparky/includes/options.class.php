<?php

class Options {
	
	/**
	 * Allow options to be cached.
	 *
	 * @var array
	 */
	public static $cache = [];
	
	/**
	 * Returns a cached value, or stores the value in the cache if it isn't already.
	 *
	 * @param  string   $key
	 * @param  function $callback
	 *
	 * @return mixed
	 */
	public static function _cached( $key , $callback )
	{
		// If the key isn't cached, then we'll run the callback and store the value to
		// be returned next time.
		if ( !array_key_exists( $key , self::$cache ) )
		{
			self::$cache[ $key ] = $callback();
		}
		
		return self::$cache[ $key ];
	}
	
	
	public static function admin_email()
	{
		return self::_cached( 'admin_email' , function() {
			return get_field( 'admin_email' , 'options' );
		});
	}
	
}