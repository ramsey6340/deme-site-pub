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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demesite' );

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
define( 'AUTH_KEY',         ')FUn68tv{+n9,qr4gK79dgio#[J7K]@wof_5E_$y4Xa.=PSOZhDN{go3TQRE_SS/' );
define( 'SECURE_AUTH_KEY',  'hr40qWD 9q4r#(=10YL:g6]rTf9vZUwQb%zu/eV{;(i(7&R+xB HuJvY1w~ue^*N' );
define( 'LOGGED_IN_KEY',    '[O[pTsx&BU@t+FO*%.}SHHF^WYrcjR1dI@|d6`! _`4~,2nA:G)~#* ch#EcN8*#' );
define( 'NONCE_KEY',        '8Ksf{I0@]`7Yu`2]-Xd>h;Pg6a9JY~6.-^n_^R&-#vSTt*k<//F0@2AmFkLGp:_#' );
define( 'AUTH_SALT',        'dqp43!2q9AjOmtO d<SL2]k} OyNp0@#5Q?Kdk~om9&b<vk(7N>I* 2E{nz`o`c%' );
define( 'SECURE_AUTH_SALT', 'lhjS3:~(hwY@5Imc{/L{&Jkk<qH3E0L|H8;+z9OWY-z=zkF1#5kXG@*4(p4`^zr.' );
define( 'LOGGED_IN_SALT',   '6;zAD$9NFS=iGn5IiafSuiA1<XGCkgw??~YGDj$jE[REh0Y.pc?JDPM`CXPOUEQi' );
define( 'NONCE_SALT',       'EjKBfDw%3nm>%@[uj.>RX<S%=#kQC{Md}3F*?PyY)5,SmZ,c%$R6mN]Z(FGD;R${' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
