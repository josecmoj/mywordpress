<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


// Environment check
switch ( $_SERVER['SERVER_NAME'] ) {
	// Staging.
	case 'STAGING SITE SERVER NAME: website.dev.maikeldaloo.com':
		$db_host = '';
		$db_user = '';
		$db_pass = '';
		$db_name = '';
		
		$disallow_file_mods = true;
		$wp_debug = false;
		break;
	
	// Production.
	case 'PRODUCTION SITE SERVER NAME: website.com':
		$db_host = '';
		$db_user = '';
		$db_pass = '';
		$db_name = '';
		
		$disallow_file_mods = true;
		$wp_debug = false;
		break;
	
	// Local.
	case 'localhost':
	case 'LOCAL SERVER NAME: website.dev':
		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';
		$db_name = '';
		
		$disallow_file_mods = false;
		$wp_debug = true;
		break;
	
	default:
		die( 'Undefined environment: Please check the main config file.' );
}

/**
 * Add all the main configuration items so they can be looped through and set
 * in one sexy loop.
 */
$my_config = array(
	// Define the HOME and SITEURL constants to be dynamic.
	'WP_HOME'                => 'http://' . $_SERVER['HTTP_HOST'],
	'WP_SITEURL'             => 'http://' . $_SERVER['HTTP_HOST'],
	

	// Do not allow theme editing from WP admin.
	'DISALLOW_FILE_EDIT'     => true,
	
	// Do not allow plugins/themes to be updated/installed.
	'DISALLOW_FILE_MODS'     => $disallow_file_mods,
	
	// Database settings.
	'DB_NAME'                => $db_name,
	'DB_USER'                => $db_user,
	'DB_PASSWORD'            => $db_pass,
	'DB_HOST'                => $db_host,
	'DB_CHARSET'             => 'utf8',
	'DB_COLLATE'             => '',
	
	// WordPress Debug mode.
	'WP_DEBUG'               => $wp_debug,
	
	// Limit the post/page revisions to reduce DB bloat.
	'WP_POST_REVISIONS'      => 5
);

// Define all the configuration items.
foreach ( $my_config as $config_setting => $config_value ) {
	define( $config_setting , $config_value );
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

if ( !AUTH_KEY || AUTH_KEY == 'put your unique phrase here' ) {
	die( 'Please update your secret keys.<br><a href="https://api.wordpress.org/secret-key/1.1/salt/" target="_blank">Click here</a>' );
}

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
