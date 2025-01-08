<?php
// ** Veritabanı Ayarları ** //
/** WordPress veritabanı adı */
define( 'DB_NAME', 'veritabani_adi' );

/** Veritabanı kullanıcı adı */
define( 'DB_USER', 'veritabani_kullanici_adi' );

/** Veritabanı şifresi */
define( 'DB_PASSWORD', 'veritabani_sifresi' );

/** Veritabanı sunucusu (genellikle "localhost" olur) */
define( 'DB_HOST', 'localhost' );

/** Veritabanı karakter seti */
define( 'DB_CHARSET', 'utf8' );

/** Veritabanı sıralama (çoğu durumda değiştirilmeye gerek yoktur) */
define( 'DB_COLLATE', '' );

/**#@+
 * Anahtarlar ve tuşlar (bunlar güvenlik için önemlidir).
 * https://api.wordpress.org/secret-key/1.1/salt/ adresinden yeni bir set oluşturabilirsiniz.
 */
define( 'AUTH_KEY',         'bu_yer_yeni_ve_guclu_bir_anahtar_olacak' );
define( 'SECURE_AUTH_KEY',  'bu_yer_yeni_ve_guclu_bir_anahtar_olacak' );
define( 'LOGGED_IN_KEY',    'bu_yer_yeni_ve_guclu_bir_anahtar_olacak' );
define( 'NONCE_KEY',        'bu_yer_yeni_ve_guclu_bir_anahtar_olacak' );
define( 'AUTH_SALT',        'bu_yer_yeni_ve_guclu_bir_anahtar_olacak' );
define( 'SECURE_AUTH_SALT', 'bu_yer_yeni_ve_guclu_bir_anahtar_olacak' );
define( 'LOGGED_IN_SALT',   'bu_yer_yeni_ve_guclu_bir_anahtar_olacak' );
define( 'NONCE_SALT',       'bu_yer_yeni_ve_guclu_bir_anahtar_olacak' );
/**#@-*/

/**
 * WordPress veri tabanı tablo öneki.
 *
 * Birden fazla WordPress kurulumu yapıyorsanız, her biri için farklı bir önek belirleyin.
 */
$table_prefix = 'wp_';

/**
 * WordPress için debug modu.
 *
 * Hata ayıklamak için aşağıdaki satırı `true` yapabilirsiniz.
 */
define( 'WP_DEBUG', false );

/**
 * Site ve WordPress adresi (URL).
 *
 * Burada WordPress dosyalarınızın bulunduğu dizini belirtin.
 */
define( 'WP_SITEURL', 'https://example.com/wordpress' );
define( 'WP_HOME', 'https://example.com' );

/**
 * wp-content dizininin yeri (isteğe bağlı).
 *
 * wp-content klasörünü başka bir yere taşımak için aşağıdaki satırları kullanabilirsiniz.
 */
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'https://example.com/wp-content' );

/**
 * Otomatik kaydetme aralığını ayarlamak.
 * Varsayılan: 60 saniye.
 */
define( 'AUTOSAVE_INTERVAL', 120 ); // 120 saniye

/**
 * Yazı revizyonlarını sınırlandırmak.
 * Varsayılan: Herhangi bir sınır yoktur.
 */
define( 'WP_POST_REVISIONS', 5 ); // 5 revizyon kaydedilsin

/**
 * PHP bellek limitini arttırmak.
 * Varsayılan: 40MB tekli site, 64MB çoklu site için.
 */
define( 'WP_MEMORY_LIMIT', '256M' ); // 256MB bellek

/**
 * Hata ayıklama loglarını kaydetmek.
 */
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

/**
 * Multisite ağ özelliğini etkinleştirmek.
 */
define( 'WP_ALLOW_MULTISITE', true );

/**
 * Multisite altında olmayan bir blogu yönlendirmek.
 */
define( 'NOBLOGREDIRECT', 'https://example.com' );

/**
 * Fata Hata İşleyicisini devre dışı bırakmak.
 * WordPress 5.2 ve sonrası için.
 */
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );

/**
 * Oturum çerezlerinin domainini ayarlamak (isteğe bağlı).
 */
define( 'COOKIE_DOMAIN', 'example.com' );

/**
 * WordPress'in dosya sistemini her zaman doğrudan yazmaya zorlamak.
 * Bu, genellikle "FTP" ile dosya yüklemeyi engeller.
 */
define( 'FS_METHOD', 'direct' );

/**
 * Hızlı güvenlik için ek ayar
 * Herhangi bir değişiklik yaptıktan sonra bu satırdan sonra başka bir şey yazmayın.
 */
define( 'DISALLOW_FILE_EDIT', true ); // Dosya düzenlemesini devre dışı bırak

/* Bu satırdan sonra herhangi bir şey yazmayın. */
define( 'ABSPATH', dirname( __FILE__ ) . '/' );
require_once( ABSPATH . 'wp-settings.php' );
