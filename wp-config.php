<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.>f:,UmFc.fSg,i<T}If?rwh>-Lz_>oLk933o#t&d%,~?-d=K-O?RWDZU*eT[R[m');
define('SECURE_AUTH_KEY',  '!CVcTrf4uD@T+Ob1={c _@NZE;~>ODEpotDt1Rop83%7|Ddb#x)aGfoy6[IeEZ$W');
define('LOGGED_IN_KEY',    'ggJYd02-p7VI@sgKnBWdeEE{t;Sl9chErOUk*|qdaL~_R]ZBi=>s,=5_:dF>#m36');
define('NONCE_KEY',        'p,6a>hcG&Lqc%Y ?A`:+-zT6@J5#hrN;DLN;]q>|FmSwi+3U#fTgXRH}-@rE6VD|');
define('AUTH_SALT',        '{WqM-^TkRke|jqxsQ0#3<4.IY2kg,^`$u#}UrY>DvJ;AW0|6w5Bu~C|g&?B[Lbm$');
define('SECURE_AUTH_SALT', '#G<.In4+}$I|+9qm|dX-PP)j|.CN~S&Rj{4OcXd2KHq%Ak)U%su_ob>fgp,M?-p[');
define('LOGGED_IN_SALT',   'I08nejl]-T~{iLAg`TGI-f9pB1<)mDgS:w|x^+wD>j)gSk^{NYVf|}$ID(9r083*');
define('NONCE_SALT',       'bJHYv!-s>0jyxtyGHrwbvBQ|UA7?ib+rz|MPA4b7+K(Ilx_e;x<44CmlM ?oRPhY');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
