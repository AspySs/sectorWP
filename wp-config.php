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
define( 'DB_NAME', 'sectorwp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}`8N-y[U^*-F{m83diE)MAz}RevSkO?s`=+INz)zjK^Ame3bsAqV_;e$S)}s4%O7' );
define( 'SECURE_AUTH_KEY',  '4 ulikepPU_q *$:ftc7G=rW(d X;qhd^[ovG`W4MWQrh=yIMfmJa]LVu3n f^yP' );
define( 'LOGGED_IN_KEY',    '_+ASHBXwIEB/of7)*+9z*$yu]~h{9vV ?UMz[!%QtYy^e(~&IIH]V.e*gP<7d!+O' );
define( 'NONCE_KEY',        '7]FpqnLf4Y:..jmz}h+xx%Y3`2Sbi9e/M!)t_peV>OVSxR33my#][K9c d b-sr=' );
define( 'AUTH_SALT',        '#/oi> J!L&Ih4}?7t-}BOW|OsV e{tI;pYjU!w{4};)XDhdDY`<+D|Q1G1G{S8D:' );
define( 'SECURE_AUTH_SALT', 'DDPCZG~!)jpe ;e<K=v*eS$O3pZ,08F~<EB~(JxxX1leLcmJaIg94PL^;oS@L/78' );
define( 'LOGGED_IN_SALT',   'uZ9p-${lZlpAB]QAK= MkzN<#nHS|`fH5H<k}kfZ :W<]^!~#8:OR>7U)cw)=ir@' );
define( 'NONCE_SALT',       '889`vSZjGf45L`5Z5`n3]&U&Bn>M;mx[g!HTfUDSAvFK,J~/| 72B#T-#,d`6b-N' );

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
