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
define('DB_NAME', 'skiotesA9VrkvbrM');

/** MySQL database username */
define('DB_USER', 'b431858a93f283');

/** MySQL database password */
define('DB_PASSWORD', '7a7cce69');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-azure-southcentral-e.cloudapp.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4D6OK4YgN0zMawVg1T4rj1R8KtC2pd9k6P4ZY4m5');
define('SECURE_AUTH_KEY',  '5P9Yl5bkkBB6VXeVetlHWA5jVUvoHB6h4T9arRg2');
define('LOGGED_IN_KEY',    'DsN7Iazkzo0vwdft49Jm8iCKzr3u302MJubn88i5a');
define('NONCE_KEY',        'i1Tj81z4cHWqBhFNoiDglQiGZW1Q83bNef3jmJQI');
define('AUTH_SALT',        'hzPSCul9tZH8pP2pcT0yt1Lrd70C3bcHqs4alXil');
define('SECURE_AUTH_SALT', 'Whw3Lli32KtXKDN0Ok6A5Eve3mXPTVARV6roUmd8');
define('LOGGED_IN_SALT',   'mYym4cYRCUlNItz8B55OXDonJ0vNPTsfaT167qUj');
define('NONCE_SALT',       '9i514He48UIPcERtxYvG8r0j5PSD69PfM4pMdoTp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
