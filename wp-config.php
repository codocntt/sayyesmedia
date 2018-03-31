<?php
//define('WP_HOME','http://www.sayyesmediavn.com/');
//define('WP_SITEURL','http://www.sayyesmediavn.com/');
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
 define('DB_NAME', 'media');
//define('DB_NAME', 'nhsay2jj_media');

/** MySQL database username */
define('DB_USER', 'media');

/** MySQL database password */
define('DB_PASSWORD', '123456');
//define('DB_PASSWORD', 'Abcd123$');

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
define('AUTH_KEY',         '2O+)osWs!OS]s|5k6p;zqVF&6*Q?EVGnkbt+whkh6:$Swr!Z0&_JK#S V[#I_.XA');
define('SECURE_AUTH_KEY',  'X6lG|kX9 zYtZ(&e3ksKQ5%#{b<Wj.<>1nUrYo]|Cn|?pOIOy5>`V~$mZ$Y.rf(3');
define('LOGGED_IN_KEY',    '{uwl4^Vs$$$LN?gZ=&h,)/S`F6>;d^c:_H0R8dzbL`!pU+d[AmM--P{!4*cJ.:=@');
define('NONCE_KEY',        'HWBNeg- 7_?z)V{4P}VcM_~IiK!*k}MyQF9z{MG5dr@3B{r{Hkmc:pIzHGcF/.5(');
define('AUTH_SALT',        '>}. 1Zy,yBjoiQA|Hg57^]L!SU3:<PRBj(&b;ydNDZTJi0cVav9EkU[_yzl]^;Gi');
define('SECURE_AUTH_SALT', '7@|R.Vt;?4k{ym=x>AHpW`|W<c<#Ew-I$3XMg<V@ihEMA884!Yfae-sr<}^lOA_?');
define('LOGGED_IN_SALT',   '`9yKneYumFs-X.@I%=pb,@s+{[>2z)g4s]2lic~1s7L}/^o7Z0&`NP?j|6@/Si2o');
define('NONCE_SALT',       'a3r#yd0y_I3?/W9X>bDx?P8w~H+&[=X7.#j69I*Fm`!zQP3m+7mF[1H#8gVz1z2+');

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
