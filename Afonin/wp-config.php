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
define('DB_NAME', 'afonin');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mA0d_^gZ<flqZltjN&]QPfaKj^:YsnW@6ld!7$aSQ3;!b[Jx!oF8Qt6i_[c2`_| ');
define('SECURE_AUTH_KEY',  'qGx9dOBuW(r#w#+`)~ ?|v.53puEQ#t@~KIe]7/AV0a%--T%2NG= @U:=J^fq$?M');
define('LOGGED_IN_KEY',    'i2GR.&3tsjQIV,levt90TD%?KZ#uNP@fZ6I2ZA@!-G=p5cCxJ=|*b= Q.jn`AHgc');
define('NONCE_KEY',        '_Y-|+|ae7MA+OQL8/~ZsIb@BpQ|T{I>hTP#dV?c/ngb{ISpzTv+N~%/^)y^EC@-Z');
define('AUTH_SALT',        '?gdt7|-$X##-2^]9lQga.<L~`6hUg?C/-_MWNR y?gSYs&w+TL24kh -=tg:~9Z:');
define('SECURE_AUTH_SALT', 'F;=rLkU5#??=YI8%33E-<r2T6q:pK1,aXy2 #-rxF<:I3DP![vMXF}x*L/tmM^,G');
define('LOGGED_IN_SALT',   '8AwPPG#Lp^#NK07n|[5}>HAd`WO/BfB{>Z@nf2&sQ;<>mVZo*7x0/ZDHj|v+0:@c');
define('NONCE_SALT',       'F$(y^+5A,rVO=yZNb)z8W~zl8%a9mt>4M*{O~jrjs)GlsXRKeM$?[cWW+v^I[BR)');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'af_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
