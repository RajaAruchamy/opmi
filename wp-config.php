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
define('DB_NAME', 'opmi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '2j9KrfNhti8uGTpY');

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
define('AUTH_KEY',         'ZmPaVE+K5*4/Ib72IH_h]IXm}kZW{VPVE_(w31Z0@xY1D_A-1BSCtAH62/a:3R:<');
define('SECURE_AUTH_KEY',  'rngXQAQfk3BHU@*%Izq~DBE7y: oH{l+|WCt|{sp5QIwmQdevhNztgYp&#q-c_@Y');
define('LOGGED_IN_KEY',    ':I~^;&{V.2_*1?)I*|/>WTXitrtyvcD0Lh/Y34EB+vd6SRU]2F)A[tJ^6#n4]@Gb');
define('NONCE_KEY',        '<M/&2l3DzhZ>]r6JE2EQ ,8g^H/t3SjDCoE#,R]71[oF.s=VaWfcS>xPwcm*ff3A');
define('AUTH_SALT',        '6yole<69TL`C&KQyLMUbA1.8l?up:1uH<I~EO%KC0]XAJsw[VFHOx-[pwq{6U5Hp');
define('SECURE_AUTH_SALT', 'G]^cnN.inpa6/E,H(^CC.4zO<N1?{H|>n2MyN&R]>3}#D<=zAPnG<UGel%JFm^@M');
define('LOGGED_IN_SALT',   '[+[@cL5FKmcdY}f*LHM,x:8^nSr*]}JGVvE1}TFJ$^14 G:Yfq6q?;_sgh~;em O');
define('NONCE_SALT',       '}pMHb`H!)_KJmN.4px5D)hmHYNR00Ep~g1SXh=X`{KmJeRI#u>u9;8!WMsHw<tdF');

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
