<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'keks' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'keksking666' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vnJsQzUDI}8#DWh0t--J#xWZQs73lh(M?=M?To?CK~fjFfS,Vn|(m8.xd45B<PUI' );
define( 'SECURE_AUTH_KEY',  'L  ]6(GGI(=X^E$!:MCKm_rrl$A8Q0f&>iGHwT4t|Z3~$b*Js*i;@qD?D&[vrw76' );
define( 'LOGGED_IN_KEY',    '? T0f(hJw1`{SHP10}zmKP:=[S5gSX>S(}/9!Fr0L&s!`f]`o@wpcW,lS^feM2 B' );
define( 'NONCE_KEY',        ',OhB7Z^X,-j g)Gc$ABPAyQkvZ, v0JekI GV`EM%%jz%>$Uds*@|6S#0-u>EtMR' );
define( 'AUTH_SALT',        '.lU}d[b*&|a^Y{f<#W2x>g.R3a<|l}.7t5iw wSk)UFl.6)W+X|F* #5s(?%s!JM' );
define( 'SECURE_AUTH_SALT', 'f/lFV+%,X&99f+`:B:J`lt>gv>sg:jFyR[KxcJ^;rY5t>pYy?etGi0gwwll)ZA6B' );
define( 'LOGGED_IN_SALT',   ';)a4$:6_ddKC9-l8EtC~Jt5w_Y[oj}}u}T^c H4U^mFz>UZmge~Hrlc:lChx2LDe' );
define( 'NONCE_SALT',       'u>/*$8sTvzIt0vX*T+dY.5$vq{?Lf!Mt)NDb}o? 4/#RywS68a$F-qH&L+^3d?iB' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
