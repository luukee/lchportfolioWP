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
define('DB_NAME', 'lchportfoliowp');

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
define('AUTH_KEY',         'yOy5aFYT_3mz?wx8ulv;&$sTeD9&}1qM9W$6M)vfiID~t>>o{&il>Kic{VD%XQME');
define('SECURE_AUTH_KEY',  'T&E5dBZ`vs/V18bMrpY/J$hiYXz]r#O*NCv<#hP$z;kjvelZoQ>^@2}w{t&A}d(/');
define('LOGGED_IN_KEY',    'W({(1EUTs`o3@=BP5YS!H7tdokD0(72(D,Uz!F67I,5WF|I[o/X]cc?zQTZkWCyZ');
define('NONCE_KEY',        'eIB/[6+-V$*L2UEStf*iqshTSefpJ6w$M6 ~U@]=%ZvYYb3?39iKZBI=@=Eb-RlY');
define('AUTH_SALT',        'F~A{G|Ku-]?Tyi|,+#&y@ZS%)`l+#P?|[f_[$~<E:`;tt%OiG -z^)O75pijR=)F');
define('SECURE_AUTH_SALT', 'Gv 1OyJ$tRn^tr>h@}L4BOK uQc}:*I+JGXROmaU-T$R%[m_90jl?S9GC.tD{0HG');
define('LOGGED_IN_SALT',   '$r8mMMtQgjO-w}8_Tg%}3 Q/~~,5oMi85+1vt gA@E@z(jCR?wC|r8QpH5b?6|!E');
define('NONCE_SALT',       '!o:k8- [TF:S&x-@{=N[*mh 1hdwE2(0wQ%}Bk6NA?6_B#S:7}C_`#?V?T0$kgfv');

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
