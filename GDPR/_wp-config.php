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
define('DB_NAME', 'ntwvgdpr_b2018');

/** Имя пользователя MySQL */
define('DB_USER', 'ntwvgdpr_u2018');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'L6r9P7v4');

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
define('AUTH_KEY',         'eO~%IocquFT:9E1L;@b!}W/<RCHNBco(Qlq?;s ]T)qYfX8..3KV|TWst1XP<CVd');
define('SECURE_AUTH_KEY',  '+d& gfI D~J$rRYjCqo$E.F7<n)a[R|of2ux*.|`bT3[X6 h:P;Wk/JybqU}Kop4');
define('LOGGED_IN_KEY',    'b&n`MW(dB=~8JR2o)/>t.l?tv9N.2!1~ U*hT]RSTJsiGGH8c b/ID0*/#V9cBCC');
define('NONCE_KEY',        'J`t7VFQ%=n~~n^5rJ%q+!%kI-H3Z8!P]b%<}3)YsefRR<%B$S.ZLH0-t?f+-Xax2');
define('AUTH_SALT',        'w~2NV=w(s|CkE6(yyV2wv%l364%7$guVLVvrAPezl~X=^(<;Vz.Lz84<TuYED/t ');
define('SECURE_AUTH_SALT', 'M#?VSt(<p/r5We*T_p:L;H*}C4DSSTbbj)wR>8I1h>9HPkH7VqWJ.].WyP#9*50o');
define('LOGGED_IN_SALT',   'nx<?(n7R;+<h^14H]ce<t7N!dP|xpV:0(jQ_]g-QY&>](^jG~L9,6<0Tl84qGs$)');
define('NONCE_SALT',       '6AWX29sl<8.{QXCY+^LUK.aS;xzLwwbN<1C`h?+}m/vW{3@nt1$.*~maz+?;l]Dy');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'gdpr_';

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
