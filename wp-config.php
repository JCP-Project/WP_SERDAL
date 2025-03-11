<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'SERDAL_DB' );

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
define( 'AUTH_KEY',         '#I9=RduxT2AwL!YwWb_;+n7;=Rn<@%Ey KPzA_o= DK)y5?+u863)h@z/O]$D8p}' );
define( 'SECURE_AUTH_KEY',  'VekHA2DK}nSB uCKfn.DM|YA?2|Eq}JKec|G,5GBey}l+Ie1*.:}#eC|Jo3=<xEg' );
define( 'LOGGED_IN_KEY',    ',GXaly%o@5f=X[)$&Q,R^m0Og4bc7w<abX=_w)tEnx7+zoP<6n/qG~(H&C7|A7&Z' );
define( 'NONCE_KEY',        'cCTC@w [KR]~LsY;SvSel4Sm*|,JBLmJNU058_.Lv}vV{7KJvN_FS|+=Gt$M,aE$' );
define( 'AUTH_SALT',        'xY)Qs5<yz x2Hg_7>0v0:dt6<]WI_mtE@sh!|A+3v>NNzIR(ZL:P s%(v?Z1_yly' );
define( 'SECURE_AUTH_SALT', '$KJYcJaVrqj^8YW8NIWXUDNjs)/Z<P,[UMjIA-Ka$6^V:9|vB($ku{%T=4pB,:(E' );
define( 'LOGGED_IN_SALT',   '5!S.[ja*K(-5Yv5BC(B;~WPhk2QX!evZVe]5K5Qd(7~/0sltGV?#)}W1jg71DfTz' );
define( 'NONCE_SALT',       'UoI&F+A4W*5sr]Rt}ky$Fi@}<P:J$)570*[tgC] +-f6e*.N%(txFTaK)p7db^@1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
