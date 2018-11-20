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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'Gi4OGq-!0@0%KoV@D*:k^YWBtRH9N0)n8$C!wcU((iI;!P@79j3k?Z8y5= ^KFDH');
define('SECURE_AUTH_KEY',  'Th0@nqJ[*Uq$eV3fvJ:_{T.8|$PaS*cT]1aDQ[7G(^GZNc@+:7t2TI<lO0eH1atH');
define('LOGGED_IN_KEY',    '}S&wVMH<y!%+Dn/e.b_>oIve: a>b7R^T<<qM5d[CR?0d,C&gH@&+WYvxh@/K!4 ');
define('NONCE_KEY',        '1.7FOV(F5 sX-6j(A>Z%_K24MNE6~iC*neIUU]@5)}tGAdK=63ArH[yrWTf^VL~<');
define('AUTH_SALT',        'okG@jKBynWiwOaemu?BW7As<&F@Qpb,rt*nWpCGnmLCYE03*]Xdg.6i&J&,Zf2==');
define('SECURE_AUTH_SALT', 'Y;7RG{QkO6j~~FhsH={WSV8OV5$+Co/oE56-${[N.XZ%v;Fz+M9V}E=qSYQlR-AX');
define('LOGGED_IN_SALT',   'f)0C/t40v]X*>gQJwN68-p 3iLQv0ezD2F#V*XgR,<TGrsfxkaD8OT<r3 aN:_pN');
define('NONCE_SALT',       'UL;2mFnc1^A^`owgF,k>=XQe+O+uF3S&D>n0g>57~P;_/ieTNTI0`A}<*F|`[=>M');

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
