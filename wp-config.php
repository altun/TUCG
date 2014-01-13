<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'uzaktano_uecg');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'uzaktano_uecg');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', 'uecg_2985');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4}n 9N;p:X+3a#vq`kP,XTIa|aPr3Q7z|.^NU0jQi&_n)4E4BMT.V2rCvZ|JXl:{');
define('SECURE_AUTH_KEY',  '#-VUUoV}_6,MX<ky)Q3&m^$Zc]~t K(dMfh^ggEf!7R*L_6fwtK|Uy+7hgtnTj]N');
define('LOGGED_IN_KEY',    'o:o4+,(v6~] ||&-iHn5]uJH 6HJ;ru8gzb$Q.L4d}+(L;q$gyYw.]FvD;;epb n');
define('NONCE_KEY',        'qb- 7_;D.hf82-(#7+d0|;NA6zfmh6si%{S_0V !`73MD+NKN]/dBg>0G,aa3oaT');
define('AUTH_SALT',        '{fD6 @kmS`6:_3cL}BCS44{y4kP8pZ-gYo~;FeR&wYOFK6n-bn{z$Ru0j/;@iM0|');
define('SECURE_AUTH_SALT', 'yXUV3ZMJM(]RP94022C-t|TQ*AkEzizqBPMkA,_Mb?Tk*!_3xtf.zo0-FH[(2Z(#');
define('LOGGED_IN_SALT',   ':~ct_i4q30NK$z&NaRFW41/D_wu8WmlrtY./g&|J@3P9-z4)*AOH1NpS]D;&/1HJ');
define('NONCE_SALT',       ')JUhI*CObw<Bnjr]utt03MV(T$i?i,^2,#@:uGnt-vWp|PpJy}ktk/PI`-T)95f=');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'wp_';

/**
 * WordPress yerel dil dosyası, varsayılan ingilizce.
 *
 * Bu değeri değiştirmenize gerek yok! Zaten Türkçe'ye ayarlı.
 * tr_TR.mo Türkçe dil dosyasının wp-content/languages dizini altında olduğundan emin olun.
 * Türkçe çeviri hakkında öneri ve eleştirilerinizi iletisim@wordpress-tr.com adresine iletebilirsiniz.
 *
 */
define('WPLANG', 'tr_TR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
