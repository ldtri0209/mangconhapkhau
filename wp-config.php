<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'manb512d_database');

/** MySQL database username */
define('DB_USER', 'manb512d_admin');

/** MySQL database password */
define('DB_PASSWORD', 'P@ss2016');

/** MySQL hostname */
define('DB_HOST', 'db04.serverhosting.vn');

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
define('AUTH_KEY',         'i^)K|Z|75<>sVPK2<p,o/g+i+v*udemUI9^lT{Vf/CRzAuJxsITe6(_f_ho#,cz/');
define('SECURE_AUTH_KEY',  'j&{ MApn_+~]0nI(xB0z#?pGw!-y~$QwkFn8mHV=bJ#]!i}s2-ApwtwG%$@jVKE*');
define('LOGGED_IN_KEY',    'xwVhW}e2>d$^{+0O-+/ep*yO`DuCxg}=@$y-u6CHC!H,ZLdyw f3p{||KWb-&^vv');
define('NONCE_KEY',        'Wb.;dsc{td#JkyJ*/`U9M3q i~pr@zHj:`i6yFd|rM}jPfMi|#e}$D7>>$T+-r1!');
define('AUTH_SALT',        '+]?b3R(qdOikmk6wTJ|Vb*z[CPffW>+=HCn~s[8J8g>7LT;4Z)$V4kbs/U1!X14}');
define('SECURE_AUTH_SALT', 'AKtP]xu</uyQH,2sgrF:.L)!!lfeSGKH7o(+XJle)+Pl@)22=>N![F-<# )7:a-N');
define('LOGGED_IN_SALT',   '/>^JW[|{-S`9Kx?I;(8)*xv$}YdP3T=N7mY4}uk6PiG)2ZqtiT)J+j@xa?&Q#Sba');
define('NONCE_SALT',       'V~3+4xQT^Ua#6+f$wD/h$lQ5NtyKfG{(L<_0a*7bTK:RM[TbdW$6v|-I(M)KRB^^');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


define( 'WP_POST_REVISIONS', 3 );

define('EMPTY_TRASH_DAYS', 3 );