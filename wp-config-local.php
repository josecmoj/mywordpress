<?php
/**
 * Configuration varibles to be merged with the defaults in wp-config.php
 * and defined as constants.
 */

return array(
	
	// Define the environment.
	'WP_ENV'      => 'local',
	
	// DB details.
	'DB_HOST'     => 'localhost',
	'DB_USER'     => 'root',
	'DB_PASSWORD' => '',
	'DB_NAME'     => '',
	
	// Do not allow plugins/themes to be updated/installed.
	'DISALLOW_FILE_MODS' => false,
	
	// WordPress Debug mode.
	'WP_DEBUG' => true,
	
);