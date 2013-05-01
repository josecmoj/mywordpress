<?php

class Config {
	
	/**
	 * Cache config items here.
	 *
	 * @var array
	 */
	private static $config = array();
	
	/**
	 * Retrieves a config item.
	 *
	 * @param  string $key
	 * @param  mixed $default
	 *
	 * @return mixed
	 */
	public static function get( $key , $default = null )
	{
		if ( isset(self::$config[$key]) ) return self::$config[ $key ];
		
		return $default;
	}
	
	/**
	 * Sets a config item.
	 *
	 * @param string $key
	 * @param mixed $value
	 */
	public static function set( $key , $value )
	{
		self::$config[ $key ] = $value;
	}
	
}
