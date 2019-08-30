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
define( 'DB_NAME', 'doesoh_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:8889' );

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
define( 'AUTH_KEY',         'Rv]GFlj6hmkn60CKAkW&%Xd9A /<2d%at1B;|{%x_H^FgcO:in(d3+kI*QMc<R61' );
define( 'SECURE_AUTH_KEY',  'I`U+RxB+E:2T)T>oI|bG|D%+F5uF`AXT|S?bO>VhZC~nbyU2q;M@h4+na?aIVW]M' );
define( 'LOGGED_IN_KEY',    'Up2/_<NB#uLmxibWSky*NZ+&W=lua!}mk(>J]uurTiZYK;U]~g}.6nEU(|Cui,kc' );
define( 'NONCE_KEY',        ';vyuf%BLwUe*cL=LbB<mH=!}4R=$=->*@d0t&wO,0%O#WC>T*@**~^HNfNOW:}4n' );
define( 'AUTH_SALT',        'he:vuTn&f|E3yl0E59q*Q2lo;`V6sttDPMYmXG{f?CCY2iH]bO[jd~#;Mct|+<Y]' );
define( 'SECURE_AUTH_SALT', 'u#!+S.-:+HuBUHGSeo,G>P$]{tqA4;,kd%J(31@!_HO%wCKmA7Ad%iox~([ID.fl' );
define( 'LOGGED_IN_SALT',   'Io7Ax?Vhok?0(q7KR[m.GeIF@^zWT(;3dj{}:,dbP#$~]g3Id2HrWGTF(t9Iuov<' );
define( 'NONCE_SALT',       ' )T(YMSKpRvn,*b>6ME~FlbTk4X,EZ14D(51j9f@Z~H#6mO@P>bdg-sj5843/|Y0' );

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
