<?php
/** 
*
* ucp [Hungarian Formal]
*
* @package language
* @version $Id: ucp.php,v 1.45 2008/10/26 13:50:17 fberci Exp $
* @copyright (c) 2009 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* Original copyright: (c) 2005 phpBB Group
*
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Azzal, hogy használja a „%1$s” fórumot (a továbbiakban „mi”, „a fórum”, „%1$s”, „%2$s”) elfogadja, hogy betartja az alábbi feltételeket. Ha nem fogadja el, kérjük ne használja, illetve ne is keresse fel a fórumot. A feltételeket bármikor megváltoztathatjuk, és habár a lehető legtöbbet megtesszük, hogy értesítsük a változásról, érdemes rendszeresen áttekinteni ezt az oldalt, mivel a fórum használati feltételeinek megváltoztatása utáni további használatával ön beleegyez az új feltételek betartásába.<br />
	<br />
	A fórumot a phpBB hajtja, mely egy a „<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>” (a továbbiakban „GPL”) licenc alatt kiadott fórumszoftver, és a <a href="http://www.phpbb.com/">www.phpbb.com</a>, valamint magyarul a <a href="http://phpbb.hu/">phpbb.hu</a> weboldalról tölthető le. A phpBB csak lehetőséget nyújt az internet alapú kommunikációra; a phpBB Csoport nem felelős azért, hogy milyen tartalmakat, illetve magatartást engedélyezünk. További információért a phpBB-ről, kérjük, látogassa meg a <a href="http://www.phpbb.com/">http://www.phpbb.com/</a> weboldalt.<br />
	<br />
	Ön beleegyez, hogy nem küld semmilyen sértegető, obszcén, vulgáris, rágalmazó, gyűlöletkeltő, támadó, közízlést sértő vagy bármely más olyan tartalmat, mely sérti a hazájában, a fórumot kiszolgáló szerver országában érvényben lévő vagy a nemzetközi törvényeket. A fentiek megsértése azonnali és végleges kitiltáshoz vezethet az internetszolgáltatója értesítésével együtt, ha ezt szükségesnek tartjuk. A feltételek betartatásának érdekében az összes hozzászóláshoz tartozó IP-címet tároljuk. Ön elfogadja, hogy a fórum fenntartóinak jogukban áll eltávolítani, szerkeszteni a hozzászólásait vagy lezárni az ön által nyitott témákat, amennyiben úgy ítélik meg, hogy ez szükséges. Mint felhasználó, elfogadja, hogy bármely adat, melyet megad, tárolásra kerül a fórum adatbázisában. Ezek az információk a beleegyezése nélkül semmilyen módon nem kerülnek átadásra egy harmadik félnek, de a fórum fenntartói nem tudnak felelősséget vállalni az adatokért egy esetleges „hackertámadás” esetén.
	',

	'PRIVACY_POLICY'		=> 'Ezen nyilatkozat írja le, hogy a phpBB és a „%1$s” fórum (a továbbiakban „mi”, „a fórum”, „%1$s”, „%2$s”) üzemeltetői hogyan kezelik a fórum használata közben keletkező információkat.
	<br />
	Ezen információk két módon jönnek létre. Egyrészt automatikusan: azzal, hogy felkeresi a fórumot, a phpBB ún. sütiket hoz létre (kis szöveges állományok, melyeket a böngészője letölt az ideiglenes állományok könyvtárába). Ezen sütik olyan fontos adatokat tartalmaznak, melyek a fórum használatához feltétlenül szükségesek. Ilyen információt tárol az első két süti: a felhasználói azonosítót, illetve egy névtelen munkamenet azonosítót, amit a rendszer a böngészőjéhez rendel. A harmadik süti akkor jön létre, amikor a fórumot böngészi – ebben kerül tárolásra melyik témákat olvastad, így javítva a felhasználói élményt. A „%1$s” oldal böngészése során a phpBB-n kívül más szoftverek is létrehozhatnak sütiket, ezeket azonban nem tárgyalja ez a dokumentum, ugyanis csak a phpBB által létrehozott oldalakkal foglalkozik.
	<br />
	A másik mód, ami tárolásra kerülő információt generál, az maga az interakció: például ha ön vendégként vagy regisztrált tagként hozzászólás írsz vagy regisztrál. Ez utóbbi folyamat során meg kell adnia egy egyedien azonosítható nevet („a felhasználói nevét”), egy – a belépéshez használt – személyes jelszót („a jelszavát”), illetve egy valós e-mail címet („az e-mail címét”). Az ön által létrehozott azonosítót azon ország adatvédelmi törvényei védelmezik, melyben a fórum szervere található. A regisztráció során megadott egyéb adatok kötelezősége az adott fórum adminisztrátorainak döntésétől függ. Lehetősége van rá, hogy megválassza, milyen információk jelenjenek meg önről nyilvánosan a profiljában. Ezen felül ki-, illetve bekapcsolhatja az ön számára küldött automatikus leveleket.
	<br />
	A jelszavát biztonságosan, egyirányúan kódolva tároljuk. Javasoljuk, hogy teljesen egyedi jelszavat használjon! Ezen jelszóval férhet hozzá a fórumos azonosítójához, így kérjük, gondosan kezelje. Semmilyen körülmények közt ne adja ki harmadik személynek, még ha az az oldal üzemeltetője is, vagy ha a phpBB-vel kapcsolatban kérik! Amennyiben elfelejti a jelszavát, használja az „Elfelejtettem a jelszavam” funkciót. A rendszer kérni fogja a felhasználónevét és az e-mail címét, majd generálni fog egy új jelszót, így újra használhatja az azonosítóját.
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Az azonosítójának aktiválása megtörtént. Köszönjük, hogy regisztrált.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Az azonosító aktiválása megtörtént.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Az azonosítója sikeresen újraaktiválásra került.',
	'ACCOUNT_ADDED'					=> 'Köszönjük, hogy regisztrált, az azonosítója elkészült. Most már beléphet a felhasználónevével és a jelszavával.',
	'ACCOUNT_COPPA'					=> 'Az azonosítója elkészült, azonban jóváhagyásra vár. További információért, kérjük, nézze meg az e-mail fiókját.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Az azonosítójának beállításai sikeresen frissítésre kerültek, azonban újra kell aktiválnia az azonosítóját, mivel ön megváltoztatta az e-mail címedét. Az aktivációs kulcs elküldésre került a megadott új e-mail címre. További információért, kérjük, nézze meg az e-mail fiókját.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Az azonosítójának beállításai sikeresen frissítésre kerültek, azonban az adminisztrátornak újra kell aktiválnia az azonosítóját, mivel ön megváltoztatta az e-mail címét. Az adminisztrátor értesítésre került, és amint újraaktiválja az azonosítóját önt is értesítünk.',
	'ACCOUNT_INACTIVE'				=> 'Az azonosítója elkészült, azonban hogy használni tudja, aktiválnia kell. Az aktivációs kulcsot elküldtük az e-mail címére. További információért, kérjük, nézze meg az e-mail fiókját.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Az azonosítója elkészült, azonban hogy használni tudja, az adminisztrátornak aktiválnia kell. Az adminisztrátort értesítettük, amint aktiválja az azonosítóját, értesíteni fogunk.', //? szóismétlés
	'ACTIVATION_EMAIL_SENT'			=> 'Az aktivációs e-mail sikeresen elküldésre került az e-mail címére.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Az aktivációs e-mail elküldésre került az adminisztrátorok e-mail címére.',
	'ADD'							=> 'Hozzáadás',
	'ADD_BCC'						=> 'Hozzáadás [titkos másolat]', //? + titkos másolat
	'ADD_FOES'						=> 'Új haragosok felvétele', //? kell az új?
	'ADD_FOES_EXPLAIN'				=> 'Több felhasználónevet is megadhat, mindegyiket külön sorba írva.',
	'ADD_FOLDER'					=> 'Mappa hozzáadása',
	'ADD_FRIENDS'					=> 'Új barátok felvétele', //? kell az új?
	'ADD_FRIENDS_EXPLAIN'			=> 'Több felhasználónevet is megadhat, mindegyiket külön sorba írva.',
	'ADD_NEW_RULE'					=> 'Új szűrő létrehozása', //? kell az új?
	'ADD_RULE'						=> 'Szűrő létrehozása',
	'ADD_TO'						=> 'Hozzáadás [címzett]', //? + címzett
	'ADMIN_EMAIL'					=> 'Információs e-mailek fogadása adminisztrátoroktól',
	'AGREE'							=> 'Elfogadom a feltételeket',
	'ALLOW_PM'						=> 'Privát üzenetek fogadása felhasználóktól',
	'ALLOW_PM_EXPLAIN'				=> 'Kérjük, vegye figyelembe, hogy az adminisztrátorok és a moderátorok mindig fognak tudni privát üzenetet küldeni önnek.',
	'ALREADY_ACTIVATED'				=> 'Az azonosítójának aktiválása már korábban megtörtént.',
	'ATTACHMENTS_EXPLAIN'			=> 'Az alábbi lista a fórumon a hozzászólásaihoz csatolt állományokat tartalmazza.',
	'ATTACHMENTS_DELETED'			=> 'A csatolmányok sikeresen törlésre kerültek.', //? sikeresen törlésrere kerültek??
	'ATTACHMENT_DELETED'			=> 'A csatolmány sikeresen törlésre került.', //? sikeresen törlésre kerültek??
	'AVATAR_CATEGORY'				=> 'Kategória',
	'AVATAR_EXPLAIN'				=> 'Maximális méret: szélesség %1$d pixel, magasság %2$d pixel, állomány mérete %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Az avatarok funkció jelenleg ki van kapcsolva.',
	'AVATAR_GALLERY'				=> 'Helyi galéria', //?
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Nem sikerült feltölteni az avatart a következő helyre: %s.',
	'AVATAR_PAGE'					=> 'Oldal', //?

	'BACK_TO_DRAFTS'			=> 'Vissza az elmentett piszkozatokhoz',
	'BACK_TO_LOGIN'				=> 'Vissza a belépéshez',
	'BIRTHDAY'					=> 'Születésnap',
	'BIRTHDAY_EXPLAIN'			=> 'Ha megadja a születési évét, a születésnapjakor látszani fog a kora is.',
	'BOARD_DATE_FORMAT'			=> 'Dátum formátum',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'A formátum megegyezik a PHP <a href="http://hu.php.net/manual/hu/function.date.php">date()</a> függvényéjével.', //? fogalmazás
	'BOARD_DST'					=> 'Nyári időszámítás érvényben',
	'BOARD_LANGUAGE'			=> 'Nyelv',
	'BOARD_STYLE'				=> 'Megjelenés',
	'BOARD_TIMEZONE'			=> 'Időzóna',
	'BOOKMARKS'					=> 'Kedvencek',
	'BOOKMARKS_EXPLAIN'			=> 'Fel tud venni témákat a kedvencei közé, hogy aztán később felkeresse őket. Ha törölni szeretne egy témát a kedvencekből, jelöld be a jelölőnégyzetét, majd kattintson a <em>Kijelölt kedvencek törlése</em> gombra.', //? Első mondat második fele kicsit mást jelent: "You can bookmark topics for future reference."
	'BOOKMARKS_DISABLED'		=> 'A kedvencek funkció nem elérhető ezen a fórumon.',
	'BOOKMARKS_REMOVED'			=> 'A megjelölt témák sikeresen törlésre kerültek a kedvencekből.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Már nem szerkesztheti vagy törölheti az üzenetet.', //? az üzenet = that message
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Az üzenetek nem helyezhetők át abba a mappába, amelyet épp törölni szeretne.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'A kimenő mappából nem helyezhető át üzenet.',
	'CANNOT_RENAME_FOLDER'		=> 'Ez a mappa nem átnevezhető.',
	'CANNOT_REMOVE_FOLDER'		=> 'Ez a mappa nem áthelyezhető.',
	'CHANGE_DEFAULT_GROUP'		=> 'Elsődleges csoport megváltoztatása',
	'CHANGE_PASSWORD'			=> 'Jelszó megváltoztatása',
	'CLICK_RETURN_FOLDER'		=> '%1$sVissza a „%3$s” mappához%2$s',
	'CONFIRMATION'				=> 'Regisztráció megerősítése',
	'CONFIRM_CHANGES'			=> 'Változtatások megerősítése',	
	'CONFIRM_EMAIL'				=> 'E-mail cím megerősítése',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Csak akkor kell megadnia, ha meg szeretné változtatni az e-mail címét.',
	'CONFIRM_EXPLAIN'			=> 'A robot regisztrációk megakadályozása érdekében meg kell adnia egy megerősítő kódot. A kód az alábbi képen szerepel. Ha látási vagy egyéb problémák miatt nem tudná elolvasni a kódot, lépjen kapcsolatba a %sfórum adminisztrátorával%s.',
	'CONFIRM_PASSWORD'			=> 'Jelszó megerősítése',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Csak akkor kell megadnia, ha meg szeretné változtatni a jelszavát.',
	'COPPA_BIRTHDAY'			=> 'A regisztráció folytatásához, kérjük, adja meg, mikor született.',
	'COPPA_COMPLIANCE'			=> 'COPPA egyeztetés', //?? complience - mondjuk úgyse hasznája senki :)
	'COPPA_EXPLAIN'				=> 'Kérjük, vegye figyelembe, hogy az elküld gombra kattintva elkészül az azonosítója, azonban addig nem lesz aktiválva, míg egy szülője vagy gondviselője jóvá nem hagyja a regisztrációját. E-mailben elküldjük a megfelelő űrlapot, illetve a címet, hogy hova küldje vissza.',
	'CREATE_FOLDER'				=> 'Mappa létrehozása…',
	'CURRENT_IMAGE'				=> 'Jelenlegi kép',
	'CURRENT_PASSWORD'			=> 'Jelenlegi jelszó',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Meg kell adnia a jelenlegi jelszavát, ha meg szeretné változtatni a jelszavát, az e-mail címét vagy a felhasználónevét.',
	'CUR_PASSWORD_ERROR'		=> 'A megadott jelenlegi jelszó hibás.',
	'CUSTOM_DATEFORMAT'			=> 'Egyéni…',

	'DEFAULT_ACTION'			=> 'Alapértelmezett viselkedés', //? alapértelmezett? művelet, viselkedés
	'DEFAULT_ACTION_EXPLAIN'	=> 'Ez fog történni, ha a fenti műveletek közül egyik sem alkalmazható. ', //? végrehajtható
	'DEFAULT_ADD_SIG'			=> 'Aláírás csatolása alapból', //? alapból...
	'DEFAULT_BBCODE'			=> 'BBCode bekapcsolása alapból',
	'DEFAULT_NOTIFY'			=> 'Értesítés a válaszokról alapból',
	'DEFAULT_SMILIES'			=> 'Emotikonok bekapcsolása alapból', //? emotikonokat bekapcsolni?
	'DEFINED_RULES'				=> 'Szűrők', //? "Defined rules" - 'Létező szűrők'
	'DELETED_TOPIC'				=> 'A téma törölve lett.', //? nem tudom hol használják, így csak a passzívot lehet használni
	'DELETE_ATTACHMENT'			=> 'Csatolmány törlése',
	'DELETE_ATTACHMENTS'		=> 'Csatolmányok törlése',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Biztosan törölni akarja ezt a csatolmányt?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Biztosan törölni akarja ezeket a csatolmányokat?',
	'DELETE_AVATAR'				=> 'Kép törlése',
	'DELETE_COOKIES_CONFIRM'	=> 'Biztosan törölni akarja a fórum által létrehozott sütiket?', //? beállított, készített, küldött
	'DELETE_MARKED_PM'			=> 'Kijelölt üzenetek törlése',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Biztosan törölni akarja az összes kijelölt üzenetet?',
	'DELETE_OLDEST_MESSAGES'	=> 'Legrégebbi üzenetek törlése',
	'DELETE_MESSAGE'			=> 'Üzenet törlése',
	'DELETE_MESSAGE_CONFIRM'	=> 'Biztosan törölni akarja ezt a privát üzenetet?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'A törölt mappában lévő összes üzenet törlése', //? kisbetű (van egy és előtte, de távol)?
	'DELETE_RULE'				=> 'Szűrő törlése',
	'DELETE_RULE_CONFIRM'		=> 'Biztosan törölni akarja ezt a szűrőt?',
	'DEMOTE_SELECTED'			=> 'Lemondás a csoportvezetőségről', //? visszalépés...
	'DISABLE_CENSORS'			=> 'Szavak cenzúrázása',
	'DISPLAY_GALLERY'			=> 'Galéria megjelenítése',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'A megadott e-mail domainhez nem tartozik érvényes MX bejegyzés.', //? érvényes? "valid" - valós, létező?
	'DOWNLOADS'					=> 'Letöltések száma', //? remélem csak ilyen értelemben használják...
	'DRAFTS_DELETED'			=> 'Az összes piszkozat sikeresen törlésre került.',
	'DRAFTS_EXPLAIN'			=> 'Itt megtekintheti, szerkesztheti és törölheti az elmentett piszkozatait.',
	'DRAFT_UPDATED'				=> 'A piszkozat sikeresen frissítésre került.', //? "Draft successfully updated."

	'EDIT_DRAFT_EXPLAIN'		=> 'Itt szerkesztheti a piszkozatait. A piszkozatokhoz nem kapcsolható csatolmány, illetve szavazás.', //? "Here you are able to edit your draft. Drafts do not contain attachment and poll information." - ' A piszkozatok nem tartalmaznak csatolmányokat, illetve szavazási információkat.'
	'EMAIL_BANNED_EMAIL'		=> 'A megadott e-mail cím használata nem engedélyezett.',
	'EMAIL_INVALID_EMAIL'		=> 'A megadott e-mail cím hibás.',
	'EMAIL_REMIND'				=> 'Az azonosítójahoz tartozó e-mail cím. Ha nem változtatta meg a felhasználó vezérlőpultban, akkor ez az, amit a regisztrációkor megadott.',
	'EMAIL_TAKEN_EMAIL'			=> 'A megadott e-mail cím már használatban van.', //? "is already in use" - 'már használja valaki' - valaki..., valószínűleg ő maga
	'EMPTY_DRAFT'				=> 'Az üzenet nem lehet üres.',
	'EMPTY_DRAFT_TITLE'			=> 'Meg kell adnia az üzenet témáját.',
	'EXPORT_AS_XML'				=> 'Kimentés XML-ként', //? 'Kimentés x-ként'
	'EXPORT_AS_CSV'				=> 'Kimentés CSV-ként',
	'EXPORT_AS_CSV_EXCEL'		=> 'Kimentés CSV-ként (Excel)',
	'EXPORT_AS_TXT'				=> 'Kimentés TXT-ként',
	'EXPORT_AS_MSG'				=> 'Kimentés MSG-ként',
	'EXPORT_FOLDER'				=> 'Aktuális nézet kimentése', //? kell az aktuális?

	'FIELD_REQUIRED'					=> 'A „%s” mezőt nem hagyhatja üresen.',
	'FIELD_TOO_SHORT'					=> 'A „%1$s” mező tartalma túl rövid, legalább %2$d karakter hosszúnak kell lennie.',
	'FIELD_TOO_LONG'					=> 'A „%1$s” mező tartalma túl hosszú, legfeljebb %2$d karakter engedélyezett.',
	'FIELD_TOO_SMALL'					=> 'A „%1$s” mező értéke túl kicsi, legalább %2$d-nek kell lennie.',
	'FIELD_TOO_LARGE'					=> 'A „%1$s” mező értéke túl nagy, legfeljebb %2$d engedélyezett.', //? kell lennie? - nyelvtan
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'A „%1$s” mező hibás karaktereket tartalmaz, csak számok engedélyezettek.', //? hibás (invalid)?
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'A „%1$s” mező hibás karaktereket tartalmaz, csak alfanumerikus karakterek használata engedélyezett.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'A „%1$s” mező hibás karaktereket tartalmaz, csak alfanumerikus karakterek, szóköz és -+_[] jelek használata engedélyezett.', //? 'jel'? jelek elválasztása?
	'FIELD_INVALID_DATE'				=> 'A „%1$s” mező érvénytelen dátumot tartalmaz.',

	'FOE_MESSAGE'				=> 'Üzenet haragostól',
	'FOES_EXPLAIN'				=> 'A haragosok olyan felhasználók, akik alapból mellőzésre kerülnek. A hozzászólásaik nem teljesen jelennek meg, privát üzenetet azonban küldhetnek. Kérjük, vegye figyelembe, hogy nem mellőzhet egy moderátort vagy egy adminisztrátort.', //? mellőzésre kerülnek :)
	'FOES_UPDATED'				=> 'A haragosainak listája sikeresen frissítésre került.',
	'FOLDER_ADDED'				=> 'A mappa sikeresen hozzáadásra került.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d / %2$d üzenet', //? "%1$d from %2$d messages stored" - gondolom mennyire van tele
	'FOLDER_NAME_EXIST'			=> '<strong>%s</strong> nevű mappa már létezik.',
	'FOLDER_OPTIONS'			=> 'Mappa beállítások',
	'FOLDER_RENAMED'			=> 'A mappa sikeresen átnevezésre került.',
	'FOLDER_REMOVED'			=> 'A mappa sikeresen törlésre került.',
	'FOLDER_STATUS_MSG'			=> 'A mappa %1$d%%-a telt meg (%2$d / %3$d üzenet).', //? 'tele van'?
	'FORWARD_PM'				=> 'PÜ továbbítása',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Mielőtt továbbléphetne a fórumon, meg kell változtatnia a jelszavát.',
	'FRIEND_MESSAGE'			=> 'Üzenet baráttól',
	'FRIENDS'					=> 'Barátok',
	'FRIENDS_EXPLAIN'			=> 'A barátok funkció segítségével könnyen elérheti azokat a felhasználókat, akikkel gyakran lép kapcsolatba. Ha a megjelenés támogatja, a barátok hozzászólásai kiemelve szerepelhetnek.', //? hozzáférhetsz...
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'A barátainak listája sikeresen frissítésre került.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Az egy mappa megtelése esetén végrehajtandó műveletet sikeresen megváltoztatásra került.', //? Nem teljesen ugyanaz, mint ami a magyarázatban van...
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Eredeti üzenet --------',
	'FWD_SUBJECT'				=> 'Téma: %s',
	'FWD_DATE'					=> 'Dátum: %s',
	'FWD_FROM'					=> 'Feladó: %s',
	'FWD_TO'					=> 'Címzett: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Globális közlemény', //? Általános?

	'HIDE_ONLINE'				=> 'Jelenlét elrejtése',
 	'HIDE_ONLINE_EXPLAIN'		=> 'Ha megváltoztatja, az új beállítás csak a következő látogatáskor fog érvénybe lépni.',
	'HOLD_NEW_MESSAGES'			=> 'Üzenetek fogadásának visszautasítása (az új üzenetek vissza lesznek tartva, amíg elegendő hely nem lesz)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Új üzenetek visszatartása',

	'IF_FOLDER_FULL'			=> 'Művelet mappa megtelése esetén',
	'IMPORTANT_NEWS'			=> 'Fontos közlemények',
	'INVALID_USER_BIRTHDAY'		=> 'A megadott születésnap nem érvényes dátum.',
	'INVALID_CHARS_USERNAME'	=> 'A felhasználónév nem engedélyezett karaktereket tartalmaz.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'A jelszó nem tartalmazza a szükséges karaktereket.',
	'ITEMS_REQUIRED'			=> 'A *-gal megjelölt mezők kitöltése kötelező.',

	'JOIN_SELECTED'				=> 'Csatlakozás',

	'LANGUAGE'					=> 'Nyelv',
	'LINK_REMOTE_AVATAR'		=> 'Linkelés az oldalon kívülről',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Adja meg a linkelendő avatar kép URL-jét (webcímét).', //? "Enter the URL of the location containing the avatar image you wish to link to."
	'LINK_REMOTE_SIZE'			=> 'Avatar mérete',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Adja meg az avatar szélességét és magasságát, vagy hagyja üresen a mezőket, hogy ezeket a fórum automatikusan próbálja meg megállapítani.',
	'LOGIN_EXPLAIN_UCP'			=> 'A felhasználói vezérlőpult megtekintéséhez be kell jelentkeznie.',
	'LOGIN_REDIRECT'			=> 'Sikeresen belépett.',
	'LOGOUT_FAILED'				=> 'Nem került kiléptetésre, mivel a kérés nem felelt meg a munkamenetének. Ha továbbra is problémái lennének, kérjük, lépjen kapcsolatba a fórum adminisztrátorával.',
	'LOGOUT_REDIRECT'			=> 'Sikeresen kilépett.',

	'MARK_IMPORTANT'				=> 'Megjelölés fontosként',
	'MARKED_MESSAGE'				=> 'Fontosként megjelölt üzenet', //?
	'MAX_FOLDER_REACHED'			=> 'Elérte a maximálisan létrehozható felhasználói mappák limitjét.',
	'MESSAGE_BY_AUTHOR'				=> 'Feladó:', //? ha jól néztem, sehol nem használják
	'MESSAGE_COLOURS'				=> 'Üzenet jelölések', //? "Message colours"
	'MESSAGE_DELETED'				=> 'Az üzenet sikeresen törlésre került',
	'MESSAGE_HISTORY'				=> 'Kapcsolódó üzenetek',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Ezt az üzenetet a feladója törölte, mielőtt megérkezett volna.',
	'MESSAGE_SENT_ON'				=> 'Dátum:', //?
	'MESSAGE_STORED'				=> 'Az üzenet sikeresen elküldésre került.',
	'MESSAGE_TO'					=> 'Címzett',
	'MESSAGES_DELETED'				=> 'Az üzenet sikeresen törlésre került.',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Töröltmappabeli üzenetek áthelyezése',
	'MOVE_DOWN'						=> 'Lejjebb', //? "Move down"
	'MOVE_MARKED_TO_FOLDER'			=> 'Kijelöltek áthelyezése: %s', //?
	'MOVE_PM_ERROR'					=> 'Hiba lépett fel az üzenetek áthelyezése közben, csak a %1d és a %2d közötti üzeneteket sikerült áthelyezni.',
	'MOVE_TO_FOLDER'				=> 'Áthelyezés', //? "Move to folder"
	'MOVE_UP'						=> 'Feljebb',

	'NEW_EMAIL_ERROR'				=> 'A megadott e-mail címek nem egyeznek meg.',
	'NEW_FOLDER_NAME'				=> 'Mappa új neve',
	'NEW_PASSWORD'					=> 'Új jelszó',
	'NEW_PASSWORD_ERROR'			=> 'A megadott jelszavak nem egyeznek meg.',
	'NOTIFY_METHOD'					=> 'Értesítés módja',
	'NOTIFY_METHOD_BOTH'			=> 'Mindkettő',
	'NOTIFY_METHOD_EMAIL'			=> 'Csak e-mail',
	'NOTIFY_METHOD_EXPLAIN'			=> 'A fórumon keresztül küldött üzenetek milyen módon kerüljenek elküldésre.',
	'NOTIFY_METHOD_IM'				=> 'Csak jabber',
	'NOTIFY_ON_PM'					=> 'Értesítés új privát üzenetről',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'A vendég felhasználót nem veheti fel a barátai listájára.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Nem vehet fel a barátai listájára olyan felhasználókat, akiket haragosként jelölt meg.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Nem veheti fel saját magát a barátai listájára.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Nem vehet fel adminisztrátorokat és moderátorokat a haragosai listájára.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Nem veheti fel a vendég felhasználót a haragosai listájára.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Nem vehet fel a haragosai listájára olyan felhasználókat, akiket már felvett a barátai listájára.',
	'NOT_ADDED_FOES_SELF'			=> 'Nem veheti fel saját magát a haragosai listájára.',
	'NOT_AGREE'						=> 'Nem fogadom el a feltételeket',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'A célmappa („%s”) teli van. A végrehajtani kívánt művelet nem került elvégzésre.',
	'NOT_MOVED_MESSAGE'				=> 'Teli mappa miatt jelenleg 1 privát üzenet van visszatartva.', //?
	'NOT_MOVED_MESSAGES'			=> 'Teli mappa miatt jelenleg %d privát üzenet van visszatartva.',
	'NO_ACTION_MODE'				=> 'Nem adott meg semmilyen teendőt.',
	'NO_AUTHOR'						=> 'Az üzenethez nem tartozik feladó.', //? "No author defined for this message"
	'NO_AVATAR_CATEGORY'			=> 'Nincs',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Nincs jogosultsága privát üzenetet törölni.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Nincs jogosultsága privát üzenetet szerkeszteni.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Nincs jogosultsága privát üzenetet továbbítani.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Nincs jogosultsága privát üzenet küldeni csoportok részére.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Nincs jogosultsága új jelszót kérni.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Nincs jogosultsága visszatartott privát üzenetet olvasni.',
	'NO_AUTH_READ_MESSAGE'			=> 'Nincs jogosultsága privát üzenetek megtekintéséhez.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Ezt az üzenetet nem tudja elolvasni, mivel a küldője törölte.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Nincs jogosultsága privát üzenetet küldeni.',
	'NO_AUTH_SIGNATURE'				=> 'Nincs jogosultsága aláírás megadásához.',

	'NO_BCC_RECIPIENT'			=> 'Nincs',
	'NO_BOOKMARKS'				=> 'Nincs kedvenced.',
	'NO_BOOKMARKS_SELECTED'		=> 'Nem választottál ki egy kedvencet sem.',
 	'NO_EDIT_READ_MESSAGE'		=> 'A privát üzenetet nem lehet szerkeszteni, mivel már elolvasásra került.',
	'NO_EMAIL_USER'				=> 'Nem található a megadott e-mail címhez és felhasználónévhez tartozó azonosító.',
	'NO_FOES'					=> 'Jelenleg üres a haragosai listája.', //? "No foes currently defined" - ide valami az eredetire jobban hasonlító szöveg kéne
	'NO_FRIENDS'				=> 'Jelenleg üres a barátai listája.',
	'NO_FRIENDS_OFFLINE'		=> 'Nincs offline barátja.',
	'NO_FRIENDS_ONLINE'			=> 'Nincs online barátja.',
	'NO_GROUP_SELECTED'			=> 'Nem adott meg csoportot.',
	'NO_IMPORTANT_NEWS'			=> 'Jelenleg nincs fontos közlemény.',
	'NO_MESSAGE'				=> 'A privát üzenet nem található.',
	'NO_NEW_FOLDER_NAME'		=> 'Meg kell adnia a mappa új nevét.',
	'NO_NEWER_PM'				=> 'Nincs újabb üzenet.',
	'NO_OLDER_PM'				=> 'Nincs régebbi üzenet.',
	'NO_PASSWORD_SUPPLIED'		=> 'Nem adta meg a jelszavát.',
	'NO_RECIPIENT'				=> 'Nem adott meg címzettet.',
	'NO_RULES_DEFINED'			=> 'Nincs szűrő.',
	'NO_SAVED_DRAFTS'			=> 'Nincs piszkozat.',
	'NO_TO_RECIPIENT'			=> 'Nincs',
	'NO_WATCHED_FORUMS'			=> 'Nem iratkozott fel egy fórumra se.', //? a se-s megfogalmazás helyett valami más ékne
	'NO_WATCHED_SELECTED'		=> 'Nem választott ki egy témát vagy fórumot se, melyre fel van iratkozva.',
	'NO_WATCHED_TOPICS'			=> 'Nem iratkozott fel egy témára se.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'A jelszó hosszának %1$d és %2$d karakter között kell lennie, szerepelnie kell benne kis- és nagybetűknek egyaránt, valamint tartalmaznia kell számokat.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'A hosszának %1$d és %2$d karakter között kell lennie.', //?
	'PASS_TYPE_CASE_EXPLAIN'	=> 'A jelszó hosszának %1$d és %2$d karakter között kell lennie, valamint szerepelnie kell benne kis- és nagybetűknek egyaránt.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'A jelszó hosszának %1$d és %2$d karakter között kell lennie, szerepelnie kell benne kis- és nagybetűknek egyaránt, valamint tartalmaznia kell számokat és speciális karaktereket is.', //? symbols = speciális karakterek? gondolom...
	'PASSWORD'					=> 'Jelszó',
	'PASSWORD_ACTIVATED'		=> 'Az új jelszava aktiválásra került.',
	'PASSWORD_UPDATED'			=> 'A jelszava elküldésre került az e-mail címére.',
	'PERMISSIONS_RESTORED'		=> 'Az eredeti jogosultságok sikeresen visszaállításra kerültek.', //? eredeti?
	'PERMISSIONS_TRANSFERRED'	=> '<strong>%s</strong> jogosultságai sikeresen átadásra kerültek, most a felhasználó jogosultságaival böngészheti a fórumot.<br />Kérjük, vegye figyelembe, hogy az adminisztrátori jogosultságok nem kerültek átadásra. Az eredeti jogosultságait bármikor visszaállíthatja.', //? "Successfully transferred permissions from <strong>%s</strong>, you are now able to browse the forum with the users permissions." - hát ez nagyon nem sikerült
	'PM_DISABLED'				=> 'A privát üzenet részleg ki lett kapcsolva ezen a fórumon.', //?
	'PM_FROM'					=> 'Feladó',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Az üzenetet egy már nem regisztrált felhasználó küldte.',
	'PM_ICON'					=> 'PÜ ikon',
	'PM_INBOX'					=> 'Bejövő', //? 'Bejövő üzenetek'?
	'PM_NO_USERS'				=> 'A hozzáadni kívánt felhasználók nem léteznek.',
	'PM_OUTBOX'					=> 'Kimenő',
	'PM_SENTBOX'				=> 'Elküldött',
	'PM_SUBJECT'				=> 'Téma',
	'PM_TO'						=> 'Címzett:', //? "send to" - pl. kettőspont?
	'PM_USERS_REMOVED_NO_PM'	=> 'Nem mindegyik felhasználót sikerült hozzáadni, mivel nem mindenki engedélyezte privát üzenetek fogadását.',
	'POPUP_ON_PM'				=> 'Felugró ablak új privát üzenet érkezésekor',
	'POST_EDIT_PM'				=> 'Üzenet szerkesztése',
	'POST_FORWARD_PM'			=> 'Üzenet továbbítása',
	'POST_NEW_PM'				=> 'Üzenet küldése',
	'POST_PM_LOCKED'			=> 'A privát üzenetküldés le van zárva.', //??!
	'POST_PM_POST'				=> 'Hozzászólás idézése',
	'POST_QUOTE_PM'				=> 'Üzenet idézése',
	'POST_REPLY_PM'				=> 'Válasz az üzenetre',
	'PRINT_PM'					=> 'Nyomtatóbarát verzió',
	'PREFERENCES_UPDATED'		=> 'A beállításai sikeresen frissítésre kerültek.', //? preferences
	'PROFILE_INFO_NOTICE'		=> 'Kérjük, vegye figyelembe, hogy ezek az információk lehet, hogy a többi felhasználó számára is láthatóak lesznek. Legyen óvatos bármilyen személyes adat megadásánál. A *-gal megjelölt mezők kitöltése kötelező.', //? "Be careful when including any personal details."
	'PROFILE_UPDATED'			=> 'A profilja sikeresen frissítésre került.',

	'RECIPIENT'							=> 'Címzett',
	'RECIPIENTS'						=> 'Címzettek',
	'REGISTRATION'						=> 'Regisztráció',
	'RELATIVE_DAYS'						=> 'relatív napok', //?
	'RELEASE_MESSAGES'					=> '%sVisszatartott üzenetek kiengedése:%s ha elegendő hely szabaddá válik, visszakerülnek az eredeti mappájukba.', //? "sRelease all on-hold messages%s… they will be re-sorted into the appropriate folder if enough space is made available."
	'REMOVE_ADDRESS'					=> 'Cím törlése', //? nem találtam sehol, hogy használva lenne
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Kiválasztott kedvencek törlése',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Biztosan törölni akarja a kiválasztott témákat a kedvencekből?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Kijelölt kedvencek törlése',
	'REMOVE_FOLDER'						=> 'Mappa törlése',
	'REMOVE_FOLDER_CONFIRM'				=> 'Biztosan törölni akarja ezt a mappát?',
	'RENAME'							=> 'Átnevezés',
	'RENAME_FOLDER'						=> 'Mappa átnevezése',
	'REPLIED_MESSAGE'					=> 'Megválaszolt üzenet', //? meg?
	'RESIGN_SELECTED'					=> 'Lemondás a csoporttagságról',
	'RETURN_FOLDER'						=> '%1$sVissza az előző mappához%2$s',
	'RETURN_UCP'						=> '%sVissza a felhasználói vezérlőpulthoz%s',
	'RULE_ADDED'						=> 'A szűrő sikeresen létrehozásra került.',
	'RULE_ALREADY_DEFINED'				=> 'Már van egy ilyen szűrő.',
	'RULE_DELETED'						=> 'A szűrő sikeresen törlésre került.',
	'RULE_NOT_DEFINED'					=> 'A szűrőt nem helyesen adta meg.', //? "Rule not correctly specified"
	'RULE_REMOVED_MESSAGE'				=> 'Egy privát üzenet törlésre került a szűrők következtében.', //? "One private message had been removed due to private message filters."
	'RULE_REMOVED_MESSAGES'				=> '%d privát üzenet törlésre került a szűrők következtében.',

	'SAME_PASSWORD_ERROR'		=> 'A megadott új jelszó megegyezik a jelenlegi jelszavával.',
	'SEARCH_YOUR_POSTS'			=> 'Saját hozzászólások megtekintése',
	'SEND_PASSWORD'				=> 'Jelszó elküldése',
	'SENT_AT'					=> 'Elküldve',
	'SHOW_EMAIL'				=> 'E-mailek fogadása felhasználóktól', //? "Users can contact me by email"
	'SIGNATURE_EXPLAIN'			=> 'Az aláírás egy szöveg, melyet automatikusan hozzáfűzhet a hozzászólásaihoz. Legfeljebb %d karakter hosszú lehet.',
	'SIGNATURE_PREVIEW'			=> 'Így fog megjelenni az aláírása a hozzászólásaiban',
	'SIGNATURE_TOO_LONG'		=> 'Az aláírása túl hosszú.',
	'SORT'						=> 'Rendezés', //?
	'SORT_COMMENT'				=> 'Magyarázat',
	'SORT_DOWNLOADS'			=> 'Letöltések száma', //? száma?
	'SORT_EXTENSION'			=> 'Kiterjesztés',
	'SORT_FILENAME'				=> 'Állomány neve',
	'SORT_POST_TIME'			=> 'Feltöltés ideje',
	'SORT_SIZE'					=> 'Állomány mérete',

	'TIMEZONE'					=> 'Időzóna',
	'TO'						=> 'Címzett',
	'TOO_MANY_RECIPIENTS'		=> 'Túl sok címzettet adott meg.',
	'TOO_MANY_REGISTERS'		=> 'Túllépte a legfeljebb engedélyezett regisztrációkísérletek számát. Kérjük, próbálkozzon később.',

	'UCP'						=> 'Felhasználói vezérlőpult',
	'UCP_ACTIVATE'				=> 'Azonosító aktiválása',
	'UCP_ADMIN_ACTIVATE'		=> 'Kérjük, vegye figyelembe, hogy egy valós e-mail címet kell megadnia, hogy az azonosítója aktiválva lehessen. Az adminisztrátor át fogja nézni az azonosítóját, és ha jóváhagyja, kapni fog egy e-mailt a megadott címre.', //? "Please note that you will need to enter a valid email address before your account is activated. The administrator will review your account and if approved you will receive an email at the address you specified."
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Csatolmányok',
	'UCP_COPPA_BEFORE'			=> '%s előtt',
	'UCP_COPPA_ON_AFTER'		=> '%s-én vagy utána',
	'UCP_EMAIL_ACTIVATE'		=> 'Kérjük, vegye figyelembe, hogy egy valós e-mail címet kell megadnia, hogy az azonosítója aktiválva lehessen. A regisztráció után kapni fog egy e-mailt a megadott címre, amely tartalmazni fogja az aktivációs linket.',
	'UCP_ICQ'					=> 'ICQ azonosító',
	'UCP_JABBER'				=> 'Jabber azonosító',

	'UCP_MAIN'					=> 'Áttekintés',
	'UCP_MAIN_ATTACHMENTS'		=> 'Csatolmányok kezelése', //? kell a kezelése?? (szerintem nem annyira...)
	'UCP_MAIN_BOOKMARKS'		=> 'Kedvencek kezelése',
	'UCP_MAIN_DRAFTS'			=> 'Piszkozatok kezelése',
	'UCP_MAIN_FRONT'			=> 'Kezdőlap', //? "Front page"
	'UCP_MAIN_SUBSCRIBED'		=> 'Feliratkozások kezelése',

	'UCP_MSNM'					=> 'MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Nem töltött fel csatolmányt a fórumra.', //? "You have posted no files"

	'UCP_PREFS'					=> 'Fórum beállítások',
	'UCP_PREFS_PERSONAL'		=> 'Általános beállítások szerkesztése', //? kell a szerkesztése?? - és a beállítások?
	'UCP_PREFS_POST'			=> 'Hozzászólás beállítások szerkesztése', //?
	'UCP_PREFS_VIEW'			=> 'Megjelenítési beállítások szerkesztése',
	
	'UCP_PM'					=> 'Privát üzenetek',
	'UCP_PM_COMPOSE'			=> 'Üzenet írása',
	'UCP_PM_DRAFTS'				=> 'PÜ piszkozatok kezelése',
	'UCP_PM_OPTIONS'			=> 'Szűrők, mappák és beállítások',
	'UCP_PM_POPUP'				=> 'Privát üzenetek',
	'UCP_PM_POPUP_TITLE'		=> 'Privát üzenet felugró ablak',
	'UCP_PM_UNREAD'				=> 'Olvasatlan üzenet',
	'UCP_PM_VIEW'				=> 'Üzenetek megtekintése',

	'UCP_PROFILE'				=> 'Profil',
	'UCP_PROFILE_AVATAR'		=> 'Avatar szerkesztése',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Profil szerkesztése',
	'UCP_PROFILE_REG_DETAILS'	=> 'Azonosító beállítások szerkesztése', //? "Edit account settings"
	'UCP_PROFILE_SIGNATURE'		=> 'Aláírás szerkesztése',

	'UCP_USERGROUPS'			=> 'Csoportok',
	'UCP_USERGROUPS_MEMBER'		=> 'Tagságok szerkesztése',
	'UCP_USERGROUPS_MANAGE'		=> 'Csoportok kezelése',

	'UCP_REGISTER_DISABLE'			=> 'Jelenleg nem lehet létrehozni új azonosítót.',
	'UCP_REMIND'					=> 'Jelszó elküldése',
	'UCP_RESEND'					=> 'Aktivációs e-mail elküldése',
	'UCP_WELCOME'					=> 'Köszöntjük a felhasználói vezérlőpulton! Itt megtekintheti, illetve megváltoztathatja a profilját, a fórum beállításait és a feliratkozásait. Privát üzenetet is küldhet más felhasználóknak (ha engedélyezve van). Mielőtt továbblépne, kérjük, győződjön meg róla, hogy elolvasta a közleményeket.', //? Légy köszöntve a felhasználói vezérlőpulton! üdvözlünk? "Welcome to the User Control Panel. From here you can monitor, view and update your profile, preferences, subscribed forums and topics. You can also send messages to other users (if permitted). Please ensure you read any announcements before continuing."
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Barátok és haragosok',
	'UCP_ZEBRA_FOES'				=> 'Haragosok kezelése',
	'UCP_ZEBRA_FRIENDS'				=> 'Barátok kezelése',
	'UNKNOWN_FOLDER'				=> 'Ismeretlen mappa',
	'UNWATCH_MARKED'				=> 'Leiratkozás a kijelöltekről',
	'UPLOAD_AVATAR_FILE'			=> 'Feltöltés a számítógépről',
	'UPLOAD_AVATAR_URL'				=> 'Feltöltés webcímről',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Adja meg a kép URL-jét (webcímét). A kép átmásolásra kerül erre az oldalra.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'A felhasználónév hosszának %1$d és %2$d karakter között kell lennie, és csak alfanumerikus karaktereket tartalmazhat.', //? ez egy phpBB beli bug? - mindenesetre maradt az eredeti angol szöveg
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'A felhasználónév hosszának %1$d és %2$d karakter között kell lennie, valamint csak alfanumerikus karaktereket, szóközt és -+_[] jeleket tartalmazhat.',
	'USERNAME_ASCII_EXPLAIN'		=> 'A felhasználónév hosszának %1$d és %2$d karakter között kell lennie, valamint csak ASCII karaktereket tartalmazhat, tehát ékezetes betűket és szimbólumokat nem.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'A felhasználónév hosszának %1$d és %2$d karakter között kell lennie, valamint csak betűket és számokat tartalmazhat.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'A felhasználónév hosszának %1$d és %2$d karakter között kell lennie, valamint csak betűket, számokat, szóközt és -+_[] jeleket tartmazhat.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'A hosszának %1$d és %2$d karakter között kell lennie.',
	'USERNAME_TAKEN_USERNAME'		=> 'A megadott felhasználónév már használatban van, kérünk válassz másikat.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'A megadott felhasználónév le lett tiltva vagy nem engedélyezett szót tartalmaz. Kérünk válasszon egy másik nevet.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'A megadott felhasználónévek nem találhatók, vagy még nem aktivált felhsználók.', //?


	'VIEW_AVATARS'				=> 'Avatarok megjelenítése',
	'VIEW_EDIT'					=> 'Megtekintés/szerkesztés',
	'VIEW_FLASH'				=> 'Flash animációk megjelenítése',
	'VIEW_IMAGES'				=> 'Képek megjelenítése a hozzászólásokban',
	'VIEW_NEXT_HISTORY'			=> 'Következő kapcsolódó PÜ', //? kapcsolódó PÜ?
	'VIEW_NEXT_PM'				=> 'Következő PÜ',
	'VIEW_PM'					=> 'Üzenet megtekintése',
	'VIEW_PM_INFO'				=> 'Üzenet adatok',
	'VIEW_PM_MESSAGE'			=> '1 üzenet',
	'VIEW_PM_MESSAGES'			=> '%d üzenet',
	'VIEW_PREVIOUS_HISTORY'		=> 'Előző kapcsolódó PÜ',
	'VIEW_PREVIOUS_PM'			=> 'Előző PÜ',
	'VIEW_SIGS'					=> 'Aláírások megjelenítése',
	'VIEW_SMILIES'				=> 'Emotikonok megjelenítése képként',
	'VIEW_TOPICS_DAYS'			=> 'Témák megjelenítése a következő időszakból', //? kimondom: utálom a 'következőt'
	'VIEW_TOPICS_DIR'			=> 'Témák rendezésének iránya',
	'VIEW_TOPICS_KEY'			=> 'Témák rendezése a következő szerint', //?
	'VIEW_POSTS_DAYS'			=> 'Hozzászólások megjelenítése a következő időszakból', //?
	'VIEW_POSTS_DIR'			=> 'Hozzászólások rendezésének iránya',
	'VIEW_POSTS_KEY'			=> 'Hozzászólások rendezése a következő szerint', //?

	'WATCHED_EXPLAIN'			=> 'Az alábbi lista azokat a fórumokat, illetve témákat tartalmazza, melyekre feliratkozott. Az ezekbe érkező új hozzászólásokról értesítés kap. A leiratkozáshoz jelölje ki a fórumot vagy témát, majd kattintson a <em>Leiratkozás a kijelöltekről</em> gombra.',
	'WATCHED_FORUMS'			=> 'Figyelt fórumok',
	'WATCHED_TOPICS'			=> 'Figyelt témák',
	'WRONG_ACTIVATION'			=> 'A megadott aktivációs kulcs nem egyezik meg az adatbázisban lévővel.',

	'YOUR_DETAILS'				=> 'Fórumbeli aktivitása', //? 'Aktivitásod'??
	'YOUR_FOES'					=> 'Haragosai',
	'YOUR_FOES_EXPLAIN'			=> 'Hogy eltávolítson egy felhasználót, válassza ki, majd kattintson az elküld gombra.', //?
	'YOUR_FRIENDS'				=> 'Barátai',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Hogy eltávolítson egy felhasználót, válassza ki, majd kattintson az elküld gombra.', //?
	'YOUR_WARNINGS'				=> 'Figyelmeztetési szint', //?

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'áthelyezés',
		'MARK_AS_READ'		=> 'megjelölés olvasottként',
		'MARK_AS_IMPORTANT'	=> 'megjelölés fontosként',
		'DELETE_MESSAGE'	=> 'törlés'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Ha a téma',
		'SENDER'	=> 'Ha a küldő',
		'MESSAGE'	=> 'Ha az üzenet tartalma',
		'STATUS'	=> 'Ha az üzenet állapota',
		'TO'		=> 'Ha a címzett'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'hasonlít a következőre:',
		'IS_NOT_LIKE'	=> 'nem hasonlít a következőre:',
		'IS'			=> 'a következő:',
		'IS_NOT'		=> 'nem a következő:',
		'BEGINS_WITH'	=> 'a következővel kezdődik:',
		'ENDS_WITH'		=> 'a következővel végződik:',
		'IS_FRIEND'		=> 'a barátom',
		'IS_FOE'		=> 'a haragosom',
		'IS_USER'		=> 'a következő felhasználó:',
		'IS_GROUP'		=> 'a következő csoport tagja:',
		'ANSWERED'		=> 'megválaszolt',
		'FORWARDED'		=> 'továbbküldött',
		'TO_GROUP'		=> 'az elsődleges csoportom',
		'TO_ME'			=> 'én vagyok'
	),


	'GROUPS_EXPLAIN'	=> 'A csoportok lehetővé teszik az adminisztrátorok számára, hogy könnyebben kezelhessék a felhasználókat. Ön alapból egy meghatározott csoport tagja lesz, ez az elsődleges csoportja. Ez a csoport határozza meg, hogy hogyan jelenik meg más felhasználók számára, például a felhasználóneve színét, az avatarját, a rangját stb. Attól függően, hogy az adminisztrátor engedélyezi-e, megváltoztathatja az elsődleges csoportját. Fel is vehetik egy másik csoportba, vagy lehetőséget biztosíthatnak, hogy csatlakozzon. A csoportokkal plusz jogosultságok is járhatnak.',
	'GROUP_LEADER'		=> 'Vezetőségi tagságok', //?
	'GROUP_MEMBER'		=> 'Tagságok',
	'GROUP_PENDING'		=> 'Függő tagságok',
	'GROUP_NONMEMBER'	=> 'Egyéb csoportok',
	'GROUP_DETAILS'		=> 'Csoport adatok',

	'NO_LEADER'		=> 'Ön egy csoportnak se a vezetője.', //?
	'NO_MEMBER'		=> 'Ön egy csoportnak se a tagja.', //?
	'NO_PENDING'	=> 'Nincs függő csoporttagság.', //?
	'NO_NONMEMBER'	=> 'Nincs olyan csoport, melynek ön nem tagja.', //?
));

?>