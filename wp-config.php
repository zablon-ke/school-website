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
define( 'DB_NAME', 'kibarani' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'vNj?Mc%Lj+!Nj#KN>Z|+(Ygy ,P>Z(.#$P.cN^wWqmKznuUeG2>g?FIjAga>vemI' );
define( 'SECURE_AUTH_KEY',  '4&/)r2J-JwAz32]w4IfgFrJa0ay_7TRr<}DfW`{%YwN31V/,sgZoO:=-c2t~Cm1.' );
define( 'LOGGED_IN_KEY',    'V-sX1>ASWPkJ0}JY.%0n]/3,$[5@[s @=rL#}!$[StiH<hJr{HXllk&.+SF]EHTT' );
define( 'NONCE_KEY',        'K)NRRSvL$qRADdy{L?gf!:$Xv^61j(x{fs;3O+H+5*l8*ZJ7VU6C/SHY2R|bLX]C' );
define( 'AUTH_SALT',        '&F=$#(Zo.3$2g>>=nG~|DO%)^:-pc1+} bY|(xLVSn*@JRo.Ghzmelg!]-Pq-c;R' );
define( 'SECURE_AUTH_SALT', '~>d%6-9 AEjsl/^jcB/oh`ED yQo^qbg~B|]1qr|+Q)g?{ahCg2^ThzsG!2/XW7L' );
define( 'LOGGED_IN_SALT',   '-:CBUeO:(Cwv~+r17B1F)N]8AP*.sJs@+$Ux}Gt]H96DKu9Bd!e0u$>huAw/`fk`' );
define( 'NONCE_SALT',       'VEf?]6*+1tN8XB%f<CSgtS[O:nt}pK!~BTtDkqwj;6ISeb(@?$ ]Bur/MO$kQ}Sw' );

/**#@-*/

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
