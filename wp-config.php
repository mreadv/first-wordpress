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
define( 'AUTH_KEY',         'kNHWW?TimovQLG7Ad2s}/qGq=a*I$3hm 3L]&34Oio$7G+Lk9=`l)EE>Ky6@=G1z' );
define( 'SECURE_AUTH_KEY',  'cq19%+(!iUS^WhYi/YsiBG40otkw1-q.<Do-<Sb8]j.F3Hap==u,79R/1oHm%Wm/' );
define( 'LOGGED_IN_KEY',    'jQfl7c^bpeIqp <dB)FZ/c6.IE<Z];:q(ChXq35K$pHsZVFV&UG`bWbSTID]&nA ' );
define( 'NONCE_KEY',        '5z?X*mf/%Fj<T[U@ 9GE%-_3,x7/Mx^He<$K%s|N<_[YcL=[jd,{P?sJp_U[5U|{' );
define( 'AUTH_SALT',        '{Vy~) 0>?:nG=_s/?u3aySUR V+R95 Z8v)*+1F@tNos^TQhT;^I;X=o+KBYxj7r' );
define( 'SECURE_AUTH_SALT', ',y7rLA^!Xjm*id:x^cD]1l|.=wr0~ppDWrZi^_0]ZiCU4TTHreA j^n>*uS~THeG' );
define( 'LOGGED_IN_SALT',   '8L$ih,-)(CSZj;ti3%b,$&DO }!L.S`zdI&Hh0GLbHcK%i<&s=[hs!S{yQ/Z{*T_' );
define( 'NONCE_SALT',       '>/:7[DQBR/I{TpqQ+h$qSh X5IlZsxPYLNa19_O@DE<O^hqd=CP:_|%s]cj)Jn$y' );

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
