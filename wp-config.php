<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy, używanej lokalizacji WordPressa
 * i ABSPATH. Więćej informacji znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'cfkrakow');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');




// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
//define('DB_NAME', '15395351_off');

/** Nazwa użytkownika bazy danych MySQL */
//define('DB_USER', '15395351_off');

/** Hasło użytkownika bazy danych MySQL */
//define('DB_PASSWORD', 'ZVg.i@g5H69N');

/** Nazwa hosta serwera MySQL */
//define('DB_HOST', 'localhost');


/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-.lI4CUCv}z8|0 db8u`Gdb)nDpu!vBhip,-sqJ-C1zGMxvw3)_0{T%<_Cf1N/Zb');
define('SECURE_AUTH_KEY',  'z(j/slG,.B2bA2Y&l?R$!]}Zbcct<d2% nIpnA0cImJ0P}FdTs:&m](ucx7R(.E>');
define('LOGGED_IN_KEY',    'ByH8j5A^P_WTM>t~+.lnWJ#O-?n]$E8iL)*Tf0dM$BHT>!o:Q9 DE+WXU;8S*h!P');
define('NONCE_KEY',        '8HiXNEZ~[i{+)O}uZEDlap^sjRp>.qAeO#ek&z|i^FEg:JgO3eg^YWe[3NB}mnn0');
define('AUTH_SALT',        'WZR A-)gJ-Qv@8q+!Bp=u_|i]DmdV{VXRXhQkSDQ|c_t!W=9-</7+7|@JZj?pEa$');
define('SECURE_AUTH_SALT', '{4wLjg[gq!Q1_fFp3wDhqj28@vQ<qigRkbE|?o>M 0^p}(A+X~zR6E8!d)bB!@mP');
define('LOGGED_IN_SALT',   '`buaiYP4Jj>:I^3T-qJ[?xU@Z]Gxr6,8wGodBX^#u|tNgU_]BQ_A?#[B/-2F5-8[');
define('NONCE_SALT',       'd|Iy}1TnKhR2fNV%`6PCn$y?R~7xBId/gyGKjEZ&7bq7i:c~VZKR?cVe,W2l_-nJ');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Kod lokalizacji WordPressa, domyślnie: angielska.
 *
 * Zmień to ustawienie, aby włączyć tłumaczenie WordPressa.
 * Odpowiedni plik MO z tłumaczeniem na wybrany język musi
 * zostać zainstalowany do katalogu wp-content/languages.
 * Na przykład: zainstaluj plik de_DE.mo do katalogu
 * wp-content/languages i ustaw WPLANG na 'de_DE', aby aktywować
 * obsługę języka niemieckiego.
 */
define('WPLANG', 'pl_PL');

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
