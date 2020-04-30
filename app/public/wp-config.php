<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm+wfaFXpyuCoDhPVce9Al4ziFJ4i0eX/M8vDLXyMgwF+Y13HHXbNdunT1Z/H+Dv/Q/mBrG8hjiemCkk/pibfNw==');
define('SECURE_AUTH_KEY',  'esKriGzrKFqN0CPi6pY/rxOBSKRBABPrJiF+ypdB/pbyvwPacf1QyZjC8y9hMrnsamKKSqlRkm0mLn9PuI2hKQ==');
define('LOGGED_IN_KEY',    'FehpdjRSV2hLr9pg9+dVOQzXr4qCJaeHAs4D3azgr0M37tVaMupABWX5Nve0xpHwXNbW2qFjTvQxpJ9Nkm/CmA==');
define('NONCE_KEY',        'g8xTliIIW/XF0NQKQkCmd0D9+WbHBeLQCaI8f2Qu6x4eUW0zpxVhBLVfp0OID4OaLAfFoeUiJ5cbvZOdodR9Ww==');
define('AUTH_SALT',        '215cgMgHw4xnqmhk5anKEuNwQbGEJm8VEszweaVDhAAlpr0DUQA1wvOrf9gd+e7xUrScN2pG5k9fHOZ31lemwg==');
define('SECURE_AUTH_SALT', 'dlABNBgAXdzJsUNwZhljSzBP1JhVF4KMUbaPZ2tOH6a/mn58dOG1RmUdSfryvlvTfnzNYjkik2MZkUcwuDZBDw==');
define('LOGGED_IN_SALT',   'puSGwZus1RZiDyBsmfQNnURwMyIQ2KrzZ/D1tn3ITLrHkJ8yCfLI8VJG2xfjxGctXzZ+uDcInGKKrWuLsyBdLw==');
define('NONCE_SALT',       'iCbljTqOHSb/0Pcszdi5HtSMDb9Q6rPXop3ly3ZBPSXv04jAaLloccO7w/iY2pRMhNbkKP6tiIZAy/14GedZkg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
