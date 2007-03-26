<?php
/** 
*
* mcp [Hungarian]
*
* @package language
* @version $Id: mcp.php,v 1.5 2007-03-26 19:27:54 fberci Exp $
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
	'ADD_FEEDBACK'			=> 'Feljegyzés hozzáadása', //? fejlegyzés? hozzáadás?
	'ADD_FEEDBACK_EXPLAIN'	=> 'Ha hozzá szeretnél adni egy feljegyzést, töltsd ki az alábbi űrlapot. Csak sima szöveget írj, a HTML, BBCode stb. nem engedélyezett.', //?? "If you would like to add a report on this please fill out the following form. Only use plain text; HTML, BBCode, etc. are not permitted."
	'ADD_WARNING'			=> 'Felhasználó figyelmeztetése', //? 'Figyelmeztetés', 'Figyelmeztetés hozzáadása'
	'ADD_WARNING_EXPLAIN'	=> 'Ha figyelmezetetni szeretnéd ezt a felhasználót, töltsd ki az alábbi űrlapot. Csak sima szöveget írj, a HTML, BBCode stb. nem engedélyezett.',
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
	'FORK'					=> 'Elágaztatás', //? = másolás
	'FORK_TOPIC'			=> 'Téma elágaztatása',
	'FORK_TOPIC_CONFIRM'	=> 'Biztosan meg akarod kettőzni ezt a témát?', //? eredetileg másolni (copy)
	'FORK_TOPICS'			=> 'Kiválasztott témák elágaztatása',
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
	'MCP_MAKE_NORMAL'				=> 'Normáli témává tétel',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Biztosan normál témává akarod tenni ezt a témát?',
	'MCP_MAKE_NORMALS'				=> 'Normál témává tétel',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Biztosan normál témává akarod tenni a kiválsztott témákat?',

	'MCP_NOTES'						=> 'Felhasználói feljegyzések', //?
	'MCP_NOTES_FRONT'				=> 'Kezdőlap',
	'MCP_NOTES_USER'				=> 'Felhasználói adatok', //?

	'MCP_REPORTS'					=> 'Jelentett hozzászólások',
	'MCP_REPORT_DETAILS'			=> 'Részletes jelentés', //?
	'MCP_REPORTS_CLOSED'			=> 'Lezárt jelentések',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Ez a lista azokat a jelentéseket tartalmazza, melyek már megoldásra kerültek.', //? megoldás?
	'MCP_REPORTS_OPEN'				=> 'Nyitott jelentések',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Ez a lista azokat a jelentéseket tartalmazza, melyek még megoldásra várnak.', //?

	'MCP_QUEUE'								=> 'Moderálandók', //?????????? 'Moderációs sor'??? 'Moderálásra váró elemek'??
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Hozzászólás adatok', //?? "Approve details"
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Jóváhagyásra váró hozzászólások',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Ez a lista azokat a hozzászólásokat tartalmazza, melyek egyelőre nem láthatók a felhasználók számára, mivel még nem kerültek jóváhagyásra.', //?
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Jóváhagyásra váró témák',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Ez a lista azokat a témákat tartalmazza, melyek egyelőre nem láthatók a felhasználók számára, mivel még nem kerültek jóváhagyásra.',

	'MCP_VIEW_USER'			=> 'Meghatározott felhasználó figyelmeztetéseinek megtekintése', //? "View warnings for a specific user" - használják egyáltalán?

	'MCP_WARN'				=> 'Figyelmeztetések',
	'MCP_WARN_FRONT'		=> 'Kezdőlap',
	'MCP_WARN_LIST'			=> 'Figyelmeztetések listája',
	'MCP_WARN_POST'			=> 'Figyelmeztetés egy bizonyos hozzászólásért', //? "Warn for specific post" meghatározott?
	'MCP_WARN_USER'			=> 'Felhasználó figyelmeztetése',

	'MERGE_POSTS'			=> 'Merge posts',
	'MERGE_POSTS_CONFIRM'	=> 'Are you sure you want to merge the selected posts?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Using the form below you can merge selected posts into another topic. These posts will not be reordered and will appear as if the users posted them to the new topic.<br />Please enter the destination topic id or click on the "Select" button to search for one',
	'MERGE_TOPIC_ID'		=> 'Destination topic identification number',
	'MODERATE_FORUM'		=> 'Moderate forum',
	'MOD_OPTIONS'			=> 'Moderator options',
	'MORE_INFO'				=> 'Further information',
	'MOST_WARNINGS'			=> 'Users with most warnings',
	'MOVE_TOPIC_CONFIRM'	=> 'Are you sure you want to move the topic into a new forum?',
	'MOVE_TOPICS'			=> 'Move selected topics',
	'MOVE_TOPICS_CONFIRM'	=> 'Are you sure you want to move the selected topics into a new forum?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Notify poster about approval?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Notify poster about disapproval?',
	'NOTIFY_USER_WARN'				=> 'Notify user about warning?',
	'NOT_MODERATOR'					=> 'You are not a moderator of this forum',
	'NO_DESTINATION_FORUM'			=> 'Please select a forum for destination',
	'NO_DESTINATION_FORUM_FOUND'	=> 'There is no destination forum available.',
	'NO_ENTRIES'					=> 'No log entries for this period',
	'NO_FEEDBACK'					=> 'No feedback exists for this user',
	'NO_FINAL_TOPIC_SELECTED'		=> 'You have to select a destination topic for merging posts',
	'NO_MATCHES_FOUND'				=> 'No matches found',
	'NO_POST'						=> 'You have to select a post in order to warn the user for a post',
	'NO_POST_REPORT'				=> 'This post was not reported.',
	'NO_POST_SELECTED'				=> 'You must select at least one post to perform this action',
	'NO_REASON_DISAPPROVAL'			=> 'Please give an appropriate reason for disapproval',
	'NO_REPORTS'					=> 'No reports',	
	'NO_TOPIC_ICON'					=> 'None',
	'NO_TOPIC_SELECTED'				=> 'You must select at least one topic to perform this action',

	'ONLY_TOPIC'			=> 'Only topic "%s"',
	'OTHER_USERS'			=> 'Users posting from this IP',

	'POSTER'					=> 'Poster',
	'POSTS_APPROVED_SUCCESS'	=> 'The selected posts have been approved',
	'POSTS_DELETED_SUCCESS'		=> 'The selected posts have been successfully removed from the database',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'The selected posts have been disapproved',
	'POSTS_LOCKED_SUCCESS'		=> 'The selected posts have been locked successfully',
	'POSTS_MERGED_SUCCESS'		=> 'The selected posts have been merged',
	'POSTS_UNLOCKED_SUCCESS'	=> 'The selected posts have been unlocked successfully',
	'POSTS_PER_PAGE'			=> 'Posts per page',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Set to 0 to view all posts)',
	'POST_APPROVED_SUCCESS'		=> 'The selected post has been approved',
	'POST_DELETED_SUCCESS'		=> 'The selected post has been successfully removed from the database',
	'POST_DISAPPROVED_SUCCESS'	=> 'The selected post has been disapproved',
	'POST_LOCKED_SUCCESS'		=> 'Post locked successfully',
	'POST_NOT_EXIST'			=> 'The post you requested does not exist',
	'POST_REPORTED_SUCCESS'		=> 'This post has been successfully reported',
	'POST_UNLOCKED_SUCCESS'		=> 'Post unlocked successfully',

	'READ_USERNOTES'			=> 'User notes',
	'READ_WARNINGS'				=> 'User warnings',
	'REPORTER'					=> 'Reporter',
	'REPORTED'					=> 'Reported',
	'REPORTED_BY'				=> 'Reported by',
	'REPORTED_ON_DATE'			=> 'on',
	'REPORTS_CLOSED_SUCCESS'	=> 'The selected reports have been closed successfully.',
	'REPORTS_DELETED_SUCCESS'	=> 'The selected reports have been deleted successfully.',
	'REPORTS_TOTAL'				=> 'In total there are <strong>%d</strong> reports to review',
	'REPORTS_ZERO_TOTAL'		=> 'There are no reports to review',
	'REPORT_CLOSED'				=> 'This report has previously been closed.',
	'REPORT_CLOSED_SUCCESS'		=> 'The selected report has been closed successfully.',
	'REPORT_DELETED_SUCCESS'	=> 'The selected report has been deleted successfully.',
	'REPORT_DETAILS'			=> 'Report details',
	'REPORT_MESSAGE'			=> 'Report this message',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Use this form to report the selected message to the board administrators. Reporting should generally be used only if the message breaks forum rules.',
	'REPORT_NOTIFY'				=> 'Notify me',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informs you when your report is dealt with',
	'REPORT_POST_EXPLAIN'		=> 'Use this form to report the selected post to the forum moderators and board administrators. Reporting should generally be used only if the post breaks forum rules.',
	'REPORT_REASON'				=> 'Report reason',
	'REPORT_TIME'				=> 'Report time',
	'REPORT_TOTAL'				=> 'In total there is <strong>1</strong> report to review',
	'RESYNC'					=> 'Resync',
	'RETURN_MESSAGE'			=> '%sReturn to the message%s',
	'RETURN_NEW_FORUM'			=> '%sReturn to the new forum%s',
	'RETURN_NEW_TOPIC'			=> '%sReturn to the new topic%s',
	'RETURN_POST'				=> '%sReturn to the post%s',
	'RETURN_QUEUE'				=> '%sReturn to the queue%s',
	'RETURN_REPORTS'			=> '%sReturn to the reports%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sReturn to the topic%s',

	'SEARCH_POSTS_BY_USER'				=> 'Search posts by',
	'SELECT_ACTION'						=> 'Select desired action',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Please select the forum you wish this global announcement to be displayed.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'One or more of the selected topics are global announcements. Please select the forum you wish these to be displayed.',
	'SELECT_TOPICS_FROM'				=> 'Select topics from',
	'SELECT_TOPIC'						=> 'Select topic',
	'SELECT_USER'						=> 'Select user',
	'SORT_ACTION'						=> 'Log action',
	'SORT_DATE'							=> 'Date',
	'SORT_IP'							=> 'IP address',
	'SORT_WARNINGS'						=> 'Warnings',
	'SPLIT_AFTER'						=> 'Split from selected post',
	'SPLIT_FORUM'						=> 'Forum for new topic',
	'SPLIT_POSTS'						=> 'Split selected posts',
	'SPLIT_SUBJECT'						=> 'New topic title',
	'SPLIT_TOPIC_ALL'					=> 'Split topic from selected posts',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Are you sure you want to split this topic?',
	'SPLIT_TOPIC_BEYOND'				=> 'Split topic at selected post',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Are you sure you want to split this topic at the selected post?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Using the form below you can split a topic in two, either by selecting the posts individually or by splitting at a selected post',

	'THIS_POST_IP'				=> 'IP for this post',
	'TOPICS_APPROVED_SUCCESS'	=> 'The selected topics have been approved',
	'TOPICS_DELETED_SUCCESS'	=> 'The selected topics have been successfully removed from the database',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'The selected topics have been disapproved',
	'TOPICS_FORKED_SUCCESS'		=> 'The selected topics have been copied successfully',
	'TOPICS_LOCKED_SUCCESS'		=> 'The selected topics have been locked',
	'TOPICS_MOVED_SUCCESS'		=> 'The selected topics have been moved successfully',
	'TOPICS_RESYNC_SUCCESS'		=> 'The selected topics have been resynchronised',
	'TOPICS_TYPE_CHANGED'		=> 'Topic types changed successfully.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'The selected topics have been unlocked',
	'TOPIC_APPROVED_SUCCESS'	=> 'The selected topic has been approved',
	'TOPIC_DELETED_SUCCESS'		=> 'The selected topic has been successfully removed from the database',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'The selected topic has been disapproved',
	'TOPIC_FORKED_SUCCESS'		=> 'The selected topic has been copied successfully',
	'TOPIC_LOCKED_SUCCESS'		=> 'The selected topic has been locked',
	'TOPIC_MOVED_SUCCESS'		=> 'The selected topic has been moved successfully',
	'TOPIC_NOT_EXIST'			=> 'The topic you selected does not exist',
	'TOPIC_RESYNC_SUCCESS'		=> 'The selected topic has been resynchronised',
	'TOPIC_SPLIT_SUCCESS'		=> 'The selected topic has been split successfully',
	'TOPIC_TIME'				=> 'Topic time',
	'TOPIC_TYPE_CHANGED'		=> 'Topic type changed successfully.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'The selected topic has been unlocked',
	'TOTAL_WARNINGS'			=> 'Total Warnings',

	'UNAPPROVED_POSTS_TOTAL'		=> 'In total there are <strong>%d</strong> posts waiting for approval',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'There are no posts waiting for approval',
	'UNAPPROVED_POST_TOTAL'			=> 'In total there is <strong>1</strong> post waiting for approval',
	'UNLOCK'						=> 'Unlock',
	'UNLOCK_POST'					=> 'Unlock post',
	'UNLOCK_POST_EXPLAIN'			=> 'Allow editing',
	'UNLOCK_POST_POST'				=> 'Unlock post',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Are you sure you want to allow editing this post?',
	'UNLOCK_POST_POSTS'				=> 'Unlock selected posts',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Are you sure you want to allow editing the selected posts?',
	'UNLOCK_TOPIC'					=> 'Unlock topic',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Are you sure you want to unlock this topic?',
	'UNLOCK_TOPICS'					=> 'Unlock selected topics',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Are you sure you want to unlock all selected topics?',
	'USER_CANNOT_POST'				=> 'You cannot post in this forum',
	'USER_CANNOT_REPORT'			=> 'You cannot report posts in this forum',
	'USER_FEEDBACK_ADDED'			=> 'User feedback added successfully.',
	'USER_WARNING_ADDED'			=> 'User warned successfully.',

	'VIEW_DETAILS'			=> 'View details',

	'WARNED_USERS'			=> 'Warned users',
	'WARNED_USERS_EXPLAIN'	=> 'This is a list of users with unexpired warnings issued to them',
	'WARNING_PM_BODY'		=> 'The following is a warning which has been issued to you by an administrator or moderator of this site.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Board warning issued',
	'WARNING_POST_DEFAULT'	=> 'This is a warning regarding the following post made by you: %s',
	'WARNINGS_ZERO_TOTAL'	=> 'No warnings exists',

	'YOU_SELECTED_TOPIC'	=> 'You selected topic number %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Other'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'The post contains links to illegal or pirated software',
			'SPAM'		=> 'The reported post has the only purpose to advertise for a website or another product',
			'OFF_TOPIC'	=> 'The reported post is off topic',
			'OTHER'		=> 'The reported post does not fit into any other category, please use the description field'
		)
	),
));

?>