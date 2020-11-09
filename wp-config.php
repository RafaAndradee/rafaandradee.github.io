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
define('DB_NAME', 'id1659970_rafaportf');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', '');


/** MySQL hostname */
define('DB_HOST', 'localhost');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');


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
define('AUTH_KEY',         '^u$F^q]^fo)Zn4h=Kf2S=w1F]#K5 %@wH(`J])rB/RbH3N}k).p=Ey?Eaxy[sh*r');

define('SECURE_AUTH_KEY',  'N]goV[;nLZ Me3*xxss*zoaG{tLXJ$H/tR1$ynRp+H:`a7]yplWX:Dw{NuPc^]8$');

define('LOGGED_IN_KEY',    'k[qk7nJh!P3SL|+9KKxw=B_bOl/OF`^oT#C(.S`}VR0,ke4qVl*sRB:-a`T<?R[8');

define('NONCE_KEY',        ')[LI_Ndf&r9bOdb)6NA*e]U&9FK{$ALue<4L2.yGF~G_)[B?}*A-feM39KW-(A&t');

define('AUTH_SALT',        '~_5pf)2-/o*p?Xr/40#l}EkHIfRZ6OJHcNDzgS7-~r|O3_acggjN_,f3} (![<R,');

define('SECURE_AUTH_SALT', '6=&N&s?DE`#{s#,0S9^L7fj:L1S2Abc*)Qz:ZZF$/%>hG~8MF~BNFL#{8[`6@f=A');

define('LOGGED_IN_SALT',   'oM[kDE1:9%N:cpcZ4`t?EJtMuutvqELo2=x>D40bq|y:Tr>w8xBG}/8+PizX:;b%');

define('NONCE_SALT',       '5)|c}-9JJ_Z^qsfz^N?/kaC>9:FC!&sbD>8|,1ELA[rY:RiM^l (z:v{2OdUI $r');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


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
define('WP_DEBUG', true);

define( 'ALLOW_UNFILTERED_UPLOADS', true );

/* That's all, stop editing! Happy blogging. */
define( 'ALLOW_UNFILTERED_UPLOADS', true );


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
