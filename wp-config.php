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
define('DB_NAME', 'compliance_db');

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
define('AUTH_KEY',         '/r`QHsn]2b4M0]N}0iV]sFFxro6-08&M^_.e^4sO6!~F}QJ=$A23dxln`{pJ}!]H');
define('SECURE_AUTH_KEY',  'Vb]]rn/1)!Zu0|yQ4JK_ix)=B(c5i4^?3HXPt`&LnUxhfo|xxyO7$Zy1XK=S(5Xf');
define('LOGGED_IN_KEY',    'qA1c6=zxs$0Kc9= q:X`{U}PXO%!Acd,l=ATxg{?XX`5azMMt~j)8FH_u@xI<f<^');
define('NONCE_KEY',        'FU%`]|pZ_*,a?K?uKr[vfplYg{%kApK{1&>s)eAM_xgV]pscYLhj*7G%n@EH/=MJ');
define('AUTH_SALT',        'l%i9xeAp2so|,Hp3hLJU(x)|.ESQ_I~wsa!KT_{nJL^c}TwP*F9<Cy%FF6BJ Y+I');
define('SECURE_AUTH_SALT', '~Z^Ku;,Ds]Q02P)_+5zv/~@>HIht{.rSt0h`4m1:!,dQIds&4c1Lq;(,Ef}(WMEW');
define('LOGGED_IN_SALT',   'Rv*b0RJ`9M]p;%V;T+OrGM}um,)]H-U]&[{9t&YBWM<Q]NhZL<?*nez= >Fet#je');
define('NONCE_SALT',       '|oA.2~IYtY5*.&Nsm>$H%ao&d~#x`Ea!S|q-lv~Y`cnl58U[V@./DI-iWw8t_xl`');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
