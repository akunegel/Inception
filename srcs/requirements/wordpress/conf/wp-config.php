<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'inception_db' );

define( 'DB_USER', getenv('SQL_USER') );
define( 'DB_PASSWORD', getenv('SQL_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

/**#@-*/

define('AUTH_KEY',         'p<-Ra|9H$Hsau#K3c-[|KWR#Q?RD61]b7}f|e-,Z:+_tQ^W:YU=&5WvZH<Ad_/j(');
define('SECURE_AUTH_KEY',  '%p2:Qzt+YmY;SDxmKIKcmd~)B;~<R{<e0HJL(7u7(FF2T|bDkZG>pO7-pL+s92P5');
define('LOGGED_IN_KEY',    'G,x=RbA&o3{w(`1Xu@3Q#e26+MvmkJbmx@wpiEtmQS,@RnHZmgLCIE(JGzo0&U4X');
define('NONCE_KEY',        'It= f}Q|<WS^s5mU,I[U#GuD~orsUC4>okUlREmf=[RA;|.M I*#h-O0Ott-OLuq');
define('AUTH_SALT',        'DDJ7YT< ]kmOz-<ASzy3]8%+5spkADpbfNeP~jw3J`-+9-sTG=1DT+0p@/!P5/Jx');
define('SECURE_AUTH_SALT', '[^V{Wj8o,*#rp+%HKW(KgMXHu%ijrc,{! 0rGW>}?n8_@Im4zj)&X^hF2Q|N/_Z9');
define('LOGGED_IN_SALT',   'z+:ma[a,J-p6O89aoCf}7Urh!U~i*MqyEc^*V-zHB?S-:LqV[-EIeM-?>2{]P-OG');
define('NONCE_SALT',       'V!9&jr<1hKtu|7aql%uo.;5pT5{{Tv+POiS3b6`X8QTwtkUSR8M .JI3qb*Y&1t&');   

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
