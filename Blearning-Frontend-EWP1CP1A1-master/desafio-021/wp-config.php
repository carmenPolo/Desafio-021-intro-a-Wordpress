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
define( 'DB_NAME', 'Desafio-021' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'CIXZV5: QOROLh]Zo4KMH.<N`6Qk5UT*f#xx/B*5ZrzXn 1[,CDe:GeuM::)k{y-' );
define( 'SECURE_AUTH_KEY',  '8imh]Ef7TC&]9`Q`gEi@^RwM%r<q3=f)+t/~nuExho&FU{UmH%I+)s[%plJ!oBh)' );
define( 'LOGGED_IN_KEY',    'oSDd{g_OzgK<mQ;}sv9ogRk/<JSe;eXF[vWXw?Ub6O;QDx00hcQ4UPzG_C6M7uO+' );
define( 'NONCE_KEY',        '(U NQu]CB0KlrP`1!1@nOgzB*}@,kKqY &dloLm?QbT8tM?,1i{I8sns:ds_:w.J' );
define( 'AUTH_SALT',        'Fag<wT<{7vo)muuB*o%iflt~&czY!=s^(w=V[;.wUVbMgBZ7*ca4Ea6S(F6q5QYd' );
define( 'SECURE_AUTH_SALT', 'XZoA!)4:ogE{B6h2=UK^_lhCyin3O]Rq]c}>uC}pv]z2_/}TxaCfc(RhIdWD~+Eh' );
define( 'LOGGED_IN_SALT',   '~tG]RC7WL,&#));]j;jd{qrQ~MQrKtN:UngFnS](``>YdONgSTm8-=4Mw_+IXR_S' );
define( 'NONCE_SALT',       '21me}vC80)/%I;};B}Hz@nW++.i=Z2=&o]eK)Qv!_3A%Lm,rgZP}8e+F2wCgV#]v' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dl_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
