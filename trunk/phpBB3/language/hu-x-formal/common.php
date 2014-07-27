<?php
/**
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* Magyar fordítás (c) 2007-2014 „Magyar phpBB Közösség fordítók”,
* http://phpbb.hu
*
* $Id$
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> 'Magyar fordítás © <a href="http://phpbb.hu/">Magyar phpBB Közösség</a>',
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|Y.m.d.|',
	'DATETIME_FORMAT'	=> '|d M Y, H:i|',	// 01 Jan 2007, 13:37 (with Relative days enabled) //bb31!
	'USER_LANG'			=> 'hu',

	// You can define different rules for the determination of plural forms here.
	// See http://wiki.phpbb.com/Plural_Rules for more information
	// or ask the translation manager for help.
	'PLURAL_RULE'		=> 2, //bb31

	'1_DAY'			=> '1 nap',
	'1_MONTH'		=> '1 hónap',
	'1_YEAR'		=> '1 év',
	'2_WEEKS'		=> '2 hét',
	'3_MONTHS'		=> '3 hónap',
	'6_MONTHS'		=> '6 hónap',
	'7_DAYS'		=> '7 nap',

	'ACCOUNT_ALREADY_ACTIVATED'		=> 'Az azonosítóját már aktiváltuk.',
	'ACCOUNT_DEACTIVATED'			=> 'Az azonosítója kézzel deaktiválásra került, csak egy adminisztrátor tudja újraaktiválni.',
	'ACCOUNT_NOT_ACTIVATED'			=> 'Az azonosítóját még nem aktiváltuk.',
	'ACP'							=> 'Adminisztrátori vezérlőpult',
	'ACP_SHORT'						=> 'AVP', //bb31
	'ACTIVE'						=> 'aktív',
	'ACTIVE_ERROR'					=> 'A megadott felhasználónév jelenleg inaktív. Ha problémái akadnának az azonosítója aktiválásával, lépjenen kapcsolatba a fórum adminisztrátorával.',
	'ADMINISTRATOR'					=> 'Adminisztrátor',
	'ADMINISTRATORS'				=> 'Adminisztrátorok',
	'AGE'							=> 'Kor',
	'AIM'							=> 'AIM',
	'AJAX_ERROR_TITLE'				=> 'AJAX error', //b31
	'AJAX_ERROR_TEXT'				=> 'Hiba történt a kérés feldolgozása közben.', //bb31
	'AJAX_ERROR_TEXT_ABORT'			=> 'A felhasználó megszakította a műveletet.', //bb31
	'AJAX_ERROR_TEXT_TIMEOUT'		=> 'A kérése idő túllépés miatt megszakadt; kérjük próbálja újra.', //bb31
	'AJAX_ERROR_TEXT_PARSERERROR'	=> 'Hiba történt a kérés feldolgozása közben: a szerver érvénytelen választ küldött.', //bb31
	'ALLOWED'						=> 'Engedélyezett',
	'ALL_FILES'						=> 'Összes állomány',
	'ALL_FORUMS'					=> 'Összes fórum',
	'ALL_MESSAGES'					=> 'Összes üzenet',
	'ALL_POSTS'						=> 'Összes hozzászólás',
	'ALL_TIMES'						=> 'Minden időpont <abbr title="%2$s">%1$s</abbr> időzóna szerinti', //bb31
	'ALL_TOPICS'					=> 'Összes téma',
	'AND'							=> 'és',
	'ARE_WATCHING_FORUM'			=> 'Sikeresen feliratkozott erre a fórumra.',
	'ARE_WATCHING_TOPIC'			=> 'Sikeresen feliratkozott erre a témára.',
	'ASCENDING'						=> 'Növekvő',
	'ATTACHMENTS'					=> 'Csatolmányok',
	'ATTACHED_IMAGE_NOT_IMAGE'		=> 'A csatolni próbált képállomány hibás.',
	'AUTHOR'						=> 'Szerző',
	'AUTH_NO_PROFILE_CREATED'		=> 'Nem sikerült létrehozni a felhasználói profilt.',
	'AUTH_PROVIDER_OAUTH_ERROR_INVALID_ENTRY'				=> 'Érvénytelen adatbázis bejegyzés.', //bb31
	'AUTH_PROVIDER_OAUTH_ERROR_INVALID_SERVICE_TYPE'		=> 'Érvénytelen OAuth szolgáltatás típus.', //bb31
	'AUTH_PROVIDER_OAUTH_ERROR_SERVICE_NOT_CREATED'			=> 'OAuth szolgáltatás nem lett létrehozva', //bb31
	'AUTH_PROVIDER_OAUTH_SERVICE_BITLY'						=> 'Bitly', //bb31
	'AUTH_PROVIDER_OAUTH_SERVICE_FACEBOOK'					=> 'Facebook', //bb31
	'AUTH_PROVIDER_OAUTH_SERVICE_GOOGLE'					=> 'Google', //bb31
	'AUTH_PROVIDER_OAUTH_TOKEN_ERROR_NOT_STORED'			=> 'OAuth token nem került tárolásra.', //bb31
	'AUTH_PROVIDER_OAUTH_TOKEN_ERROR_INCORRECTLY_STORED'	=> 'OAuth token hibásan került tárolásra.', //bb31
	'AVATAR_DISALLOWED_CONTENT'		=> 'A feltöltés visszautasításra került, mivel a feltöltött állomány egy esetleges támadás hordozója lehet.',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'Az állományt nem lehet megjeleníteni, mivel a <strong>%s</strong> kiterjesztés nem engedélyezett.',
	'AVATAR_EMPTY_REMOTE_DATA'		=> 'Nem sikerült feltölteni az avatart, mivel a külső forrás hibásnak tűnik.',
	'AVATAR_EMPTY_FILEUPLOAD'		=> 'A feltöltött avatar állomány üres.',
	'AVATAR_INVALID_FILENAME'		=> 'Hibás állománynév: %s',
	'AVATAR_NOT_UPLOADED'			=> 'Nem sikerült feltölteni az avatart.',
	'AVATAR_NO_SIZE'				=> 'Nem sikerült meghatározni a belinkelt avatar szélességét és magasságát, kérjük, adja meg kézzel.',
	'AVATAR_PARTIAL_UPLOAD'			=> 'Az avatart csak részben sikerült feltölteni.',
	'AVATAR_PHP_SIZE_NA'			=> 'Az avatar állomány mérete túl nagy.<br />Nem sikerült megállapítani a PHP php.ini-jében meghatározott maximális méretet.',
	'AVATAR_PHP_SIZE_OVERRUN'		=> 'Az avatar állomány mérete túl nagy, a maximum feltölthető méret %d MB.<br />Kérjük, vegye figyelembe, hogy ez a php.ini-ben van meghatározva, ezért nem írható felül.',
	'AVATAR_REMOTE_UPLOAD_TIMEOUT'		=> 'Az avatar állomány feltöltése időtúllépés miatt megszakadt.', //bb31
	'AVATAR_URL_INVALID'			=> 'A megadott URL hibás.',
	'AVATAR_URL_NOT_FOUND'			=> 'A megadott állomány nem található.',
	'AVATAR_WRONG_FILESIZE'			=> 'Az avatarnak 0 és %1$d %2$s között kell lennie.',
	'AVATAR_WRONG_SIZE'				=> 'A megadott avatar %5$s széles, és %6$s magas. Az avatarnak legalább %1$s szélesnek és %2$s magasnak kell lennie, valamint legfeljebb %3$s széles és %4$s magas lehet.',

	'BACK_TO_TOP'			=> 'Vissza a tetejére',
	'BACK_TO_PREV'			=> 'Vissza az előző oldalra',
	'BAN_TRIGGERED_BY_EMAIL'=> 'A kitiltás e-mail cím alapján történt.',
	'BAN_TRIGGERED_BY_IP'	=> 'A kitiltás IP-cím alapján történt.',
	'BAN_TRIGGERED_BY_USER'	=> 'A kitiltás felhasználónév alapján történt.',
	'BBCODE_GUIDE'			=> 'BBCode útmutató',
	'BCC'					=> 'Titkos másolat',
	'BIRTHDAYS'				=> 'Születésnaposok',
	'BOARD_BAN_PERM'		=> '<strong>Véglegesen</strong> kitiltották erről a fórumról.<br /><br />További információért lépjen kapcsolatba a %2$sfórum adminisztátorával%3$s.',
	'BOARD_BAN_REASON'		=> 'Kitiltás oka: <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> '<strong>%1$s</strong>-ig kitiltottak erről a fórumról.<br /><br />További információért lépjen kapcsolatba a %2$sfórum adminisztátorával%3$s.',
	'BOARD_DISABLE'			=> 'A fórum jelenleg nem elérhető.',
	'BOARD_DISABLED'		=> 'A fórum ideiglenesen szünetel.',
	'BOARD_UNAVAILABLE'		=> 'A fórum ideiglenesen nem elérhető, kérjük, próbálkozzon újra pár perc múlva.',
	'BROWSING_FORUM'		=> 'Jelenlévő fórumuzók: %1$s',
	'BROWSING_FORUM_GUESTS'	=> array(
		1	=> 'Jelenlévő fórumozók: %1$s valamint %2$d vendég',
		2	=> 'Jelenlévő fórumozók: %1$s valamint %2$d vendég',
	),
	'BUTTON_EDIT'			=> 'Szerkesztés', //bb31
	'BUTTON_FORUM_LOCKED'	=> 'Lezárt', //bb31
	'BUTTON_NEW_TOPIC'		=> 'Új téma', //bb31
	'BUTTON_PM'				=> 'PÜ', //bb31
	'BUTTON_PM_FORWARD'		=> 'Továbbítás', //bb31
	'BUTTON_PM_NEW'			=> 'Új PÜ', //bb31
	'BUTTON_PM_REPLY'		=> 'Válasz küldése', //bb31
	'BUTTON_PM_REPLY_ALL'	=> 'Válasz mindenkinek', //bb31
	'BUTTON_POST_REPLY'		=> 'Válasz küldése', //bb31
	'BUTTON_QUOTE'			=> 'Idézés', //bb31
	'BUTTON_TOPIC_LOCKED'	=> 'Lezárt', //bb31
	'BYTES'					=> 'bájt',
	'BYTES_SHORT'			=> 'B',

	'CANCEL'				=> 'Mégsem',
	'CHANGE'				=> 'Változtatás',
	'CHANGE_FONT_SIZE'		=> 'Betűméret megváltoztatása',
	'CHANGING_PREFERENCES'	=> 'Fórum beállítások megváltoztatása',
	'CHANGING_PROFILE'		=> 'Profil megváltoztatása',
	'CHARACTERS'			=> array(
		1	=> '%d karakter', //bb31
		2	=> '%d karakter', //bb31
	),
	'COLLAPSE_VIEW'			=> 'Összecsukás', //? erre is kéne...
	'CLOSE_WINDOW'			=> 'Ablak bezárása',
	'COLOUR_SWATCH'			=> 'Szín kiválasztása',
	'COLON'					=> ':',
	'COMMA_SEPARATOR'		=> ', ', // Comma used to join lists into a single string, use localised comma if appropriate, eg: Ideographic or Arabic
	'CONFIRM'				=> 'Megerősítés',
	'CONFIRM_CODE'			=> 'Megerősítő kód',
	'CONFIRM_CODE_EXPLAIN'	=> 'Gépelje be a képen látható kódot. A kis- vagy nagybetűk nem számítanak.',
	'CONFIRM_CODE_WRONG'	=> 'A megadott megerősítő kód hibás.',
	'CONFIRM_OPERATION'		=> 'Biztosan végre akarja hajtani ezt a műveletet?',
	'CONGRATULATIONS'		=> 'Gratulálunk',
	'CONNECTION_FAILED'		=> 'Sikertelen kapcsolódási kísérlet',
	'CONNECTION_SUCCESS'	=> 'Sikerült csatlakozni!',
	'CONTACT'				=> 'Kapcsolat', //bb31
	'CONTACT_USER'			=> 'Contact %s', //bb31!
	'CONTACT_US'			=> 'Contact us', //bb31!
	'COOKIES_DELETED'		=> 'A fórum sütijei törlésre kerültek.',
	'CURRENT_TIME'			=> 'Pontos idő: %s',

	'DAY'					=> 'nap',
	'DAYS'					=> 'nap',
	'DELETE'				=> 'Törlés',
	'DELETE_ALL'			=> 'Összes törlése',
	'DELETE_COOKIES'		=> 'Fórum sütik törlése',
	'DELETE_MARKED'			=> 'Kijelöltek törlése',
	'DELETE_POST'			=> 'Hozzászólás törlése',
	'DELIMITER'				=> 'Határolójel',
	'DESCENDING'			=> 'Csökkenő',
	'DISABLED'				=> 'Kikapcsolva',
	'DISPLAY'				=> 'Megjelenítés',
	'DISPLAY_GUESTS'		=> 'Vendégek megjelenítése',
	'DISPLAY_MESSAGES'		=> 'Üzenetek megtekintése',
	'DISPLAY_POSTS'			=> 'Hozzászólások megjelenítése',
	'DISPLAY_TOPICS'		=> 'Témák megjelenítése',
	'DOWNLOAD_ALL'			=> 'Összes letöltése', //bb31
	'DOWNLOAD_ALL_ATTACHMENTS'	=> 'Összes csatolmány letöltése', //bb31
	'DOWNLOADED'			=> 'Letöltve',
	'DOWNLOADING_FILE'		=> 'Állomány letöltése',
	'DOWNLOAD_COUNTS'		=> array(
		0	=> 'Még senki sem töltötte le.',
		1	=> 'Letöltve %d alkalommal.',
		2	=> 'Letöltve %d alkalommal.',
	),

	'EDIT_POST'							=> 'Hozzászólás szerkesztése',
	'ELLIPSIS'							=>	'…',
	'EMAIL'								=> 'E-mail',
	'EMAIL_ADDRESS'						=> 'E-mail cím',
	'EMAIL_INVALID_EMAIL'				=> 'A megadott e-mail cím hibás.',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> 'Problémába ütköztünk egy levél elküldése során a <strong>%1$s.</strong> sorban. Válasz: %2$s',
	'EMPTY_SUBJECT'						=> 'Új téma indításához meg kell adnia a téma címét.',
	'EMPTY_MESSAGE_SUBJECT'				=> 'Meg kell adnia az üzenet témáját.',
	'ENABLED'							=> 'Bekapcsolva',
	'ENCLOSURE'							=> 'Körülhatárolójel',
	'ENTER_USERNAME'					=> 'Adja meg a felhasználónevet',
	'ERR_CHANGING_DIRECTORY'			=> 'Nem sikerült megváltoztatni a könyvtárat.',
	'ERR_CONNECTING_SERVER'				=> 'Nem sikerült csatlakozni a szerverhez.',
	'ERR_JAB_AUTH'						=> 'Nem sikerült az azonosítás a Jabber szerveren. ', //? "Could not authorise on Jabber server."
	'ERR_JAB_CONNECT'					=> 'Nem sikerült csatlakozni a Jabber szerverhez.',
	'ERR_UNABLE_TO_LOGIN'				=> 'A megadott felhasználói név vagy jelszó hibás.',
	'ERR_UNWATCHING'					=> 'Hiba lépett fel a leiratkozás során.',
	'ERR_WATCHING'						=> 'Hiba lépett fel a feliratkozás során.',
	'ERR_WRONG_PATH_TO_PHPBB'			=> 'A megadott phpBB elérési útvonal feltehetőleg hibás.',
	'ERROR'									=> 'Hiba', //bb31
	'EXPAND_VIEW'						=> 'Kinyitás',
	'EXTENSION'							=> 'Kiterjesztés',
	'EXTENSION_DISABLED'				=> 'A <strong>%s</strong> kiterjesztés nincs engedélyezve.', //bb31
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'A <b>%s</b> kiterjesztés deaktiválva lett, ezért a csatolmány nem kerül megjelenítésre.',
	'EXTENSION_DOES_NOT_EXIST'			=> 'A <strong>%s</strong> kiterjesztés nem létezik.', //bb31

	'FACEBOOK'				=> 'Facebook',
	'FAQ'					=> 'GyIK',
	'FAQ_EXPLAIN'			=> 'Gyakran ismételt kérdések',

	'FILENAME'				=> 'Állomány neve',
	'FILESIZE'				=> 'Állomány mérete',
	'FILEDATE'				=> 'Állomány feltöltve',
	'FILE_COMMENT'			=> 'Magyarázat',
	'FILE_CONTENT_ERR'		=> 'Az állomány tartalma nem olvasható: %s', //bb31
	'FILE_JSON_DECODE_ERR'	=> 'A json állomány nem dekódolható: %s', //bb31 ?
	'FILE_NOT_FOUND'		=> 'A keresett állomány nem található: %s',
	'FIND_USERNAME'			=> 'Felhasználó keresése',
	'FOLDER'				=> 'Mappa',
	'FORGOT_PASS'			=> 'Elfelejtettem a jelszavam',
	'FORM_INVALID'			=> 'Az elküldött űrlap érvénytelen. Próbálja meg újra elküldeni.',
	'FORUM'					=> 'Fórum',
	'FORUMS'				=> 'Fórumok',
	'FORUMS_MARKED'			=> 'A fórumok megjelölésre kerültek olvasottként.',
	'FORUM_CAT'				=> 'Fórum kategória',
	'FORUM_INDEX'			=> 'Fórum kezdőlap',
	'FORUM_LINK'			=> 'Fórum link',
	'FORUM_LOCATION'		=> 'Tevékenység',
	'FORUM_LOCKED'			=> 'Lezárt fórum',
	'FORUM_RULES'			=> 'Fórum szabályok',
	'FORUM_RULES_LINK'		=> 'Kattintsonon ide a fórum szabályainak megtekintéséhez',
	'FROM'					=> 'Minta:',
	'FSOCK_DISABLED'		=> 'Nem sikerült végrehajtani a műveletet, mivel az <var>fsockopen</var> függvény nincs engedélyezve, vagy az elérni kívánt szerver nem található.',
	'FSOCK_TIMEOUT'			=> 'Időtúllépés történt a hálózati kapcsolat közben.',

	'FTP_FSOCK_HOST'				=> 'FTP hoszt',
	'FTP_FSOCK_HOST_EXPLAIN'		=> 'Az oldala eléréséhez használt FTP kiszolgáló.',
	'FTP_FSOCK_PASSWORD'			=> 'FTP jelszó',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'Az FTP felhasználónévhez tartozó jelszó.',
	'FTP_FSOCK_PORT'				=> 'FTP port',
	'FTP_FSOCK_PORT_EXPLAIN'		=> 'AZ FTP szerver portja.',
	'FTP_FSOCK_ROOT_PATH'			=> 'PhpBB elérési út',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'A phpBB elérési útja az FTP gyökérkönyvtárától (ami alapból megnyílik).',
	'FTP_FSOCK_TIMEOUT'				=> 'FTP időtúllépés',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'		=> 'Legfeljebb ennyit fog várni a rendszer a válaszra a szervertől másodpercben megadva.',
	'FTP_FSOCK_USERNAME'			=> 'FTP felhasználónév',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'A szerverhez való csatlakozáshoz használt felhasználónév.',

	'FTP_HOST'					=> 'FTP hoszt',
	'FTP_HOST_EXPLAIN'			=> 'Az oldala eléréséhez használt FTP szerver.',
	'FTP_PASSWORD'				=> 'FTP jelszó',
	'FTP_PASSWORD_EXPLAIN'		=> 'Az FTP felhasználónévhez tartozó jelszó.',
	'FTP_PORT'					=> 'FTP port',
	'FTP_PORT_EXPLAIN'			=> 'AZ FTP szerver portja.',
	'FTP_ROOT_PATH'				=> 'PhpBB elérési út',
	'FTP_ROOT_PATH_EXPLAIN'		=> 'A phpBB elérési útja az FTP gyökérkönyvtárától (ami alapból megnyílik).',
	'FTP_TIMEOUT'				=> 'FTP várakozási limit',
	'FTP_TIMEOUT_EXPLAIN'		=> 'Legfeljebb ennyit fog várni a rendszer a válaszra a szervertől másodpercben megadva.',
	'FTP_USERNAME'				=> 'FTP felhasználónév',
	'FTP_USERNAME_EXPLAIN'		=> 'A szerverhez való csatlakozáshoz használt felhasználónév.',

	'GENERAL_ERROR'				=> 'Általános hiba',
	'GB'						=> 'GB',
	'GIB'						=> 'GiB',
	'GO'						=> 'Mehet',
	'GOOGLEPLUS'				=> 'Google+',
	'GOTO_FIRST_POST'			=> 'Ugrás az első hozzászólásra', //bb31
	'GOTO_LAST_POST'			=> 'Ugrás az utolsó hozzászólásra', //bb31
	'GOTO_PAGE'					=> 'Oldal',
	'GROUP'						=> 'Csoport',
	'GROUPS'					=> 'Csoportok',
	'GROUP_ERR_TYPE'			=> 'Helytelen csoporttípust adott meg.',
	'GROUP_ERR_USERNAME'		=> 'Nem adta meg a csoport nevét.',
	'GROUP_ERR_USER_LONG'		=> 'Egy csoport neve legfeljebb 60 karakter hosszú lehet. A megadott csoportnév túl hosszú.',
	'GUEST'						=> 'Vendég',
	'GUEST_USERS_ONLINE'		=> array(
		1	=> '%d vendég van jelen.',
		2	=> '%d vendég van jelen.',
	),
	'GUEST_USERS_TOTAL'			=> array(
		1	=> '%d vendég', //bb31
		2	=> '%d vendég',
	),
	'G_ADMINISTRATORS'			=> 'Adminisztrátorok',
	'G_BOTS'					=> 'Robotok',
	'G_GUESTS'					=> 'Vendégek',
	'G_REGISTERED'				=> 'Regisztrált felhasználók',
	'G_REGISTERED_COPPA'		=> 'Regisztrált COPPA felhasználók',
	'G_GLOBAL_MODERATORS'		=> 'Globális moderátorok',
	'G_NEWLY_REGISTERED'		=> 'Újonnan regisztrált felhasználók',

	'HIDDEN_USERS_ONLINE'		=> array(
		1	=> '%d rejtett felhasználó van jelen.',
		2	=> '%d rejtett felhasználó van jelen.',
	),
	'HIDDEN_USERS_TOTAL'		=> array(
		1	=> '%d rejtett', //bb31
		2	=> '%d rejtett',
	),
	'HIDE_GUESTS'					=> 'Vendégek elrejtése',
	'HIDE_ME'						=> 'Bejelentkezés rejtettként',
	'HOURS'							=> 'óra',
	'HOME'							=> 'Főoldal',


	'ICQ'						=> 'ICQ',
	'IF'						=> 'Feltétel',
	'IMAGE'						=> 'Kép',
	'IMAGE_FILETYPE_INVALID'	=> 'A %d kiterjesztésű %s MIME típusú kép nem támogatott.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'Nem stimmel a kép kiterjesztése: %1$s helyett %2$s.',
	'IN'						=> 'Fórum:',
	'INDEX'						=> 'Fórum kezdőlap megtekintése',
	'INFORMATION'				=> 'Információ',
	'INSECURE_REDIRECT'			=> 'Tried to redirect to potentially insecure url.', //bb31!
	'INTERESTS'					=> 'Érdeklődési kör',
	'INVALID_DIGEST_CHALLENGE'	=> 'Hibás feltárási kérés',
	'INVALID_EMAIL_LOG'			=> 'A <strong>%s</strong> feltehetőleg egy nem létező e-mail cím.',
	'INVALID_PLURAL_RULE'		=> 'The chosen plural rule is invalid. Valid values are integers between 0 and 15.', //bb31!
	'IP'						=> 'IP-cím',
	'IP_BLACKLISTED'			=> 'Az IP-címe tiltólistára került, ezért a hozzáférését a fórumhoz blokkoltuk. További információ: <a href="%2$s">%2$s</a>.',

	'JABBER'				=> 'Jabber',
	'JOINED'				=> 'Csatlakozott',
	'JUMP_PAGE'				=> 'Adja meg annak az oldalnak a számát, ahová menni szeretne',
	'JUMP_TO'				=> 'Ugrás',
	'JUMP_TO_PAGE'			=> 'Ugrás oldalra', //bb31
	'JUMP_TO_PAGE_CLICK'	=> 'Kattintson a megadott oldalra ugráshoz…', //bb31

	'KB'					=> 'KB',
	'KIB'					=> 'KiB',

	'LAST_POST'							=> 'Utolsó hozzászólás',
	'LAST_UPDATED'						=> 'Legutóbb frissített',
	'LAST_VISIT'						=> 'Utolsó látogatás',
	'LDAP_NO_LDAP_EXTENSION'			=> 'Az LDAP kiterjesztés nem elérhető.',
	'LDAP_NO_SERVER_CONNECTION'			=> 'Nem sikerült csatlakozni az LDAP szerverhez.',
	'LDAP_SEARCH_FAILED'				=> 'Hiba történt az LDAP könyvtár keresése közben.',
	'LEGEND'							=> 'Magyarázat',
	'LIVE_SEARCHES_NOT_ALLOWED'			=> 'Live searches are not allowed.', //bb31!
	'LOADING'							=> 'Betöltés', //bb31
	'LOCATION'							=> 'Tartózkodási hely',
	'LOCK_POST'							=> 'Hozzászólás lezárása',
	'LOCK_POST_EXPLAIN'					=> 'A felhasználó nem fogja tudni szerkeszteni a hozzászólást.',
	'LOCK_TOPIC'						=> 'Téma lezárása',
	'LOGIN'								=> 'Belépés',
	'LOGIN_CHECK_PM'					=> 'Privát üzenetei megtekintéséhez lépjen be.',
	'LOGIN_CONFIRMATION'				=> 'Belépés megerősítése',
	'LOGIN_CONFIRM_EXPLAIN'				=> 'Az azonosítók feltörésének megakadályozása érdekében egy bizonyos számú sikertelen belépési kísérlet után meg kell adnia egy megerősítő kódot. A kód az alábbi képen található. Ha látási (vagy egyéb) problémák folytán nem tudná elolvasni a kódot, vegye fel a kapcsolatot a %sfórum adminisztrátorával%s.', // unused
	'LOGIN_ERROR_ATTEMPTS'				=> 'Túllépte az engedélyezett belépési kísérletek számát. Ezért a felhasználóneve és a jelszava megadása mellett most most el kell végeznie az alább látható CAPTCHA-t is.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'Az Apache szervernek nem sikerült azonosítania önt.',
	'LOGIN_ERROR_OAUTH_SERVICE_DOES_NOT_EXIST'	=> 'Egy nem létező OAuth szolgáltatás került meghívásra.', //bb31
	'LOGIN_ERROR_PASSWORD'				=> 'Rossz jelszót adott meg. Ellenőrizze le a jelszavát, majd próbálkozzon újra. Ha továbbra is gondjai lennének, lépjen kapcsolatba a %sfórum adminisztrátorával%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT'		=> 'Nem sikerült átkonvertálni a jelszavát a fórum szoftverének frissítése során. Kérjük, %sigényeljen egy új jelszót%s. Ha továbbra is problémái lennének, lépjen kapcsolatba a %sfórum adminisztrátorával%s.',
	'LOGIN_ERROR_USERNAME'				=> 'Rossz felhasználónevet adott meg. Ellenőrizze le a felhasználónevet, majd próbálkozzon újra. Ha továbbra is gondjai lennének, lépjen kapcsolatba a %sfórum adminisztrátorával%s.',
	'LOGIN_FORUM'						=> 'A fórum megtekintéséhez vagy a hozzászóláshoz meg kell adnia a fórum jelszavát.', //? 'Meg kell adnia a fórum jelszavát, hogy megtekinthesse a fórumot vagy hozzá tudjon szólni.'
	'LOGIN_INFO'						=> 'A belépéshez regisztrált felhasználónak kell lennie. A regisztráció csupán néhány másodpercet vesz igénybe, de számos előnnyel jár, az adminisztrátor például így tud külön jogosultságokat adni. A regisztráció előtt győződjön meg róla, hogy elfogadja a felhasználási feltételeinket, valamint egyetért az adatvédelmi nyilatkozatunkkal. Kérjük, olvassa el a fórumok szabályait is!',
	'LOGIN_VIEWFORUM'					=> 'Csak regisztrált felhasználók tekinthetik meg ezt a fórumot.',
	'LOGIN_EXPLAIN_EDIT'				=> 'Csak regisztrált felhasználók szerkeszthetik a hozzászólásaikat ebben a fórumban.',
 	'LOGIN_EXPLAIN_VIEWONLINE'			=> 'Csak regisztrált felhasználók tekinthetik meg a jelenlévők listáját.',
	'LOGIN_REQUIRED'					=> 'Ehhez a művelethez be kell jelentkeznie.', //bb31
	'LOGOUT'							=> 'Kilépés',
	'LOGOUT_USER'						=> 'Kilépés [ %s ]',
	'LOG_ME_IN'							=> 'Emlékezzen rám', //bb31

	'MAIN'					=> 'Main', //bb31!
	'MARK'					=> 'Kijelölés',
	'MARK_ALL'				=> 'Összes kijelölése',
	'MARK_ALL_READ'			=> 'Összes megjelölése olvasottként', //bb31
	'MARK_FORUMS_READ'		=> 'Fórumok megjelölése olvasottként',
	'MARK_READ'				=> 'Megjelölés olvasottként', //bb31
	'MARK_SUBFORUMS_READ'	=> 'Alfórumok megjelölése olvasottként',
	'MB'					=> 'MB',
	'MIB'					=> 'MiB',
	'MCP'					=> 'Moderátori vezérlőpult',
	'MCP_SHORT'				=> 'MVP', //bb31
	'MEMBERLIST'			=> 'Taglista',
	'MEMBERLIST_EXPLAIN'	=> 'Felhasználók listájának megtekintése',
	'MERGE'					=> 'Összevonás',
	'MERGE_POSTS'			=> 'Hozzászólások áthelyezése',
	'MERGE_TOPIC'			=> 'Téma összevonása',
	'MESSAGE'				=> 'Üzenet',
	'MESSAGES'				=> 'üzenet',
	'MESSAGES_COUNT'		=> array(
		1	=> '%d üzenet', //bb31
		2	=> '%d üzenet',
	),
	'MESSAGE_BODY'			=> 'Üzenet tartalma',
	'MINUTES'				=> 'perc',
	'MODERATE'				=> 'Moderálás',
	'MODERATOR'				=> 'Moderátor',
	'MODERATORS'			=> 'Moderátorok',
	'MODULE_NOT_ACCESS'		=> 'Modul nem elérhető', //bb31
	'MODULE_NOT_FIND'		=> 'A %s modul nem található', //bb31
	'MODULE_FILE_INCORRECT_CLASS'	=> 'A %s modul állománya nem tartalmazza a szükséges osztályt [%s]', //bb31
	'MONTH'					=> 'hónap',
	'MOVE'					=> 'Áthelyezés',

	'NA'						=> 'N/A',
	'NEWEST_USER'				=> 'Legújabb regisztrált tagunk: <strong>%s</strong>',
	'NEW_MESSAGE'				=> 'Új üzenet',
	'NEW_MESSAGES'				=> 'Új üzenetek',
	'NEW_POST'					=> 'Új hozzászólás',	// Not used anymore
	'NEW_POSTS'					=> 'Új hozzászólások',	// Not used anymore
	'NEXT'						=> 'Következő',		// Used in pagination
	'NEXT_STEP'					=> 'Tovább',
	'NEVER'						=> 'Soha',
	'NO'						=> 'Nem',
	'NO_NOTIFICATIONS'			=> 'Nincs értesítése', //bb31
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'Nincs jogosultsága a csoport kezeléséhez.',
	'NOT_AUTHORISED'			=> 'Nincs jogosultsága hozzáférni ehhez a részhez.',
	'NOT_WATCHING_FORUM'		=> 'Sikeresen leiratkozott a fórumról.',
	'NOT_WATCHING_TOPIC'		=> 'Sikeresen leiratkozott a témáról.',
	'NOTIFICATIONS'				=> 'Értesítések', //bb31
	// This applies for NOTIFICATION_BOOKMARK and NOTIFICATION_POST.
	// %1$s will return a list of users that's concatenated using "," and "and" - see STRING_LIST
	// Once the user count reaches 5 users or more, the list is trimmed using NOTIFICATION_X_OTHERS
	// Once the user count reaches 20 users or more, the list is trimmed using NOTIFICATION_MANY_OTHERS
	// Examples:
	// A replied...
	// A and B replied...
	// A, B and C replied...
	// A, B, C and 2 others replied...
	// A, B, C and others replied...
	'NOTIFICATION_BOOKMARK'				=> array(
		1	=> '<strong>Reply</strong> from %1$s in bookmarked topic:', //bb31!
	),
	'NOTIFICATION_FORUM'				=> '<em>Fórum:</em> %1$s', //bb31
	'NOTIFICATION_GROUP_REQUEST'		=> '<strong>Group request</strong> from %1$s to join the group %2$s.', //bb31!
	'NOTIFICATION_GROUP_REQUEST_APPROVED'	=> '<strong>Group request approved</strong> to join the group %1$s.', //bb31!
	'NOTIFICATION_PM'					=> '<strong>Private Message</strong> from %1$s:', //bb31!
	'NOTIFICATION_POST'					=> array(
		1	=> '<strong>Reply</strong> from %1$s in topic:', //bb31!
	),
	'NOTIFICATION_POST_APPROVED'		=> '<strong>Post approved</strong>:', //bb31!
	'NOTIFICATION_POST_DISAPPROVED'		=> '<strong>Post disapproved</strong>:', //bb31!
	'NOTIFICATION_POST_IN_QUEUE'		=> '<strong>Post approval</strong> request by %1$s:', //bb31!
	'NOTIFICATION_QUOTE'				=> array(
		1	=> '<strong>Quoted</strong> by %1$s in:', //bb31!
	),
	'NOTIFICATION_REFERENCE'			=> '"%1$s"', //bb31!
	'NOTIFICATION_REASON'				=> '<em>Reason:</em> %1$s.', //bb31!
	'NOTIFICATION_REPORT_PM'			=> '<strong>Private Message reported</strong> by %1$s:', //bb31!
	'NOTIFICATION_REPORT_POST'			=> '<strong>Post reported</strong> by %1$s:', //bb31!
	'NOTIFICATION_REPORT_CLOSED'		=> '<strong>Report closed</strong> by %1$s for:', //bb31!
	'NOTIFICATION_TOPIC'				=> '<strong>New topic</strong> by %1$s:', //bb31!
	'NOTIFICATION_TOPIC_APPROVED'		=> '<strong>Topic approved</strong>:', //bb31!
	'NOTIFICATION_TOPIC_DISAPPROVED'	=> '<strong>Topic disapproved</strong>:', //bb31!
	'NOTIFICATION_TOPIC_IN_QUEUE'		=> '<strong>Topic approval</strong> request by %1$s:', //bb31!
	'NOTIFICATION_TYPE_NOT_EXIST'		=> 'The notification type "%s" is missing from the file system.', //bb31!
	'NOTIFICATION_ADMIN_ACTIVATE_USER'	=> '<strong>Activation required</strong> for newly registered user: “%1$s”', //bb31!
	// Used in conjuction with NOTIFICATION_BOOKMARK and NOTIFICATION_POST.
	'NOTIFICATION_MANY_OTHERS'			=> 'egyéb', //bb31
	'NOTIFICATION_X_OTHERS'				=> array(
		2	=> '%d egyéb', //bb31
	),
	'NOTIFY_ADMIN'				=> 'Kérjük, értesítse a fórum adminisztrátorát vagy a webmestert.',
	'NOTIFY_ADMIN_EMAIL'		=> 'Kérjük, értesítse a fórum adminisztrátorát vagy a webmestert: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'		=> 'Nincs jogosultsága hozzáférni ehhez az állományhoz.',
	'NO_ACTION'					=> 'Nincs semmilyen teendő.',
	'NO_ADMINISTRATORS'			=> 'Nincs adminisztrátor.',
	'NO_AUTH_ADMIN'				=> 'Nem férhet hozzá az adminisztrátori vezérlőpulthoz, mivel nincs adminisztrátori jogosultsága.',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'Nem azonosíthatja magát egy másik felhasználóként.',
	'NO_AUTH_OPERATION'			=> 'Nincs meg a megfelelő jogosultsága ezen művelet elvégzéséhez.',
	'NO_AVATARS'				=> 'Nincsenek elérhető avatarok', //bb31
	'NO_AVATAR_SELECTED'		=> 'Nem választott avatart.', //bb31
	'NO_CONNECT_TO_SMTP_HOST'	=> 'Nem sikerült csatlakozni az SMTP szerverhez: %1$s : %2$s',
	'NO_BIRTHDAYS'				=> 'Ma senkinek sincs születésnapja.',
	'NO_EMAIL_MESSAGE'			=> 'Az e-mail üzenet üres.',
	'NO_EMAIL_RESPONSE_CODE'	=> 'Nem jött válasz az e-mail szervertől.',
	'NO_EMAIL_SUBJECT'			=> 'Nem adta meg az e-mail témáját.',
	'NO_FORUM'					=> 'A kiválasztott fórum nem létezik.',
	'NO_FORUMS'					=> 'Nincs fórum.',
	'NO_GROUP'					=> 'A keresett csoport nem létezik.',
	'NO_GROUP_MEMBERS'			=> 'A csoportnak jelenleg nincs tagja.',
	'NO_IPS_DEFINED'			=> 'Nincs ilyen IP-cím vagy hoszt.',
	'NO_MEMBERS'				=> 'Nincs a keresési feltételeknek megfelelő felhasználó.',
	'NO_MESSAGES'				=> 'Nincs üzenet.',
	'NO_MODE'					=> 'Nem adott meg módot.',
	'NO_MODERATORS'				=> 'Nincs moderátor.',
	'NO_NEW_MESSAGES'			=> 'Nincs új üzenet.',
	'NO_NEW_POSTS'				=> 'Nincs új hozzászólás',	// Not used anymore
	'NO_ONLINE_USERS'			=> 'nincs regisztrált felhasználó',
	'NO_POSTS'					=> 'Nincs hozzászólás',
	'NO_POSTS_TIME_FRAME'		=> 'Nincs a kiválasztott időtartamon belüli hozzászólás a témában.',
	'NO_FEED_ENABLED'			=> 'Nincs elérhető csatorna ezen a fórumon.',
	'NO_FEED'					=> 'A kívánt csatorna nem elérhető.',
	'NO_STYLE_DATA'				=> 'Nincs elérhető megjelenés',
	'NO_SUBJECT'				=> 'Nincs téma',								// Used for posts having no subject defined but displayed within management pages.
	'NO_SUCH_SEARCH_MODULE'		=> 'A megadott keresési mechanizmus nem létezik.',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'Nincsen támogatott azonosítási eljárás.',
	'NO_TOPIC'					=> 'A keresett téma nem létezik.',
	'NO_TOPIC_FORUM'			=> 'A téma vagy fórum már nem létezik.',
	'NO_TOPICS'					=> 'A fórum nem tartalmaz témákat, illetve hozzászólásokat.',
	'NO_TOPICS_TIME_FRAME'		=> 'A fórum nem tartalmaz témákat a megadott időtartamon belül.',
	'NO_UNREAD_POSTS'			=> 'Nincs olvasatlan hozzászólás',
	'NO_UPLOAD_FORM_FOUND'		=> 'Kezdeményezett egy feltöltést, azonban erre most nincs lehetőség.',
	'NO_USER'					=> 'A keresett felhasználó nem létezik.',
	'NO_USERS'					=> 'A keresett felhasználók nem léteznek.',
	'NO_USER_SPECIFIED'			=> 'Nem adott meg felhasználónevet.',

	// Nullar/Singular/Plural language entry. The key numbers define the number range in which a certain grammatical expression is valid.
	'NUM_POSTS_IN_QUEUE'		=> array(
		0			=> 'Nincs moderálandó hozzászólás.',		// 0
		1			=> '%d moderálandó hozzászólás van.',	// 1+
	),

	'OCCUPATION'				=> 'Foglalkozás',
	'OFFLINE'					=> 'Offline',
	'ONLINE'					=> 'Online',
	'ONLINE_BUDDIES'			=> 'Jelenlévő barátok',
	// "... :: x registered and y hidden"
	'ONLINE_USERS_TOTAL'		=> array(
		1	=> 'Jelenleg <strong>%1$d</strong> felhasználó van jelen :: %2$s és %3$s',
		2	=> 'Jelenleg <strong>%1$d</strong> felhasználó van jelen :: %2$s és %3$s',
	),
	// "... :: x registered, y hidden and z guests"
	'ONLINE_USERS_TOTAL_GUESTS'	=> array(
		1	=> 'Jelenleg <strong>%1$d</strong> felhasználó van jelen :: %2$s, %3$s és %4$s',
		2	=> 'Jelenleg <strong>%1$d</strong> felhasználó van jelen :: %2$s, %3$s és %4$s',
	),
	'OPTIONS'					=> 'Opciók',

	'PAGE_OF'				=> 'Oldal: <strong>%1$d</strong> / <strong>%2$d</strong>',
	'PAGE_TITLE_NUMBER'		=> '%s. oldal', //bb31
	'PASSWORD'				=> 'Jelszó',
	'PIXEL'					=> 'px',
	'PIXELS'				=> array(
		1	=> '%d pixel', //bb31
		2	=> '%d pixel',
	),
	'PLAY_QUICKTIME_FILE'	=> 'Quicktime állomány lejátszása',
	'PLEASE_WAIT'			=> 'Kérjük várjon.', //bb31
	'PM'					=> 'PÜ',
	'PM_REPORTED'			=> 'Kattintson ide a jelentés megtekintéséhez.',
	'POSTING_MESSAGE'		=> 'Üzenet küldése a %s fórumban',
	'POSTING_PRIVATE_MESSAGE'	=> 'Privát üzenet küldése',
	'POST'					=> 'Hozzászólás',
	'POST_ANNOUNCEMENT'		=> 'Közlemény',
	'POST_STICKY'			=> 'Kiemelt',
	'POSTED'				=> 'Elküldve',
	'POSTED_IN_FORUM'		=> 'Fórum:',
	'POSTED_ON_DATE'		=> 'Dátum:',
	'POSTS'					=> 'Hozzászólások',
	'POSTS_UNAPPROVED'		=> 'Jóvá nem hagyott hozzászólás(ok)',
	'POST_BY_AUTHOR'		=> 'Szerző:',
	'POST_BY_FOE'			=> 'Ezt a hozzászólást <strong>%1$s</strong> küldte, aki jelenleg a tiltólistáján van.',
	'POST_DISPLAY'			=> '%1$sDisplay this post%2$s.', //bb31! sHozzászólás megjelenítése
	'POST_DAY'				=> 'Naponta %.2f hozzászólás',
	'POST_DELETED_ACTION'	=> 'Deleted post:', //bb31!
	'POST_DELETED'			=> 'This post has been deleted.', //bb31!
	'POST_DELETED_BY'		=> '<strong>%2$s</strong> deleted the post by <strong>%1$s</strong> on %3$s.', //bb31!
	'POST_DELETED_BY_REASON'=> '<strong>%2$s</strong> deleted the post by <strong>%1$s</strong> on %3$s for the following reason: %4$s', //bb31!
	'POST_DETAILS'			=> 'Hozzászólás adatai',
	'POST_NEW_TOPIC'		=> 'Új téma nyitása',
	'POST_PCT'				=> 'Az összes hozzászólás %.2f%%-a',
	'POST_PCT_ACTIVE'		=> 'A felhasználó hozzászólásainak %.2f%%-a',
	'POST_PCT_ACTIVE_OWN'	=> 'A hozzászólásaid %.2f%%-a',
	'POST_REPLY'			=> 'Hozzászólás küldése',
	'POST_REPORTED'			=> 'Kattintson ide a jelentés megtekintéséhez',
	'POST_SUBJECT'			=> 'Hozzászólás témája',
	'POST_TIME'				=> 'Elküldés ideje',
	'POST_TOPIC'			=> 'Új téma nyitása',
	'POST_UNAPPROVED_ACTION'		=> 'Post awaiting approval:', //bb31! eredeti: 'This post is waiting for approval' - 'A hozzászólás jóváhagyásra vár',
	'POST_UNAPPROVED'		=> 'This post has not been approved.', //bb31!
	'POSTS_UNAPPROVED_FORUM'=> 'At least one post in this forum has not been approved.', //bb31!
	'POWERED_BY'			=> 'Powered by %s',
	'PREVIEW'				=> 'Előnézet',
	'PREVIOUS'				=> 'Előző',		// Used in pagination
 	'PREVIOUS_STEP'			=> 'Vissza',
	'PRIVACY'				=> 'Adatvédelmi nyilatkozat',
	'PRIVATE_MESSAGE'		=> 'Privát üzenet',
	'PRIVATE_MESSAGES'		=> 'Privát üzenetek',
	'PRIVATE_MESSAGING'		=> 'privát üzenet',
	'PROFILE'				=> 'Felhasználói vezérlőpult',

	'QUICK_LINKS'			=> 'Quick links',

	'RANK'						=> 'Rang',
	'READING_FORUM'				=> '%s fórum megtekintése',
	'READING_GLOBAL_ANNOUNCE'	=> 'Általános közlemény megtekintése',
	'READING_LINK'				=> 'Link megtekintése: %s',
	'READING_TOPIC'				=> 'Téma megtekintése a %s fórumban',
	'READ_PROFILE'				=> 'Profil',
	'REASON'					=> 'Ok',
	'RECORD_ONLINE_USERS'		=> 'A legtöbb felhasználó (<strong>%1$s</strong> fő) %2$s-kor tartózkodott itt.',
	'REDIRECT'					=> 'Átirányítás',
	'REDIRECTS'					=> 'Átirányítások száma',
	'REGISTER'					=> 'Regisztráció',
	'REGISTERED_USERS'			=> 'Regisztrált felhasználók:',
// "... and 2 hidden users online"
	'REG_USERS_ONLINE'			=> array(
		1	=> 'Jelenleg %1$d regisztrált és %2$s felhasználó van jelen.',
		2	=> 'Jelenleg %1$d regisztrált és %2$s felhasználó van jelen.',
	),
	'REG_USERS_TOTAL'			=> array(
		1	=> '%d regisztrált',
		2	=> '%d regisztrált',
	),
	'REMOVE'					=> 'Törlés',
	'REMOVE_INSTALL'			=> 'Kérjük, törölje, helyezze át, vagy nevezze át az install könyvtárat a fórum használatba vétele előtt. Amíg ez a könyvtár létezik, csak az adminisztrátori vezérlőpult lesz elérhető.',
	'REPLIES'					=> 'Válaszok',
	'REPLY_WITH_QUOTE'			=> 'Hozzászólás az előzmény idézésével',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'Válasz írása egy általános közleményre',
	'REPLYING_MESSAGE'			=> 'Válasz írása a %s fórumban',
	'REPORT_BY'					=> 'Felhasználó',
	'REPORT_POST'				=> 'Hozzászólás jelentése',
	'REPORTING_POST'			=> 'Hozzászólás jelentése',
	'RESEND_ACTIVATION'			=> 'Aktivációs e-mail újraküldése',
	'RESET'						=> 'Töröl',
	'RESTORE_PERMISSIONS'		=> 'Jogosultságok visszaállítása',
	'RETURN_INDEX'				=> '%sVissza a fórum kezdőlapra%s',
	'RETURN_FORUM'				=> '%sVissza a legutóbb látogatott fórumhoz %s',
	'RETURN_PAGE'				=> '%sVissza az előző oldalra%s',
	'RETURN_TOPIC'				=> '%sVissza a legutóbb látogatott témához%s',
	'RETURN_TO'					=> 'Vissza: “%s”', //bb31
	'RETURN_TO_INDEX'			=> 'Return to Board Index',
	'FEED'						=> 'Csatorna',
	'FEED_NEWS'					=> 'Hírek',
	'FEED_TOPICS_ACTIVE'		=> 'Aktív témák',
	'FEED_TOPICS_NEW'			=> 'Új témák',
	'RULES_ATTACH_CAN'			=> '<strong>Küldhet</strong> csatolmányokat ebben a fórumban.',
	'RULES_ATTACH_CANNOT'		=> '<strong>Nem</strong> küldhet csatolmányokat ebben a fórumban.',
	'RULES_DELETE_CAN'			=> '<strong>Törölheti</strong> a hozzászólásait ebben a fórumban.',
	'RULES_DELETE_CANNOT'		=> '<strong>Nem</strong> törölheti a hozzászólásait ebben a fórumban.',
	'RULES_DOWNLOAD_CAN'		=> '<strong>Letöltheti</strong> a csatolmányokat ebben a fórumban.',
	'RULES_DOWNLOAD_CANNOT'		=> '<strong>Nem</strong> töltheti le a csatolmányokat ebben a fórumban.',
	'RULES_EDIT_CAN'			=> '<strong>Szerkesztheti</strong> a hozzászólásait ebben a fórumban.',
	'RULES_EDIT_CANNOT'			=> '<strong>Nem</strong> szerkesztheti a hozzászólásait ebben a fórumban.',
	'RULES_LOCK_CAN'			=> '<strong>Lezárhatja</strong> a témáidat ebben a fórumban.',
	'RULES_LOCK_CANNOT'			=> '<strong>Nem</strong> zárhatja le a témáidat ebben a fórumban.',
	'RULES_POST_CAN'			=> '<strong>Nyithat</strong> új témákat ebben a fórumban.',
	'RULES_POST_CANNOT'			=> '<strong>Nem</strong> nyithat témákat ebben a fórumban.',
	'RULES_REPLY_CAN'			=> '<strong>Válaszolhat</strong> egy témára ebben a fórumban.',
	'RULES_REPLY_CANNOT'		=> '<strong>Nem</strong> válaszolhat egy témára ebben a fórumban.',
	'RULES_VOTE_CAN'			=> '<strong>Szavazhat</strong> ebben a fórumban.',
	'RULES_VOTE_CANNOT'			=> '<strong>Nem</strong> szavazhat ebben a fórumban.',

	'SEARCH'					=> 'Keresés',
	'SEARCH_MINI'				=> 'Keresés…',
	'SEARCH_ADV'				=> 'Részletes keresés',
	'SEARCH_ADV_EXPLAIN'		=> 'Részletes keresés beállításainak megtekintése',
	'SEARCH_KEYWORDS'			=> 'Kulcsszavak',
	'SEARCHING_FORUMS'			=> 'Fórumok keresése',
	'SEARCH_ACTIVE_TOPICS'		=> 'Aktív témák',
	'SEARCH_FOR'				=> 'Keresés',
	'SEARCH_FORUM'				=> 'Keresés a fórumban…',
	'SEARCH_NEW'				=> 'Új hozzászólások',
	'SEARCH_POSTS_BY'			=> 'Hozzászólások keresése:',
	'SEARCH_SELF'				=> 'Saját hozzászólásai',
	'SEARCH_TOPIC'				=> 'Keresés a témában…',
	'SEARCH_UNANSWERED'			=> 'Megválaszolatlan hozzászólások',
	'SEARCH_UNREAD'				=> 'Olvasatlan hozzászólások megtekintése',
	'SEARCH_USER_POSTS'			=> 'Felhasználó hozzászólásainak megtekintése',
	'SECONDS'					=> 'másodperc',
	'SEE_ALL'					=> 'See All', //bb31!
	'SELECT'					=> 'Kiválasztás',
	'SELECT_ALL_CODE'			=> 'Egész kijelölése',
	'SELECT_DESTINATION_FORUM'	=> 'Célfórum kiválasztása',
	'SELECT_FORUM'				=> 'Fórum kiválasztása',
	'SEND_EMAIL'				=> 'E-mail küldése',
 	'SEND_EMAIL_USER'			=> 'E-mail küldése %s',
	'SEND_PRIVATE_MESSAGE'		=> 'Privát üzenet küldése',
	'SETTINGS'					=> 'Beállítások',
	'SIGNATURE'					=> 'Aláírás',
	'SKIP'						=> 'Ugrás a tartalomhoz',
	'SKYPE'						=> 'Skype',
	'SMTP_NO_AUTH_SUPPORT'		=> 'Az SMTP szerver nem támogatja az azonosítás funkciót.',
	'SORRY_AUTH_READ'			=> 'Nincs jogosultsága a fórum megtekintéséhez.',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'Nincs jogosultsága a csatolmány letöltéséhez.',
	'SORT_BY'					=> 'Rendezés',
	'SORT_JOINED'				=> 'Csatlakozás dátuma',
	'SORT_LOCATION'				=> 'Tartózkodási hely',
	'SORT_RANK'					=> 'Rang',
	'SORT_POSTS'				=> 'Hozzászólások',
	'SORT_TOPIC_TITLE'			=> 'Téma címe',
	'SORT_USERNAME'				=> 'Felhasználónév',
	'SPLIT_TOPIC'				=> 'Téma szétválasztása',
	'SQL_ERROR_OCCURRED'		=> 'SQL hiba lépett fel az oldal generálása közben. Ha a probléma továbbra is fennállna, lépjen kapcsolatba a %sfórum adminisztrátorával%s.',
	'STATISTICS'				=> 'Statisztika',
	'START_WATCHING_FORUM'		=> 'Feliratkozás a fórumra',
	'START_WATCHING_TOPIC'		=> 'Feliratkozás a témára',
	'STOP_WATCHING_FORUM'		=> 'Leiratkozás a fórumról',
	'STOP_WATCHING_TOPIC'		=> 'Leiratkozás a témáról',
	'STRING_LIST_MULTI'			=> '%1$s, and %2$s', //bb31!
	'STRING_LIST_SIMPLE'		=> '%1$s and %2$s', //bb31!
	'SUBFORUM'					=> 'Alfórum',
	'SUBFORUMS'					=> 'Alfórumok',
	'SUBJECT'					=> 'Téma',
	'SUBMIT'					=> 'Elküld',

	'TB'				=> 'TB',
	'TERMS_USE'			=> 'Használati feltételek',
	'TEST_CONNECTION'	=> 'Kapcsolat tesztelése',
	'THE_TEAM'			=> 'A csapat',
	'TIB'				=> 'TiB',
	'TIME'				=> 'Idő',
	'TIMEOUT_PROCESSING_REQ'			=> 'A kérés időtúllépés miatt nem teljesült.', //bb31

	'TOO_LARGE'						=> 'A megadott érték túl nagy.',
	'TOO_LARGE_MAX_RECIPIENTS'		=> 'Az <strong>Engedélyezett címzettek maximum száma</strong> beállításnak megadott érték túl nagy.',

	'TOO_LONG'						=> 'A megadott érték túl hosszú.',

	'TOO_LONG_CONFIRM_CODE'			=> 'A megadott megerősítő kód túl hosszú.',
	'TOO_LONG_DATEFORMAT'			=> 'A megadott dátum formátum túl hosszú.',
	'TOO_LONG_JABBER'				=> 'A megadott Jabber azonosító túl hosszú.',
	'TOO_LONG_NEW_PASSWORD'			=> 'A megadott jelszó túl hosszú.',
	'TOO_LONG_PASSWORD_CONFIRM'		=> 'A megadott jelszó megerősítés túl hosszú.',
	'TOO_LONG_USER_PASSWORD'		=> 'A megadott jelszó túl hosszú.',
	'TOO_LONG_USERNAME'				=> 'A megadott felhasználónév túl hosszú.',
	'TOO_LONG_EMAIL'				=> 'A megadott e-mail cím túl hosszú.',

	'TOO_MANY_VOTE_OPTIONS'			=> 'Túl sok lehetőségre próbált meg szavazni.',

	'TOO_SHORT'						=> 'A megadott érték túl rövid.',

	'TOO_SHORT_CONFIRM_CODE'		=> 'A megadott megerősítő kód túl rövid.',
	'TOO_SHORT_DATEFORMAT'			=> 'A megadott dátum formátum túl rövid.',
	'TOO_SHORT_JABBER'				=> 'A megadott Jabber azonosító túl rövid.',
	'TOO_SHORT_NEW_PASSWORD'		=> 'A megadott jelszó túl rövid.',
	'TOO_SHORT_OCCUPATION'			=> 'A megadott foglalkozás túl rövid.',
	'TOO_SHORT_USER_PASSWORD'		=> 'A megadott jelszó túl rövid.',
	'TOO_SHORT_USERNAME'			=> 'A megadott felhasználónév túl rövid.',
	'TOO_SHORT_EMAIL'				=> 'A megadott e-mail cím túl rövid.',
	'TOO_SHORT_EMAIL_CONFIRM'		=> 'The email address confirmation you entered is too short.', //bb31!

	'TOO_SMALL'						=> 'A megadott érték túl kicsi.',
	'TOO_SMALL_MAX_RECIPIENTS'		=> 'Az <strong>Engedélyezett címzettek maximum száma</strong> beállításnak megadott érték túl kicsi.',

	'TOPIC'				=> 'Téma',
	'TOPICS'			=> 'Témák',
	'TOPICS_UNAPPROVED'	=> 'A fórumban van legalább egy téma, amely még nem került jóváhagyásra.',
	'TOPIC_ICON'		=> 'Téma ikon',
	'TOPIC_LOCKED'		=> 'A témát lezárták, nem szerkesztheti a hozzászólásait, és nem küldhet új hozzászólást.', //? passzívot kéne használni?
	'TOPIC_LOCKED_SHORT'=> 'Téma lezárva',
	'TOPIC_MOVED'		=> 'Áthelyezett téma',
	'TOPIC_REVIEW'		=> 'Téma áttekintése',
	'TOPIC_TITLE'		=> 'Téma címe',
	'TOPIC_UNAPPROVED'	=> 'Jóvá nem hagyott téma',
	'TOPIC_DELETED'		=> 'Téma törölve',
	'TOTAL_ATTACHMENTS'	=> 'Csatolmány(ok)',
	'TOTAL_LOGS'		=> array(
		1	=> '%d bejegyzés',
		2	=> '%d bejegyzés',
	),
	'TOTAL_PMS'		=> array(
		1	=> 'Összesen %d privát üzenet',
		2	=> 'Összesen %d privát üzenet',
	),
	'TOPIC_POLL'		=> 'This topic has a poll.', //bb31!
	'TOTAL_POSTS'		=> 'Hozzászólások száma',
	'TOTAL_POSTS_COUNT'	=> array(
		2	=> 'Hozzászólások száma: <strong>%d</strong>', //bb31!
	),
	'TOPIC_REPORTED'	=> 'Jelentett téma',
	'TOTAL_TOPICS'		=> array(
		2	=> 'Témák száma: <strong>%d</strong>', //bb31!
	),
	'TOTAL_USERS'		=> array(
		2	=> 'Felhasználók száma: <strong>%d</strong>', //bb31!
	),
	'TRACKED_PHP_ERROR'	=> 'PHP hibák: %s',
	'TWITTER'			=> 'Twitter',

	'UNABLE_GET_IMAGE_SIZE'	=> 'Nem sikerült meghatározni a kép méretét.  Please verify that the URL you entered is correct.', //bb31!
	'UNABLE_TO_DELIVER_FILE'=> 'Nem sikerült elküldeni az állományt.',
	'UNKNOWN_BROWSER'		=> 'Ismeretlen böngésző',
	'UNMARK_ALL'			=> 'Összes kijelölésének megszüntetése',
	'UNREAD_MESSAGES'		=> 'Olvasatlan üzenetek',
	'UNREAD_POST'			=> 'Olvasatlan hozzászólás',
	'UNREAD_POSTS'			=> 'Olvasatlan hozzászólások',
	'UNWATCH_FORUM_CONFIRM'		=> 'Valóban le szeretne iratkozni erről a fórumról?',
	'UNWATCH_FORUM_DETAILED'	=> 'Valóban le szeretne iratkozni a(z) “%s” fórumról?',
	'UNWATCH_TOPIC_CONFIRM'		=> 'Valóban le szeretne iratkozni erről a témáról?',
	'UNWATCH_TOPIC_DETAILED'	=> 'Valóban le szeretne iratkozni a(z) “%s” témáról?',
	'UNWATCHED_FORUMS'			=> 'Sikeresen leiratkozott a kiválasztott fórumokról.',
	'UNWATCHED_TOPICS'			=> 'Sikeresen leiratkozott a kiválasztott témákról.',
	'UNWATCHED_FORUMS_TOPICS'	=> 'Sikeresen leiratkozott a kiválasztott elemekről.',
	'UPDATE'				=> 'Frissítés',
	'UPLOAD_IN_PROGRESS'	=> 'Feltöltés folyamatban...',
	'URL_REDIRECT'			=> 'Ha a böngészője nem támogatja a meta átirányítást, kattintson %side%s.',
	'USERGROUPS'			=> 'Csoportok',
	'USERNAME'				=> 'Felhasználónév',
	'USERNAMES'				=> 'Felhasználónevek',
	'USER_AVATAR'			=> 'Avatar',
	'USER_CANNOT_READ'		=> 'Nincs jogosultsága a hozzászólások megtekintéséhez ebben a fórumban.',
	'USER_POSTS'			=> array(
		1	=> '%d hozzászólás',
		2	=> '%d hozzászólás',
	),
	'USERS'					=> 'Felhasználók',
	'USE_PERMISSIONS'		=> 'Felhasználó jogosultságainak kipróbálása',
	'USER_NEW_PERMISSION_DISALLOWED'	=> 'Sajnáljuk, de önnek nincs jogosultsága ezen funkció használatához. Még csak most regisztrálhatott, lehet hogy több aktivitást kell felmutatnia, hogy használhassa ezt a funkciót.',

	'VARIANT_DATE_SEPARATOR'	=> ' / ',	// Used in date format dropdown, eg: "Today, 13:37 / 01 Jan 2007, 13:37" ... to join a relative date with calendar date
	'VIEWED'					=> 'Megtekintve',
	'VIEWED_COUNTS'		=> array(
		0	=> 'Not viewed yet', //bb31!
		1	=> 'Viewed %d time',
		2	=> 'Viewed %d times',
	),
	'VIEWING_FAQ'				=> 'GyIK megtekintése',
	'VIEWING_MEMBERS'			=> 'Taglista megtekintése',
	'VIEWING_ONLINE'			=> 'Jelenlévők listájának megtekintése',
	'VIEWING_MCP'				=> 'Moderátori vezérlőpult megtekintése',
	'VIEWING_PRIVATE_MESSAGES'	=> 'Privát üzenetek megtekintése',
	'VIEWING_REGISTER'			=> 'Regisztrálás a fórumra',
	'VIEWING_MEMBER_PROFILE'	=> 'Felhasználó profiljának megtekintése',
	'VIEWING_UCP'				=> 'Felhasználói vezérlőpult megtekintése',
	'VIEWS'						=> 'Megtekintve', //?
	'VIEW_BOOKMARKS'			=> 'Kedvencek megtekintése',
	'VIEW_FORUM_LOGS'			=> 'Napló megtekintése',
	'VIEW_LATEST_POST'			=> 'Utolsó hozzászólás megtekintése',
	'VIEW_NEWEST_POST'			=> 'Első olvasatlan hozzászólás megtekintése',
	'VIEW_NOTES'				=> 'Feljegyzések megtekintése',
	'VIEW_ONLINE_TIMES'			=> array(
		1	=> 'based on users active over the past %d minute', //bb31!
		2	=> 'based on users active over the past %d minutes',
	),
	'VIEW_ONLINE_TIME'			=> 'Az elmúlt %d percben aktív felhasználók alapján.',
	'VIEW_ONLINE_TIMES'			=> 'Az elmúlt %d percben aktív felhasználók alapján.',
	'VIEW_TOPIC'				=> 'Téma megtekintése',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Közlemény: ',
	'VIEW_TOPIC_GLOBAL'			=> 'Általános közlemény: ',
	'VIEW_TOPIC_LOCKED'			=> 'Lezárva: ',
	'VIEW_TOPIC_LOGS'			=> 'Napló megtekintése',
	'VIEW_TOPIC_MOVED'			=> 'Áthelyezve: ',
	'VIEW_TOPIC_POLL'			=> 'Szavazás: ',
	'VIEW_TOPIC_STICKY'			=> 'Kiemelt: ',
	'VISIT_WEBSITE'				=> 'Honlap meglátogatása',

	'WARNINGS'			=> 'Figyelmeztetések',
	'WARN_USER'			=> 'Felhasználó figyelmeztetése',
	'WATCH_FORUM_CONFIRM'	=> 'Valóban fel szeretne iratkozni erre a fórumra?',
	'WATCH_FORUM_DETAILED'	=> 'Valóban fel szeretne iratkozni a(z) “%s” fórumra?',
	'WATCH_TOPIC_CONFIRM'	=> 'Valóban fel szeretne iratkozni erre a témára?',
	'WATCH_TOPIC_DETAILED'	=> 'Valóban fel szeretne iratkozni a(z) “%s” témára?',
	'WELCOME_SUBJECT'	=> 'Üdvözöljük a %s fórumán!',
	'WEBSITE'			=> 'Honlap',
	'WHOIS'				=> 'IP adatok',
	'WHO_IS_ONLINE'		=> 'Ki van itt',
	'WLM'				=> 'WLM',
	'WRONG_PASSWORD'	=> 'Hibás jelszót adott meg.',

	'WRONG_DATA_COLOUR'			=> 'A megadott szín hibás.',
	'WRONG_DATA_JABBER'			=> 'A megadott Jabber azonosító hibás.',
	'WRONG_DATA_LANG'			=> 'A megadott nyelv hibás.',
 	'WROTE'						=> 'írta',

	'YAHOO'				=> 'Yahoo Messenger',
	'YOUTUBE'			=> 'YouTube',
	'YEAR'				=> 'év',
	'YEAR_MONTH_DAY'	=> '(ÉÉÉÉ-HH-NN)',
	'YES'				=> 'Igen',
	'YOU_LAST_VISIT'	=> 'Utolsó látogatás: %s',

	'datetime'			=> array(
		'TODAY'		=> 'Ma, ',
		'TOMORROW'	=> 'Holnap, ',
		'YESTERDAY'	=> 'Tegnap, ',
		'AGO'		=> array(
			0		=> 'kevesebb mint egy perce',
			1		=> '%d perccel ezelőtt',
		),

		'Sunday'	=> 'vasárnap',
		'Monday'	=> 'hétfő',
		'Tuesday'	=> 'kedd',
		'Wednesday'	=> 'szerda',
		'Thursday'	=> 'csütörtök',
		'Friday'	=> 'péntek',
		'Saturday'	=> 'szombat',

		'Sun'		=> 'vas.',
		'Mon'		=> 'hétf.',
		'Tue'		=> 'kedd',
		'Wed'		=> 'szer.',
		'Thu'		=> 'csüt.',
		'Fri'		=> 'pén.',
		'Sat'		=> 'szomb.',

		'January'	=> 'január',
		'February'	=> 'február',
		'March'		=> 'március',
		'April'		=> 'április',
		'May'		=> 'május',
		'June'		=> 'június',
		'July'		=> 'július',
		'August'	=> 'augusztus',
		'September' => 'szeptember',
		'October'	=> 'október',
		'November'	=> 'november',
		'December'	=> 'december',

		'Jan'		=> 'jan.',
		'Feb'		=> 'feb.',
		'Mar'		=> 'márc.',
		'Apr'		=> 'ápr.',
		'May_short'	=> 'máj.',	// Short representation of "May". May_short used because in English the short and long date are the same for May.
		'Jun'		=> 'jún.',
		'Jul'		=> 'júl.',
		'Aug'		=> 'aug.',
		'Sep'		=> 'szept.',
		'Oct'		=> 'okt.',
		'Nov'		=> 'nov.',
		'Dec'		=> 'dec.',
	),

	// Timezones can be translated. We use this for the Etc/GMT timezones here,
	// because they are named invers to their offset.
	'timezones'		=> array(
		'UTC'			=> 'UTC',

		'Etc/GMT-12'	=> 'GMT+12',
		'Etc/GMT-11'	=> 'GMT+11',
		'Etc/GMT-10'	=> 'GMT+10',
		'Etc/GMT-9'		=> 'GMT+9',
		'Etc/GMT-8'		=> 'GMT+8',
		'Etc/GMT-7'		=> 'GMT+7',
		'Etc/GMT-6'		=> 'GMT+6',
		'Etc/GMT-5'		=> 'GMT+5',
		'Etc/GMT-4'		=> 'GMT+4',
		'Etc/GMT-3'		=> 'GMT+3',
		'Etc/GMT-2'		=> 'GMT+2',
		'Etc/GMT-1'		=> 'GMT+1',
		'Etc/GMT+1'		=> 'GMT-1',
		'Etc/GMT+2'		=> 'GMT-2',
		'Etc/GMT+3'		=> 'GMT-3',
		'Etc/GMT+4'		=> 'GMT-4',
		'Etc/GMT+5'		=> 'GMT-5',
		'Etc/GMT+6'		=> 'GMT-6',
		'Etc/GMT+7'		=> 'GMT-7',
		'Etc/GMT+8'		=> 'GMT-8',
		'Etc/GMT+9'		=> 'GMT-9',
		'Etc/GMT+10'	=> 'GMT-10',
		'Etc/GMT+11'	=> 'GMT-11',
		'Etc/GMT+12'	=> 'GMT-12',

		'Africa/Abidjan'	=> 'Africa/Abidjan', //bb31!
		'Africa/Accra'		=> 'Africa/Accra',
		'Africa/Addis_Ababa'	=> 'Africa/Addis Ababa',
		'Africa/Algiers'	=> 'Africa/Algiers',
		'Africa/Asmara'		=> 'Africa/Asmara',
		'Africa/Bamako'		=> 'Africa/Bamako',
		'Africa/Bangui'		=> 'Africa/Bangui',
		'Africa/Banjul'		=> 'Africa/Banjul',
		'Africa/Bissau'		=> 'Africa/Bissau',
		'Africa/Blantyre'	=> 'Africa/Blantyre',
		'Africa/Brazzaville'	=> 'Africa/Brazzaville',
		'Africa/Bujumbura'	=> 'Africa/Bujumbura',
		'Africa/Cairo'		=> 'Africa/Cairo',
		'Africa/Casablanca'	=> 'Africa/Casablanca',
		'Africa/Ceuta'		=> 'Africa/Ceuta',
		'Africa/Conakry'	=> 'Africa/Conakry',
		'Africa/Dakar'		=> 'Africa/Dakar',
		'Africa/Dar_es_Salaam'	=> 'Africa/Dar es Salaam',
		'Africa/Djibouti'	=> 'Africa/Djibouti',
		'Africa/Douala'		=> 'Africa/Douala',
		'Africa/El_Aaiun'	=> 'Africa/El Aaiun',
		'Africa/Freetown'	=> 'Africa/Freetown',
		'Africa/Gaborone'	=> 'Africa/Gaborone',
		'Africa/Harare'		=> 'Africa/Harare',
		'Africa/Johannesburg'	=> 'Africa/Johannesburg',
		'Africa/Juba'		=> 'Africa/Juba',
		'Africa/Kampala'	=> 'Africa/Kampala',
		'Africa/Khartoum'	=> 'Africa/Khartoum',
		'Africa/Kigali'		=> 'Africa/Kigali',
		'Africa/Kinshasa'	=> 'Africa/Kinshasa',
		'Africa/Lagos'		=> 'Africa/Lagos',
		'Africa/Libreville'	=> 'Africa/Libreville',
		'Africa/Lome'		=> 'Africa/Lome',
		'Africa/Luanda'		=> 'Africa/Luanda',
		'Africa/Lubumbashi'	=> 'Africa/Lubumbashi',
		'Africa/Lusaka'		=> 'Africa/Lusaka',
		'Africa/Malabo'		=> 'Africa/Malabo',
		'Africa/Maputo'		=> 'Africa/Maputo',
		'Africa/Maseru'		=> 'Africa/Maseru',
		'Africa/Mbabane'	=> 'Africa/Mbabane',
		'Africa/Mogadishu'	=> 'Africa/Mogadishu',
		'Africa/Monrovia'	=> 'Africa/Monrovia',
		'Africa/Nairobi'	=> 'Africa/Nairobi',
		'Africa/Ndjamena'	=> 'Africa/Ndjamena',
		'Africa/Niamey'		=> 'Africa/Niamey',
		'Africa/Nouakchott'	=> 'Africa/Nouakchott',
		'Africa/Ouagadougou'	=> 'Africa/Ouagadougou',
		'Africa/Porto-Novo'	=> 'Africa/Porto-Novo',
		'Africa/Sao_Tome'	=> 'Africa/Sao Tome',
		'Africa/Tripoli'	=> 'Africa/Tripoli',
		'Africa/Tunis'		=> 'Africa/Tunis',
		'Africa/Windhoek'	=> 'Africa/Windhoek',

		'America/Adak'		=> 'America/Adak',
		'America/Anchorage'	=> 'America/Anchorage',
		'America/Anguilla'	=> 'America/Anguilla',
		'America/Antigua'	=> 'America/Antigua',
		'America/Araguaina'	=> 'America/Araguaina',

		'America/Argentina/Buenos_Aires'	=> 'America/Argentina/Buenos Aires',
		'America/Argentina/Catamarca'	=> 'America/Argentina/Catamarca',
		'America/Argentina/Cordoba'		=> 'America/Argentina/Cordoba',
		'America/Argentina/Jujuy'		=> 'America/Argentina/Jujuy',
		'America/Argentina/La_Rioja'	=> 'America/Argentina/La Rioja',
		'America/Argentina/Mendoza'		=> 'America/Argentina/Mendoza',
		'America/Argentina/Rio_Gallegos'	=> 'America/Argentina/Rio Gallegos',
		'America/Argentina/Salta'		=> 'America/Argentina/Salta',
		'America/Argentina/San_Juan'	=> 'America/Argentina/San Juan',
		'America/Argentina/San_Luis'	=> 'America/Argentina/San Luis',
		'America/Argentina/Tucuman'		=> 'America/Argentina/Tucuman',
		'America/Argentina/Ushuaia'		=> 'America/Argentina/Ushuaia',

		'America/Aruba'			=> 'America/Aruba',
		'America/Asuncion'		=> 'America/Asuncion',
		'America/Atikokan'		=> 'America/Atikokan',
		'America/Bahia'			=> 'America/Bahia',
		'America/Bahia_Banderas'	=> 'America/Bahia Banderas',
		'America/Barbados'		=> 'America/Barbados',
		'America/Belem'			=> 'America/Belem',
		'America/Belize'		=> 'America/Belize',
		'America/Blanc-Sablon'	=> 'America/Blanc-Sablon',
		'America/Boa_Vista'		=> 'America/Boa Vista',
		'America/Bogota'		=> 'America/Bogota',
		'America/Boise'			=> 'America/Boise',
		'America/Cambridge_Bay'	=> 'America/Cambridge Bay',
		'America/Campo_Grande'	=> 'America/Campo Grande',
		'America/Cancun'		=> 'America/Cancun',
		'America/Caracas'		=> 'America/Caracas',
		'America/Cayenne'		=> 'America/Cayenne',
		'America/Cayman'		=> 'America/Cayman',
		'America/Chicago'		=> 'America/Chicago',
		'America/Chihuahua'		=> 'America/Chihuahua',
		'America/Costa_Rica'	=> 'America/Costa Rica',
		'America/Creston'		=> 'America/Creston',
		'America/Cuiaba'		=> 'America/Cuiaba',
		'America/Curacao'		=> 'America/Curacao',
		'America/Danmarkshavn'	=> 'America/Danmarkshavn',
		'America/Dawson'		=> 'America/Dawson',
		'America/Dawson_Creek'	=> 'America/Dawson Creek',
		'America/Denver'		=> 'America/Denver',
		'America/Detroit'		=> 'America/Detroit',
		'America/Dominica'		=> 'America/Dominica',
		'America/Edmonton'		=> 'America/Edmonton',
		'America/Eirunepe'		=> 'America/Eirunepe',
		'America/El_Salvador'	=> 'America/El Salvador',
		'America/Fortaleza'		=> 'America/Fortaleza',
		'America/Glace_Bay'		=> 'America/Glace Bay',
		'America/Godthab'		=> 'America/Godthab',
		'America/Goose_Bay'		=> 'America/Goose Bay',
		'America/Grand_Turk'	=> 'America/Grand Turk',
		'America/Grenada'		=> 'America/Grenada',
		'America/Guadeloupe'	=> 'America/Guadeloupe',
		'America/Guatemala'		=> 'America/Guatemala',
		'America/Guayaquil'		=> 'America/Guayaquil',
		'America/Guyana'		=> 'America/Guyana',
		'America/Halifax'		=> 'America/Halifax',
		'America/Havana'		=> 'America/Havana',
		'America/Hermosillo'		=> 'America/Hermosillo',
		'America/Indiana/Indianapolis'	=> 'America/Indiana/Indianapolis',
		'America/Indiana/Knox'		=> 'America/Indiana/Knox',
		'America/Indiana/Marengo'	=> 'America/Indiana/Marengo',
		'America/Indiana/Petersburg'	=> 'America/Indiana/Petersburg',
		'America/Indiana/Tell_City'	=> 'America/Indiana/Tell City',
		'America/Indiana/Vevay'		=> 'America/Indiana/Vevay',
		'America/Indiana/Vincennes'	=> 'America/Indiana/Vincennes',
		'America/Indiana/Winamac'	=> 'America/Indiana/Winamac',
		'America/Inuvik'		=> 'America/Inuvik',
		'America/Iqaluit'		=> 'America/Iqaluit',
		'America/Jamaica'		=> 'America/Jamaica',
		'America/Juneau'		=> 'America/Juneau',
		'America/Kentucky/Louisville'	=> 'America/Kentucky/Louisville',
		'America/Kentucky/Monticello'	=> 'America/Kentucky/Monticello',
		'America/Kralendijk'	=> 'America/Kralendijk',
		'America/La_Paz'		=> 'America/La Paz',
		'America/Lima'			=> 'America/Lima',
		'America/Los_Angeles'	=> 'America/Los Angeles',
		'America/Lower_Princes'	=> 'America/Lower Princes',
		'America/Maceio'		=> 'America/Maceio',
		'America/Managua'		=> 'America/Managua',
		'America/Manaus'		=> 'America/Manaus',
		'America/Marigot'		=> 'America/Marigot',
		'America/Martinique'	=> 'America/Martinique',
		'America/Matamoros'		=> 'America/Matamoros',
		'America/Mazatlan'		=> 'America/Mazatlan',
		'America/Menominee'		=> 'America/Menominee',
		'America/Merida'		=> 'America/Merida',
		'America/Metlakatla'	=> 'America/Metlakatla',
		'America/Mexico_City'	=> 'America/Mexico City',
		'America/Miquelon'		=> 'America/Miquelon',
		'America/Moncton'		=> 'America/Moncton',
		'America/Monterrey'		=> 'America/Monterrey',
		'America/Montevideo'	=> 'America/Montevideo',
		'America/Montreal'		=> 'America/Montreal',
		'America/Montserrat'	=> 'America/Montserrat',
		'America/Nassau'		=> 'America/Nassau',
		'America/New_York'		=> 'America/New York',
		'America/Nipigon'		=> 'America/Nipigon',
		'America/Nome'			=> 'America/Nome',
		'America/Noronha'		=> 'America/Noronha',
		'America/North_Dakota/Beulah'		=> 'America/North Dakota/Beulah',
		'America/North_Dakota/Center'		=> 'America/North Dakota/Center',
		'America/North_Dakota/New_Salem'	=> 'America/North Dakota/New Salem',
		'America/Ojinaga'		=> 'America/Ojinaga',
		'America/Panama'		=> 'America/Panama',
		'America/Pangnirtung'	=> 'America/Pangnirtung',
		'America/Paramaribo'	=> 'America/Paramaribo',
		'America/Phoenix'		=> 'America/Phoenix',
		'America/Port-au-Prince'	=> 'America/Port-au-Prince',
		'America/Port_of_Spain'	=> 'America/Port of Spain',
		'America/Porto_Velho'	=> 'America/Porto Velho',
		'America/Puerto_Rico'	=> 'America/Puerto Rico',
		'America/Rainy_River'	=> 'America/Rainy River',
		'America/Rankin_Inlet'	=> 'America/Rankin Inlet',
		'America/Recife'		=> 'America/Recife',
		'America/Regina'		=> 'America/Regina',
		'America/Resolute'		=> 'America/Resolute',
		'America/Rio_Branco'	=> 'America/Rio Branco',
		'America/Santa_Isabel'	=> 'America/Santa Isabel',
		'America/Santarem'		=> 'America/Santarem',
		'America/Santiago'		=> 'America/Santiago',
		'America/Santo_Domingo'	=> 'America/Santo Domingo',
		'America/Sao_Paulo'		=> 'America/Sao Paulo',
		'America/Scoresbysund'	=> 'America/Scoresbysund',
		'America/Shiprock'		=> 'America/Shiprock',
		'America/Sitka'			=> 'America/Sitka',
		'America/St_Barthelemy'	=> 'America/St. Barthelemy',
		'America/St_Johns'		=> 'America/St. Johns',
		'America/St_Kitts'		=> 'America/St. Kitts',
		'America/St_Lucia'		=> 'America/St. Lucia',
		'America/St_Thomas'		=> 'America/St. Thomas',
		'America/St_Vincent'	=> 'America/St. Vincent',
		'America/Swift_Current'	=> 'America/Swift Current',
		'America/Tegucigalpa'	=> 'America/Tegucigalpa',
		'America/Thule'			=> 'America/Thule',
		'America/Thunder_Bay'	=> 'America/Thunder Bay',
		'America/Tijuana'		=> 'America/Tijuana',
		'America/Toronto'		=> 'America/Toronto',
		'America/Tortola'		=> 'America/Tortola',
		'America/Vancouver'		=> 'America/Vancouver',
		'America/Whitehorse'	=> 'America/Whitehorse',
		'America/Winnipeg'		=> 'America/Winnipeg',
		'America/Yakutat'		=> 'America/Yakutat',
		'America/Yellowknife'	=> 'America/Yellowknife',

		'Antarctica/Casey'		=> 'Antarctica/Casey',
		'Antarctica/Davis'		=> 'Antarctica/Davis',
		'Antarctica/DumontDUrville'	=> 'Antarctica/DumontDUrville',
		'Antarctica/Macquarie'	=> 'Antarctica/Macquarie',
		'Antarctica/Mawson'		=> 'Antarctica/Mawson',
		'Antarctica/McMurdo'	=> 'Antarctica/McMurdo',
		'Antarctica/Palmer'		=> 'Antarctica/Palmer',
		'Antarctica/Rothera'	=> 'Antarctica/Rothera',
		'Antarctica/South_Pole'	=> 'Antarctica/South Pole',
		'Antarctica/Syowa'		=> 'Antarctica/Syowa',
		'Antarctica/Vostok'		=> 'Antarctica/Vostok',

		'Arctic/Longyearbyen'	=> 'Arctic/Longyearbyen',

		'Asia/Aden'			=> 'Asia/Aden',
		'Asia/Almaty'		=> 'Asia/Almaty',
		'Asia/Amman'		=> 'Asia/Amman',
		'Asia/Anadyr'		=> 'Asia/Anadyr',
		'Asia/Aqtau'		=> 'Asia/Aqtau',
		'Asia/Aqtobe'		=> 'Asia/Aqtobe',
		'Asia/Ashgabat'		=> 'Asia/Ashgabat',
		'Asia/Baghdad'		=> 'Asia/Baghdad',
		'Asia/Bahrain'		=> 'Asia/Bahrain',
		'Asia/Baku'			=> 'Asia/Baku',
		'Asia/Bangkok'		=> 'Asia/Bangkok',
		'Asia/Beirut'		=> 'Asia/Beirut',
		'Asia/Bishkek'		=> 'Asia/Bishkek',
		'Asia/Brunei'		=> 'Asia/Brunei',
		'Asia/Choibalsan'	=> 'Asia/Choibalsan',
		'Asia/Chongqing'	=> 'Asia/Chongqing',
		'Asia/Colombo'		=> 'Asia/Colombo',
		'Asia/Damascus'		=> 'Asia/Damascus',
		'Asia/Dhaka'		=> 'Asia/Dhaka',
		'Asia/Dili'			=> 'Asia/Dili',
		'Asia/Dubai'		=> 'Asia/Dubai',
		'Asia/Dushanbe'		=> 'Asia/Dushanbe',
		'Asia/Gaza'			=> 'Asia/Gaza',
		'Asia/Harbin'		=> 'Asia/Harbin',
		'Asia/Hebron'		=> 'Asia/Hebron',
		'Asia/Ho_Chi_Minh'	=> 'Asia/Ho Chi Minh',
		'Asia/Hong_Kong'	=> 'Asia/Hong Kong',
		'Asia/Hovd'			=> 'Asia/Hovd',
		'Asia/Irkutsk'		=> 'Asia/Irkutsk',
		'Asia/Jakarta'		=> 'Asia/Jakarta',
		'Asia/Jayapura'		=> 'Asia/Jayapura',
		'Asia/Jerusalem'	=> 'Asia/Jerusalem',
		'Asia/Kabul'		=> 'Asia/Kabul',
		'Asia/Kamchatka'	=> 'Asia/Kamchatka',
		'Asia/Karachi'		=> 'Asia/Karachi',
		'Asia/Kashgar'		=> 'Asia/Kashgar',
		'Asia/Kathmandu'	=> 'Asia/Kathmandu',
		'Asia/Khandyga'		=> 'Asia/Khandyga',
		'Asia/Kolkata'		=> 'Asia/Kolkata',
		'Asia/Krasnoyarsk'	=> 'Asia/Krasnoyarsk',
		'Asia/Kuala_Lumpur'	=> 'Asia/Kuala Lumpur',
		'Asia/Kuching'		=> 'Asia/Kuching',
		'Asia/Kuwait'		=> 'Asia/Kuwait',
		'Asia/Macau'		=> 'Asia/Macau',
		'Asia/Magadan'		=> 'Asia/Magadan',
		'Asia/Makassar'		=> 'Asia/Makassar',
		'Asia/Manila'		=> 'Asia/Manila',
		'Asia/Muscat'		=> 'Asia/Muscat',
		'Asia/Nicosia'		=> 'Asia/Nicosia',
		'Asia/Novokuznetsk'	=> 'Asia/Novokuznetsk',
		'Asia/Novosibirsk'	=> 'Asia/Novosibirsk',
		'Asia/Omsk'			=> 'Asia/Omsk',
		'Asia/Oral'			=> 'Asia/Oral',
		'Asia/Phnom_Penh'	=> 'Asia/Phnom Penh',
		'Asia/Pontianak'	=> 'Asia/Pontianak',
		'Asia/Pyongyang'	=> 'Asia/Pyongyang',
		'Asia/Qatar'		=> 'Asia/Qatar',
		'Asia/Qyzylorda'	=> 'Asia/Qyzylorda',
		'Asia/Rangoon'		=> 'Asia/Rangoon',
		'Asia/Riyadh'		=> 'Asia/Riyadh',
		'Asia/Sakhalin'		=> 'Asia/Sakhalin',
		'Asia/Samarkand'	=> 'Asia/Samarkand',
		'Asia/Seoul'		=> 'Asia/Seoul',
		'Asia/Shanghai'		=> 'Asia/Shanghai',
		'Asia/Singapore'	=> 'Asia/Singapore',
		'Asia/Taipei'		=> 'Asia/Taipei',
		'Asia/Tashkent'		=> 'Asia/Tashkent',
		'Asia/Tbilisi'		=> 'Asia/Tbilisi',
		'Asia/Tehran'		=> 'Asia/Tehran',
		'Asia/Thimphu'		=> 'Asia/Thimphu',
		'Asia/Tokyo'		=> 'Asia/Tokyo',
		'Asia/Ulaanbaatar'	=> 'Asia/Ulaanbaatar',
		'Asia/Urumqi'		=> 'Asia/Urumqi',
		'Asia/Ust-Nera'		=> 'Asia/Ust-Nera',
		'Asia/Vientiane'	=> 'Asia/Vientiane',
		'Asia/Vladivostok'	=> 'Asia/Vladivostok',
		'Asia/Yakutsk'		=> 'Asia/Yakutsk',
		'Asia/Yekaterinburg'	=> 'Asia/Yekaterinburg',
		'Asia/Yerevan'		=> 'Asia/Yerevan',

		'Atlantic/Azores'		=> 'Atlantic/Azores',
		'Atlantic/Bermuda'		=> 'Atlantic/Bermuda',
		'Atlantic/Canary'		=> 'Atlantic/Canary',
		'Atlantic/Cape_Verde'	=> 'Atlantic/Cape Verde',
		'Atlantic/Faroe'		=> 'Atlantic/Faroe',
		'Atlantic/Madeira'		=> 'Atlantic/Madeira',
		'Atlantic/Reykjavik'	=> 'Atlantic/Reykjavik',
		'Atlantic/South_Georgia'	=> 'Atlantic/South Georgia',
		'Atlantic/St_Helena'	=> 'Atlantic/St. Helena',
		'Atlantic/Stanley'		=> 'Atlantic/Stanley',

		'Australia/Adelaide'	=> 'Australia/Adelaide',
		'Australia/Brisbane'	=> 'Australia/Brisbane',
		'Australia/Broken_Hill'	=> 'Australia/Broken Hill',
		'Australia/Currie'		=> 'Australia/Currie',
		'Australia/Darwin'		=> 'Australia/Darwin',
		'Australia/Eucla'		=> 'Australia/Eucla',
		'Australia/Hobart'		=> 'Australia/Hobart',
		'Australia/Lindeman'	=> 'Australia/Lindeman',
		'Australia/Lord_Howe'	=> 'Australia/Lord Howe',
		'Australia/Melbourne'	=> 'Australia/Melbourne',
		'Australia/Perth'		=> 'Australia/Perth',
		'Australia/Sydney'		=> 'Australia/Sydney',

		'Europe/Amsterdam'	=> 'Europe/Amsterdam',
		'Europe/Andorra'	=> 'Europe/Andorra',
		'Europe/Athens'		=> 'Europe/Athens',
		'Europe/Belgrade'	=> 'Europe/Belgrade',
		'Europe/Berlin'		=> 'Europe/Berlin',
		'Europe/Bratislava'	=> 'Europe/Bratislava',
		'Europe/Brussels'	=> 'Europe/Brussels',
		'Europe/Bucharest'	=> 'Europe/Bucharest',
		'Europe/Budapest'	=> 'Europe/Budapest',
		'Europe/Busingen'	=> 'Europe/Busingen',
		'Europe/Chisinau'	=> 'Europe/Chisinau',
		'Europe/Copenhagen'	=> 'Europe/Copenhagen',
		'Europe/Dublin'		=> 'Europe/Dublin',
		'Europe/Gibraltar'	=> 'Europe/Gibraltar',
		'Europe/Guernsey'	=> 'Europe/Guernsey',
		'Europe/Helsinki'	=> 'Europe/Helsinki',
		'Europe/Isle_of_Man'	=> 'Europe/Isle of Man',
		'Europe/Istanbul'	=> 'Europe/Istanbul',
		'Europe/Jersey'		=> 'Europe/Jersey',
		'Europe/Kaliningrad'	=> 'Europe/Kaliningrad',
		'Europe/Kiev'		=> 'Europe/Kiev',
		'Europe/Lisbon'		=> 'Europe/Lisbon',
		'Europe/Ljubljana'	=> 'Europe/Ljubljana',
		'Europe/London'		=> 'Europe/London',
		'Europe/Luxembourg'	=> 'Europe/Luxembourg',
		'Europe/Madrid'		=> 'Europe/Madrid',
		'Europe/Malta'		=> 'Europe/Malta',
		'Europe/Mariehamn'	=> 'Europe/Mariehamn',
		'Europe/Minsk'		=> 'Europe/Minsk',
		'Europe/Monaco'		=> 'Europe/Monaco',
		'Europe/Moscow'		=> 'Europe/Moscow',
		'Europe/Oslo'		=> 'Europe/Oslo',
		'Europe/Paris'		=> 'Europe/Paris',
		'Europe/Podgorica'	=> 'Europe/Podgorica',
		'Europe/Prague'		=> 'Europe/Prague',
		'Europe/Riga'		=> 'Europe/Riga',
		'Europe/Rome'		=> 'Europe/Rome',
		'Europe/Samara'		=> 'Europe/Samara',
		'Europe/San_Marino'	=> 'Europe/San Marino',
		'Europe/Sarajevo'	=> 'Europe/Sarajevo',
		'Europe/Simferopol'	=> 'Europe/Simferopol',
		'Europe/Skopje'		=> 'Europe/Skopje',
		'Europe/Sofia'		=> 'Europe/Sofia',
		'Europe/Stockholm'	=> 'Europe/Stockholm',
		'Europe/Tallinn'	=> 'Europe/Tallinn',
		'Europe/Tirane'		=> 'Europe/Tirane',
		'Europe/Uzhgorod'	=> 'Europe/Uzhgorod',
		'Europe/Vaduz'		=> 'Europe/Vaduz',
		'Europe/Vatican'	=> 'Europe/Vatican',
		'Europe/Vienna'		=> 'Europe/Vienna',
		'Europe/Vilnius'	=> 'Europe/Vilnius',
		'Europe/Volgograd'	=> 'Europe/Volgograd',
		'Europe/Warsaw'		=> 'Europe/Warsaw',
		'Europe/Zagreb'		=> 'Europe/Zagreb',
		'Europe/Zaporozhye'	=> 'Europe/Zaporozhye',
		'Europe/Zurich'		=> 'Europe/Zurich',

		'Indian/Antananarivo'	=> 'Indian/Antananarivo',
		'Indian/Chagos'		=> 'Indian/Chagos',
		'Indian/Christmas'	=> 'Indian/Christmas',
		'Indian/Cocos'		=> 'Indian/Cocos',
		'Indian/Comoro'		=> 'Indian/Comoro',
		'Indian/Kerguelen'	=> 'Indian/Kerguelen',
		'Indian/Mahe'		=> 'Indian/Mahe',
		'Indian/Maldives'	=> 'Indian/Maldives',
		'Indian/Mauritius'	=> 'Indian/Mauritius',
		'Indian/Mayotte'	=> 'Indian/Mayotte',
		'Indian/Reunion'	=> 'Indian/Reunion',

		'Pacific/Apia'		=> 'Pacific/Apia',
		'Pacific/Auckland'	=> 'Pacific/Auckland',
		'Pacific/Chatham'	=> 'Pacific/Chatham',
		'Pacific/Chuuk'		=> 'Pacific/Chuuk',
		'Pacific/Easter'	=> 'Pacific/Easter',
		'Pacific/Efate'		=> 'Pacific/Efate',
		'Pacific/Enderbury'	=> 'Pacific/Enderbury',
		'Pacific/Fakaofo'	=> 'Pacific/Fakaofo',
		'Pacific/Fiji'		=> 'Pacific/Fiji',
		'Pacific/Funafuti'	=> 'Pacific/Funafuti',
		'Pacific/Galapagos'	=> 'Pacific/Galapagos',
		'Pacific/Gambier'	=> 'Pacific/Gambier',
		'Pacific/Guadalcanal'	=> 'Pacific/Guadalcanal',
		'Pacific/Guam'		=> 'Pacific/Guam',
		'Pacific/Honolulu'	=> 'Pacific/Honolulu',
		'Pacific/Johnston'	=> 'Pacific/Johnston',
		'Pacific/Kiritimati'	=> 'Pacific/Kiritimati',
		'Pacific/Kosrae'	=> 'Pacific/Kosrae',
		'Pacific/Kwajalein'	=> 'Pacific/Kwajalein',
		'Pacific/Majuro'	=> 'Pacific/Majuro',
		'Pacific/Marquesas'	=> 'Pacific/Marquesas',
		'Pacific/Midway'	=> 'Pacific/Midway',
		'Pacific/Nauru'		=> 'Pacific/Nauru',
		'Pacific/Niue'		=> 'Pacific/Niue',
		'Pacific/Norfolk'	=> 'Pacific/Norfolk',
		'Pacific/Noumea'	=> 'Pacific/Noumea',
		'Pacific/Pago_Pago'	=> 'Pacific/Pago Pago',
		'Pacific/Palau'		=> 'Pacific/Palau',
		'Pacific/Pitcairn'	=> 'Pacific/Pitcairn',
		'Pacific/Pohnpei'	=> 'Pacific/Pohnpei',
		'Pacific/Port_Moresby'	=> 'Pacific/Port Moresby',
		'Pacific/Rarotonga'	=> 'Pacific/Rarotonga',
		'Pacific/Saipan'	=> 'Pacific/Saipan',
		'Pacific/Tahiti'	=> 'Pacific/Tahiti',
		'Pacific/Tarawa'	=> 'Pacific/Tarawa',
		'Pacific/Tongatapu'	=> 'Pacific/Tongatapu',
		'Pacific/Wake'		=> 'Pacific/Wake',
		'Pacific/Wallis'	=> 'Pacific/Wallis',
	),

	// The value is only an example and will get replaced by the current time on view
	'dateformats'	=> array(
		'|Y.m.d.| H:i'			=> '2007.01.01. 13:37 [Relatív napok]',
		'Y.m.d. H:i'			=> '2007.01.01. 13:37',
		'|Y.m.d., D| H:i'		=> '2007.01.01. szer., 13:37 [Relatív napok]',
		'|Y. M j.| G:i'			=> '2007. jan. 1. 13:37 [Relatív napok]',
		'|Y. F j.| G:i'			=> '2007. január 1. 13:37 [Relatív napok]',
		'|Y. M j., D| G:i'		=> '2007. jan. 1., szer. 13:37 [Relatív napok]',
		'|Y. F j., l| G:i'		=> '2007. január 1., szerda 13:37 [Relatív napok]',
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> '|Y.m.d.| H:i',

));