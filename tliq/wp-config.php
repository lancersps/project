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
define('DB_NAME', 'twiq');

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
define('AUTH_KEY',         'U8(mSum:8eo(`R}*6Z2h9]-Nh4rHs6o6DFpz~ax3@V(8TD;,(**k-gM)H[ffURw5');
define('SECURE_AUTH_KEY',  'PF_-}&5NC<Q0Lntcf/VfM7&X^V[.i= tr( (cO,Kc*@TtxbstUBLwAI%,Ru4G:u ');
define('LOGGED_IN_KEY',    't|$kSl+cf?e~XN3+[NV@~IRH6rw<jBK/!Ntr6(@/?44WF}!Pb1&_$,0tiXUntSE1');
define('NONCE_KEY',        'b^&dO;qd8?FWcS;3Y?).}+ODbzL9[WwG:R1H4_dsT&VJNs*<k#H8.V %GHYz?*_!');
define('AUTH_SALT',        '%k.KVRioS$y_Ag:X!+k+_u[{06PLxxZy<xTTP)$ %s}7xn}yVEd(n`mzWNx9Ws{>');
define('SECURE_AUTH_SALT', 'rJH~Es0*hp R#5x^DTa7qcuVFCgYyrgqQ3{}No#@6Rrqt>-T2#]p)JROb_Y,Z-ZP');
define('LOGGED_IN_SALT',   ':*</m[#U=tB/n:{Sz:2_utSApjZ3~M!c^rP2b=wo$c/Lh?{1GXrY@)9Dbk()/aI$');
define('NONCE_SALT',       'Y@CoM#3b!1[Piz^;2_xED<5m6IY.yTeauOx!)m<%=JCU=UOcEl)c2pW` S2Hmc^H');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'twiq_';

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
