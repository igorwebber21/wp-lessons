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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\OSPanel\domains\wordpress-lessons\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'wordpress_lessons');

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
define('AUTH_KEY',         '73]a1]Um~h}%$-vPL!20[%Y(5Rux:}tIODp+?bdq|p~d[<[RcNGztM#G;zSm>9&9');
define('SECURE_AUTH_KEY',  ';,kqbT)cW83?%R_q#XROdFChQZFoqOP$Br)Auw2%xA&)$ha($>5 %VqLciSqO4~O');
define('LOGGED_IN_KEY',    'Ifatk7(<&t[nf<PF5w~wgD]uyw[POO>Y0KOVh`Onu5z* eW4_Y^ZoOO2ShA#:_`L');
define('NONCE_KEY',        'L;OV3gEhQvd3Vld@|IV/Y~6c;$*.v*& E-wwOC>Mx9 rS4wE=g<<_PN6}b@hYM-^');
define('AUTH_SALT',        '[WHFi}[Fx@;bgxCb*&:w2a>IK!+<f5l[7q]e2UrP?mG6w.T%JE_TYSzea,?]U_$9');
define('SECURE_AUTH_SALT', '(mvkI/K|Zg!=z$JX0l|7aug4j# tbwz}VKoHJM=?c{Y-L#Mff#+%bFL-QB/0#(#v');
define('LOGGED_IN_SALT',   '^}Xe~,=frZ2W}hdWvE2ot.S3dOMps4WKvbOUntBk)^IfL(4yV6|P63uu)PA)W(gu');
define('NONCE_SALT',       ';LNramyzoXwP6:r|%^E1[ }s)+g%byK1j]bZ&W/[AQZWOt.9wY@WqknA$3mW4pv*');

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
