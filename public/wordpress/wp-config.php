<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'wYz3H~<=.{P>S5byPc)S[MsKF#kJ73WszRLG8)Z;{@s?.lHaiWaMF9=PCK[J_7aF');
define('SECURE_AUTH_KEY',  'h-~@<cw+3i&;Ph)asuk^q;U,K:Nq=oH|ur/?1Ypq0q%4Kx&*D)5cKn*WUli! ))!');
define('LOGGED_IN_KEY',    'maTb&t|$4d[3#l*-5(ZvOdBVyYZ;Pe&[jw0As_`:.}B__JRUh] DA:|v<EJoWq:R');
define('NONCE_KEY',        '_pmo@(@^D{hkd,(A&Q4G&O%m7peLQmEO,W#*75;-KfnDxKz</Pm0@mNGEYs#j|lf');
define('AUTH_SALT',        'YZbK*;Rig!L+73@oEP:JRNP`}yxAjCCQi^i; P45$}^$s&DCL*6>Hoj]rB7[#^NO');
define('SECURE_AUTH_SALT', 'O/sLrQSr!)6Gp*[Y?#g3|-NMY:p#mzQI:4vHr6+m|aPJA1f5Pt3 %%ul4~~QFagz');
define('LOGGED_IN_SALT',   '%bq.X-@JUG7uu)EuS~~;U.+l<jksxf|b(e/@JN,-EQPdlV.w/[L7uBtD3A>?K5>,');
define('NONCE_SALT',       'xq{Jpji{I5`g-Owkw|qDb%Pm(>~?eA_*O+@^w[@@mw~gjpSum)S&*phb}53c_8t>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('WP_HOME','http://192.168.33.99');
define('WP_SITEURL','http://192.168.33.99');

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
