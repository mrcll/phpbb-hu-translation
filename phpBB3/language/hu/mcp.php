<?php
/** 
*
* mcp [Hungarian]
*
* @package language
* @version $Id: mcp.php,v 1.16 2007-06-01 14:21:20 fberci Exp $
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

$lang = array_merge($lang, array(
	'ACTION'				=> 'Művelet', //?
	'ACTION_NOTE'			=> 'Művelet/megjegyzés', //???
	'ADD_FEEDBACK'			=> 'Feljegyzés hozzáadása', //? fejlegyzés? hozzáadás?
	'ADD_FEEDBACK_EXPLAIN'	=> 'Ha hozzá szeretnél adni egy feljegyzést, töltsd ki az alábbi űrlapot. Csak sima szöveget írj, HTML, BBCode stb. nem engedélyezett.', //?? "If you would like to add a report on this please fill out the following form. Only use plain text; HTML, BBCode, etc. are not permitted."
	'ADD_WARNING'			=> 'Felhasználó figyelmeztetése', //? 'Figyelmeztetés', 'Figyelmeztetés hozzáadása'
	'ADD_WARNING_EXPLAIN'	=> 'Ha figyelmezetetni szeretnéd ezt a felhasználót, töltsd ki az alábbi űrlapot. Csak sima szöveget írj, HTML, BBCode stb. nem engedélyezett.',
	'ALL_ENTRIES'			=> 'Összes bejegyzés', //?
	'ALL_NOTES_DELETED'		=> 'Az összes felhasználói megjegyzés sikeresen törlésre került.', //? "Successfully removed all user notes"
	'ALL_REPORTS'			=> 'Összes jelentés',
	'ALREADY_REPORTED'		=> 'A hozzászólás már jelentették.',
	'ALREADY_WARNED'		=> 'Egy figyelmeztetés már kiosztásra került ennek a hozzászólásnak kapcsán.', //? kiosztás? "A warning has already been issued for this post"
	'APPROVE'				=> 'Jóváhagyás',
	'APPROVE_POST'			=> 'Hozzászólás jóváhagyása',
	'APPROVE_POST_CONFIRM'	=> 'Biztosan jóvá akarod hagyni a kiválasztott hozzászólást?',
	'APPROVE_POSTS'			=> 'Hozzászólások jóváhagyása',
	'APPROVE_POSTS_CONFIRM'	=> 'Biztosan jóvá akarod hagyni a kiválasztott hozzászólásokat?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Egy témát nem helyezhetsz át abba a fórumba, amiben jelenleg van.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Nem tudod figyelmeztetni a nem regisztrált (vendég) felhasználókat.',
	'CANNOT_WARN_SELF'		=> 'Nem figyelmeztetheted saját magad.',
	'CAN_LEAVE_BLANK'		=> 'Ez üresen hagyható.',
	'CHANGE_POSTER'			=> 'Küldő megváltoztatása',
	'CLOSE_REPORT'			=> 'Jelentés lezárása',
	'CLOSE_REPORT_CONFIRM'	=> 'Biztosan le akarod zárni a kiválasztott jelentést?',
	'CLOSE_REPORTS'			=> 'Jelentések lezárása',
	'CLOSE_REPORTS_CONFIRM'	=> 'Biztosan le akarod zárni a kiválasztott jelentéseket?',

	'DELETE_POSTS'				=> 'Hozzászólások törlése',
	'DELETE_POSTS_CONFIRM'		=> 'Biztosan törölni akarod ezeket a hozzászólásokat?',
	'DELETE_POST_CONFIRM'		=> 'Biztosan törölni akarod ezt a hozzászólást?',
	'DELETE_REPORT'				=> 'Jelentés törlése',
	'DELETE_REPORT_CONFIRM'		=> 'Biztosan törölni akarod a kiválasztott jelentést?',
	'DELETE_REPORTS'			=> 'Jelentések törlése',
	'DELETE_REPORTS_CONFIRM'	=> 'Biztosan törölni akarod a kiválasztott jelentéseket?',
	'DELETE_SHADOW_TOPIC'		=> 'Árnyék téma törlése',
	'DELETE_TOPICS'				=> 'Kiválasztott témák törlése',
	'DELETE_TOPICS_CONFIRM'		=> 'Biztosan törölni akarod ezeket a témákat?',
	'DELETE_TOPIC_CONFIRM'		=> 'Biztosan törölni akarod ezt a témát?',
	'DISAPPROVE'				=> 'Elutasítás', //?
	'DISAPPROVE_REASON'			=> 'Elutasítás oka',
	'DISAPPROVE_POST'			=> 'Hozzászólás elutasítása',
	'DISAPPROVE_POST_CONFIRM'	=> 'Biztosan el akarod utasítani ezt a hozzászólást?',
	'DISAPPROVE_POSTS'			=> 'Hozzászólások elutasítása',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Biztosan el akarod utasítani a kiválasztott hozzászólásokat?',
	'DISPLAY_LOG'				=> 'Bejegyzések megjelenítése',
	'DISPLAY_OPTIONS'			=> 'Megjelenítés beállítások', //??

	'EMPTY_REPORT'					=> 'Ezen ok kiválasztásánál nem hagyatod üresen a leírást.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Egy vagy több téma törlésre került az adatbázisból, mivel üressé vált.', //? Eredetileg please note van, de ez eg üzenet

	'FEEDBACK'				=> 'Feljegyzések', //?
	'FORK'					=> 'Másolás',
	'FORK_TOPIC'			=> 'Téma másolása',
	'FORK_TOPIC_CONFIRM'	=> 'Biztosan meg akarod kettőzni ezt a témát?', //? eredetileg másolni (copy)
	'FORK_TOPICS'			=> 'Kiválasztott témák másolása',
	'FORK_TOPICS_CONFIRM'	=> 'Biztosan meg akarod kettőzni a kiválasztott témákat?',
	'FORUM_DESC'			=> 'Leírás',
	'FORUM_NAME'			=> 'Fórum neve', //? cím?
	'FORUM_NOT_EXIST'		=> 'A kiválasztott fórum nem létezik.',
	'FORUM_NOT_POSTABLE'	=> 'A kiválasztott fórumba nem lehet hozzászólást küldeni.',
	'FORUM_STATUS'			=> 'Fórum állapta', //?
	'FORUM_STYLE'			=> 'Fórum megjelenése', //?

	'GLOBAL_ANNOUNCEMENT'	=> 'Globális közlemény',

	'IP_INFO'				=> 'IP-cím adatok',
	'IPS_POSTED_FROM'		=> 'Felhasználó IP-címei, melyekről hozzászólást küldött', //?

	'LATEST_LOGS'				=> 'Legutóbbi 5 naplózott művelet', //? "Latest 5 logged actions" naplózott-feljegyzett?
	'LATEST_REPORTED'			=> 'Legutóbbi 5 jelentés',
	'LATEST_UNAPPROVED'			=> 'Legutóbbi 5 jóváhagyásra váró hozzászólás',
	'LATEST_WARNING_TIME'		=> 'Legutóbbi figyelmeztetések',
	'LATEST_WARNINGS'			=> 'Legutóbbi 5 figyelmeztetés',
	'LEAVE_SHADOW'				=> 'Árnyék téma hagyása a régi fórumban',
	'LIST_REPORT'				=> '1 jelentés',
	'LIST_REPORTS'				=> '%d jelentés',
	'LOCK'						=> 'Lezárás',
	'LOCK_POST_POST'			=> 'Hozzászólás lezárása',
	'LOCK_POST_POST_CONFIRM'	=> 'Biztosan azt akarod, hogy ne lehessen szerkeszteni ezt a hozzászólást?',
	'LOCK_POST_POSTS'			=> 'Kiválasztott hozzászólások lezárása',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Biztosan azt akarod, hogy ne lehessen szerkeszteni a kiválasztott hozzászólásokat?',
	'LOCK_TOPIC_CONFIRM'		=> 'Biztosan le akarod zárni ezt a témát?',
	'LOCK_TOPICS'				=> 'Kiválasztott témák lezárása',
	'LOCK_TOPICS_CONFIRM'		=> 'Biztosan le akarod zárni az összes kiválasztott témát?',
	'LOGS_CURRENT_TOPIC'		=> 'Téma napló bejegyzéseinek megtekintése:', //? "Currently viewing logs of"
	'LOGIN_EXPLAIN_MCP'			=> 'A fórum moderálásához be kell jelentkezned.',
	'LOGVIEW_VIEWTOPIC'			=> 'Téma megtekintése',
	'LOGVIEW_VIEWLOGS'			=> 'Téma naplójának megtekintése', //?
	'LOGVIEW_VIEWFORUM'			=> 'Fórum megtekintése',
	'LOOKUP_ALL'				=> 'Összes IP keresése',
	'LOOKUP_IP'					=> 'IP keresése',

	'MARKED_NOTES_DELETED'		=> 'A megjelelölt felhasználói feljegyzések sikeresen törlésre kerültek.',

	'MCP_ADD'						=> 'Figyelmeztetés', //? "Add a warning"

	'MCP_BAN'					=> 'Kitiltások',
	'MCP_BAN_EMAILS'			=> 'E-mail címek kitiltása',
	'MCP_BAN_IPS'				=> 'IP-címek kitiltása',
	'MCP_BAN_USERNAMES'			=> 'Felhasználók kitiltása',

	'MCP_LOGS'						=> 'Moderátori napló',
	'MCP_LOGS_FRONT'				=> 'Kezdőlap',
	'MCP_LOGS_FORUM_VIEW'			=> 'Fórumok naplója', //?
	'MCP_LOGS_TOPIC_VIEW'			=> 'Témák naplója', //?

	'MCP_MAIN'						=> 'Általános', //?
	'MCP_MAIN_FORUM_VIEW'			=> 'Fórum megtektintése',
	'MCP_MAIN_FRONT'				=> 'Kezdőlap',
	'MCP_MAIN_POST_DETAILS'			=> 'Hozzászólás adatok',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Téma megtekintése',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Közleménnyé tétel',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Biztosan közleménnyé akarod tenni ezt a témát?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Közleménnyé tétel',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Biztosan közleményekké akarod tenni a kiválasztott témákat?',
	'MCP_MAKE_GLOBAL'				=> 'Globális közleménnyé tétel',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Biztosan globális közleménnyé akarod tenni ezt a témát?',
	'MCP_MAKE_GLOBALS'				=> 'Globális közleménnyé tétel',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Biztosan globális közleményekké akarod tenni a kiválasztott témákat?',
	'MCP_MAKE_STICKY'				=> 'Kiemeltté tétel',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Biztosan kiemeltté akarod tenni ezt a témát?',
	'MCP_MAKE_STICKIES'				=> 'Kiemeltté tétel',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Biztosan kiemeltté akarod tenni a kiválasztott témákat?',
	'MCP_MAKE_NORMAL'				=> 'Normál témává tétel',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Biztosan normál témává akarod tenni ezt a témát?',
	'MCP_MAKE_NORMALS'				=> 'Normál témává tétel',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Biztosan normál témává akarod tenni a kiválsztott témákat?',

	'MCP_NOTES'						=> 'Felhasználói feljegyzések', //?
	'MCP_NOTES_FRONT'				=> 'Kezdőlap',
	'MCP_NOTES_USER'				=> 'Felhasználói adatok', //?

	'MCP_POST_REPORTS'				=> 'Hozzászóláshoz kapcsolódó jelentések', //? nem csak kapcsolódó

	'MCP_REPORTS'					=> 'Jelentett hozzászólások', //? 'Jelentések' - ez nem jobb?
	'MCP_REPORT_DETAILS'			=> 'Részletes jelentés', //?
	'MCP_REPORTS_CLOSED'			=> 'Lezárt jelentések',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Ez a lista azokat a jelentéseket tartalmazza, melyek már megoldásra kerültek.', //? megoldás?
	'MCP_REPORTS_OPEN'				=> 'Nyitott jelentések',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Ez a lista azokat a jelentéseket tartalmazza, melyek még megoldásra várnak.', //?

	'MCP_QUEUE'								=> 'Moderálandók', //?????????? 'Moderációs sor'??? 'Moderálásra váró elemek'?? 'Átnézendők'
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Hozzászólás adatok', //?? "Approve details"
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Jóváhagyásra váró hozzászólások',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Ez a lista azokat a hozzászólásokat tartalmazza, melyek egyelőre nem láthatók a felhasználók számára, mivel még nem kerültek jóváhagyásra.', //?
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Jóváhagyásra váró témák',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Ez a lista azokat a témákat tartalmazza, melyek egyelőre nem láthatók a felhasználók számára, mivel még nem kerültek jóváhagyásra.',

	'MCP_VIEW_USER'			=> 'Meghatározott felhasználó figyelmeztetéseinek megtekintése', //? "View warnings for a specific user" - használják egyáltalán?

	'MCP_WARN'				=> 'Figyelmeztetések',
	'MCP_WARN_FRONT'		=> 'Kezdőlap',
	'MCP_WARN_LIST'			=> 'Figyelmeztetések listája', //? nem inkább figyelmeztetettek listája?
	'MCP_WARN_POST'			=> 'Figyelmeztetés egy bizonyos hozzászólásért', //? "Warn for specific post" meghatározott?
	'MCP_WARN_USER'			=> 'Felhasználó figyelmeztetése',

	'MERGE_POSTS'			=> 'Hozzászólások áthelyezése',
	'MERGE_POSTS_CONFIRM'	=> 'Biztosan át akarod helyezni a kiválasztott hozzászólásokat?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Az alábbi űrlap segítségével hozzászólásokat helyezhetsz át egy másik témába. A hozzászólások nem lesznek újrarendezve, úgy fognak megjelenni, mintha eleve oda küldték volna őket.<br />Add meg céltéma azonosítóját, vagy kattints a „Téma kiválasztása” gombra, hogy megkeresd a témát.', //? újrarendezve
	'MERGE_TOPIC_ID'		=> 'Céltéma azonosító szám',
	'MERGE_TOPICS'			=> 'Témák összevonása',
	'MERGE_TOPICS_CONFIRM'	=> 'Biztosan össze akarod vonni a kiválasztott témákat?',
	'MODERATE_FORUM'		=> 'Fórum moderálása',
	'MODERATE_TOPIC'		=> 'Téma moderálása',
	'MODERATE_POST'			=> 'Hozzászólás moderálása',
	'MOD_OPTIONS'			=> 'Moderálási lehetőségek', //?? (hozzászólás adatainál) 'Moderáció lehetőségek' ???
	'MORE_INFO'				=> 'További információ',
	'MOST_WARNINGS'			=> 'Legtöbb figyelmeztetéssel rendelkező felhasználók', //? "Users with most warnings" 'Legtöbbet figyelmeztett felhasználók' valami rövidebb kéne... (+ a jelentése is jó legyen)
	'MOVE_TOPIC_CONFIRM'	=> 'Biztosan át akarod helyezni ezt a témát egy új fórumba?',
	'MOVE_TOPICS'			=> 'Kiválasztott témák áthelyezése',
	'MOVE_TOPICS_CONFIRM'	=> 'Biztosan át akarod helyezni a kiválasztott témákat egy új fórumba?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Küldő értesítése a jóváhagyásról', //? kérdőjel a végükre (első 3)?
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Küldő értesítése az elutasításról',
	'NOTIFY_USER_WARN'				=> 'Felhasználó értesítése a figyelmeztetésről',
	'NOT_MODERATOR'					=> 'Nem vagy a fórum moderátora.',
	'NO_DESTINATION_FORUM'			=> 'Kérünk, válaszd ki a célfórumot.', //? kérünk? "Please select a forum for destination"
	'NO_DESTINATION_FORUM_FOUND'	=> 'Nincs alkalmazható célfórum.', //? használható, elérhető?
	'NO_ENTRIES'					=> 'Ebben az időtartamban nincs napló bejegyzés.', //? "No log entries for this period" nyelvtan-fogalmazás-értelem
	'NO_FEEDBACK'					=> 'Nem tartozik feljegyzés ehhez a felhasználóhoz.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Hozzászólások áthelyezésénél meg kell adnod egy céltémát.',
	'NO_MATCHES_FOUND'				=> 'Nincs találat', //?? "No matches found"
	'NO_POST'						=> 'Ki kell választanod egy hozzászólást, hogy figyelmeztethesd a felhasználót egy hozzászólásáért.', //? Furán hangzik, de nagyjából erről van szó... :)
	'NO_POST_REPORT'				=> 'Ezt a hozzászólást nem jelentették.',
	'NO_POST_SELECTED'				=> 'Legalább egy hozzászólást ki kell választanod, hogy elvégezhesd ezt a műveletet.', //? végrehajthasd?
	'NO_REASON_DISAPPROVAL'			=> 'Kérünk, adj meg egy megfelelő okot az elutasításra.', //?? appropriate??
	'NO_REPORT'						=> 'Nincs ilyen jelentés.', //? erre használják?
	'NO_REPORTS'					=> 'Nincsenek jelentések.',	
	'NO_REPORT_SELECTED'			=> 'Legalább egy jelentést ki kell választanod, hogy végrehajthasd ezt a műveletet.',
	'NO_TOPIC_ICON'					=> 'nincs', //? nagybetű?
	'NO_TOPIC_SELECTED'				=> 'Legalább egy témát ki kell választanod, hogy elvégezhesd ezt a műveletet.', //? végrehajthasd?
	'NO_TOPICS_QUEUE'				=> 'Nincsenek témák.',

	'ONLY_TOPIC'			=> 'Csak a "%s" téma', //? témából stb.? (Moderálandóknál)
	'OTHER_USERS'			=> 'Más erről az IP-ről hozzászóló felhasználók',

	'POSTER'					=> 'Küldő',
	'POSTS_APPROVED_SUCCESS'	=> 'A kiválasztott hozzászólások jóváhagyásra kerültek.',
	'POSTS_DELETED_SUCCESS'		=> 'A kiválasztott hozzászólások sikeresen eltávolításra kerültek az adatbázisból.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'A kiválasztott hozzászólások elutasításra kerültek.',
	'POSTS_LOCKED_SUCCESS'		=> 'A kiválasztott hozzászólások sikeresen lezárásra kerültek.',
	'POSTS_MERGED_SUCCESS'		=> 'A kiválasztott hozzászólások áthelyezésre kerültek.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'A kiválasztott lezárt hozzászólások sikeresen megnyitásra kerültek.', //? lezárás feloldása vagy megnyitás? eredetileg nincs lezárt
	'POSTS_PER_PAGE'			=> 'Hozzászólások oldalanként',
	'POSTS_PER_PAGE_EXPLAIN'	=> 'Állítsd 0-ra az összes megjelenítéséhez.', //? "(Set to 0 to view all posts)" - forma?
	'POST_APPROVED_SUCCESS'		=> 'A kiválasztott hozzászólás jóváhagyásra került.',
	'POST_DELETED_SUCCESS'		=> 'A kiválasztott hozzászólás sikeresen eltávolításra került az adatbázisból.',
	'POST_DISAPPROVED_SUCCESS'	=> 'A kiválasztott hozzászólás elutasításra került.',
	'POST_LOCKED_SUCCESS'		=> 'A hozzászólás sikeresen lezárásra került.',
	'POST_NOT_EXIST'			=> 'A kért hozzászólás nem létezik.', //? kért?? (requested)
	'POST_REPORTED_SUCCESS'		=> 'A hozzászólás sikeresen jelentésre került.',
	'POST_UNLOCKED_SUCCESS'		=> 'A lezárt hozzászólás sikeresen megnyitásra került.',

	'READ_USERNOTES'			=> 'Felhasználói feljegyzések', //? nem is használják? (lehetne rövidíteni, módosítani)
	'READ_WARNINGS'				=> 'Figyelmeztetések',
	'REPORTER'					=> 'Jelentő',
	'REPORTED'					=> 'Jelenetve', //? nem lenne jobb a jelentés időpontja/dátuma?
	'REPORTED_BY'				=> 'Jelentő:', //? valószínűleg a proSilverben használják - addig ez marad...
	'REPORTED_ON_DATE'			=> 'Dátum:', //? hasonló ez a szerkezet a hozzászólásokhoz (proSilver) - kéne egy jó ötlet, hogy magyarul is ugyanolyan formában legyen, mint angolul (Reported by xyz on Today)
	'REPORTS_CLOSED_SUCCESS'	=> 'A kiválasztott jelentések sikeresen lezárásra kerültek.',
	'REPORTS_DELETED_SUCCESS'	=> 'A kiválasztott jelentések sikeresen törlésre kerültek.',
	'REPORTS_TOTAL'				=> 'Összesen <strong>%d</strong> áttekintésre váró jelentés van.', //? "In total there are <strong>%d</strong> reports to review" áttekintendő? áttekintésre váró?  át_néz_endő? ---- az átnéz szó használata sokkal jobb lenne, nem?
	'REPORTS_ZERO_TOTAL'		=> 'Nincs áttekintésre váró jelentés.', //? ua. feljebb
	'REPORT_CLOSED'				=> 'A jelentés már lezárásra került.',
	'REPORT_CLOSED_SUCCESS'		=> 'A kiválasztott jelentés sikeresen lezárásra került.',
	'REPORT_DELETED_SUCCESS'	=> 'A kiválasztott jelentés sikeresen törlésre került.',
	'REPORT_DETAILS'			=> 'Jelentés részletek', //? jelentés részletek, részletes jelentés, jelentés adatai??
	'REPORT_MESSAGE'			=> 'Üzenet jelentése', //? ezt se találom... (az eggyel alább lévővel együtt)
	'REPORT_MESSAGE_EXPLAIN'	=> 'Ennek az űrlapnak a segítségével a kiválsztott üzenetet jelentheted. A jelentés csak arra az esetre való, ha az üzenet megszegi a fórum szabályait.', //? "Use this form to report the selected message to the board administrators. Reporting should generally be used only if the message breaks forum ruless." 'Csak akkor jelents...'?
	'REPORT_NOTIFY'				=> 'Értesítés', //? "Notify me" az engem ebből kimaradt...
	'REPORT_NOTIFY_EXPLAIN'		=> 'Kapjál-e értesítést, ha a jelentéssel foglalkoztak.', //? "Informs you when your report is dealt with" foglalkoznak?
	'REPORT_POST_EXPLAIN'		=> 'Ennek az űrlapnak a segítségével a kiválsztott hozzászólást jelentheted a fórum adminisztrátorainak. A jelentés csak arra az esetre való, ha a hozzászólás megszegi a fórum szabályait.',
	'REPORT_REASON'				=> 'Jelentés oka',
	'REPORT_TIME'				=> 'Jelentés ideje',
	'REPORT_TOTAL'				=> 'Összesen <strong>1</strong> áttekintésre váró jelentés van.',
	'RESYNC'					=> 'Szinkronizálás', //?
	'RETURN_MESSAGE'			=> '%sVissza az üzenethez%s',
	'RETURN_NEW_FORUM'			=> '%sVissza az új fórumhoz%s',
	'RETURN_NEW_TOPIC'			=> '%sVissza az új témához%s',
	'RETURN_POST'				=> '%sVissza a hozzászóláshoz%s',
	'RETURN_QUEUE'				=> '%sVissza a moderálandókhoz%s',
	'RETURN_REPORTS'			=> '%sVissza a jelentésekhez%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sVissza a témához%s',

	'SEARCH_POSTS_BY_USER'				=> 'Felhasználó hozzászólásainak keresése:', //? nem találom! "Search posts by"
	'SELECT_ACTION'						=> 'Kívánt művelet kiválasztása', //? "Select desired action" valami jobb kéne ide, mert elég sok helyen szerepel
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Válaszd ki a fórumot, amelyikben szeretnéd, hogy ez a globális közlemény megjelenjen.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'A kiválasztott témák között legalább egy globális közlemény van. Válaszd ki a fórumot, amelyikben szeretnéd, hogy ezek megjelenjenek.',
	'SELECT_MERGE'						=> 'Kiválasztás összevonáshoz/áthelyezéshez', //? most melyik - mindkettő?
	'SELECT_TOPICS_FROM'				=> 'Fórum', //? "Select topics from" ez a legegyszerűbb, bár nem ezt jelenti
	'SELECT_TOPIC'						=> 'Téma kiválsztása',
	'SELECT_USER'						=> 'Felhasználó kiválasztása',
	'SORT_ACTION'						=> 'Művelet', //? 'naplózótt művelet'
	'SORT_DATE'							=> 'Dátum',
	'SORT_IP'							=> 'IP-cím',
	'SORT_WARNINGS'						=> 'Figyelmeztetések', //? száma
	'SPLIT_AFTER'						=> 'Szétválasztás a kiválsztott hozzászólástól',
	'SPLIT_FORUM'						=> 'Új téma fóruma',
	'SPLIT_POSTS'						=> 'Kiválsztott hozzászólások szétválasztása',
	'SPLIT_SUBJECT'						=> 'Új téma címe',
	'SPLIT_TOPIC_ALL'					=> 'Kiválasztott hozzászólások szétválasztása a témából', //?
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Biztosan szét akarod választani ezt a témát?', //?
	'SPLIT_TOPIC_BEYOND'				=> 'Téma szétválasztása a kiválasztott hozzászólástól', //?
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Biztosan szét akarod választani a témát a kiválasztott hozzászólástól?', //?
	'SPLIT_TOPIC_EXPLAIN'				=> 'Az alábbi űrlap segítségével egy témát kettéoszthatsz kétféleképpen: vagy egy kiválasztott hozzászólástól, vagy csak a kiválasztott hozzászólásokat.', //? "Using the form below you can split a topic in two, either by selecting the posts individually or by splitting at a selected post" fogalmazás

	'THIS_POST_IP'				=> 'Hozzászóláshoz tartozó IP', //? 'Hozzászólás IP-je'
	'TOPICS_APPROVED_SUCCESS'	=> 'A kiválasztott témák jóváhagyásra kerültek.',
	'TOPICS_DELETED_SUCCESS'	=> 'A kiválasztott témák sikeresen eltávolításra kerültek az adatbázisból.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'A kiválasztott témák elutasításra kerültek.',
	'TOPICS_FORKED_SUCCESS'		=> 'A kiválasztott témák sikeresen meg lettek kettőzve.', //? a kerültek itt nagyon nem hangzik jól... nem?
	'TOPICS_LOCKED_SUCCESS'		=> 'A kiválasztott témák lezárásra kerültek.',
	'TOPICS_MOVED_SUCCESS'		=> 'A kiválasztott témák sikeresen áthelyezésre kerültek.',
	'TOPICS_RESYNC_SUCCESS'		=> 'A kiválasztott témák sikeresen szinkronizálásra kerültek.',
	'TOPICS_TYPE_CHANGED'		=> 'A téma típusok sikeresen megváltoztatásra kerültek.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'A kiválasztott témák sikeresen megnyitásra kerültek.',
	'TOPIC_APPROVED_SUCCESS'	=> 'A kiválasztott téma jóváhagyásra került.',
	'TOPIC_DELETED_SUCCESS'		=> 'A kiválasztott téma sikeresen eltávolításra került az adatbázisból.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'A kiválasztott téma elutasításra került.',
	'TOPIC_FORKED_SUCCESS'		=> 'A kiválasztott téma sikeresen meg lett kettőzve.', //?
	'TOPIC_LOCKED_SUCCESS'		=> 'A kiválasztott téma lezárásra került.',
	'TOPIC_MOVED_SUCCESS'		=> 'A kiválasztott téma sikeresen áthelyezésre került.',
	'TOPIC_NOT_EXIST'			=> 'A kiválasztott téma nem létezik.',
	'TOPIC_RESYNC_SUCCESS'		=> 'A kiválasztott téma szinkronizálásra került.',
	'TOPIC_SPLIT_SUCCESS'		=> 'A kiválasztott téma sikeresen szétválasztásra került.',
	'TOPIC_TIME'				=> 'Témanyitás ideje', //? Eredetileg post time és topic time van, nálunk a post time-ból elküldés ideje lett, így kicsit félreérthető - az elküldés idejét meg kell változtani hozzászólás idejére?
	'TOPIC_TYPE_CHANGED'		=> 'A téma típusa sikeresen megváltoztatásra került',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'A kiválasztott téma megnyitásra került.',
	'TOTAL_WARNINGS'			=> 'Figyelmeztetések száma',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Összesen <strong>%d</strong> jóváhagyásra váró hosszászólás van.', //? kell az összesen?
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Nincs jóváhagyásra váró hozzászólás.',
	'UNAPPROVED_POST_TOTAL'			=> 'Összesen <strong>1</strong> jóváhagyásra váró hosszászólás van.',
	'UNLOCK'						=> 'Megnyitás',
	'UNLOCK_POST'					=> 'Hozzászólás megnyitása',
	'UNLOCK_POST_EXPLAIN'			=> 'Szerkeztés engedélyezése', //? kicsivel kéne, de míg így se passzol ahhoz a hosszú szöveghez, ami nyitott állapotban ott van
	'UNLOCK_POST_POST'				=> 'Hozzászólás megnyitása',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Biztosan azt akarod, hogy lehessen szerkeszteni ezt a hozzászólást?',
	'UNLOCK_POST_POSTS'				=> 'Kiválasztott hozzászólások lezárása',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Biztosan azt akarod, hogy lehessen szerkeszteni a kiválasztott hozzászólásokat?',
	'UNLOCK_TOPIC'					=> 'Téma megnyitása',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Biztosan meg akarod nyitni a témát?',
	'UNLOCK_TOPICS'					=> 'Kiválsztott témák megnyitása',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Biztosan meg akarod nyitni a kiválasztott témákat?',
	'USER_CANNOT_POST'				=> 'Nem küldhetsz hozzászólást ebben a fórumban.',
	'USER_CANNOT_REPORT'			=> 'Nem küldhetsz jelentést ebben a fórumban.', //? 'jelenthetsz egy hozzászólást'
	'USER_FEEDBACK_ADDED'			=> 'A felhasználói feljegyzés sikeresen hozzáadásra került.', //? 'felvételre' a hozzáadás túl általános (sokszor használt)
	'USER_WARNING_ADDED'			=> 'A felhasználó sikeresen figyelmeztetésre került.',

	'VIEW_DETAILS'			=> 'Részletek megtekintése', //? a korábbi adatok stb. probléma

	'WARNED_USERS'			=> 'Figyelmeztetett felhasználók',
	'WARNED_USERS_EXPLAIN'	=> 'Az alábbi lista azokat a felhasználókat tartalmazza, akik nem lejáró figyelmeztetésben részesültek.',
	'WARNING_PM_BODY'		=> 'A következő figyelmeztetésben részesültél egy adminisztrátor vagy egy moderátor által:[quote]%s[/quote]', //? "The following is a warning which has been issued to you by an administrator or moderator of this site.[quote]%s[/quote]" hagyjuk a passzívot, legyen egyszerű?
	'WARNING_PM_SUBJECT'	=> 'Figyelmeztetés',
	'WARNING_POST_DEFAULT'	=> 'A következő hozzászólásod miatt figyelmeztetésben részesültél: %s', //? figyelmeztetésben részesültél vagy figyelmeztettek?
	'WARNINGS_ZERO_TOTAL'	=> 'Nincs figyelmeztetés.',

	'YOU_SELECTED_TOPIC'	=> 'A %d. számú témát választottad ki: %s', //? fogalmazás...

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-topic', //? le kéne fordítani?
			'OTHER'		=> 'Egyéb', //? 'Más'?
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'A hozzászólás linket tartalmaz illegális vagy kalóz szoftverre.', //? fogalmzás, szórend stb. kell pont?
			'SPAM'		=> 'A hozzászólás egyetlen célja egy weboldal vagy egy termék reklámozása.',
			'OFF_TOPIC'	=> 'A hozzászólás nem kapcsolódik a témához.',
			'OTHER'		=> 'A hozzászólás nem tartozik semelyik másik kategóriába, kérjük, töltsd ki a további információ mezőt.' //? idézőjelek a további információ köré (+ esetleg további információk)?
		)
	),
));

?>