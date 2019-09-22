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
define( 'DB_NAME', 'webskillwave' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'A V}p>{D/8X([RzePk}AhwNeu}<P[oCFg.)Hf`-SigEhu1AJWzJGpFp^$kA,Vf#d' );
define( 'SECURE_AUTH_KEY',   '(If%XKK$^eM8Y1bg5? g7Q0JrgXC.`hI^>#dvOD7b$1M@Rf@!aewNt34>7w$e!gr' );
define( 'LOGGED_IN_KEY',     '1-?=MZjCw[9m2f+ZQ+=?&;@b)Z8a6ZG#wR688.&VRBA_fM,);OIRmk_(g&,WjSZ+' );
define( 'NONCE_KEY',         '|}NW@Ypmvk#4&.4=5{-.):2hQOz(Daj_$LFCSn*Y*gDx_xw|b/[dkcCPqgPZnu(B' );
define( 'AUTH_SALT',         'ufDwoqt5>Q2l:njrX)nZZ)SMi8Hb,i#,;CR3jHW_vOiBk)C4]G7hsIzO,6YBBL(S' );
define( 'SECURE_AUTH_SALT',  ';$zuw5l (Te1K%<Zcs() g/)(Jklmgt83E]-8NUUjFlc%[{M;<6(=l=t<2KD,=p]' );
define( 'LOGGED_IN_SALT',    ']+ZW]&|Njo9m6jb4s7k{C?RlR6F>aXT|VZU[NR`nP&~9UNlB*ed/oj3/)FwG/[d,' );
define( 'NONCE_SALT',        'N{Uux%[$_VA<oY*AB~/a*VcN]oElNf<3gjq=q$dA~>dM@JhJVJT[Y/bvxlpuSyl0' );
define( 'WP_CACHE_KEY_SALT', 'uU$i(:/|fLEIC{{1uGWuL3e|d8 NMTa,~Z^s:V7T~;^^@KEKZN28ZIF5!?#Wc#->' );

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
