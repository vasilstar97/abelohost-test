<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'abelohost-test' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zU+rXn7O/[j|>l4O9ZD,An?Y-NOm{?,Hgln|i6w/ldq)Mw2.+W2::!9<54I@D?33' );
define( 'SECURE_AUTH_KEY',  '.6]fwS? MY2MP6GIo/DNzlX?a).XGbk|&tc@:DXu:^lPmg>$o<*]79B<)af#yIHb' );
define( 'LOGGED_IN_KEY',    'P2ofL3DNK`gfU4##PD}Jg6i&V2We]rHa[=JQ`C=]}Z`|Rr?K]*S-y0X+${?P:uxE' );
define( 'NONCE_KEY',        'ZM2hS1$rlMH5OA[,n9l_H:Wo0<SX0n1K{!d0IMrsqI}3:6&l~KJ:&Qg+G7%MvV.n' );
define( 'AUTH_SALT',        '[4rpHjdSlv.gx<kZ%vwVJR,CsB^z^O}=Dk*K!Y+](]rf!jf`Xr>]cur,M+Bo0vlF' );
define( 'SECURE_AUTH_SALT', '90%<(VNhJ6/C])qQEmyMT8|IpJV%UGz5NMx9@y+G5]BoqQr!W:`=.(roAbB!rX)p' );
define( 'LOGGED_IN_SALT',   '#NAisUPiBJh~BnGlkxZjy7{9DY1s[v2e#O.PtB63^CloTRt$.$a4CMAPMi>WCHAs' );
define( 'NONCE_SALT',       '.e>[_Y/6vbnH8e;m?TaLB$A!>EWY*MSC$*LCMD k<T^$zP.L%COcb[hD+:}#u;Ee' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
