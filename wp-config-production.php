<?php
/**
 * Configuration varibles to be merged with the defaults in wp-config.php
 * and defined as constants.
 */

return array(
	
	// Define the environment.
	'WP_ENV'      => 'production',
		
	// DB details.
	'DB_NAME'     => '',
	'DB_USER'     => '',
	'DB_PASSWORD' => '',
	'DB_HOST'     => '',
	
	// Do not allow plugins/themes to be updated/installed.
	'DISALLOW_FILE_MODS' => true,
	
	// WordPress Debug mode.
	'WP_DEBUG' => false,
	
);