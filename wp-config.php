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
define( 'DB_NAME', 'host' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         ']BQEStdVZT>;{{]ukxmy_%bUh9}>_[1dI}}uvl%4?VE[+5TxSaJ&IJ~RjQa+#Cxc' );
define( 'SECURE_AUTH_KEY',  '=I !CCm7wyKr0? wKWQm%]L1gw2%i-6YlMG{?I5uvu  .HqVL;=jep#?Z|Oo/q{B' );
define( 'LOGGED_IN_KEY',    '~OR%VD4Api3YGKNQuR=i,Bcc:do4yodFkp>kV8L)qFemiWr*lIb.8G1,CJio.9[S' );
define( 'NONCE_KEY',        '?Du3YTUS5y&+J@]p 1ox)@1o/X5#&:b|^,J,KwTE?-c<[nSLP E+&DIz`_&/Jf>z' );
define( 'AUTH_SALT',        '7*A*qfwn~3Em_jWhcv9BW@fSETpY?1WU,PWvJiJX0<2d87$@d0QNQ$m),`O1~d-R' );
define( 'SECURE_AUTH_SALT', '.]qr`q)Okh-@~(L4()q3eVXiZR8Usr.Vihe?{f1AlyP}Ip5FfJ7PcKqY=4K5WLiS' );
define( 'LOGGED_IN_SALT',   'iKzovT#HR.cRrvy6r/|BfECQxynzTq|YvyPYN1(Ed]7]|C)`yaeBOztfsv5Pw&LJ' );
define( 'NONCE_SALT',       '1q/hU[QK|!OtY%Uv[OW1%<^<!w0UzjtlJP8nn+bR33g^DNGrqTNSd9yFqMK TUTS' );

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
