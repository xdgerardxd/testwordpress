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
define( 'DB_USER', 'gerardo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sharingan123' );

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
define( 'AUTH_KEY',         'zic9l|#UX)*!>Tp(KG8Ceo#-,2S=pyr]rYbXOc!pmfotTcD^7e-peu+PLu:3y3m3' );
define( 'SECURE_AUTH_KEY',  'D?t}mDNRszU*&^~R-R@HAhFM;;#>PuC#Xtj7>miB[b^8!QU}87jH[#rhmuh0g!+B' );
define( 'LOGGED_IN_KEY',    'Y%tYCx-5muO*+bEhk..~bX{|z(zJnmHD/:8=ZXf#{XI~EPQc?P2IN<HQE,5f%_-2' );
define( 'NONCE_KEY',        'C2E0djW%I#@eb21DX|%`T@&l`.%eI|DV~:d3V3rkheX[1 |cHXxWw|X,sF_}<eBT' );
define( 'AUTH_SALT',        ';/Q3Q j=2,2Q&U,}KgO-v@aKph#jZ+8bQQ5]_~Vwt,F{^44%|`>$#U3*F4vQQ>n{' );
define( 'SECURE_AUTH_SALT', '6K=<(8E)4BCbF<N!I~B-_2G<,Bt:a1^l16eP$Qkx@IkT|2_dF:[j.y|RH2VE=2X<' );
define( 'LOGGED_IN_SALT',   '_*Ht*#Fcu.BY(FShTV +y=vzhAVn_lt UGa:wO5[,%vTXymY:&Hn,`U9:g6:FFg/' );
define( 'NONCE_SALT',       ')P~n5Tm{hHU3q`GP_K~)k5TK9-@=oAm=Ubu9`SH bsAxs Hvk8kJb.SvT4/:pDaH' );

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
