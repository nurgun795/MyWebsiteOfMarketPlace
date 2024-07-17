<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'nurgunmaka_worp1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'nurgunmaka_worp1' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '^MUxVDNNrbb5qH81' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']I/ddzUHzps~as25Su92UFNz`(@V$Sz?aEx<AM((]kA],afJU4w>gZwmAxJ-ML}T' );
define( 'SECURE_AUTH_KEY',  'KswP_YB4P#))X7Kx56l(Iko0lmC5N0J&U-{]e*#N9Dt*Z-D(5QOZy0Qe0R|#@N@#' );
define( 'LOGGED_IN_KEY',    'jMPvCiW9g<7xLAcTc:P8Wt>X,CP!bH) YLTs]1gn,4Gu96fjf%jW.$<)r?J4?O-h' );
define( 'NONCE_KEY',        '^]Bq&PI@5MYb;L+y2P5&*8P[E1o5ncWVPWwS&$0~vNwGNzO5*7F*5A*yco2kfC>I' );
define( 'AUTH_SALT',        'u=&^j~+m#S*n:)N;{mNQ mljdIJt({$fPP(j#{M+)5ndjP;%srX9Ry~C:x7 P*5y' );
define( 'SECURE_AUTH_SALT', '*VR6M3zqmiu5lyMu<!/E#szR~cbe,tyIqoJe;69wO!Y5Ig` 6tdn]C5z;6(>Qk:+' );
define( 'LOGGED_IN_SALT',   'd(>!cx*(IPh0jt<>gFZ;_s|Uq[s2ECoI{%zj)h[T_@9cXaFZknKJas;F_,%`q*$-' );
define( 'NONCE_SALT',       'nte3nCcq&gM.K{ZLO)y0k6r.R6x)6Zq(Sb.Xy2ePV94&l.~==uq8YQ0.7RgZc;6o' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
