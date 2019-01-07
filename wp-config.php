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
define('DB_NAME', 'takehome');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'test');

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
define('AUTH_KEY',         '[lD{MA`SBke3ip7<q@SB!yE1osEdVrT6U,p kH+Esc-*b{MAmhow)[#5jnqH3DUK');
define('SECURE_AUTH_KEY',  'Vr/1WCnP|^DRysB5VgZLY{h**~45Sd0f$?_Q<VD8@lk2c%QkrC[W#0HwQtHyB#;q');
define('LOGGED_IN_KEY',    '^a)p|cpj~ SZL)E~ )PT-.-e&$y&.nM}lST(S@Dyq(x;faBEx^~p<m+I!}~kz*@[');
define('NONCE_KEY',        'V6Q#KKR&NQDTeo)/c7N(nx^E[Bedery*_z+.((/;^LON7KKUPU?7@F#TJS=r./eg');
define('AUTH_SALT',        'QnF}PLH8!M$BEe+vVXjGu.%AM-WZG/jwQT=*,1t=l#Z0LFrHSCc*e_vj6klp9ui,');
define('SECURE_AUTH_SALT', 'lfox48u;!6[DC)BhQwH^{CJIYxW|Nn)ld(Kedgff4G{|=w1<-Vjj)kd`te+Pn3q^');
define('LOGGED_IN_SALT',   '$>K A*F1Gm|G`u>gfYpNbxdh>PFjSM%N!qDK9tJCNQRM(/Pr!9G*JZ),i)7I=_CX');
define('NONCE_SALT',       'gX^>^;QK];_,^W=fwk0qtfh;QmF>L~,-N7,@BYK$?Ji*e4?Q#1`rm3FU@DNY_Bgp');

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
define( 'WP_DEFAULT_THEME', 'takehometheme' );
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
