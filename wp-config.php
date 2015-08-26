<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen mit dem Namen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'trackfindr');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'root');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'root');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Rv3|1:Mz`,4}`[`HM-4??E%H/soV/R+p?BBG$w7+9qv|LZjLYk_5-B-E%7|#/^6@');
define('SECURE_AUTH_KEY',  'tl@+ufZ{+00WF:1y{+31+KvrxS-Kczki_./B@xCu~R !T|P=>sECz uf#i+6-2g7');
define('LOGGED_IN_KEY',    'hRhg9>Mx$XnFTCE|aJOSB!`|]`&JrWiG~m7N,X)X$:&VE&eG *{<ms<eMJ.p;|R<');
define('NONCE_KEY',        'z$fPI0z^q:0LZ>1_}o>nX=p!aPc+$MPZR$[a/WrKbiSaZ{t][^fUAzHK[&vU2_F@');
define('AUTH_SALT',        '[*R/5i@D)Ejm<KBc V,m!4]U{m+)K^iwFZVjaZ6?Ox|V|;6i3CT4 >8qk~Q&P ^K');
define('SECURE_AUTH_SALT', 'li,`ooV[mw=-,-fWSYNQ1TP02 l+JLB&QD`C4%Ax3&Nckefb<ws$qV~%tN/WZYbA');
define('LOGGED_IN_SALT',   '=c=yh$jfNOzW!O%r[@EnyhDaIR-Xs7|QNM:mg0]1m*d(w hdm;<#F]icC}mkkFUP');
define('NONCE_SALT',       '9x$-hBi6#`u?--R)S!{i|r`O%{I2d>UzrU1o{1c)GX}`-(5y{y/0n+]`N{BKH?({');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');
