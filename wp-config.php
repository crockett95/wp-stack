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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Fp]w%Kp] |SJ&DQ!+klBlbE+uug^j58bZh;1SdIRCz1vyo=90V|RV1Y&r+%eNi!!');
define('SECURE_AUTH_KEY',  '-@hq!!,@+j#f!SJX1/H&1o]w~*8+A0$+$K)sIg#j-M7F9IQUID5<eUA4ZZxfAwZ ');
define('LOGGED_IN_KEY',    'V[&++Ub%ua0a-*%gqJQZqTc=g@a|=bnLkjVC,[&O1i--b>FLU?:1^CFBIxHuA{Eu');
define('NONCE_KEY',        '+sZ%[s~$R;p{IrIToFc4P<d@e.6*Mm)7wF,k2nQOOjVYenT}YL(bt0:|V+|uSl<r');
define('AUTH_SALT',        'pY*5Nv-lIE3l!|fyE)5n=h+#$GTvt4P>sal5X#{-x_|B9B6=QPVnRY|g|.f#Oyvu');
define('SECURE_AUTH_SALT', '<P>@dmG,p$6KCElL;T8HSe+y,Grm7a+=p/l)3z4+3g}`vVsT#XlR8{ a&T|H?37}');
define('LOGGED_IN_SALT',   '5>oIdK8Q(M/N|{GZb*:!L&AV=R>4P|[Utt_MF?+p<,[i;)zjkLTbSFRjK1_7FKLw');
define('NONCE_SALT',       'F>:R$r(OY+Aj[KhE}1:D^8d1LxVORFalfR+[.OHHLcnZW?NaxBCB@F4<%EY%Q5T5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/**
 * WordPress Site URL
 * 
 * The value defined is the address where your WordPress core files reside. 
 * It should include the http:// part too. Do not put a slash "/" at the end.
 */
define( 'WP_SITEURL', 'http://wordpress-app.192.168.1.69.xip.io:8888/core' );

/**
 * WordPress Blog URL
 * 
 * Home is the address you want people to type in their browser to reach your
 * WordPress blog. It should include the http:// part and should not have a
 * slash "/" at the end.
 */
define( 'WP_HOME', 'http://wordpress-app.192.168.1.69.xip.io:8888' );

/**
 * Define the new `wp-content` directories
 * 
 * Set WP_CONTENT_DIR to full local path of this directory (no trailing slash)
 * Set WP_CONTENT_URL to the full URI of this directory (no trailing slash)
 * If you have compability issues with plugins Set PLUGINDIR to the full local
 * path of this directory (no trailing slash)
 */
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/content' );
define( 'WP_CONTENT_URL', 'http://wordpress-app.192.168.1.69.xip.io:8888/content' );

/**
 * Define the new Plugins directories
 * 
 * Set WP_PLUGIN_DIR to full local path of this directory (no trailing slash)
 * Set WP_PLUGIN_URL to the full URI of this directory (no trailing slash)
 * If you have compability issues with plugins Set PLUGINDIR to the full local
 * path of this directory (no trailing slash)
 */
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/plugins' );
define( 'WP_PLUGIN_URL', 'http://wordpress-app.192.168.1.69.xip.io:8888/plugins' );
define( 'PLUGINDIR', dirname(__FILE__) . '/plugins' );

/**
 * Define the new MU Plugins directories
 */
define( 'WPMU_PLUGIN_DIR', dirname(__FILE__) . '/required-plugins' );
define( 'WPMU_PLUGIN_URL', 'http://wordpress-app.192.168.1.69.xip.io:8888/required-plugins' );
define( 'MUPLUGINDIR', dirname(__FILE__) . '/required-plugins' );

/**
 * Define the new uploads directory
 */
define( 'UPLOADS', '/../uploads' );

/**
 * Define the default theme
 * 
 * Slug of the default theme for this install.
 * Used as the default theme when installing new sites.
 * Will be used as the fallback if the current theme doesn't exist.
 */
define( 'WP_DEFAULT_THEME', 'twentytwelve' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
