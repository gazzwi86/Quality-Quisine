<?php
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
define('DB_NAME', 'qualityquisine');

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
define('AUTH_KEY',         'Wyw$+,6cLf_XG*@: p>b+q$(/hb>rACN:iQ$+tT!o.SHJ<TzuX`-$d s1H2RoLAh');
define('SECURE_AUTH_KEY',  '@xUq?&c9N2HRDGqw^v1qimp5+B=x5y:y:=.SS3MF!I3+`G-9Z+ V,mKr}OV~+:>M');
define('LOGGED_IN_KEY',    'A>]J%-cMzvpo)qc8:MS(XF t~t 4!]Bnyg?B]A&7[Rf(zZ?=^9Qp.K~:OfoU@S<(');
define('NONCE_KEY',        'ZNk9O[XcVv%l|el7S}H(j{mF<V4.Chi(pl-+2q*KYtPg[PC:&p0xxHhg-V;aS5]+');
define('AUTH_SALT',        ',Y|h9]7BiLV0&HL?KgiZembSc^}?F^ 4iCgyb_+%Uax!Y2JPs1Q%+Q7OYNv%%n`x');
define('SECURE_AUTH_SALT', 'YYR(#4X$Tm|:FnsV5wDL!(3QV].2J]cm/ClP:pz]32Ty|,buU|61B$p#u:r`WNLX');
define('LOGGED_IN_SALT',   'o(50k;||T[(ZGh*5<xM=`*:q#huU~5-CQc~3TTIUxbxG-1ByJ;oAzUH:~-,}Q[7k');
define('NONCE_SALT',       'CB>I$WCdyEjq]`h[}[kl/BI#nr1]{R&zR6+Oi;7bS[/&G-gmZ&<Tbo&Q-R%k,jwg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gwwp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
