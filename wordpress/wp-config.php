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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kL![mHi0v(m3C)&URd@BS6`$ldyy[(]`~!kkyI Bl<W1OVtW)~o((;?;5jwe.m. ' );
define( 'SECURE_AUTH_KEY',  'i7nJHCk#7R:{xa5Bo1ONO7Jo`>fYd.]?;+J{4nnf*%9zVXPGtTkje*E}8cxK=qkK' );
define( 'LOGGED_IN_KEY',    ' ?}w<o.jWE)dd1};4X{GulfN02$*{fq#GvNCZO[B,5tZ5dR911N&P viS^OM.aN;' );
define( 'NONCE_KEY',        'd`m{@)6^6k#>fS2)q*^PjWF?l?0:k8r%z2d1Z9u}-14+Zw7`I[T}8eM5FM:u/=3=' );
define( 'AUTH_SALT',        'DTzMG+/Qlh_U<D-S)6e*kHB#95>%nd 4C6rD3EjN$B8xtMY/6[YpzhbIN#iTMo+S' );
define( 'SECURE_AUTH_SALT', 'Q1mX^PMhMT2PDa)$VP&&&@d],yZzuq5U1G{m2-e8yp8R:[qTCtu43y^u3w&vPmXD' );
define( 'LOGGED_IN_SALT',   'P06AEOXms`#_h!a&[<3AyWdv7!+IYr0haAPe!j$h=RMv-FL>^|q=:FOW~Ozg0IS8' );
define( 'NONCE_SALT',       'v/<}$_+)#N/q!QyymnVGnqM?yQ.cXjMME|cV?eTAWpRoIu/f ;1Xt6?/v`0b|;0B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
