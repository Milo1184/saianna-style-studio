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

define('DB_NAME', '4saianna535');



/** MySQL database username */

define('DB_USER', 'saianna535');



/** MySQL database password */

define('DB_PASSWORD', 'D9~k)v?)ue~r');



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

define('AUTH_KEY',         '{X:PZ{xy+g9z[9O55Fp!-.|A#pq_9Z:GqX7+uNXUX3q2`?UW:yaB(X#7r%4+Tu,T');

define('SECURE_AUTH_KEY',  't}f#=#FA~deBBD|s`<!&3,Z`8_7(Bi=`!ULMPm+l[yvhXu3TUL}AZU1VOv&y2Y:~');

define('LOGGED_IN_KEY',    'utndprOLZRo;1Qf8z<l{5Jk#?D/7{{yYM_/&8>rn<4p^Je?#SmRonwM%`lbHy85#');

define('NONCE_KEY',        ',v015CC=`H=#w@u{(MR@Hbs:7&/`KBk*1:-,beaOVJZ.Xic?7%V]ri,-^H%QEN2M');

define('AUTH_SALT',        'W!,I%2R`{n$v5#XM`G[V.,$Vn&$inQ]Vuf7/jMD&KwNWR;dqU?dw,(w^V7)3eYh&');

define('SECURE_AUTH_SALT', 'VBTx?Xh.A2^Vz&=[GXTjgM?r~sD]`I.a.JYl*y(!*&b-4eNHgIc]M8Ol5J6R,,N7');

define('LOGGED_IN_SALT',   '1+k|fd9e^O]qu@VVP=deX&-A7r`qaxy:G?XdX1_$%:3,#_GzI55A7U>t|T 0MjYv');

define('NONCE_SALT',       '0ihVKX/F]k?3,kC%_P`XP3SGh0oDY5YGx>Zd}?oE2VVyGyv|7T2undGPhB Rd%BS');



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

