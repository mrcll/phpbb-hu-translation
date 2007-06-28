<?php
/** 
*
* acp common [Hungarian]
*
* @package language
* @version $Id: common.php,v 1.9 2007-06-28 23:11:17 fberci Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Adminisztrátorok',
	'ACP_ADMIN_LOGS'			=> 'Adminisztrátori napló',
	'ACP_ADMIN_ROLES'			=> 'Adminisztártori szerepek',
	'ACP_ATTACHMENTS'			=> 'Csatolmányok',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Csatolmány beállítások',
	'ACP_AUTH_SETTINGS'			=> 'Azonosítás', //? hitelesítéss
	'ACP_AUTOMATION'			=> 'Automatizálás', //? 'Automatizáció'
	'ACP_AVATAR_SETTINGS'		=> 'Avatar beállítások',

	'ACP_BACKUP'				=> 'Kimentés',
	'ACP_BAN'					=> 'Kitiltások', //? "Banning" használják egyáltalán valahol (milyen értelemben)?
	'ACP_BAN_EMAILS'			=> 'E-mail címek kitiltása',
	'ACP_BAN_IPS'				=> 'IP-címek kitiltása',
	'ACP_BAN_USERNAMES'			=> 'Felhasználók kitiltása',
	'ACP_BBCODES'				=> 'BBCode-ok',
	'ACP_BOARD_CONFIGURATION'	=> 'Fórum konfiguráció', //? "Board configuration" 'Fórum beállítás'
	'ACP_BOARD_FEATURES'		=> 'Fórum funkciók', // szolgáltatások?
	'ACP_BOARD_MANAGEMENT'		=> 'Fórum kezelése', //? "Board management" használják egyáltalán valahol?
	'ACP_BOARD_SETTINGS'		=> 'Fórum beállítások',
	'ACP_BOTS'					=> '(Kereső)robotok', //?
	
	'ACP_CAPTCHA'				=> 'Vizuális megerősítés', //? 'CAPTCHA'?

	'ACP_CAT_DATABASE'			=> 'Adatbázis',
	'ACP_CAT_DOT_MODS'			=> '.MOD-ok',
	'ACP_CAT_FORUMS'			=> 'Fórumok',
	'ACP_CAT_GENERAL'			=> 'Általános',
	'ACP_CAT_MAINTENANCE'		=> 'Karbantartás',
	'ACP_CAT_PERMISSIONS'		=> 'Jogosultságok',
	'ACP_CAT_POSTING'			=> 'Üzenetküldés', //? 'Hozzászólások', 'Üzenetek', 'Hozzászólásküldés', 'Üzenetküldés'
	'ACP_CAT_STYLES'			=> 'Megjelenések',
	'ACP_CAT_SYSTEM'			=> 'Rendszer',
	'ACP_CAT_USERGROUP'			=> 'Felhasználók és csoportok',
	'ACP_CAT_USERS'				=> 'Felhasználók',
	'ACP_CLIENT_COMMUNICATION'	=> 'Kommunikáció a kliensekkel', //? 'Kapcsolat a kliensekkel', 'Kliens kommunikáció', 'Kommunikáció a kliensekkel'
	'ACP_COOKIE_SETTINGS'		=> 'Süti beállítások',
	'ACP_CRITICAL_LOGS'			=> 'Hibanapló',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Egyéni profil mezők',
	
	'ACP_DATABASE'				=> 'Adatbázis-kezelés',
	'ACP_DISALLOW'				=> 'Letiltás',
	'ACP_DISALLOW_USERNAMES'	=> 'Felahsználónevek letiltása',
	
	'ACP_EMAIL_SETTINGS'		=> 'E-mail beállítások',
	'ACP_EXTENSION_GROUPS'		=> 'Kiterjesztés csoportok kezelése',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Fórum alapú jogosultságok', //?? "Forum based permissions" a jogosultságokhoz ki kell találni egy terminológiát
	'ACP_FORUM_LOGS'				=> 'Fórum naplók',
	'ACP_FORUM_MANAGEMENT'			=> 'Fórumok kezelése', //? használják?
	'ACP_FORUM_MODERATORS'			=> 'Fórum moderátorok',
	'ACP_FORUM_PERMISSIONS'			=> 'Fórum jogosultságok',
	'ACP_FORUM_ROLES'				=> 'Fórum szerepek',

	'ACP_GENERAL_CONFIGURATION'		=> 'Általános konfiguráció', //? használják
	'ACP_GENERAL_TASKS'				=> 'Általános dolgok', //?? "General tasks" 'Általános feladatok' 'Általános dolgok'
	'ACP_GLOBAL_MODERATORS'			=> 'Globális moderátorok',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globális jogosultságok',
	'ACP_GROUPS'					=> 'Csoportok',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Csoportok fórum jogosultságai', //? "Groups’ forum permissions"
	'ACP_GROUPS_MANAGE'				=> 'Csoportok kezelése',
	'ACP_GROUPS_MANAGEMENT'			=> 'Csoport-kezelés',
	'ACP_GROUPS_PERMISSIONS'		=> 'Csoportok jogosultságai',
	
	'ACP_ICONS'					=> 'Téma ikonok',
	'ACP_ICONS_SMILIES'			=> 'Téma ikonok/emotikonok',
	'ACP_IMAGESETS'				=> 'Képkészletek',
	'ACP_INACTIVE_USERS'		=> 'Inaktív felhasználók',
	'ACP_INDEX'					=> 'AVP kezdőlap',
	
	'ACP_JABBER_SETTINGS'		=> 'Jabber beállítások',
	
	'ACP_LANGUAGE'				=> 'Nyelv-kezelés',
	'ACP_LANGUAGE_PACKS'		=> 'Nyelvi csomagok',
	'ACP_LOAD_SETTINGS'			=> 'Terhelés beállítások',
	'ACP_LOGGING'				=> 'Naplózás',
	
	'ACP_MAIN'					=> 'AVP kezdőlap',
	'ACP_MANAGE_EXTENSIONS'		=> 'Kiterjesztések kezelése',
	'ACP_MANAGE_FORUMS'			=> 'Fórumok kezelése',
	'ACP_MANAGE_RANKS'			=> 'Rangok kezelése',
	'ACP_MANAGE_REASONS'		=> 'Jelentés/visszautasítás okok kezelése',
	'ACP_MANAGE_USERS'			=> 'Felhasználók kezelése',
	'ACP_MASS_EMAIL'			=> 'Csoportos e-mail',
	'ACP_MESSAGES'				=> 'Üzenetek',
	'ACP_MESSAGE_SETTINGS'		=> 'Privát üzenet beállítások',
	'ACP_MODULE_MANAGEMENT'		=> 'Modulok kezelése',
	'ACP_MOD_LOGS'				=> 'Moderátori napló',
	'ACP_MOD_ROLES'				=> 'Moderátori szerepek',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Árva csatolmányok',
	
	'ACP_PERMISSIONS'			=> 'Jogosultságok',
	'ACP_PERMISSION_MASKS'		=> 'Effektív jogosultságok', //?? "Permission masks", 'Tényleges jogosultságok', 'Alkalmazott jogosultságok'
	'ACP_PERMISSION_ROLES'		=> 'Jogosultság szerepek',
	'ACP_PERMISSION_TRACE'		=> 'Jogosultság visszakövetés',
	'ACP_PHP_INFO'				=> 'PHP információ',
	'ACP_POST_SETTINGS'			=> 'Hozzászólás beállítások',
	'ACP_PRUNE_FORUMS'			=> 'Fórumok automatikus tisztítása', //?? alternatívák a prune-re: 'tisztítás', 'tisztogatás', 'automatikus tisztítás', 'automatikus törlés', 'megnyirbálás', 'megtisztítás', 'gyomlálás', 'megnyesés' - egyre jobbak :D
	'ACP_PRUNE_USERS'			=> 'Felhasználók automatikus tisztítása',
	'ACP_PRUNING'				=> 'Automatikus tisztítás',
	
	'ACP_QUICK_ACCESS'			=> 'Gyorsmenü',
	
	'ACP_RANKS'					=> 'Rangok',
	'ACP_REASONS'				=> 'Jelentés/visszautasítás okok',
	'ACP_REGISTER_SETTINGS'		=> 'Felhasználói regisztrációs beállítások', //? kell a felhasználói? (nem)

	'ACP_RESTORE'				=> 'Visszaállítás',

	'ACP_SEARCH'				=> 'Kereső konfiguráció',
	'ACP_SEARCH_INDEX'			=> 'Kereső index',
	'ACP_SEARCH_SETTINGS'		=> 'Kereső beállítások',

	'ACP_SECURITY_SETTINGS'		=> 'Biztonsági beállítások',
	'ACP_SERVER_CONFIGURATION'	=> 'Szerver konfiguráció', //?
	'ACP_SERVER_SETTINGS'		=> 'Szerver beállítások',
	'ACP_SIGNATURE_SETTINGS'	=> 'Aláírás beállítások',
	'ACP_SMILIES'				=> 'Emotikonok',
	'ACP_STYLE_COMPONENTS'		=> 'Megjelenés alkotóelemek', //? 'összetevők', 'alkotóelemek', 'komponensek'
	'ACP_STYLE_MANAGEMENT'		=> 'Megjelenések kezelése',
	'ACP_STYLES'				=> 'Megjelenések',
	
	'ACP_TEMPLATES'				=> 'Sablonok',
	'ACP_THEMES'				=> 'Témák',
	
	'ACP_UPDATE'					=> 'Frissítés',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Felhasználók fórum jogosultságai',
	'ACP_USERS_LOGS'				=> 'Felhasználói napló',
	'ACP_USERS_PERMISSIONS'			=> 'Felhasználók jogosultságai',
	'ACP_USER_ATTACH'				=> 'Csatolmányok',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Feljegyzések',
	'ACP_USER_GROUPS'				=> 'Csoportok',
	'ACP_USER_MANAGEMENT'			=> 'Felhasználók kezelése', //?
	'ACP_USER_OVERVIEW'				=> 'Áttekintés',
	'ACP_USER_PERM'					=> 'Jogosultságok',
	'ACP_USER_PREFS'				=> 'Beállítások',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Rang',
	'ACP_USER_ROLES'				=> 'Felhasználói szerepek',
	'ACP_USER_SECURITY'				=> 'Felhasználói biztonság', //?? úgyse használják....
	'ACP_USER_SIG'					=> 'Aláírás',

	'ACP_VC_SETTINGS'					=> 'Vizuális megerősítés beállítások',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA kép előnézet', //?
	'ACP_VERSION_CHECK'					=> 'Frissítések keresése',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Adminisztrációs jogosultságok megtekintése', //? "View administrative permissions" 'Adminisztratív'
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Fórum moderátori jogosultságok megtekintése',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Fórum alapú jogosultságok megtekintése',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Globális moderátori jogosultságok megtekintése',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Felhasználó alapú jogosultságok megtekintése', //?
	
	'ACP_WORDS'					=> 'Szócenzúra', //? "Word censoring" 'Szavak cenzúrázása'

	'ACTION'				=> 'Művelet',
	'ACTIONS'				=> 'Műveletek',
	'ACTIVATE'				=> 'Aktiválás',
	'ADD'					=> 'Hozzáadás',
	'ADMIN'					=> 'Adminisztráció',
	'ADMIN_INDEX'			=> 'Adminisztrátori kezdőlap',
	'ADMIN_PANEL'			=> 'Adminisztrátori vezérlőpult',

	'BACK'					=> 'Vissza',

	'COLOUR_SWATCH'			=> 'Webbiztos színválasztó',
	'CONFIG_UPDATED'		=> 'A konfiguráció sikeresen frissítésre került.', //?

	'DEACTIVATE'				=> 'Deaktiválás',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'A megadott „%s” elérési út nem létezik.',
	'DIRECTORY_NOT_DIR'			=> 'A megadott „%s” elérési út nem könyvtár.',
	'DIRECTORY_NOT_WRITABLE'	=> 'A megadott „%s” elérési út nem írható.',
	'DISABLE'					=> 'Kikapcsolás',
	'DOWNLOAD'					=> 'Letöltés',
	'DOWNLOAD_AS'				=> 'Letöltés, mint', //?
	'DOWNLOAD_STORE'			=> 'Állomány letöltése vagy eltárolása', //? "Download or store file" a store simán csak tárolása?
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Az állományt közvetlenül letöltheted, vagy elmentheted a <samp>store/</samp> könyvtáradba.',

	'EDIT'					=> 'Szerkesztés',
	'ENABLE'				=> 'Bekapcsolás',
	'EXPORT_DOWNLOAD'		=> 'Letöltés',
	'EXPORT_STORE'			=> 'Eltárolás',

	'GENERAL_OPTIONS'		=> 'Általános beállítások', //? "General options" 'Általános választási lehetőségek'??
	'GENERAL_SETTINGS'		=> 'Általános beállítások',
	'GLOBAL_MASK'			=> 'Globális effektív jogosultságok', //? "Global permission mask"

	'INSTALL'				=> 'Telepítés',
	'IP'					=> 'Felhasználó IP-je',
	'IP_HOSTNAME'			=> 'IP-címek vagy hosztnevek', //? egyesszám?

	'LOGGED_IN_AS'			=> 'Bejelentkezve:', //? "You are logged in as:" 'Bejelentkeztél, mint', 'Be vagy lépve, mint', 'Bejelentkezve, mint'
	'LOGIN_ADMIN'			=> 'A fórum adminisztrálásához azonosított felhasználónak kell lenned.',
	'LOGIN_ADMIN_CONFIRM'	=> 'A fórum adminisztrálásához újra azonosítanod kell magad..',
	'LOGIN_ADMIN_SUCCESS'	=> 'Sikeresen azonosításra kerültél, most továbbirányításra kerülsz az adminisztrátori vezérlőpultba.',
	'LOOK_UP_FORUM'			=> 'Fórum kiválasztása',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Több fórumot is kiválaszthatsz.',

	'MANAGE'				=> 'Kezelés', //?
	'MENU_TOGGLE'			=> 'Oldalsó menü elrejtése/mutatása',
	'MOVE_DOWN'				=> 'Mozgatás lejjebb',
	'MOVE_UP'				=> 'Mozgatás feljebb',

	'NOTIFY'				=> 'Értesítés',
	'NO_ADMIN'				=> 'Nincs jogosultságod a fórum adminisztrálásához.',
	'NO_EMAILS_DEFINED'		=> 'Nem található valós e-mail cím.', //? "No valid e-mail addresses found." hol használják?
	'NO_PASSWORD_SUPPLIED'	=> 'Az adminisztrátori vezérlőpulthoz való hozzáféréshez meg kell adnod a jelszavad.',	

	'OFF'					=> 'Kikapcsolva',
	'ON'					=> 'Bekapcsolva',

	'PARSE_BBCODE'						=> 'BBCode értelmezése', //? "Parse BBCode" 'BBCode feldolgozása' 'BBCode értelmezése' 'BBCode bekapcsolva' 'BBCode használata'
	'PARSE_SMILIES'						=> 'Emotikonok értelmezése',
	'PARSE_URLS'						=> 'Linkek értelmezése',
	'PERMISSIONS_TRANSFERRED'			=> 'Jogosultságok átruházva',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Jelenleg %1$s jogosultságaival rendelkezel. A fórumot ezen felhasználó jogosultságaival böngészheted, viszont nem férhetsz hozzá az adminisztrációs vezérlőpulthoz, mivel adminisztrátori jogosultságok nem kerültek átruházásra. <a href="%2$s"><strong>Bármikor visszatérhetsz a saját jogosultságaidhoz.</strong></a>',
	'PIXEL'								=> 'px', //?
	'PROCEED_TO_ACP'					=> '%sTovább az AVP-hoz%s',

	'REMIND'							=> 'Emlékeztetés',
	'RESYNC'							=> 'Újraszinkronizálás',
	'RETURN_TO'							=> 'Vissza:', //? "Return to…"

	'SELECT_ANONYMOUS'		=> 'Vendég felhasználó kiválasztása',
	'SELECT_OPTION'			=> 'Opció kiválasztása',

	'UCP'					=> 'Felhasználói vezérlőpult',
	'USERNAMES_EXPLAIN'		=> 'Minden felhsználónevet külön sorba írj.',
	'USER_CONTROL_PANEL'	=> 'Felhasználói vezérlőpult',

	'WARNING'				=> 'Figyelmeztetés',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Ez az oldal információkat tartalmaz a szerveren lévő PHP-ról. Az adatok között megtalálod a betöltött modulokat, elérhető változókat és az alap beállításokat. Ezek az információk hasznosak tudnak lenni egy probléma kivizsgálásánál. Kérjük, vedd figyelembe, hogy néhány tárhelyszolgáltató biztonsági okokból korlátozza, milyen információk jelennek meg itt. Az ezen az oldalon szereplő adatokat nem tanácsos kiadni, hacsak nem egy <a href="http://www.phpbb.com/about/team/">hivatalos csapattag</a> kérdezi azokat a támogató fórumokban!',

	'NO_PHPINFO_AVAILABLE'	=> 'Nem lehet meghatározni a PHP információkat. A phpinfo() biztonsági okokból le lett tiltva.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Ez a lista az adminisztrátorok összes műveletét, tevékenységét tartalmazza. Rendezheted felhasználónév, idő, IP-cím vagy művelet szerint. Ha rendelkezel a szükséges jogosultságokkal, törölheted az egyes bejegyzéseket vagy akár a teljes napló tartalmát.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Ez a lista a fórum által végrehajtott műveleteket tartalmazza. Ez a napló olyan információkat nyújt, melyeket fel tudsz használni problémák megoldásához, például hogy miért nem mennek el az e-mailek. Rendezheted felhasználónév, idő, IP-cím vagy művelet szerint. Ha rendelkezel a szükséges jogosultságokkal, törölheted az egyes bejegyzéseket vagy akár a teljes napló tartalmát.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Ez a lista a moderátorok által a fórumokon, témákon és hozzászólásokon végrehajtott műveleteket tartalmazza, ide értve a kitiltásokat is. Rendezheted felhasználónév, idő, IP-cím vagy művelet szerint. Ha rendelkezel a szükséges jogosultságokkal, törölheted az egyes bejegyzéseket vagy akár a teljes napló tartalmát.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Ez a lista a felhasználókon vagy a felhasználók által végrehajtott műveleteket tartalmazza (jelentések, figyelmeztetések és feljegyzések).',
	'ALL_ENTRIES'				=> 'Összes bejegyzés',

	'DISPLAY_LOG'	=> 'Bejegyzések megjelenítése:', //? "Display entries from previous"

	'NO_ENTRIES'	=> 'Ebben az időtartamban nincs napló bejegyzés.',

	'SORT_IP'		=> 'IP-cím',
	'SORT_DATE'		=> 'Dátum',
	'SORT_ACTION'	=> 'Művelet',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Köszönjük, hogy a phpBB-t választottad a fórumodnak. Ezen az oldalon egy áttekintést látsz a fórumod különböző statisztikai adatairól. Az oldal tetején és bal oldalán lévő linkek segítségével a fórumod minden részét részletekbe menően megváltoztathatod. Minden oldalon találsz majd egy leírást az aktuális beállításokhoz.',
	'ADMIN_LOG'					=> 'Naplózott adminisztrátori tevékenységek',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Itt egy áttekintést láthatsz az adminisztrátorok által végrehajtott utolsó öt műveletről. A teljes naplót megtekintheted a menü megfelelő elemére vagy az alább lévő linkre kattintva.',
	'AVATAR_DIR_SIZE'			=> 'Avatar könyvtár mérete',

	'BOARD_STARTED'		=> 'Fórum indulása',

	'DATABASE_SERVER_INFO'	=> 'Adatbázisszerver',
	'DATABASE_SIZE'			=> 'Adatbázis mérete',

	'FILES_PER_DAY'		=> 'Csatolmányok száma naponta',
	'FORUM_STATS'		=> 'Fórum statisztika',

	'GZIP_COMPRESSION'	=> 'GZip tömörítés',

	'NOT_AVAILABLE'		=> 'Nem elérhető',
	'NUMBER_FILES'		=> 'Csatolmányok száma',
	'NUMBER_POSTS'		=> 'Hozzászólások száma',
	'NUMBER_TOPICS'		=> 'Témák száma',
	'NUMBER_USERS'		=> 'Felhasználók száma',
	'NUMBER_ORPHAN'		=> 'Árva csatolmányok száma',

	'POSTS_PER_DAY'		=> 'Hozzászólások száma naponta',

	'PURGE_CACHE'			=> 'Gyorsítótár kiürítése', //? megtisztítása?
	'PURGE_CACHE_CONFIRM'	=> 'Biztosan ki akarod üríteni a gyorsítótárat?',
	'PURGE_CACHE_EXPLAIN'	=> 'Minden gyorsítótárazott elem törlésre kerül, ide értve a gyorsítótárazott sablon állományokat és adatbázis lekérdezéseket.',

	'RESET_DATE'					=> 'Fórum indulási dátumának lenullázása', //? lenullázás?
	'RESET_DATE_CONFIRM'			=> 'Biztosan meg akarod változtatni a fórum indulásának dátumát mostanra?',
	'RESET_ONLINE'					=> 'Valaha jelenlévő legtöbb felhasználó számának lenullázása', //?
	'RESET_ONLINE_CONFIRM'			=> 'Biztosan le akarod nullázni a valaha jelenlévő legtöbb felhasználó számlálót?',
	'RESYNC_POSTCOUNTS'				=> 'Hozzászólásszámok újraszinkronizálása', //? hozzászólásszámok...
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Csak a létező hozzászólások kerülnek figyelembevételre. Az automatikus tisztítás által törölt hozzászólások nem lesznek beleszámolva.', //?
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Biztosan újra akarod szinkronizálni a hozzászólásszámokat?',
	'RESYNC_POST_MARKING'			=> 'Csillagozott témák újraszinkronizálása', //? dotted - csillagozott (prosilverben legalábbis)
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Biztosan újra akarod szinkronizálni a csillagozott témákat?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Először visszavonódik a megjelölés minden témáról, majd helyesen megjelölésre kerülnek azok a témák, melyekben volt valami aktivitás az elmúlt fél évben.', //?
	'RESYNC_STATS'					=> 'Statisztika újraszinkronizálása', //?
	'RESYNC_STATS_CONFIRM'			=> 'Biztosan újra akarod szinkronizálni a statisztikát?',
	'RESYNC_STATS_EXPLAIN'			=> 'Újraszámolja a fórum hozzászólásait, témáit, felhasználóit és állományait.', //?
	'RUN'							=> 'Futtatás most',

	'STATISTIC'					=> 'Statisztika',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Statisztikák újraszinkronizálása vagy lenullázása',

	'TOPICS_PER_DAY'	=> 'Témák száma naponta',

	'UPLOAD_DIR_SIZE'	=> 'Feltöltött csatolmányok mérete',
	'USERS_PER_DAY'		=> 'Felhasználók száma naponta',

	'VALUE'					=> 'Érték',
	'VIEW_ADMIN_LOG'		=> 'Adminisztrátori napló megtekintése',
	'VIEW_INACTIVE_USERS'	=> 'Inaktív felhasználók megtekintése',

	'WELCOME_PHPBB'			=> 'Üdvözlünk a phpBB-ben!',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Inactive date',
	'INACTIVE_REASON'				=> 'Reason',
	'INACTIVE_REASON_MANUAL'		=> 'Account deactivated by administrator',
	'INACTIVE_REASON_PROFILE'		=> 'Profile details changed',
	'INACTIVE_REASON_REGISTER'		=> 'Newly registered account',
	'INACTIVE_REASON_REMIND'		=> 'Forced user account reactivation',
	'INACTIVE_REASON_UNKNOWN'		=> 'Unknown',
	'INACTIVE_USERS'				=> 'Inactive users',
	'INACTIVE_USERS_EXPLAIN'		=> 'This is a list of users who have registered but whose accounts are inactive. You can activate, delete or remind (by sending an e-mail) these users if you wish.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'This is a list of the last 10 registered users who have inactive accounts. A full list is available from the appropriate menu item or by following the link below from where you can activate, delete or remind (by sending an e-mail) these users if you wish.',

	'NO_INACTIVE_USERS'	=> 'No inactive users',

	'SORT_INACTIVE'		=> 'Inactive date',
	'SORT_LAST_VISIT'	=> 'Last visit',
	'SORT_REASON'		=> 'Reason',
	'SORT_REG_DATE'		=> 'Registration date',

	'USER_IS_INACTIVE'		=> 'User is inactive',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Added or edited users’ user permissions</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Added or edited groups’ user permissions</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Added or edited users’ global moderator permissions</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Added or edited groups’ global moderator permissions</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Added or edited users’ administrator permissions</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Added or edited groups’ administrator permissions</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Added or edited Administrators</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Added or edited Global Moderators</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Added or edited users’ forum access</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Added or edited users’ forum moderator access</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Added or edited groups’ forum access</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Added or edited groups’ forum moderator access</strong> from %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Added or edited Moderators</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Added or edited forum permissions</strong> from %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Removed Administrators</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Removed Global Moderators</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Removed Moderators</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Removed User/Group forum permissions</strong> from %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permissions transferred from</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Own permissions restored after using permissions from</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Failed administration login attempt</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Successful administration login</strong>',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Added or edited attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Removed attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Updated attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Added extension group</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Edited extension group</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Removed extension group</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Orphan File uploaded to Post</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Orphan Files deleted</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Excluded user from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Excluded IP from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Excluded e-mail from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Banned user</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Banned IP</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Banned e-mail</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Unbanned user</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Unbanned IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Unbanned e-mail</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Added new BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Edited BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Deleted BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>New bot added</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Deleted bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Existing bot updated</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Cleared admin log</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Cleared error log</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Cleared moderator log</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Cleared user log</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Cleared user logs</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Altered attachment settings</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Altered authentication settings</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Altered avatar settings</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Altered cookie settings</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Altered e-mail settings</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Altered board features</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Altered load settings</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Altered private message settings</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Altered post settings</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Altered user registration settings</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Altered search settings</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Altered security settings</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Altered server settings</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Altered board settings</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Altered signature settings</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Altered visual confirmation settings</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Approved topic</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>User bumped topic</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Deleted post</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Deleted topic</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Copied topic</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Locked topic</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Locked post</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Merged posts</strong> into topic<br />» %s',
	'LOG_MOVE'					=> '<strong>Moved topic</strong><br />» from %s',
	'LOG_POST_APPROVED'			=> '<strong>Approved post</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Disapproved post “%1$s” with the following reason</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Edited post “%1$s” written by</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Closed report</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Deleted report</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Moved split posts</strong><br />» to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Split posts</strong><br />» from %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Deleted topic</strong><br />» %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>Approved topic</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Disapproved topic “%1$s” with the following reason</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronised topic counters</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Changed topic type</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Unlocked topic</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Unlocked post</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Added disallowed username</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Deleted disallowed username</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Database backup</strong>',
	'LOG_DB_DELETE'			=> '<strong>Deleted database backup</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Restored database backup</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Excluded IP/hostname from download list</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Added IP/hostname to download list</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Removed IP/hostname from download list</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber error</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-mail error</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Created new forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Deleted forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Deleted forum and its subforums</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Deleted forum and moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Deleted forum and moved posts </strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Deleted forum and its subforums, moved messages</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Deleted forum, moved posts</strong> to %1$s <strong>and subforums</strong> to %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Deleted forum and its messages</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Deleted forum, its messages and subforums</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Deleted forum and its messages, moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Edited forum details</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Moved forum</strong> %1$s <strong>below</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Moved forum</strong> %1$s <strong>above</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Re-synchronised forum</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>New usergroup created</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Group “%1$s” made default for members</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Usergroup deleted</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Leaders demoted in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Members promoted to leader in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Members removed from usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Usergroup details updated</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Added new leaders to usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Users approved in usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Added new members to usergroup</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>Added new imageset to database</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>Add new imageset on filesystem</strong><br />» %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>Deleted imageset</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>Edited imageset details</strong><br />» %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>Edited imageset</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>Exported imageset</strong><br />» %s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Refreshed “%2$s” localisation of imageset</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Refreshed imageset</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Activated inactive users</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Deleted inactive users</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Sent reminder e-mails to inactive users</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Converted from %1$s to phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installed phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Session IP/browser/X_FORWARDED_FOR check failed</strong><br />»User IP “<em>%1$s</em>” checked against session IP “<em>%2$s</em>”, user browser string “<em>%3$s</em>” checked against session browser string “<em>%4$s</em>” and user X_FORWARDED_FOR string “<em>%5$s</em>” checked against session X_FORWARDED_FOR string “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber account changed</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber password changed</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber account registered</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber settings changed</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Deleted language pack</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Installed language pack</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Updated language pack details</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Replaced language file</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Submitted language file and placed in store folder</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Sent mass e-mail</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Changed poster in topic “%1$s”</strong><br />» from %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Module disabled</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Module enabled</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Module moved down</strong><br />» %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Module moved up</strong><br />» %1$s above %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Module removed</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Module added</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Module edited</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Admin role added</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Admin role edited</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Admin role removed</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forum role added</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forum role edited</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forum role removed</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderator role added</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderator role edited</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderator role removed</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>User role added</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>User role edited</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>User role removed</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profile field activated</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profile field added</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profile field deactivated</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profile field changed</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profile field removed</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Pruned forums</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-pruned forums</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Users deactivated</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Users pruned and posts deleted</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Users pruned and posts retained</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Purged cache</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Added new rank</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Removed rank</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Updated rank</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Added report/denial reason</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Removed report/denial reason</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Updated report/denial reason</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Board start date reset</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Most users online reset</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>User post counts resynchronised</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Dotted topics resynchronised</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Post, topic and user statistics resynchronised</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Created search index for</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Removed search index for</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Added new style</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Deleted style</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Edited style</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exported style</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Added new template set to database</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Add new template set on filesystem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Deleted cached versions of template files in template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Deleted template set</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Edited template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Edited template details</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Exported template set</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Refreshed template set</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Added new theme to database</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Add new theme on filesystem</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Theme deleted</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Edited theme details</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Edited theme <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Edited theme <em>%1$s</em></strong><br />» Modified file <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exported theme</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Refreshed theme</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Updated Database from version %1$s to version %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Updated phpBB from version %1$s to version %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>User activated</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Banned User via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Banned IP via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Banned e-mail via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Deleted user</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Removed all attachments made by the user</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Removed user avatar</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Removed all posts made by the user</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Removed user signature</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>User deactivated</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Moved user posts</strong><br />» posts by “%1$s” to forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Changed user password</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Forced user account reactivation</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>User “%1$s” changed e-mail</strong><br />» from “%2$s” to “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Changed username</strong><br />» from “%1$s” to “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Updated user details</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>User account activated</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>User avatar removed</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>User signature removed</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Added user feedback</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Entry added:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>User account de-activated</strong>',
	'LOG_USER_LOCK'				=> '<strong>User locked own topic</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Moved all posts to forum</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Forced user account reactivation</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>User unlocked own topic</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Added user warning</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>The following warning was issued to this user</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>User changed default group</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>User demoted as leaders from usergroup</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>User joined group</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>User joined group and needs to be approved</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>User resigned membership from group</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Added word censor</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Deleted word censor</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Edited word censor</strong><br />» %s',
));

?>