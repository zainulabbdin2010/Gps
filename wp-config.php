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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'UfU: =PlW?`vRzHR[/PH nkqUH^0!1Y^[OU,oD_,)t=c)$|f+GDZeu@t3{gHoqzP' );
define( 'SECURE_AUTH_KEY',  '{`@,)[^]Xe{fYi}w[@SV#t$M4M~yTa.&G3F3ccG~8*Jg~:BE:NTPfEUpV[_xKc./' );
define( 'LOGGED_IN_KEY',    'oR*vy<!dq![>P4B|`Cl&l|BV;vgg .a!W@CSY*9B^rr.qnWhxm17Mp1s{Y6Ve[+m' );
define( 'NONCE_KEY',        'B<=wi>d%wYp/#1;2H FS(-/9kWk/~C~KHRdVL`J5&^G @9m IuGK@nq<}yI2t/og' );
define( 'AUTH_SALT',        '2ywpmxW_opxk3b)}WJ@mT:DBZYqJ2@!]6Rr1 =o+H&),kYNsF1J4)m0@oRJOYb9n' );
define( 'SECURE_AUTH_SALT', 'mNo92_7+^$oMC{$#$l>H;Spkgc{7{MiW>y0p!m{Us[q|AV_sF1Duw{7$e&jW.}n4' );
define( 'LOGGED_IN_SALT',   'Ul=,:c~4!(/?/- y{MWI_u$g~B[S,4*!e_Q{LI}|kM(qbm:_QGJ5x{/=e=:FpDXx' );
define( 'NONCE_SALT',       '90#Ctk6%&XfQ79p:-pHu)Bvf+4AHSR62pU x](B.p/PTHJqA}{;Oi!mN*!J}L!C_' );

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
