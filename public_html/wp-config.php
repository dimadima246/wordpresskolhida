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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'dima246_kolhida' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'dima246_kolhida' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'X%mt6lGT' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'gAixvTlymkfWb1YQk%h,AG)2FzPy(G|l8xIW[{6J;4~?q=XupA]+go{K8ER.CF(m');
	define('SECURE_AUTH_KEY',  'ZJdsy`!w]lTaMegK,1L:A/K{hJ|#{t|ISY-oU8jIyyYDLG|ft.Al^ka_s>xwyq-/');
	define('LOGGED_IN_KEY',    '5)kW_?Yg|W+H,*z2IY/zP3|ck#+{`f9Z|X^4}9Dnpy8OJ-`0I~2oF%W%8c2-bE!(');
	define('NONCE_KEY',        '>]p)r^=%,0?I~Bc[!~4Esx1zv/N-f5PES|erPP)3p9`^3GvNj#!-&n5Q*K8H)$x&');
	define('AUTH_SALT',        'cXCsDWJK(4jJCk*O@?lU*pI?`mKQ*&E99j->Y`_JNRYc|8ioXXp(I02`z4]RIHZ>');
	define('SECURE_AUTH_SALT', 'T?`[**p^3pxxrz}DK|B5eXX<l4;*SP!4-xOfn3R@|@kyWC~w=KHzd{*36jEa?0fO');
	define('LOGGED_IN_SALT',   'SGt.eX>{k0ZO)04Dwy68${,4Gj6`we/ZqI2bAlSq5i`xH]NW2GpK:PjZp6q+vXiE');
	define('NONCE_SALT',       '3= @%]]Heo4T//#qJe9Y9@,3DY.8#ZCgg]2 X8;pnvFN5QeIxrBgJk&$fR7I<FD`');

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
