<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'project3beta');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8?=OEe<I5iE9>f,~6sg>aMi-29<O]N22=S:+f3(>B$)|q@Uu|C=2i;ACC+4g3-+5');
define('SECURE_AUTH_KEY',  'wxfgflx *_CH|7xb$7-CKNaFa(ay/$:`A9}P0W1=:w67/h]O}WV_`<,QYvv!LM;e');
define('LOGGED_IN_KEY',    '5O;I<viAkB?h5>*|Y!,T_&7-v=5ji4qlve&TLe>|7(,yF(C`-nQU:#q9RGU;O%]*');
define('NONCE_KEY',        '1Nn0*P+<ovfapv_M^dS_TpFT%8PM<fQRm}SWV6;_l_v=F_{Iy r=W]>|F@:zQY6|');
define('AUTH_SALT',        'N^H?YMO_5I;*YRYzZbNzm<^.uR])uQZ:lmL7r;Dv*$BZ--J$t35,R-%FSIZ7S.0Z');
define('SECURE_AUTH_SALT', 'k.)|>KLtZE:~nj5OyDJ|`U9K.z}W8IRoU4m7|Y.C7=$ovLTrG%L@:dcPZ5P@}cp:');
define('LOGGED_IN_SALT',   '=V_cPMH-Z@<9Gx^r2g+Y%sZ|]jU4u<|iaJ,dA}Z.j&Fv2ZF+WQJ(!@/:+UaTS;TD');
define('NONCE_SALT',       'P=B|$ 27vMV:aC;:-3.Sxauhus0YjQH@[qgcHe6+ymwRI<G@}~d6:5C<%0JXQry;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', yes);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
