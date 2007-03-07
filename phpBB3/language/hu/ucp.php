<?php
/** 
*
* ucp [Hungarian]
*
* @package language
* @version $Id: ucp.php,v 1.11 2007-03-07 21:05:50 fberci Exp $
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Azzal, hogy használod a „%1$s” fórumot (a továbbiakban „mi”, „a fórum”, „%1$s”, „%2$s”) elfogadod, hogy betartod az alábbi feltételeket. Ha nem fogadod el, kérjük ne használd illetve ne is keresd fel a fórumot. A feltételeket bármikor megváltoztathatjuk, és habár a lehető legtöbbett megtesszük, hogy értesítsünk a változásról, érdemes rendszeresen áttekinteni ezt az oldalt, mivel a fórum felhasználási feltételeinek megváltoztatása utáni további használatával beleegyezel az új feltételek betartásába.<br />
	<br />
	A fórumot a phpBB hajtja, mely egy a „<a href="http://www.gnu.org/licenses/gpl.html">General Public License</a>” (a továbbiakban „GPL”) licenc alatt kiadott fórumszoftver, és a <a href="http://www.phpbb.com/">www.phpbb.com</a> weboldalról tölthető le. A phpBB csak lehetőséget nyújt az internet alapú kommunikációra; a GPL licenc egyenesen megtiltja a szoftver készítőinek, hogy meghatározzák milyen tartalmakat, illetve magatartást engedélyeznek. További információért a phpBB-ről kérjük látogasd meg a <a href="http://www.phpbb.com/">http://www.phpbb.com/</a> weboldalt.<br />
	<br />
	Beleegyezel, hogy nem küldesz semmilyen sértegető, obszcén, vulgáris, rágalmazó, gyűlöletkeltő, támadó, közízlést sértő vagy bármely más olyan tartalmat, mely sérti a hazádban, a fórumot kiszolgáló szerver országában érvényben lévő vagy a nemzetközi törvényt. A fentiek megsértése azonnali és végleges kitiltáshoz vezethet az internet szolgáltatód értesítésével együtt, ha ezt szükségesnek tartjuk. Az összes hozzászóláshoz tartozó IP-címet tároljuk a feltételek betartatásának érdekében. Elfogadod, hogy a fórum fenntartóinak jogukban áll eltávolítani, szerkeszteni a hozzászólásaid, vagy lezárni az általad nyitott témákat, amennyiben úgy ítélik meg, hogy ez szükséges. Mint felhasználó, elfogadod, hogy bármely adat, melyet megadsz, tárolásra kerül a fórum adatbázisában. Ezek az információk semmilyen módon nem kerülnek ki egy harmadik félhez, de a fórum fenntartói nem tudnak felelősséget vállalni az adatokért egy esetleges „hacker-támadás” esetén.
	',

	'PRIVACY_POLICY'		=> 'Ezen nyilatkozat írja le, hogy a phpBB és a „%1$s” fórum (a továbbiakban „mi”, „a fórum”, „%1$s”, „%2$s”) üzemeltetői hogyan kezelik a fórum használata közben keletkező információkat.
	<br />
	Ezen információk két módon jönnek létre. Egyrészt automatikusan: azzal, hogy felkeresed a fórumot, a phpBB ún. sütiket generál (kis szöveges állományok, melyeket a böngésződ letölt az ideiglenes állományok könyvtárába). Ezen sütik olyan fontos adatokat tartalmaznak, melyek a fórum használatához feltétlenül szükségesek. Ilyen információt tárol az első két süti: a felhasználói azonosítót, illetve egy névtelen munkamenet azonosítót, amit a rendszer a böngésződhöz rendel. A harmadik süti akkor jön létre, amikor a fórumot böngészed - ebben kerül tárolásra melyik témákat olvastad, így javítva a felhasználói élményt. A „%1$s” oldal böngészése során a phpBB-n kívül más szoftverek is létrehozhatnak sütiket, ezeket azonban nem tárgyalja ez a dokumentum, ugyanis csak a phpBB által generált oldalakkal foglalkozik.
	<br />
	A másik mód, ami tárolásra kerülő információt generál, az maga az interakció: például ha vendégként, vagy regisztrált tagként hozzászólást írsz, vagy regisztrálsz. Ez utóbbi folyamat során meg kell adnod egy egyedien azonosítható nevet („a felhasználói neved”), egy, a belépéshez használt személyes jelszót („a jelszavad”), illetve egy valós e-mail címet („az e-mail címed”). Az általad létrehozott azonosítót azon ország adatvédelmi törvényei védelmezik, melyben a fórum szervere található. A regisztráció során megadott egyéb adatok kötelezősége az adott fórum adminisztrátorainak döntésétől függ. Lehetőséged van rá, hogy megválaszd, milyen információk jelenjenek meg rólad nyilvánosan a profilodban. Ezen felül ki-, illetve bekapcsolhatod a számodra küldött automatikus leveleket.
	<br />
	A jelszavad biztonságosan, egyirányúan kódolva tároljuk. Javasoljuk, hogy teljesen egyedi jelszavat használj! Ezen jelszóval férhetsz hozzá a fórumos azonosítódhoz, így kérjük, gondosan kezeld. Semmilyen körülmények közt ne add ki harmadik személynek, mégha az az oldal üzemeltetője is, vagy ha a phpBB-vel kapcsolatban kérik! Amennyiben elfelejted a jelszavad, használd az "Elfelejtettem a jelszavam" funkciót. A rendszer kérni fogja a felhasználóneved és az e-mail címed, majd generálni fog egy új jelszót, így újra használhatod az azonosítód.
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Az azonosítód aktiválása megtörtént. Köszönjük, hogy regisztráltál.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Az azonosító aktiválása megtörtént.',
	'ACCOUNT_ADDED'					=> 'Köszönjük, hogy regisztráltál, az azonosítód elkészült. Most már beléphetsz a felhasználóneveddel és a jelszavaddal.',
	'ACCOUNT_COPPA'					=> 'Az azonosítód elkészült, azonban jóváhagyásra vár. További információkért kérjük nézd meg az e-mail fiókod.',
	'ACCOUNT_INACTIVE'				=> 'Az azonosítód elkészült, azonban hogy használni tudd, aktiválnod kell. Az aktivációs kulcsot elküldtük az e-mail címedre. További információkért kérjük nézd meg az e-mail fiókod.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Az azonosítód elkészült, azonban hogy használni tudd, az adminisztrátornak aktiválnia kell. Az adminisztrátort értesítettük, amint aktiválja az azonosítód, értesíteni fogunk.', //? szóismétlés
	'ACTIVATION_EMAIL_SENT'			=> 'Az aktivációs e-mail sikeresen elküldésre került az e-mail címedre.',
	'ADD'							=> 'Hozzáad',
	'ADD_BCC'						=> 'Hozzáad [titkos másolat]', //? + titkos másolat
	'ADD_FOES'						=> 'Új ellenségek felvétele', //? kell az új?
	'ADD_FOES_EXPLAIN'				=> 'Több felhasználónevet is megadhatsz külön sorba írva őket.',
	'ADD_FOLDER'					=> 'Mappa hozzáadása',
	'ADD_FRIENDS'					=> 'Új barátok felvétele', //? kell az új?
	'ADD_FRIENDS_EXPLAIN'			=> 'Több felhasználónevet is megadhatsz külön sorba írva őket.',
	'ADD_NEW_RULE'					=> 'Új szűrő létrehozása', //? kell az új?
	'ADD_RULE'						=> 'Szűrő létrehozása',
	'ADD_TO'						=> 'Hozzáad [címzett]', //? + címzett
	'ADMIN_EMAIL'					=> 'Információs e-mailek fogadása adminisztrátoroktól',
	'AGREE'							=> 'Elfogadom a feltételeket',
	'ALLOW_PM'						=> 'Privát üzenetek fogadása felhasználóktól',
	'ALLOW_PM_EXPLAIN'				=> 'Kérjük vedd figyelembe, hogy az adminisztrátorok és a moderátorok mindig fognak tudni küldeni neked privát üzenetet.',
	'ALREADY_ACTIVATED'				=> 'Az azonosítód aktiválása már korábban megtörtént.',
	'ATTACHMENTS_EXPLAIN'			=> 'Ez a lista az ebbe fórumba küldött csatolmányaidat tartalmazza.', //? nem tudom hol szerpel => értelmét se pontosan - "This is a list of attachments you have made in posts to this forum."
	'ATTACHMENTS_DELETED'			=> 'A csatolmányok sikeresen törlésre kerültek.', //? sikeresen törlésrere kerültek??
	'ATTACHMENT_DELETED'			=> 'A csatolmány sikeresen törlésre került.', //? sikeresen törlésre kerültek??
	'AVATAR_CATEGORY'				=> 'Kategória',
	'AVATAR_EXPLAIN'				=> 'Maximális méret: szélesség %1$d pixel, magasság %2$d pixel, állomány mérete %3$d KB.',
	'AVATAR_GALLERY'				=> 'Helyi galéria', //?
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Nem sikerült feltölteni az avatart a következő helyre: %s',
	'AVATAR_PAGE'					=> 'Oldal', //?

	'BACK_TO_DRAFTS'			=> 'Vissza az elmentett piszkozatokhoz',
	'BACK_TO_LOGIN'				=> 'Vissza a belépéshez',
	'BIRTHDAY'					=> 'Születésnap',
	'BIRTHDAY_EXPLAIN'			=> 'Ha megadod a születési éved, a születésnapodkor látszani fog a korod is.',
	'BOARD_DATE_FORMAT'			=> 'Dátum formátum',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'A szintakszis megegyezik a PHP <a href="http://hu.php.net/manual/hu/function.date.php">date()</a> függvényéjével.', //? fogalmazás
	'BOARD_DST'					=> 'Nyári időszámítás érvényben',
	'BOARD_LANGUAGE'			=> 'Nyelv',
	'BOARD_STYLE'				=> 'Megjelenés',
	'BOARD_TIMEZONE'			=> 'Időzóna',
	'BOOKMARKS'					=> 'Kedvencek',
	'BOOKMARKS_EXPLAIN'			=> 'Felvehetsz témákat a kedvenceid közé, hogy aztán később felkeresd őket. Ha törölni szeretnél egy témát a kedvencekből, jelöld be a jelölőnyégyzetét, majd kattints a <em>kijelölt kedvencek törlése</em> gombra.', //? Első mondat második fele kicsit mást jelent: "You can bookmark topics for future reference."
	'BOOKMARKS_DISABLED'		=> 'A kedvencek funkció nem elérhető ezen a fórumon.',
	'BOOKMARKS_REMOVED'			=> 'A megjelölt témák sikeresen törlésre kerültek a kedvencekből.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Már nem szerkesztethed vagy törölheted az üzenetet.', //? az üzenet = that message
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Az üzenetek nem helyezhetők át abba a mappába, amelyet épp törölni szeretnél.',
	'CANNOT_RENAME_FOLDER'		=> 'Ez a mappa nem átnevezhető.',
	'CANNOT_REMOVE_FOLDER'		=> 'Ez a mappa nem áthelyezhető.',
	'CHANGE_DEFAULT_GROUP'		=> 'Elsődleges csoport megváltoztatása',
	'CHANGE_PASSWORD'			=> 'Jelszó megváltoztatása',
	'CLICK_RETURN_FOLDER'		=> '%1$sVissza a „%3$s” mappához%2$s',
	'CONFIRMATION'				=> 'Regisztráció megerősítése',
	'CONFIRM_CHANGES'			=> 'Változtatások megerősítése',	
	'CONFIRM_EMAIL'				=> 'E-mail cím megerősítése',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Csak akkor kell megadnod, ha meg szeretnéd változtatni az e-mail címed.',
	'CONFIRM_EXPLAIN'			=> 'A robot regisztrációk megakadályozása érdekében, meg kell adnod egy megerősítő kódot. A kód az alábbi képen szerepel. Ha látási vagy egyéb problémák miatt nem tudod elolvasni a kódot, lépj kapcsolatba az %sfórum adminisztrátorával%s.',
	'CONFIRM_PASSWORD'			=> 'Jelszó megerősítése',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Csak akkor kell megadnod, ha meg szeretnéd változtatni a jelszavad.',
	'COPPA_BIRTHDAY'			=> 'A regisztráció folytatásához kérjük add meg, mikor születtél.',
	'COPPA_COMPLIANCE'			=> 'COPPA egyeztetés', //?? complience - mondjuk úgyse hasznája senki :)
	'COPPA_EXPLAIN'				=> 'Kérjük vedd figyelembe, hogy az elküld gombra kattintva elkészül az azonosítód, azonban addig nem lesz aktiválva, míg egy szülőd vagy gondviselőd jóvá nem hagyja a regisztrációd. E-mailben elküldjük a megfelelő űrlapot, illetve, hogy hova küldd vissza.',
	'CREATE_FOLDER'				=> 'Mappa létrehozása…',
	'CURRENT_IMAGE'				=> 'Jelenlegi kép',
	'CURRENT_PASSWORD'			=> 'Jelenlegi jelszó',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Meg kell adnod a jelenlegi jelszavad, ha meg szeretnéd változtatni a jelszavad, az e-mail címed vagy a felhasználóneved.',
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
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Biztosan törölni akarod ezt a csatolmányt?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Biztosan törölni akarod ezeket a csatolmányokat?',
	'DELETE_AVATAR'				=> 'Kép törlése',
	'DELETE_COOKIES_CONFIRM'	=> 'Biztosan törölni akarod a fórum által létrehozott sütiket?', //? beállított, készített, küldött
	'DELETE_MARKED_PM'			=> 'Kijelölt üzenetek törlése',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Biztosan törölni akarod az összes kijelölt üzenetet?',
	'DELETE_OLDEST_MESSAGES'	=> 'Legrégebbi üzenetek törlése',
	'DELETE_MESSAGE'			=> 'Üzenet törlése',
	'DELETE_MESSAGE_CONFIRM'	=> 'Biztosan törölni akarod ezt a privát üzenetet?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'A törölt mappában lévő összes üzenet törlése', //? kisbetű (van egy és előtte, de távol)?
	'DELETE_RULE'				=> 'Szűrő törlése',
	'DELETE_RULE_CONFIRM'		=> 'Biztosan törölni akarod ezt a szűrőt?',
	'DEMOTE_SELECTED'			=> 'Visszalépés a kijelöltekben', //?? = lemond a csoportvezetőségről
	'DISABLE_CENSORS'			=> 'Szavak cenzúrázásának bekapcsolása',
	'DISPLAY_GALLERY'			=> 'Galéria megjelenítése',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'A megadott e-mail domainhez nem tartozik érvényes MX bejegyzés.', //? érvényes? "valid" - valós, létező?
	'DOWNLOADS'					=> 'Letöltések száma', //? remélem csak ilyen értelemben használják...
	'DRAFTS_DELETED'			=> 'Az összes piszkozat sikeresen törlésre került.',
	'DRAFTS_EXPLAIN'			=> 'Itt megtekintheted, szerkesztheted és törölheted az elmentett piszkozataidat.',
	'DRAFT_UPDATED'				=> 'A piszkozat sikeresen frissítésre került.', //? "Draft successfully updated."

	'EDIT_DRAFT_EXPLAIN'		=> 'Itt szerkesztheted a piszkozatodat. A piszkozatokhoz nem kapcsolható csatolmány, illetve szavazás.', //? "Here you are able to edit your draft. Drafts do not contain attachment and poll information." - ' A piszkozatok nem tartalmaznak csatolmányokat, illetve szavazási információkat.'
	'EMAIL_BANNED_EMAIL'		=> 'A megadott e-mail cím használata nem engedélyezett.',
	'EMAIL_INVALID_EMAIL'		=> 'A megadott e-mail cím hibás.',
	'EMAIL_REMIND'				=> 'Az az e-mail cím, melyet a regisztrációkor megadtál.',
	'EMAIL_TAKEN_EMAIL'			=> 'A megadott e-mail cím már használatban van.', //? "is already in use" - 'már használja valaki' - valaki..., valószínűleg ő maga
	'EMPTY_DRAFT'				=> 'Az üzenet nem lehet üres.',
	'EMPTY_DRAFT_TITLE'			=> 'Meg kell adnod az üzenet témáját.',
	'EXPORT_AS_XML'				=> 'Kimentés XML-ként', //? 'Kimentés x-ként'
	'EXPORT_AS_CSV'				=> 'Kimentés CSV-ként',
	'EXPORT_AS_CSV_EXCEL'		=> 'Kimentés CSV-ként (Excel)',
	'EXPORT_AS_TXT'				=> 'Kimentés TXT-ként',
	'EXPORT_AS_MSG'				=> 'Kimentés MSG-ként',
	'EXPORT_FOLDER'				=> 'Mappa kimentése',

	'FIELD_REQUIRED'					=> 'A „%s” mezőt nem hagyhatod üresen.',
	'FIELD_TOO_SHORT'					=> 'A „%1$s” mező tartalma túl rövid, legalább %2$d karakter hosszúnak kell lennie.',
	'FIELD_TOO_LONG'					=> 'A „%1$s” mező tartalma túl hosszú, legfeljebb %2$d karakter engedélyezett.',
	'FIELD_TOO_SMALL'					=> 'A „%1$s” mező értéke túl kicsi, legalább %2$d-nek kell lennie.',
	'FIELD_TOO_LARGE'					=> 'A „%1$s” mező értéke túl nagy, legfeljebb %2$d engedélyezett.', //? kell lennie? - nyelvtan
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'A „%1$s” mező hibás karaktereket tartalmaz, csak számok engedélyezettek.', //? hibás (invalid)?
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'A „%1$s” mező hibás karaktereket tartalmaz, csak alfanumerikus karakterek használata engedélyezett.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'A „%1$s” mező hibás karaktereket tartalmaz, csak alfanumerikus karakterek, szóköz és a -+_[] jel használata engedélyezett.', //? 'jelek'? jelek elválasztása?
	'FIELD_INVALID_DATE'				=> 'A „%1$s” mező érvénytelen dátumot tartalmaz.',

	'FOE_MESSAGE'				=> 'Üzenet ellenségtől',
	'FOES_EXPLAIN'				=> 'Az ellenségek olyan felhasználók, akik alapból mellőzésre kerülnek. A hozzászólásaik nem teljesen jelennek meg, és nem küldhetnek neked privát üzenetet. Kérjük vedd figyelembe, hogy nem mellőzhetsz egy moderátort vagy egy adminisztrátort.', //? mellőzésre kerülnek :)
	'FOES_UPDATED'				=> 'Az ellenségeid listája sikeresen frissítésre került.',
	'FOLDER_ADDED'				=> 'A mappa sikeresen hozzáadásra került.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d / %2$d üzenet', //? "%1$d from %2$d messages stored" - gondolom mennyire van tele
	'FOLDER_NAME_EXIST'			=> 'A <strong>%s</strong> már létezik.',
	'FOLDER_OPTIONS'			=> 'Mappa beállítások',
	'FOLDER_RENAMED'			=> 'A mappa sikeresen átnevezésre került.',
	'FOLDER_REMOVED'			=> 'A mappa sikeresen törlésre került.',
	'FOLDER_STATUS_MSG'			=> 'A %1$d%% mappa megtelt (%2$d / %3$d üzenet)', //? 'tele van'?
	'FORWARD_PM'				=> 'PÜ továbbítása',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Mielőtt továbbléphetnél a fórumon, meg kell változtatnod a jelszavad. ',
	'FRIEND_MESSAGE'			=> 'Üzenet baráttól',
	'FRIENDS'					=> 'Barátok',
	'FRIENDS_EXPLAIN'			=> 'A barátok funkció segítségével könnyen elérheted azokat a felhasználókat, akikkel gyakran lépsz kapcsolatba.Ha a sablon támogatja, a barátok hozzászólásai kiemelve szerepelhetnek.', //? hozzáférhetsz...
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'A barátaid listája sikeresen frissítésre került.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Az egy mappa megtelése esetén végrehajtandó műveletet sikeresen megváltoztatásra került.', //? Nem teljesen ugyanaz, mint ami a magyarázatban van...
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Eredeti üzenet --------',
	'FWD_SUBJECT'				=> 'Téma: %s',
	'FWD_DATE'					=> 'Dátum: %s',
	'FWD_FROM'					=> 'Feladó: %s',
	'FWD_TO'					=> 'Címzett: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Globális közlemény', //? Általános?

	'HIDE_ONLINE'				=> 'Jelenlét elrejtése',
	'HOLD_NEW_MESSAGES'			=> 'Üzenetek fogadásának visszautasítása (az új üzenetek vissza lesznek tartva, amíg elegnedő hely nem lesz)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Új üzenetek visszatartása',

	'IF_FOLDER_FULL'			=> 'Mappa megtelése esetén',
	'IMPORTANT_NEWS'			=> 'Fontos közlemények',
	'INVALID_CHARS_USERNAME'	=> 'A felhasználónév nem engedélyezett karakterket tartalmaz.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'A jelszó nem tartalmazza a szükséges karaktereket.',
	'ITEMS_REQUIRED'			=> 'A *-gal megjelölt mezők kitöltése kötelező.',

	'JOIN_SELECTED'				=> 'Csatlakozás a kijelöltekhez',

	'LANGUAGE'					=> 'Nyelv',
	'LINK_REMOTE_AVATAR'		=> 'Linkelés az oldalon kívülről',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Add meg a linkelendő avatar kép URL-jét (webcímét).', //? "Enter the URL of the location containing the avatar image you wish to link to."
	'LINK_REMOTE_SIZE'			=> 'Avatar mérete',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Add meg az avatar szélességét és magasságát, vagy hagyd üresen a mezőket, hogy ezeket a fórum automatikusan próbálja meg megállapítani.',
	'LOGIN_EXPLAIN_UCP'			=> 'A felhasználói vezérlőpult megtekintéséhez be kell jelentkezned.',
	'LOGIN_REDIRECT'			=> 'Sikeresen beléptél.',
	'LOGOUT_REDIRECT'			=> 'Sikeresen kiléptél.',

	'MARK_IMPORTANT'				=> 'Megjelölés fontosként',
	'MARKED_MESSAGE'				=> 'Fontosként megjelölt üzenet', //?
	'MAX_FOLDER_REACHED'			=> 'Elérted a maximálisan létrehozható felhasználói mappák limitjét.',
	'MESSAGE_BY_AUTHOR'				=> 'Feladó:', //? ha jól néztem, sehol nem használják
	'MESSAGE_COLOURS'				=> 'Üzenet jelölések', //? "Message colours"
	'MESSAGE_DELETED'				=> 'Az üzenet sikeresen törlésre került',
	'MESSAGE_HISTORY'				=> 'Előzmények',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Ezt az üzenetet a feladója törölte, mielőtt megérkezett volna.',
	'MESSAGE_SENT_ON'				=> 'Dátum:', //?
	'MESSAGE_STORED'				=> 'Az üzenet sikeresen elküldésre került.',
	'MESSAGE_TO'					=> 'Címzett',
	'MESSAGES_DELETED'				=> 'Az üzenet sikeresen törlésre került.',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Töröltmappabeli üzenetek áthelyezése:',
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
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'A vendég felhasználót nem adhatod veheted fel a barátaid listájára.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Nem vehetsz fel a barátaid listájára olyan felhaszálókat, akik ellenségként jelöltél meg.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Nem veheted fel saját magad a barátaid listájára.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Nem vehetesz fel adminisztárotokat és moderátorokat az ellenségeid listájára.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Nem veheted fel a vendég felhasználót az ellenségeid listájára.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Nem vehetsz fel az ellenségeid listájára olyan felhaszálókat, akiket már felvettél a barátaid listájára.',
	'NOT_ADDED_FOES_SELF'			=> 'Nem veheted fel saját magad az ellenségeid listájára.',
	'NOT_AGREE'						=> 'Nem fogadom el a feltételeket',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'A célmappa („%s”) teli van. A végrehajtani kívánt művelet nem került elvégzésre.',
	'NOT_MOVED_MESSAGE'				=> 'Teli mappa miatt jelenleg 1 privát üzenet van visszatartva.', //?
	'NOT_MOVED_MESSAGES'			=> 'Teli mappa miatt jelenleg %d privát üzenet van visszatartva.',
	'NO_ACTION_MODE'				=> 'Nem adtál meg semmilyen teendőt.',
	'NO_AUTHOR'						=> 'Az üzenethez nem tartozik feladó.', //? "No author defined for this message"
	'NO_AVATAR_CATEGORY'			=> 'Nincs',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Nincs jogosultságod privát üzenetek törléséhez.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Nincs jogosultságod privát üzenetek szerkesztéséhez.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Nincs jogosultságod privát üzenetek továbbításához.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Nincs jogosultságod privát üzenet küldéséhez csoportok részére.',
	'NO_AUTH_READ_MESSAGE'			=> 'Nincs jogosultságod privát üzenetek megtekintéséhez.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Ezt az üzenetet nem tudod elolvasni, mivel a küldője törölte.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Nincs jogosultságod privát üzenetek küldéséhez.',
	'NO_AUTH_SIGNATURE'				=> 'Nincs jogosultságod aláírás megadásához.',

	'NO_BCC_RECIPIENT'			=> 'Nincs',
	'NO_BOOKMARKS'				=> 'Nincsenek kedvenceid.',
	'NO_BOOKMARKS_SELECTED'		=> 'Nem választottál ki egy kedvencet sem.',
	'NO_EMAIL_USER'				=> 'Nem található a megadott e-mail címhez és felhasználónévhez tartozó azonosító.',
	'NO_FOES'					=> 'Jelenleg üres az ellenségeid listája.', //? "No foes currently defined" - ide valami az eredetire jobban hasonlító szöveg kéne
	'NO_FRIENDS'				=> 'Jelenleg üres a barátaid listája.',
	'NO_FRIENDS_OFFLINE'		=> 'Nincs offline barátod.',
	'NO_FRIENDS_ONLINE'			=> 'Nincs online barátod.',
	'NO_GROUP_SELECTED'			=> 'Nem adtál meg csoportot.',
	'NO_IMPORTANT_NEWS'			=> 'Jelenleg nincs fontos közlemény.',
	'NO_MESSAGE'				=> 'A privát üzenet nem található.',
	'NO_NEW_FOLDER_NAME'		=> 'Meg kell adnod a mappa új nevét.',
	'NO_NEWER_PM'				=> 'Nincsenek újabb üzenetek.',
	'NO_OLDER_PM'				=> 'Nincsenek régebbi üzenetek.',
	'NO_RECIPIENT'				=> 'Nem adtál meg címzettet.',
	'NO_RULES_DEFINED'			=> 'Nincsenek szűrők.',
	'NO_SAVED_DRAFTS'			=> 'Nincsenek piszkozatok.',
	'NO_TO_RECIPIENT'			=> 'Nincs',
	'NO_WATCHED_FORUMS'			=> 'Nem iratkoztál fel egy fórumra se.', //? a se-s megfogalmazás helyett valami más ékne
	'NO_WATCHED_TOPICS'			=> 'Nem iratkoztál fel egy témára se.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Password must be between %1$d and %2$d chars long and must contain alphanumerics',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Must be between %1$d and %2$d characters.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Password must be between %1$d and %2$d chars long and must be mixed case',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Password must be between %1$d and %2$d chars long and must contain symbols',
	'PASSWORD'					=> 'Password',
	'PASSWORD_ACTIVATED'		=> 'Your new password has been activated',
	'PASSWORD_UPDATED'			=> 'Your password has been sent successfully to your original email address.',
	'PERMISSIONS_RESTORED'		=> 'Successfully restored original permissions.',
	'PERMISSIONS_TRANSFERRED'	=> 'Successfully transferred permissions from <strong>%s</strong>, you are now able to browse the forum with the users permissions.<br />Please note that admin permissions were not transferred. You are able to revert to your permission set at any time.',
	'PM_DISABLED'				=> 'Private messaging has been disabled on this board',
	'PM_FROM'					=> 'From',
	'PM_FROM_REMOVED_AUTHOR'	=> 'This message was sent by a user no longer registered.',
	'PM_ICON'					=> 'PM icon',
	'PM_INBOX'					=> 'Inbox',
	'PM_OUTBOX'					=> 'Outbox',
	'PM_SENTBOX'				=> 'Sent messages',
	'PM_SUBJECT'				=> 'Message subject',
	'PM_TO'						=> 'Send to',
	'POPUP_ON_PM'				=> 'Pop up window on new private message',
	'POST_EDIT_PM'				=> 'Edit message',
	'POST_FORWARD_PM'			=> 'Forward message',
	'POST_NEW_PM'				=> 'Post message',
	'POST_PM_LOCKED'			=> 'Private messaging is locked',
	'POST_PM_POST'				=> 'Quote post',
	'POST_QUOTE_PM'				=> 'Quote message',
	'POST_REPLY_PM'				=> 'Reply to message',
	'PRINT_PM'					=> 'Print view',
	'PREFERENCES_UPDATED'		=> 'Your preferences have been updated.',
	'PROFILE_INFO_NOTICE'		=> 'Please note that this information will be viewable to other members. Be careful when including any personal details. Any fields marked with a * must be completed.',
	'PROFILE_UPDATED'			=> 'Your profile has been updated.',

	'RECIPIENT'							=> 'Recipient',
	'RECIPIENTS'						=> 'Recipients',
	'REGISTRATION'						=> 'Registration',
	'RELATIVE_DAYS'						=> 'Relative days',
	'RELEASE_MESSAGES'					=> '%sRelease all on-hold messages%s… they will be re-sorted into the appropriate folder if enough space is made available.',
	'REMOVE_ADDRESS'					=> 'Remove address',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Remove selected bookmarks',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Are you sure you want to delete all selected bookmarks?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Remove marked bookmarks',
	'REMOVE_FOLDER'						=> 'Remove folder',
	'REMOVE_FOLDER_CONFIRM'				=> 'Are you sure you want to remove this folder?',
	'RENAME'							=> 'Rename',
	'RENAME_FOLDER'						=> 'Rename folder',
	'REPLIED_MESSAGE'					=> 'Replied to message',
	'RESIGN_SELECTED'					=> 'Resign selected',
	'RETURN_FOLDER'						=> '%1$sReturn to previous folder%2$s',
	'RETURN_UCP'						=> '%sReturn to the User Control Panel%s',
	'RULE_ADDED'						=> 'Rule successfully added',
	'RULE_ALREADY_DEFINED'				=> 'This rule was defined previously',
	'RULE_DELETED'						=> 'Rule successfully removed',
	'RULE_NOT_DEFINED'					=> 'Rule not correctly specified',
	'RULE_REMOVED_MESSAGE'				=> 'One private message had been removed due to private message filters.',
	'RULE_REMOVED_MESSAGES'				=> '%d private messages were removed due to private message filters.',

	'SAME_PASSWORD_ERROR'		=> 'The new password you entered is the same as your current password',
	'SEARCH_YOUR_POSTS'			=> 'Show your posts',
	'SEND_PASSWORD'				=> 'Send password',
	'SENT_AT'					=> 'Sent at',
	'SHOW_EMAIL'				=> 'Users can contact me by email',
	'SIGNATURE_EXPLAIN'			=> 'This is a block of text that can be added to posts you make. There is a %d character limit',
	'SIGNATURE_PREVIEW'			=> 'Your signature will appear like this in posts',
	'SIGNATURE_TOO_LONG'		=> 'Your signature is too long.',
	'SORT'						=> 'Sort',
	'SORT_COMMENT'				=> 'File comment',
	'SORT_DOWNLOADS'			=> 'Downloads',
	'SORT_EXTENSION'			=> 'Extension',
	'SORT_FILENAME'				=> 'Filename',
	'SORT_POST_TIME'			=> 'Post time',
	'SORT_SIZE'					=> 'Filesize',

	'TIMEZONE'					=> 'Timezone',
	'TO'						=> 'To',
	'TOO_MANY_RECIPIENTS'		=> 'Too many recipients',
	'TOO_MANY_REGISTERS'		=> 'You have exceeded the maximum number of registration attempts for this session. Please try again later.',

	'UCP'						=> 'User Control Panel',
	'UCP_ACTIVATE'				=> 'Activate account',
	'UCP_ADMIN_ACTIVATE'		=> 'Please note that you will need to enter a valid email address before your account is activated. The administrator will review your account and if approved you will receive an email at the address you specified.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Attachments',
	'UCP_COPPA_BEFORE'			=> 'Before %s',
	'UCP_COPPA_ON_AFTER'		=> 'On or after %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Please note that you will need to enter a valid email address before your account is activated. You will receive an email at the address you provide that contains an account activation link.',
	'UCP_ICQ'					=> 'ICQ number',
	'UCP_JABBER'				=> 'Jabber address',

	'UCP_MAIN'					=> 'Overview',
	'UCP_MAIN_ATTACHMENTS'		=> 'Manage attachments',
	'UCP_MAIN_BOOKMARKS'		=> 'Manage bookmarks',
	'UCP_MAIN_DRAFTS'			=> 'Manage drafts',
	'UCP_MAIN_FRONT'			=> 'Front page',
	'UCP_MAIN_SUBSCRIBED'		=> 'Manage subscriptions',

	'UCP_MSNM'					=> 'MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'You have posted no files',

	'UCP_PREFS'					=> 'Forum preferences',
	'UCP_PREFS_PERSONAL'		=> 'Edit global settings',
	'UCP_PREFS_POST'			=> 'Edit posting defaults',
	'UCP_PREFS_VIEW'			=> 'Edit display options',
	
	'UCP_PM'					=> 'Private messages',
	'UCP_PM_COMPOSE'			=> 'Compose message',
	'UCP_PM_DRAFTS'				=> 'Manage PM drafts',
	'UCP_PM_OPTIONS'			=> 'Edit options',
	'UCP_PM_POPUP'				=> 'Private messages',
	'UCP_PM_POPUP_TITLE'		=> 'Private message popup',
	'UCP_PM_UNREAD'				=> 'Unread messages',
	'UCP_PM_VIEW'				=> 'View messages',

	'UCP_PROFILE'				=> 'Profile',
	'UCP_PROFILE_AVATAR'		=> 'Edit avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Edit profile',
	'UCP_PROFILE_REG_DETAILS'	=> 'Edit account settings',
	'UCP_PROFILE_SIGNATURE'		=> 'Edit signature',

	'UCP_USERGROUPS'			=> 'Usergroups',
	'UCP_USERGROUPS_MEMBER'		=> 'Edit memberships',
	'UCP_USERGROUPS_MANAGE'		=> 'Manage groups',

	'UCP_REGISTER_DISABLE'			=> 'Creating a new account is currently not possible.',
	'UCP_REMIND'					=> 'Send password',
	'UCP_RESEND'					=> 'Send activation email',
	'UCP_WELCOME'					=> 'Welcome to the User Control Panel. From here you can monitor, view and update your profile, preferences, subscribed forums and topics. You can also send messages to other users (if permitted). Please ensure you read any announcements before continuing.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Friends &amp; Foes',
	'UCP_ZEBRA_FOES'				=> 'Manage foes',
	'UCP_ZEBRA_FRIENDS'				=> 'Manage friends',
	'UNKNOWN_FOLDER'				=> 'Unknown folder',
	'UNWATCH_MARKED'				=> 'Unwatch marked',
	'UPLOAD_AVATAR_FILE'			=> 'Upload from your machine',
	'UPLOAD_AVATAR_URL'				=> 'Upload from a URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Enter the URL of the location containing the image, it will be copied to this site.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Username must be between %1$d and %2$d chars long and use only alphanumeric characters',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Username must be between %1$d and %2$d chars long and use alphanumeric, space or -+_[] characters.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Username must be between %1$d and %2$d chars long and use only ASCII characters, so no special symbols',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Username must be between %1$d and %2$d chars long and use only letter or number characters',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Username must be between %1$d and %2$d chars long and use letter, number, space or -+_[] characters.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Length must be between %1$d and %2$d characters.',
	'USERNAME_TAKEN_USERNAME'		=> 'The username you entered is already in use, please select an alternative.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'The username you entered has been banned.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'The usernames you specified could either not be found or are not activated users.',

	'VIEW_AVATARS'				=> 'Display avatars',
	'VIEW_EDIT'					=> 'View/Edit',
	'VIEW_FLASH'				=> 'Display Flash animations',
	'VIEW_IMAGES'				=> 'Display images within posts',
	'VIEW_NEXT_HISTORY'			=> 'Next PM in history',
	'VIEW_NEXT_PM'				=> 'Next PM',
	'VIEW_PM'					=> 'View message',
	'VIEW_PM_INFO'				=> 'Message details',
	'VIEW_PM_MESSAGE'			=> '1 message',
	'VIEW_PM_MESSAGES'			=> '%d messages',
	'VIEW_PREVIOUS_HISTORY'		=> 'Previous PM in history',
	'VIEW_PREVIOUS_PM'			=> 'Previous PM',
	'VIEW_SIGS'					=> 'Display signatures',
	'VIEW_SMILIES'				=> 'Display smilies as images',
	'VIEW_TOPICS_DAYS'			=> 'Display topics from previous days',
	'VIEW_TOPICS_DIR'			=> 'Display topic order direction',
	'VIEW_TOPICS_KEY'			=> 'Display topics ordering by',
	'VIEW_POSTS_DAYS'			=> 'Display posts from previous days',
	'VIEW_POSTS_DIR'			=> 'Display post order direction',
	'VIEW_POSTS_KEY'			=> 'Display posts ordering by',

	'WATCHED_EXPLAIN'			=> 'Below is a list of forums and topics you are subscribed to. You will be notified of new posts in either. To unsubscribe mark the forum or topic and then press the <em>Unwatch marked</em> button.',
	'WATCHED_FORUMS'			=> 'Watched forums',
	'WATCHED_TOPICS'			=> 'Watched topics',
	'WRONG_ACTIVATION'			=> 'The activation key you supplied does not match any in the database',

	'YOUR_DETAILS'				=> 'Your activity',
	'YOUR_FOES'					=> 'Your foes',
	'YOUR_FOES_EXPLAIN'			=> 'To remove usernames select them and click submit',
	'YOUR_FRIENDS'				=> 'Your friends',
	'YOUR_FRIENDS_EXPLAIN'		=> 'To remove usernames select them and click submit',
	'YOUR_WARNINGS'				=> 'Your warning level',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Place into folder',
		'MARK_AS_READ'		=> 'Mark as read',
		'MARK_AS_IMPORTANT'	=> 'Mark message',
		'DELETE_MESSAGE'	=> 'Delete message'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Subject',
		'SENDER'	=> 'Sender',
		'MESSAGE'	=> 'Message',
		'STATUS'	=> 'Message status',
		'TO'		=> 'Sent To'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'is like',
		'IS_NOT_LIKE'	=> 'is not like',
		'IS'			=> 'is',
		'IS_NOT'		=> 'is not',
		'BEGINS_WITH'	=> 'begins with',
		'ENDS_WITH'		=> 'ends with',
		'IS_FRIEND'		=> 'is friend',
		'IS_FOE'		=> 'is foe',
		'IS_USER'		=> 'is user',
		'IS_GROUP'		=> 'is in usergroup',
		'ANSWERED'		=> 'answered',
		'FORWARDED'		=> 'forwarded',
		'TO_GROUP'		=> 'to my default usergroup',
		'TO_ME'			=> 'to me'
	),


	'GROUPS_EXPLAIN'	=> 'Usergroups enable board admins to better administer users. By default you will be placed in a specific group, this is your default group. This group defines how you may appear to other users, for example your username colouration, avatar, rank, etc. Depending on whether the administrator allows it you may be allowed to change your default group. You may also be placed in or allowed to join other groups. Some groups may give you extra rights to view content or increase your capabilities in other areas.',
	'GROUP_LEADER'		=> 'Leaderships',
	'GROUP_MEMBER'		=> 'Memberships',
	'GROUP_PENDING'		=> 'Pending memberships',
	'GROUP_NONMEMBER'	=> 'Non-memberships',
	'GROUP_DETAILS'		=> 'Group details',

	'NO_LEADER'		=> 'No group leaderships',
	'NO_MEMBER'		=> 'No group memberships',
	'NO_PENDING'	=> 'No pending memberships',
	'NO_NONMEMBER'	=> 'No non-member groups',
));

?>