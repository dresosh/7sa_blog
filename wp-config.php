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
define('DB_NAME', '7sa_blog_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'h`ixsx>b30@&o<~l./=R`&g2#=t7^=H-]OThGrPo7EsZ+F7)Z `,}mZB {~o0w`u');
define('SECURE_AUTH_KEY',  'l$|IS^iX:tI|`x:(Y@M)r(,INVZ5bZDC.}#~U5oC|?^hx{J%GWsu(_<|@H:bu<8n');
define('LOGGED_IN_KEY',    '![C:836}YZVhD9Z!z7W[MYTuXI-+{-LWyDX) o&QXsY|MuC,9PKg9<+!9{X_[zy$');
define('NONCE_KEY',        'wF oj+.TDg-%@f|&?r6g}BWmV[9Foap|luEpls0vJ~21Mg2(^){-4Unj_(Wp}{>5');
define('AUTH_SALT',        '>WB|SPB2HC_Vf2YZ/Tn.P?5n+b9)S)B0>(_|:&Y$?qLT*-b|sG~|twX3-z7lqU}>');
define('SECURE_AUTH_SALT', '%eX:Bw_r1Dyt6I=Hp:42E$brAq2d)KKt?R11!hGn>*rr4}E,6o0-PBsO2|t^O1|V');
define('LOGGED_IN_SALT',   '#9<Z$,u.{CtTRjF`/l4-S^ZWDRwMPP(Q(4a^NL@vHq2mnG;Y^iA71oBg8fo?d `d');
define('NONCE_SALT',       '`Rws+<J~l~dHbd[Oy[W$K-Cf?%|AQqm=+1*sSd$ivjWB+SP4{-yho>^++#m2Fb|m');

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
