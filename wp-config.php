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
define( 'DB_NAME', 'id18958714_wp_56dab0d8c2b29104f1a716559eb1c562' );

/** MySQL database username */
define( 'DB_USER', 'id18958714_wp_56dab0d8c2b29104f1a716559eb1c562' );

/** MySQL database password */
define( 'DB_PASSWORD', '85b797fa8913f8b919fb59c54e56d52f7da9084d' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '7?6hzIm;8KmJcl}GkiWzJWD_^G88a!33h!/]g<,Cg$aM$.&z13W#]U`-P |#zR3_' );
define( 'SECURE_AUTH_KEY',   'M+%t:1+6@)Ate#9L6p@Bsx.%5RNZ>-E1a)!zni<}YASdq5[gz%KuJ5(8<lGKZFk[' );
define( 'LOGGED_IN_KEY',     '/dM;vf4uV-/iL#&19stIy65JxD!k1g/`@FsHYeKHk#*j7m#>cj)*&zrrD#0g8UFw' );
define( 'NONCE_KEY',         '4s.:f tC_!B:qR~Cx_gkLfS0:$S)>no2j0lbmJ[wJo$(HP`X;I%~YaYpHSc9T{`0' );
define( 'AUTH_SALT',         'Tv-H^678P}.{;.f|$^@6}^]<kEw^(yOt[pW$$?yQ&_MZ5jITA/G6IsF<Ae-7A1i_' );
define( 'SECURE_AUTH_SALT',  '2mgLbesTXKu0w/Bsfo_C!RV34W7}|R;k3w@=rPQ;SA{I6@x_-N-hihS~%3O;H1K|' );
define( 'LOGGED_IN_SALT',    '][]bjA@$vkMq;rf.Bn4%)-8:(N9.#py|Nsj}Z2~X`=1D/2PK[BGl6>5@i`N{3Pq+' );
define( 'NONCE_SALT',        'F[|5AXg@@8!Nm9|S@2ME9io}rzR},Sp3`oEqzr-V {ZBAY-`T)_C&Cs}+,Ca=QA(' );
define( 'WP_CACHE_KEY_SALT', 'h{|=6J+=]jGRyxBO`Kn`H@v{5NN<`jDF0fmr/g>c eeV*W/)0Bmk1[2Jxufi %^N' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
