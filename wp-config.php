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

 if (file_exists("local.local")) {
	define('DB_NAME', 'wordpress');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8mb4');
	define('DB_COLLATE', '');
} else {
    define('DB_NAME', 'wp');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'qwerty');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8mb4');
	define('DB_COLLATE', '');
}
 
/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oaaZ>IdOMIZSB3zd4,6%vA(ON[V0_Pqx7r4m*Ow<VRkC3,U*d6iK4-X/ot?y=ge1');
define('SECURE_AUTH_KEY',  'Z< z+M8Q1%HHH/1?2zb^xt[?UEPbiAC[EGaw*i=Y2[(:~})Oby{R#PWOJ6X9O^RS');
define('LOGGED_IN_KEY',    'HOBge#dr4yOL(fLc7we7[qa@ABcMyO#5}&.wvfm8GKOs7Hya,RAJfS{mva_L-nZ$');
define('NONCE_KEY',        '6-a{GJJKi2%VV}D#:t3WxA>k9aJ&4H<}CU0qnPJ-}8Ah*!liJ*fFfc#ewjGE`ce=');
define('AUTH_SALT',        'DPhBXp@sz^&.+=IgnePapB1; MIhKB%%O8<R]#^LSC@4{!cEFG7qh.=].%L|em5H');
define('SECURE_AUTH_SALT', '|?.e_!hFLFb$c,N@/VTAQ|YuAZ6DT~NlH^K_NB,XVA*)<+I]D/M/mxAemu/i8=s5');
define('LOGGED_IN_SALT',   'R!=mHmFv8>%&rrI%@5_8j|gQmLgUa:X|s^6<i)`$!!QMEuU0;Ik^S!c^N+qzdBVB');
define('NONCE_SALT',       'H8MfF:>)-I)z?*+Xkr l{I+CG|HaF%x31k*sE#m}+ZD1!YMQl)*qBnD8oHneLn0(');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'sydney_';

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
