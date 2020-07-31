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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         ' ips-RzJ=RVGS<Ya{:-oUP^kJDdE/4&m>0yqNHZ%<A+^iir:CTCQf?07}b@~|@#Q' );
define( 'SECURE_AUTH_KEY',  'Rkq>@S/wy{n])kV=U=50}5:~7O$X|GO]nYq>HaKmB!Zv2E M95I,~yoLKa&7:DTD' );
define( 'LOGGED_IN_KEY',    '6Q +2chS{.|{r?*taes>jOa5rK:dn5vl+.pBT2l{DWi^*!}M&sCkXs-ypi=O7vBB' );
define( 'NONCE_KEY',        'h)[RaM>rcgK%m%DTM=h/nvoMw$N;6EFgno;^f@WLb+_Zg*|~Sb]wGluALB?LbY+R' );
define( 'AUTH_SALT',        '8rrO/}wme]<yUT^FY>ZZabv+T4rT P=Hth 18jX0w,/.7A_omh1FmvX}@Jg(fpto' );
define( 'SECURE_AUTH_SALT', 'PSHs9(]DL1MVX<O-6LD_aq6YH}R]XR5ZW8SjSVP%VB:|+v|h7m 9domX|$LURck!' );
define( 'LOGGED_IN_SALT',   'vVtix|A!bsgP2e<>sZjXC9H9PeC?N;l[K2~M<OYn|L~.5&y{;6:<,1xe=*Vt(<n+' );
define( 'NONCE_SALT',       'f+81u,&-6C~?ID:R:(}aR}7?sE1.uy:-%dp_|}*y?!J^H~Drt-D`w`HHE9Tifn$&' );

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
