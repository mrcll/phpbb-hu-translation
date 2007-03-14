<?php
/** 
*
* posting [Hungarian]
*
* @package language
* @version $Id: posting.php,v 1.4 2007-03-14 21:35:34 fberci Exp $
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
	'ADD_ATTACHMENT'			=> 'Csatolmány feltöltése',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Ha szeretnél állományokat csatolni a hozzászólásodhoz, töltsd ki az alábbi mezőket.', //?
	'ADD_FILE'					=> 'Állomány hozzáadása',
	'ADD_POLL'					=> 'Szavazás készítése', //? készítés, hozzáadás stb.?
	'ADD_POLL_EXPLAIN'			=> 'Ha nem szeretnél szavazást csatolni a témához, hagyd üresen az alábbi mezőket.',
	'ALREADY_DELETED'			=> 'Az üzenet már törölve lett.',
	'ATTACH_QUOTA_REACHED'		=> 'A fórum csatolmányainak mérete elérte a limitet.', //?? "Sorry, the board attachment quota has been reached."
	'ATTACH_SIG'				=> 'Aláírás hozzáadása (az aláírásod a felhasználói vezérlőpultban változtathatod meg)',

	'BBCODE_B_HELP'				=> 'Félkövér: [b]szöveg[/b]',
	'BBCODE_C_HELP'				=> 'Kód: [code]kód[/code]',
	'BBCODE_E_HELP'				=> 'Lista: lista elem hozzáadása',
	'BBCODE_F_HELP'				=> 'Betűméret: [size=100]normál méretű szöveg[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>kikapcsolva</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>bekapcsolva</em>',
	'BBCODE_I_HELP'				=> 'Dőlt: [i]szöveg[/i]',
	'BBCODE_L_HELP'				=> 'Lista: [list]szöveg[/list]',
	'BBCODE_O_HELP'				=> 'Rendezett lista: [list=]szöveg[/list]',
	'BBCODE_P_HELP'				=> 'Kép: [img]http://kep_url[/img]',
	'BBCODE_Q_HELP'				=> 'Idézet: [quote]szöveg[/quote]',
	'BBCODE_S_HELP'				=> 'Betűszín: [color=red]szöveg[/color]  tipp: color=#FF0000 formában is megadhatod a színt',
	'BBCODE_U_HELP'				=> 'Aláhúzás: [u]szöveg[/u]',
	'BBCODE_W_HELP'				=> 'Link: [url]http://url[/url] vagy [url=http://url]link szöveg[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=szélesség,magasság]http://url[/flash]',
	'BUMP_ERROR'				=> 'Nem ugraszthatod előre a témát, mivel az utolsó hozzászólást nemrég került elküldésre.',

	'CANNOT_DELETE_REPLIED'		=> 'Csak olyan hozzászólást törölhetsz, melyre még nem érekezett válasz.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'A hozzászólás lezárásra került. Már nem szerkesztheted ezt a hozzászólást.',
	'CANNOT_EDIT_TIME'			=> 'Már nem szerkesztetheted, illetve törölheted a hozzászólást.',
	'CANNOT_POST_ANNOUNCE'		=> 'Nem küldhetsz közleményt.',
	'CANNOT_POST_STICKY'		=> 'Nem küldhetsz kiemelt témát.',
	'CHANGE_TOPIC_TO'			=> 'Téma típusának megváltoztatása', //? "Change topic type to" - topic type: téma típus??
	'CLOSE_TAGS'				=> 'Tagek lezárása',
	'CURRENT_TOPIC'				=> 'Jelenlegi téma', //? aktuális?

	'DELETE_FILE'				=> 'Csatolmány törlése',
	'DELETE_MESSAGE'			=> 'Üzenet törlése',
	'DELETE_MESSAGE_CONFIRM'	=> 'Biztosan törölni akarod ezt az üzenetet?',
	'DELETE_OWN_POSTS'			=> 'Csak a saját hozzászólásaidat törölheted.',
	'DELETE_POST_CONFIRM'		=> 'Biztosan törölni akarod ezt a hozzászólást?',
	'DELETE_POST_WARN'			=> 'Törlés után a hozzászólás nem visszaállítható.',
	'DISABLE_BBCODE'			=> 'BBCode kikapcsolása',
	'DISABLE_MAGIC_URL'			=> 'Url-ek automatikus linkké alakításának kikapcsolása', //? "Do not automatically parse URLs" 'Automatikus URL-feldolgozás kikapcsolása' webcímek?
	'DISABLE_SMILIES'			=> 'Emotikonok kikapcsolása',
	'DISALLOWED_EXTENSION'		=> 'A %s kiterjesztés nem engedélyezett.',
	'DRAFT_LOADED'				=> 'A piszkozat sikeresen betöltésre került, most már befejezheted az üzenetedet.<br />Miután elküldted ezt az üzenetet, a piszkozat törlésre kerül.',
	'DRAFT_SAVED'				=> 'A piszkozat sikeresen elmentésre került.',
	'DRAFT_TITLE'				=> 'Piszkozat címe',

	'EDIT_REASON'				=> 'Hozzászólás szerkesztésének oka',
	'EMPTY_FILEUPLOAD'			=> 'A feltöltött állomány üres.',
	'EMPTY_MESSAGE'				=> 'Az üzenet nem lehet üres.',
	'EMPTY_REMOTE_DATA'			=> 'Nem sikerült feltölteni az állományt, próbáld meg feltölteni kézzel.',

	'FLASH_IS_OFF'				=> '[flash] <em>kikapcsolva</em>',
	'FLASH_IS_ON'				=> '[flash] <em>bekapcsolva</em>',
	'FLOOD_ERROR'				=> 'Most nem küldhetsz újabb hozzászólást, mivel nemrég küldtél egyet.',
	'FONT_COLOR'				=> 'Betűszín',
	'FONT_HUGE'					=> 'óriási',
	'FONT_LARGE'				=> 'nagy',
	'FONT_NORMAL'				=> 'normál',
	'FONT_SIZE'					=> 'Betűméret',
	'FONT_SMALL'				=> 'kicsi',
	'FONT_TINY'					=> 'apró',

	'GENERAL_UPLOAD_ERROR'		=> 'Nem sikerült feltölteni a csatolmányt a következő helyre: %s',

	'IMAGES_ARE_OFF'			=> '[img] <em>kikapcsolva</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>bekapcsolva</em>',
	'INVALID_FILENAME'			=> 'A %s érvénytelen állománynév. ', //? "%s is an invalid filename" - nem létező (valószínűleg ez a jelentése...)?

	'LOAD'						=> 'Betöltés',
	'LOAD_DRAFT'				=> 'Piszkozat betöltése',
	'LOAD_DRAFT_EXPLAIN'		=> 'Itt kiválaszthatod, hogy melyik piszkozatot szeretnéd folytatni. A jelenlegi hozzászólásod elvetésre, a tartalma törlésre kerül. A piszkozataidat a felhasználói vezérlőpultban tudod megtekinteni, szerkeszteni, illetve törölni.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Egy téma előreugrasztásához be kell jelentkezned ebben a fórumban.', //? egy?; szórend
	'LOGIN_EXPLAIN_DELETE'		=> 'Egy hozzászólás törléséhez be kell jelentkezned ebben a fórumban.',
	'LOGIN_EXPLAIN_POST'		=> 'Új téma küldéséhez be kell jelentkezned ebben a fórumban.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Egy hozzászólás idézéséhez be kell jelentkezned ebben a fórumban.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Hozzászólás küldéséhez be kell jelentkezned ebben a fórumban.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'You may only use fonts up to size %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels high.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Your flash files may only be up to %1$d pixels wide.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Your images may only be up to %1$d pixels high.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Your images may only be up to %1$d pixels wide.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Enter your message here, it may contain no more than <strong>%d</strong> characters.',
	'MESSAGE_DELETED'			=> 'This message has been deleted successfully',
	'MORE_SMILIES'				=> 'View more smilies',

	'NOTIFY_REPLY'				=> 'Send me an email when a reply is posted',
	'NOT_UPLOADED'				=> 'File could not be uploaded.',
	'NO_DELETE_POLL_OPTIONS'	=> 'You cannot delete existing poll options',
	'NO_PM_ICON'				=> 'No PM icon',
	'NO_POLL_TITLE'				=> 'You have to enter a poll title',
	'NO_POST'					=> 'The requested post does not exist.',
	'NO_POST_MODE'				=> 'No post mode specified',

	'PARTIAL_UPLOAD'			=> 'The uploaded file was only partially uploaded',
	'PHP_SIZE_NA'				=> 'The attachment’s filesize is too large.<br />Could not determine the maximum size defined by PHP in php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'The attachment’s filesize is too large, the maximum upload size is %d MB.<br />Please note this is set in php.ini and cannot be overridden.',
	'PLACE_INLINE'				=> 'Place inline',
	'POLL_DELETE'				=> 'Delete poll',
	'POLL_FOR'					=> 'Run poll for',
	'POLL_FOR_EXPLAIN'			=> 'Enter 0 or leave blank for a never ending poll',
	'POLL_MAX_OPTIONS'			=> 'Options per user',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'This is the number of options each user may select when voting.',
	'POLL_OPTIONS'				=> 'Poll options',
	'POLL_OPTIONS_EXPLAIN'		=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options',
	'POLL_QUESTION'				=> 'Poll question',
	'POLL_VOTE_CHANGE'			=> 'Allow re-voting',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'If enabled users are able to change their vote.',
	'POSTED_ATTACHMENTS'		=> 'Posted attachments',
	'POST_CONFIRMATION'			=> 'Confirmation of post',
	'POST_CONFIRM_EXPLAIN'		=> 'To prevent automated posts the board administrator requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'POST_DELETED'				=> 'This message has been deleted successfully',
	'POST_EDITED'				=> 'This message has been edited successfully',
	'POST_EDITED_MOD'			=> 'This message has been edited but requires approval',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Post icon',
	'POST_NORMAL'				=> 'Normal',
	'POST_REPLY'				=> 'Post a reply',
	'POST_REVIEW'				=> 'Post review',
	'POST_REVIEW_EXPLAIN'		=> 'At least one new post has been made to this topic. You may wish to review your post in light of this.',
	'POST_STORED'				=> 'This message has been posted successfully',
	'POST_STORED_MOD'			=> 'This message has been saved but requires approval',
	'POST_TOPIC'				=> 'Post a new topic',
	'POST_TOPIC_AS'				=> 'Post topic as',
	'PROGRESS_BAR'				=> 'Progress bar',

	'QUOTE_DEPTH_EXCEEDED'		=> 'You may embed only %1$d quotes within each other.',

	'SAVE'						=> 'Save',
	'SAVE_DATE'					=> 'Saved at',
	'SAVE_DRAFT'				=> 'Save draft',
	'SAVE_DRAFT_CONFIRM'		=> 'Please note that saved drafts only include the subject and the message, any other element will be removed. Do you want to save your draft now?',
	'SMILIES'					=> 'Smilies',
	'SMILIES_ARE_OFF'			=> 'Smilies are <em>OFF</em>',
	'SMILIES_ARE_ON'			=> 'Smilies are <em>ON</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Sticky/Announcement time limit',
	'STICK_TOPIC_FOR'			=> 'Stick topic for',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Enter 0 or leave blank for a never ending Sticky/Announcement',
	'STYLES_TIP'				=> 'Tip: Styles can be applied quickly to selected text',

	'TOO_FEW_CHARS'				=> 'Your message contains too few characters.',
	'TOO_FEW_POLL_OPTIONS'		=> 'You must enter at least two poll options',
	'TOO_MANY_ATTACHMENTS'		=> 'Cannot add another attachment, %d is the maxmimum.',
	'TOO_MANY_CHARS'			=> 'Your message contains too many characters.',
	'TOO_MANY_POLL_OPTIONS'		=> 'You have tried to enter too many poll options',
	'TOO_MANY_SMILIES'			=> 'Your message contains too many smilies. The maximum number of smilies allowed is %d.',
	'TOO_MANY_URLS'				=> 'Your message contains too many URLs. The maximum number of URLs allowed is %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'You cannot specify more options per user than existing poll options',
	'TOPIC_BUMPED'				=> 'Topic has been bumped successfully',

	'UNAUTHORISED_BBCODE'		=> 'You cannot use certain BBCodes: %s',
	'UNGLOBALISE_EXPLAIN'		=> 'To switch this topic back from being global to a normal topic, you need to select the forum you wish this topic to be displayed.',
	'UPDATE_COMMENT'			=> 'Update comment',
	'URL_INVALID'				=> 'The URL you specified is invalid.',
	'URL_NOT_FOUND'				=> 'The file specified could not be found.',
	'URL_IS_OFF'				=> '[url] is <em>OFF</em>',
	'URL_IS_ON'					=> '[url] is <em>ON</em>',
	'USER_CANNOT_BUMP'			=> 'You cannot bump topics in this forum',
	'USER_CANNOT_DELETE'		=> 'You cannot delete posts in this forum',
	'USER_CANNOT_EDIT'			=> 'You cannot edit posts in this forum',
	'USER_CANNOT_REPLY'			=> 'You cannot reply in this forum',
	'USER_CANNOT_FORUM_POST'	=> 'You are not able to do posting operations on this forum due to the forum type not supporting it.',

	'VIEW_MESSAGE'				=> '%sView your submitted message%s',

	'WRONG_FILESIZE'			=> 'The file is too big, maximum allowed size is %1d %2s',
	'WRONG_SIZE'				=> 'The image must be at least %1$d pixels wide, %2$d pixels high and at most %3$d pixels wide and %4$d pixels high. The submitted image is %5$d pixels wide and %6$d pixels high.',
));

?>