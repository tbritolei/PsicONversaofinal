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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u740053215_BvDkV' );

/** Database username */
define( 'DB_USER', 'u740053215_AUK1W' );

/** Database password */
define( 'DB_PASSWORD', 'pilKK3GSBe' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'c 9tOH:ZM{sZD[4Pd_a8zk-Z(M|3yRl)_J=p+Qa~TbO?(g_WlA.2XU3c&+@_on]W' );
define( 'SECURE_AUTH_KEY',   'Ckr+Sxc_L}**)f_?XJv1m0@CNogGzcy.fW+A(wM$37oVDvZeV+oHNW%(JP^6aiQb' );
define( 'LOGGED_IN_KEY',     '$`2uN pbeC;+?HctB]QT!saDP)zrz<G]W%tS:B47&H*v e^[9+T%,,*#t/:D]>Xt' );
define( 'NONCE_KEY',         'Zd^U,;Xp?a|Z%O&$$)K9Jhh]|4M$x5S`Yg/lYA_}=:CwGY[1md;L* X?kt&FRJ93' );
define( 'AUTH_SALT',         'VIpj9*yv#(GsmEQ;]Sl MHBHU*,ur:,;;&$SxX%ElD><fd6c~IClN ~3(xCPEr@`' );
define( 'SECURE_AUTH_SALT',  '8HgzC}>O1&;Bm^*s`;n$G0b)qEoBYT Wy^<4(98G@=[6KiH3DqfNpf(L&<lRAOrB' );
define( 'LOGGED_IN_SALT',    '8|9NXz5_c0~RM&=Yg!JB=ppBw-#D7q;zR)UlO&u;({}M]%lI9~mBwQ7WTA]>:a#/' );
define( 'NONCE_SALT',        ' Y%:|s@m.oyvmLPlUSjg8>r*U!3OA+9Q|{bQ})[iX+-EtVGyAWKdm<gF Q<P=5[_' );
define( 'WP_CACHE_KEY_SALT', 'PBM&&nHmN|1P.vXs?gFnsUTEUAZRZyFL6%~td|WrYWX/[qDCxTzcM,40,&v~Ndf ' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
