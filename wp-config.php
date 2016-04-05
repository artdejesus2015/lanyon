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
define('DB_NAME', 'admin_lanyon');

/** MySQL database username */
define('DB_USER', 'admin_lanyon');

/** MySQL database password */
define('DB_PASSWORD', '9b32ibyxgm');

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
define('AUTH_KEY',         '-gKf,Do@=pNV~_U8NM+a*-Ou RK~  Bb<eN0+Uc~[j-q{m&duP$ZYK(){8&LEE{<');
define('SECURE_AUTH_KEY',  'k3E}CM5$+GQ(yx<0kxC4[)Y)opI4yT-S{k.d=L?T]tK(<tG?nO3^Mk`i-a7|s2YS');
define('LOGGED_IN_KEY',    'JlrI&gOl:)7%`{QfM/ZA$;&FUkPL:>!)@9<o5$:IBQx/JC-+NGSo?.c}3_Dq^lR6');
define('NONCE_KEY',        '(0U_Q!+6`85VoYYM6SQ.q^=WKn~}.w}{AeiUe<$4-&~<RcS]6/6w0Ya;E{a-YjBN');
define('AUTH_SALT',        'O|2 }SJCdy|Rsjk4F-i?@MM~]bL]R-gsRYza_-yi-$TAsj?f 2Cr[^O>`.jlkxR;');
define('SECURE_AUTH_SALT', '{,7Eh;Z5a6:{|7a3%Rq?o:Jclpqbh>96pG*b%@%:4xd6O!y9~.%Qz+zmLC_37]||');
define('LOGGED_IN_SALT',   'e9BLEoP-^3|N 1ubph#O0rtba^Q7f;e]0VQmY>yw9{>1O?S[jw-%]mso:i<1?VBS');
define('NONCE_SALT',       'rQ{_Vf61&K$ cDzU_.+#?820}O9f,F;SU0Z4C{|m_SB.@^/P[ju|gT@^t|-r=#[!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lanyon_';

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
