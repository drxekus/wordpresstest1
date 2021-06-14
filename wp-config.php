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
define( 'DB_NAME', 'wordpresstest_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '%QC-Z4kJ6CR>!u7-&(w*M_o(=L=qL58g>}tF;24sQN;A6!E-:*B0VPJ-P~BdZ/S9' );
define( 'SECURE_AUTH_KEY',  '+AM5p#Md4}x3uI/A!$!j@Nt,Vkj0jHk60|e{hbPw3^YPwceZg*$$wFf{AF6)D p=' );
define( 'LOGGED_IN_KEY',    'n<8WS:D:TR3RS^qO8gkfPp-aZ9e.Xl1sKKh@}rAZP+&*6KP=Ck{?2YZt<%D7+}:#' );
define( 'NONCE_KEY',        'V5w57m]h^Xz5$%avp0Bdoj3t+~WHiM8``[NQ96+qnLXr S<o]$jd)?sOzzg<-ACN' );
define( 'AUTH_SALT',        ',Q+O-J2G8*9_*s$jeHh_u((G2?(S0QD/W&:Ui6j!j-6QY{(Yhp7F]JW3![xFj;_h' );
define( 'SECURE_AUTH_SALT', 'L{F&+YqW.ptd!8AFfGOwnK?MgA`b+23e^1*om}wt}sPrLvn3Zfm5Xz>~5}c{`kjH' );
define( 'LOGGED_IN_SALT',   '(Fnv8!88SW9-c=b38(LAt$AQQi(GiSh-@Osov&jyIpO?owywOF(dc|!D&!ef%sbX' );
define( 'NONCE_SALT',       'E/LEr6x{ch9lOpmO) y0`Ka7reH;_:*Oiz)]|m2:T8.$%S mOkC%e6C8R}aCbjt6' );

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
