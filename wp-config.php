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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tikalshop' );

/** Database username */
define( 'DB_USER', 'rootEsclavo' );

/** Database password */
define( 'DB_PASSWORD', 'esclavoRoot' );

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
define( 'AUTH_KEY',         '8/`FA*:TFivF_T]i)&dLGpTmT[j41lOA$6 {IP~}B9@00i;sDq&3kyU4QbkOX!.<' );
define( 'SECURE_AUTH_KEY',  '5$KhP@zPaJ;IM*7Pj45E8aVNL6BMjiG[k:(OAbwGkB.@QQJiV($=YF@m*>F1+-!O' );
define( 'LOGGED_IN_KEY',    'mWp DnJiQS~h<!9g_JFKl$R:~[o^j7cY-b1cn=qtZ#gTO+MN*mvde#`x@~yW/Z^B' );
define( 'NONCE_KEY',        '*qmFt%.jnmY2Mn0:!Fx<fgou%Bvw{E^D?`AW48Ys+Pz^GZIH4:`lS:QIdDZRzz A' );
define( 'AUTH_SALT',        'vXtNT4#*q&3O0gV>bX=$==0l?,>$%N5,.%H9u<],xirJ}nYW<|:E`]8r@#k-s3_M' );
define( 'SECURE_AUTH_SALT', 'ZT!m9A]?Hd7{jLTwAc?C%_If:=ZkzsLy#zpm_B*~Xz2(&|%Qh#&FXBS*MiCLz(|5' );
define( 'LOGGED_IN_SALT',   's9JJ1.[GGp3C}Wpt$~UIoIq*sw<zCzk6[LPjT+OSzt$$ArjErw9e:c(x;kZXSS:Z' );
define( 'NONCE_SALT',       'L($/*;SRl#~h8yD%twe|0tY#!gFBlL~IND_~n[zNEsZZ`9>?[{Si%Uw*A<_{Q9D>' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
