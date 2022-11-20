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
define( 'DB_NAME', 'wp_eshop' );

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
define( 'AUTH_KEY',         'S^ T74HU)DA$k%MRu(SJ[2kR8_&`;dsMC6d8HV}TO--T6*?ht(5`iuzH, /Kj64{' );
define( 'SECURE_AUTH_KEY',  'dn5]@-&m=a(4EQ27O9h=G~SK &%LE^/4Cd<bA]HX=k;a3I0e))C:}f]pt}moC(-M' );
define( 'LOGGED_IN_KEY',    'ty^mvCD=px!^HAjLO]>/9aj$bDk,mN!aK^cUj,+ wp[+g(h-#8R` Q~t0]P;lU,j' );
define( 'NONCE_KEY',        'n3*3a`@V]8:w&,5LHZ~-R;c_E)rlB,jfJ5t$pK6#p^KX-BPW%$`g^7Hy,tHe=j);' );
define( 'AUTH_SALT',        '31*rtT-wJ+gcJix=ABCC`1nkj6tR Bbi5:ijQBE_158{pL`NE<RA:kWPlM/sd$QA' );
define( 'SECURE_AUTH_SALT', '%-iV#0w+g4n)k-Cw`]a]gM^N|.K@Pp`*)j=~q_QfBO0qM<in,WlGQRh;PgB@QFHi' );
define( 'LOGGED_IN_SALT',   'J=-yku2i}o]J|2tM3!a8)[rG{Rk1RD>bymC[`YlkZI,Pix/8n4s}?7#LvPSi*=07' );
define( 'NONCE_SALT',       'lPmHUR=6r &dq-Nw}q85TG}n<:XA|]vP2^gm;Fy>CU|e-OPFs6V$~^~OH?lnXNL@' );

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
