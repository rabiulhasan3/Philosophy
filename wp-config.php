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
define( 'DB_NAME', 'philosophy' );

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
define( 'AUTH_KEY',         'Muk4?aiCb&+s>w.=#&;*msX$$+d3?<}n)j2dW;/v+)_D@#[zVO6@3r_#joTo!rF[' );
define( 'SECURE_AUTH_KEY',  '^^{8_L]IfQQ=}YN:CF~>.^u=/-NzHg5A.<&(ku%M *Y@YnWM_/DsmR8KL+az XtK' );
define( 'LOGGED_IN_KEY',    'nFNf0>9 _W+B]eEp3az;JFDH.~6J=BUgHDToG3CbW[=P*bMeUq<z[;Ob3wi<l;oD' );
define( 'NONCE_KEY',        '&KFio&[x7CQFhLP_=6x+QT!hdb:VwMNYte/25hn/1+I<ybawD)m;0.R9d2,oEtf#' );
define( 'AUTH_SALT',        ']%;[(Bxx}g3Wq?7e~xkJ~v~IW*kQ,eC8D(Ko5:s3>(-ri/-`f4Yb;r|*$EKtf{{;' );
define( 'SECURE_AUTH_SALT', '}ircT=]QBEjO^Z7X.Hp6{%~J1m[RO:?<X>-fi<IHU*;z|:PQKpnKDF`vtL[ pclh' );
define( 'LOGGED_IN_SALT',   'aEkUum*I>TwO,&4}$,?u?xKNqtV7D2{+:}{ha@N;a8vmk+;d[6^&M;ZUj&2Hpq)4' );
define( 'NONCE_SALT',       ',7fE;!$y3At4~a:CXcxF2HnpPC}1nnp+zvHqTc1)s|=Sq@B[970*lGjQR48YnZ%p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'philosophy_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
