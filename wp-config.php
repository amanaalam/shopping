<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V9-jKS_t#t`O8<[T4q_(:BV9{Pr>rw*Uk+&#jTVmh8E;TL/Y)cTpmvH@s3rIP|IF' );
define( 'SECURE_AUTH_KEY',  'q354SI.R&*4cI.e))#Pi<zBfl)w[.}507S9NSCYxWY/^::LJxH)ge]jB!=Ps0<^;' );
define( 'LOGGED_IN_KEY',    'y20NzmoiaF<]9#G?a5VghTnc)8)#OSo{9|VoeBUMZ[tJ/0/EU_tEs97fk52*;yR1' );
define( 'NONCE_KEY',        'dIj h+(n.BZM}GmS9vd#9Mt;Jj!3C8vz2ZCE9ypwGp&cX$h$*49V37QgOWQS_rCM' );
define( 'AUTH_SALT',        'E{8|l*$=?Z[8s4UqFa&EWP(Qc/@}o{}.}qqzyW1y)<uG|/Vn@c/PH.RMVv@X)95D' );
define( 'SECURE_AUTH_SALT', ';/Mp$KPK-P].7!mI$QYJY(gLlMyw>VKpjI:^zm13w@f<h5*oU%5}1rlm]/]@nJF]' );
define( 'LOGGED_IN_SALT',   'H}r/]9qZzLF=F@B6c+A<1{~!P6$Bg<Yz{U.MCejeBgqJF,p#D6bgY</}0 h9t,W:' );
define( 'NONCE_SALT',       '.Jr>GdApHv6%g+`;I3=NVDO/pTDZHJJp(m<HNq N6p)yfqzfnTWWSP:2uYB$~7n~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
