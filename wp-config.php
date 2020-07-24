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
define( 'DB_NAME', 'MRmudanzas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'J0&|UhGZ)hVM7?9Xv=,gVB!ETtc6)q/G=D,NDS8DHj7q%8ZyU$2]`(5#2{,%b0R>' );
define( 'SECURE_AUTH_KEY',  '5=,X+D0VKl>|b!YWQBmPMvT.iFE/Li*//lCP;kxHr-~F>T9[19XoQQN%]9@KWyeD' );
define( 'LOGGED_IN_KEY',    '!Z}Y~~Ks8vorRO=w@Rxi[2B]u.(w2>~y&XV$vtU_X8p)s,CWd`v]iR<.F$s|0-7F' );
define( 'NONCE_KEY',        'W-|T`<5:TN@w[djUq=+42)Tb;%2v$tK08VQy4P[tFAnhd#W$^h+0qc$aooPKwF=Y' );
define( 'AUTH_SALT',        'LqIr? ^2-j[-E,1tXXUTv>2PCy@Xo/P*.11$r:{s}Y}}KfyM6Lyf3@w]u GLMX[K' );
define( 'SECURE_AUTH_SALT', ':tFB5wLJxA1qNf@9p+>Y6mHT!KP$8Q`jw`(!A5=!OU8xhSXT>Hi/~c25jB:e,vtS' );
define( 'LOGGED_IN_SALT',   '}OWgb)NPA]b.14-fM?3~.~05~Nj)LR)ZXI9Y&fK,N:.66Y~`Xu&:rBHo,.$c9(E@' );
define( 'NONCE_SALT',       '!L{<  ujcJ:?heI4+ jDK;YaA-M>+D#&83c*]L?;fB9yEKGCWXm`:It~<jDK9B%y' );

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
