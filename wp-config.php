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
define('DB_NAME', 'f5');

/** Имя пользователя MySQL */
define('DB_USER', 'f5');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '}]0lY)_+GQH~y}6%rA?sJhQvzh+|]?gZX&TttP@T#9=VdCCs0[+b>$I7d8?7Hg{y');
define('SECURE_AUTH_KEY',  'o7x2y8LMFxl2NIl?nj(yavi?RCOE*MF1xh1`]eu]KnGpKwOA~I.Fs6#?v`a2==mp');
define('LOGGED_IN_KEY',    'PIRWwt{24O:[S[J--zo[OF?hLiy-czC~2!T^QjqMO2}?3kVILS!($$4$]sOa8W%c');
define('NONCE_KEY',        ' ]m^-km8hfzQz;E@GJR(ACmE J9Pmi8][%9 q|,p:GRQM?}|fd|3{&oi,?(OFarS');
define('AUTH_SALT',        'Wnpu?x,>u;K]]?50ruD#a-Ij10K:<GF6TKUY0YfM%e=b3/@O1){t/^(e:AbFrv1<');
define('SECURE_AUTH_SALT', ' ~@0Zf?U-[lck~E.4:|-J~8A t4>Vp*=j3Q_WvS@q%t5E~%:H]^~V;G!yOZaw)k=');
define('LOGGED_IN_SALT',   'xr;<{#y0ei|k VU7pC%.2XU=AW#zlQ^E)bl30FoEk+*ILE4e}zPY-9.%v,J++nVV');
define('NONCE_SALT',       'l3yJs[ePyibLq.=VBubIZ<EUCM[h*q(LErw%eg;Nx5I25^cC0TMI[noN$fl9adI*');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
