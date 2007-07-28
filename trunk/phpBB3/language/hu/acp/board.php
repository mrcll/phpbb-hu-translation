<?php
/**
*
* acp_board [Hungarian]
*
* @package language
* @version $Id: board.php,v 1.9 2007-07-28 20:59:59 fberci Exp $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Itt a fórumod alapvető működését tudod meghatározni, adhatsz neki egy hozzáillő nevet és leírást, valamint többek között beállíthatod az alapértelmezett nyelvet és időzónát.',
	'CUSTOM_DATEFORMAT'				=> 'Egyéni…',
	'DEFAULT_DATE_FORMAT'			=> 'Dátum formátum',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'A formátum megegyezik a PHP <code>date</code> függvényéjével.',
	'DEFAULT_LANGUAGE'				=> 'Alapértelmezett nyelv',
	'DEFAULT_STYLE'					=> 'Alapértelmezett megjelenés',
	'DISABLE_BOARD'					=> 'Fórum kikapcsolása',
	'DISABLE_BOARD_EXPLAIN'			=> 'Ennek igenre állításával a fórum nem lesz elérhető a felhasználók számára. Egy rövid üzenetet is megadhatsz (legfeljebb 255 karakter), mely meg fog jelenni a felhasználóknak.',
	'OVERRIDE_STYLE'				=> 'Felhasználó megjelenésének felülírása',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Kicseréli a felhasználó megjelenését az alapértelmezettre.',
	'SITE_DESC'						=> 'Oldal leírása',
	'SITE_NAME'						=> 'Oldal neve',
	'SYSTEM_DST'					=> 'Nyári időszámítás bekapcsolása',
	'SYSTEM_TIMEZONE'				=> 'Rendszer időzóna',
	'WARNINGS_EXPIRE'				=> 'Figyelmeztetés időtartama',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Ennyi nap elteltével jár le a felhasználó figyelmeztetése.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Itt ki- illetve bekapcsolhatod a fórum különböző funkcióit.',

	// Nem lenne jobb a bekapcsolás jobb az engedélyezés helyett?
	'ALLOW_ATTACHMENTS'			=> 'Csatolmányok engedélyezése',
 	'ALLOW_BIRTHDAYS'			=> 'Születésnapok engedélyezése',
 	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'A születésnapok megadási és a profilban való megjelenési lehetőségének engedélyezése. Kérjük, vedd figyelembe, hogy a születésnaposok főoldalon való megjelenítését a terhelés beállításoknál tudod be- ill. kikapcsolni.',
	'ALLOW_BOOKMARKS'			=> 'Kedvencek engedélyezése',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'A felhasználó eltárolhatja a kedvenc témáit.',
	'ALLOW_BBCODE'				=> 'BBCode engedélyezése',
	'ALLOW_FORUM_NOTIFY'		=> 'Fórumokra való feliratkozás engedélyezése',
	'ALLOW_NAME_CHANGE'			=> 'Felhasználónév-váltás engedélyezése',
	'ALLOW_NO_CENSORS'			=> 'Szócenzúra kikapcsolásának engedélyezése',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'A felhasználók ha, szeretnék, kikapcsolhatják az automatikus szócenzúrát a hozzászólásokban és a privát üzenetekben.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Csatolmányok engedélyezése privát üzenetekben',
	'ALLOW_SIG'					=> 'Aláírás engedélyezése',
	'ALLOW_SIG_BBCODE'			=> 'BBCode engedélyezése aláírásban',
	'ALLOW_SIG_FLASH'			=> '<code>[FLASH]</code> BBCode címke használatának engedélyezése aláírásban',
	'ALLOW_SIG_IMG'				=> '<code>[IMG]</code> BBCode címke használatának engedélyezése aláírásban',
	'ALLOW_SIG_LINKS'			=> 'Linkek használatának engedélyezése aláírásban',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Ha nem engedélyezett, az <code>[URL]</code> BBCode címke nem használható, és az automatikus linkké alakítás ki van kapcsolva.',
	'ALLOW_SIG_SMILIES'			=> 'Emotikonok használatának engedélyezése az aláírásban',
	'ALLOW_SMILIES'				=> 'Emotikonok engedélyezése',
	'ALLOW_TOPIC_NOTIFY'		=> 'Témákra való feliratkozás engedélyezése',
	'BOARD_PM'					=> 'Privát üzenetek bekapcsolása',
	'BOARD_PM_EXPLAIN'			=> 'A privát üzenetküldő rendszer ki- vagy bekapcsolása az összes felhasználó számára.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Az avatarok általánosan kis, egyedi képek, melyeket a felhasználók magukhoz társítanak. A témák megtekintésénél általában a felhasználónév alatt jelennek meg a használt megjelenéstől függően. Ezen az oldalon meghatározhatod, hogy a felhasználók milyen módon adhatják meg az avatarukat. Kérjük, vedd figyelembe, hogy az avatarok feltöltésének műkédéséhez az alább megadott könyvtárnak léteznie kell, és meg kell győzödnöd róla, hogy írható a webszerver által. Kérjük, azt is vedd figyelembe, hogy a maximális állomány méretek csak a feltöltött avatarokra vonatkoznak, a kívülről linkeltekre nem.',

	'ALLOW_LOCAL'					=> 'Avatar galéria bekapcsolása',
	'ALLOW_REMOTE'					=> 'Külső avatarok engedélyezése',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Olyan avatarok, melyek egy külső oldalról vannak linkelve.',
	'ALLOW_UPLOAD'					=> 'Avatarfeltöltés engedélyezése',
	'AVATAR_GALLERY_PATH'			=> 'Avatar galéria elérési út',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út az előre feltöltött képekhez, pl. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Avatarok tárolási helyének elérési útja',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'A phpBB-d gyökérkönyvtárától viszonyított elérési út, pl. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Maximum avatar méret',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Magasság x szélesség pixelben.',
	'MAX_FILESIZE'					=> 'Maximum avatar állomány méret',
	'MAX_FILESIZE_EXPLAIN'			=> 'Csak a feltöltött avatarokra vonatkozik.',
	'MIN_AVATAR_SIZE'				=> 'Minimum avatar méret',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Magasság x szélesség pixelben.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Ezen az oldalon a privát üzenetekkel kapcsolatos beállításokat adhatod meg.',

	'ALLOW_BBCODE_PM'			=> 'BBCode engedélyezése privát üzenetben',
	'ALLOW_FLASH_PM'			=> '<code>[FLASH]</code> BBCode címke használatának engedélyezése',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Kérjük vedd figyelembe, hogy ha igenre van állítva, a beállítás még a jogosultságoktól is függ.',
	'ALLOW_FORWARD_PM'			=> 'Privát üzenetek továbbküldésének engedélyezése',
	'ALLOW_IMG_PM'				=> '<code>[IMG]</code> BBCode címke használatának engedélyezése',
	'ALLOW_MASS_PM'				=> 'Privát üzenet küldésének engedélyezése egyszerre több felhasználónak és csoportnak',
	'ALLOW_PRINT_PM'			=> 'Privát üzenetek nyomtatóbarát verziójának engedélyezése',
	'ALLOW_QUOTE_PM'			=> 'Idézetek engedélyezése privát üzenetekben',
	'ALLOW_SIG_PM'				=> 'Aláírás engedélyezése privát üzenetekhez',
	'ALLOW_SMILIES_PM'			=> 'Emotikonok engedélyezése privát üzenetekben',
	'BOXES_LIMIT'				=> 'Maximum privát üzenetek száma mappánként',
	'BOXES_LIMIT_EXPLAIN'		=> 'A felhasználók legfeljebb ennyi privát üzenetet kaphatnak az egyes mappájukba. Állítsd 0-ra, hogy ne legyen korlát.',
	'BOXES_MAX'					=> 'Maximum privát üzenet mappák száma',
	'BOXES_MAX_EXPLAIN'			=> 'Alapból a felhasználók ennyi személyes mappát hozhatnak létre a privát üzeneteiknek.',
	'ENABLE_PM_ICONS'			=> 'Téma ikonok használatának engedélyezése privát üzenetekben',
	'FULL_FOLDER_ACTION'		=> 'Alapértelmezett művelet egy mappa megtelése esetén',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Ez a művelet kerül elvégzésre, ha egy mappa megtelik, és a felhasználó beállítása – ha egyáltalán megadta – nem alkalmazható. Az egyedüli kivétel az „Elküldött üzenetek” mappa, ahol mindig a régi üzenetek törlése az alapértelmezett.',
	'HOLD_NEW_MESSAGES'			=> 'Új üzenetek visszatartása',
	'PM_EDIT_TIME'				=> 'Szerkesztés idejének korlátozása',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Korlátozza, hogy mennyi ideig lehet szerkeszteni a még nem kézbesített privát üzeneteket. A 0 érték megadásával kikapcsolható ez a viselkedés.', //?
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Itt a hozzászólásküldéssel kapcsolatos beállításokat adhatod meg.',
	'ALLOW_POST_LINKS'					=> 'Linkek engedélyezése hozzászólásokban ill. privát üzenetekben',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Ha nem engedélyezett, az <code>[URL]</code> BBCode címke nem használható, és az automatikus linkké alakítás ki van kapcsolva.',
	'ALLOW_POST_FLASH'					=> '<code>[FLASH]</code> BBCode címke használatának engedélyezése hozzászólásokban',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Ha nem engedélyezett, a <code>[FLASH]</code> címke nem használható a hozzászólásokban. Máskülönben a jogosultságoktól függ, használható-e a <code>[FLASH]</code> BBCode címke.',

	'BUMP_INTERVAL'					=> 'Előreugrasztás időköz', //?
	'BUMP_INTERVAL_EXPLAIN'			=> 'Az utolsó hozzászólás után ennyi idő múlva lehet előreugrasztani egy témát.',
	'CHAR_LIMIT'					=> 'Hozzászólásonkénti maximum karakterszám',
	'CHAR_LIMIT_EXPLAIN'			=> 'Hány karakter engedélyezett egy hozzászólásban. Állítsd 0-ra a korlátozás megszüntetéséhez.',
	'DISPLAY_LAST_EDITED'			=> 'Utolsó szerkesztés információk megjelenítése',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Megjelenjen-e egy hozzászólásnál, hogy ki és mikor szerkesztette utoljára.',
	'EDIT_TIME'						=> 'Szerkesztés idejének korlátozása',
	'EDIT_TIME_EXPLAIN'				=> 'Korlátozza, hogy az elküldés után mennyi ideig lehet szerkeszteni a hozzászólást. 0 érték megadásával a korlátozás kikapcsolható.',
	'FLOOD_INTERVAL'				=> 'Flood időköz', //?
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Ennyi másodpercet kell várnia a felhasználónak két hozzászólás elküldése között. A jogosultságok segítségével beállíthatod, hogy egyes felhasználókra ez ne vonatkozzon.',
	'HOT_THRESHOLD'					=> 'Népszerűségi küszöb',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Ennyi hozzászólást tartalmazó témák kerülnek népszerűként megjelölésre. A népszerű témák funkció kikapcsolásához állítsd ezt az értéket 0-ra.',
	'MAX_POLL_OPTIONS'				=> 'Maximum választási lehetőségek száma szavazásoknál',
	'MAX_POST_FONT_SIZE'			=> 'Maximum betűméret egy hozzászólásban',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Maximum betűméret, ami megengedett a hozzászólásokban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_POST_IMG_HEIGHT'			=> 'Maximum képmagasság egy hozzászólásban',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Legfeljebb ilyen magas lehet egy kép/flash állomány. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_POST_IMG_WIDTH'			=> 'Maximum képszélesség egy hozzászólásban',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Legfeljebb ilyen széles lehet egy kép/flash állomány. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'MAX_POST_URLS'					=> 'Maximum linkszám egy hozzászólásban',
	'MAX_POST_URLS_EXPLAIN'			=> 'Legfeljebb ennyi URL-t tartalmazhat egy hozzászólás. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'POSTING'						=> 'Hozzászólásküldés',
	'POSTS_PER_PAGE'				=> 'Hozzászólások száma oldalanként',
	'QUOTE_DEPTH_LIMIT'				=> 'Maximum egymásba ágyazott idézet egy hozzászólásban',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Legfeljebb ennyi idézet lehet egymásba ágyazva egy hozzászólásban. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'SMILIES_LIMIT'					=> 'Maximum emotikonszám egy hozzászólásban',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Legfeljebb ennyi emotikont tartalmazhat egy hozzászólás. Állítsd 0-ra, hogy ne legyen korlátozás.',
	'TOPICS_PER_PAGE'				=> 'Témák száma oldalanként',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Here you can set all default settings for signatures.',

	'MAX_SIG_FONT_SIZE'				=> 'Maximum signature font size',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Maximum font size allowed in user signatures. Set to 0 for unlimited size.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Maximum signature image height',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Maximum height of an image/flash file in user signatures. Set to 0 for unlimited height.',
	'MAX_SIG_IMG_WIDTH'				=> 'Maximum signature image width',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Maximum width of an image/flash file in user signatures. Set to 0 for unlimited width.',
	'MAX_SIG_LENGTH'				=> 'Maximum signature length',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Maximum number of characters in user signatures.',
	'MAX_SIG_SMILIES'				=> 'Maximum smilies per signature',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Maximum smilies allowed in user signatures. Set to 0 for unlimited smilies.',
	'MAX_SIG_URLS'					=> 'Maximum signature links',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Maximum number of links in user signatures. Set to 0 for unlimited links.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Here you are able to define registration and profile related settings.',

	'ACC_ACTIVATION'			=> 'Account activation',
	'ACC_ACTIVATION_EXPLAIN'	=> 'This determines whether users have immediate access to the board or if confirmation is required. You can also completely disable new registrations.',
	'ACC_ADMIN'					=> 'By Admin',
	'ACC_DISABLE'				=> 'Disable',
	'ACC_NONE'					=> 'None',
	'ACC_USER'					=> 'By User',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Allow e-mail address re-use',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Different users can register with the same e-mail address.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA fax number',
	'COPPA_MAIL'				=> 'COPPA mailing address',
	'COPPA_MAIL_EXPLAIN'		=> 'This is the mailing address where parents will send COPPA registration forms.',
	'ENABLE_COPPA'				=> 'Enable COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'This requires users to declare whether they are 13 or over for compliance with the U.S. COPPA. If this is disabled the COPPA specific groups will no longer be displayed.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'No suitable auth plugin found.',
	'PASSWORD_LENGTH'			=> 'Password length',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Minimum and maximum number of characters in passwords.',
	'REG_LIMIT'					=> 'Registration attempts',
	'REG_LIMIT_EXPLAIN'			=> 'Number of attempts users can make at the confirmation code before being locked out that session.',
	'USERNAME_ALPHA_ONLY'		=> 'Alphanumeric only',
	'USERNAME_ALPHA_SPACERS'	=> 'Alphanumeric and spacers',
	'USERNAME_ASCII'			=> 'ASCII (no international unicode)',
	'USERNAME_LETTER_NUM'		=> 'Any letter and number',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Any letter, number, and spacer',
	'USERNAME_CHARS'			=> 'Limit username chars',
	'USERNAME_CHARS_ANY'		=> 'Any character',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restrict type of characters that may be used in usernames, spacers are: space, -, +, _, [ and ].',
	'USERNAME_LENGTH'			=> 'Username length',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimum and maximum number of characters in usernames.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Here you are able to define visual confirmation defaults and CAPTCHA settings.',

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA foreground noise',
	'CAPTCHA_GD_EXPLAIN'					=> 'Use GD to make a more advanced CAPTCHA.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Use foreground noise to make the GD based CAPTCHA harder.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA background noise x-axis',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Use lower settings of this to make the GD based CAPTCHA harder. 0 will disable x-axis background noise.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA background noise y-axis',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Use lower settings of this to make the GD based CAPTCHA harder. 0 will disable y-axis background noise.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Your changes to the visual confirmation setting were not saved. This is just a preview.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'The CAPTCHA as it will look like using the current settings. Use the preview button to refresh. Note that captchas are randomized and will differ from one view to the next.',
	'VISUAL_CONFIRM_POST'					=> 'Enable visual confirmation for guest postings',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Requires anonymous users to enter a random code matching an image to help prevent mass postings.',
	'VISUAL_CONFIRM_REG'					=> 'Enable visual confirmation for registrations',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Requires new users to enter a random code matching an image to help prevent mass registrations.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'These details define the data used to send cookies to your users browsers. In most cases the default values for the cookie settings should be sufficient. If you do need to change any do so with care, incorrect settings can prevent users logging in.',

	'COOKIE_DOMAIN'				=> 'Cookie domain',
	'COOKIE_NAME'				=> 'Cookie name',
	'COOKIE_PATH'				=> 'Cookie path',
	'COOKIE_SECURE'				=> 'Cookie secure',
	'COOKIE_SECURE_EXPLAIN'		=> 'If your server is running via SSL set this to enabled else leave as disabled. Having this enabled and not running via SSL will result in server errors during redirects.',
	'ONLINE_LENGTH'				=> 'View online time span',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Number of minutes after which inactive users will not appear in “Who is online” listings. The higher this value the greater is the processing required to generate the listing.',
	'SESSION_LENGTH'			=> 'Session length',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessions will expire after this time, in seconds.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Here you can enable and disable certain board functions to reduce the amount of processing required. On most servers there is no need to disable any functions. However on certain systems or in shared hosting environments it may be beneficial to disable capabilities you do not really need. You can also specify limits for system load and active sessions beyond which the board will go offline.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Custom profile fields',
	'LIMIT_LOAD'					=> 'Limit system load',
	'LIMIT_LOAD_EXPLAIN'			=> 'If the system’s 1-minute load average exceeds this value the board will automatically go offline. A value of 1.0 equals ~100% utilisation of one processor. This only functions on UNIX based servers and where this information is accessible. The value here resets itself to 0 if phpBB was unable to get the load limit.',
	'LIMIT_SESSIONS'				=> 'Limit sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'If the number of sessions exceeds this value within a one minute period the board will go offline. Set to 0 for unlimited sessions.',
	'LOAD_CPF_MEMBERLIST'			=> 'Allow styles to display custom profile fields in memberlist',
	'LOAD_CPF_VIEWPROFILE'			=> 'Display custom profile fields in user profiles',
	'LOAD_CPF_VIEWTOPIC'			=> 'Display custom profile fields on topic pages',
	'LOAD_USER_ACTIVITY'			=> 'Show user’s activity',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Displays active topic/forum in user profiles and user control panel. It is recommended to disable this on boards with more than one million posts.',
	'RECOMPILE_STYLES'				=> 'Recompile stale style components',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Check for updated style components on filesystem and recompile.',
	'YES_ANON_READ_MARKING'			=> 'Enable topic marking for guests',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Stores read/unread status information for guests. If disabled posts are always read for guests.',
	'YES_BIRTHDAYS'					=> 'Enable birthday listing',
 	'YES_BIRTHDAYS_EXPLAIN'			=> 'If disabled the birthday listing is no longer displayed. To let this setting take effect the birthday feature need to be enabled too.',
	'YES_JUMPBOX'					=> 'Enable display of jumpbox',
	'YES_MODERATORS'				=> 'Enable display of moderators',
	'YES_ONLINE'					=> 'Enable online user listings',
	'YES_ONLINE_EXPLAIN'			=> 'Display online user information on index, forum and topic pages.',
	'YES_ONLINE_GUESTS'				=> 'Enable online guest listings in viewonline',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Allow display of guest user information in viewonline.',
	'YES_ONLINE_TRACK'				=> 'Enable display of user online/offline information',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Display online information for user in profiles and topic pages.',
	'YES_POST_MARKING'				=> 'Enable dotted topics',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indicates whether user has posted to a topic.',
	'YES_READ_MARKING'				=> 'Enable server-side topic marking',
	'YES_READ_MARKING_EXPLAIN'		=> 'Stores read/unread status information in the database rather than a cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB supports authentication plug-ins, or modules. These allow you determine how users are authenticated when they log into the board. By default three plug-ins are provided; DB, LDAP and Apache. Not all methods require additional information so only fill out fields if they are relevant to the selected method.',

	'AUTH_METHOD'				=> 'Select an authentication method',

	'APACHE_SETUP_BEFORE_USE'	=> 'You have to setup apache authentication before you switch phpBB to this authentication method. Keep in mind that the username you use for apache authentication has to be the same as your phpBB username. Apache authentication can only be used with mod_php (not with a CGI version) and safe_mode disabled.',

	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'This is the Distinguished Name, locating the user information, e.g. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP e-mail attribute',
	'LDAP_EMAIL_EXPLAIN'			=> 'Set this to the name of your user entry e-mail attribute (if one exists) in order to automatically set the e-mail address for new users. Leaving this empty results in empty e-mail address for users who log in for the first time.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Binding to LDAP server failed with specified user/password.',
	'LDAP_NO_EMAIL'					=> 'The specified e-mail attribute does not exist.',
	'LDAP_NO_IDENTITY'				=> 'Could not find a login identity for %s.',
	'LDAP_PASSWORD'					=> 'LDAP password',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Leave blank to use anonymous access. Else fill in the password for the above user. <strong>WARNING:</strong> This password will be stored as plain text in the database visible to everybody who can access your database.',
	'LDAP_SERVER'					=> 'LDAP server name',
	'LDAP_SERVER_EXPLAIN'			=> 'If using LDAP this is the name or IP address of the server.',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'This is the key under which to search for a given login identity, e.g. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'LDAP user',
	'LDAP_USER_EXPLAIN'				=> 'Leave blank to use anonymous access. If filled in phpBB will connect to the LDAP server as the specified user.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Here you define server and domain dependant settings. Please ensure the data you enter is accurate, errors will result in e-mails containing incorrect information. When entering the domain name remember it does include http:// or other protocol term. Only alter the port number if you know your server uses a different value, port 80 is correct in most cases.',

	'ENABLE_GZIP'				=> 'Enable GZip compression',
	'ENABLE_GZIP_EXPLAIN'		=> 'Generated content will be compressed prior to sending it to the user. This can reduce network traffic but will also increase CPU usage on both server and client side.',
	'FORCE_SERVER_VARS'			=> 'Force server URL settings',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'If set to yes the server settings defined here will be used in favour of the automatically determined values.',
	'ICONS_PATH'				=> 'Post icons storage path',
	'ICONS_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'Path settings',
	'RANKS_PATH'				=> 'Rank image storage path',
	'RANKS_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Script path',
	'SCRIPT_PATH_EXPLAIN'		=> 'The path where phpBB is located relative to the domain name, e.g. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domain name',
	'SERVER_NAME_EXPLAIN'		=> 'The domain name this board runs from (for example: <samp>www.foo.bar</samp>).',
	'SERVER_PORT'				=> 'Server port',
	'SERVER_PORT_EXPLAIN'		=> 'The port your server is running on, usually 80, only change if different.',
	'SERVER_PROTOCOL'			=> 'Server protocol',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'This is used as the server protocol if these settings are forced. If empty or not forced the protocol is determined by the cookie secure settings (<samp>http://</samp> or <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Server URL settings',
	'SMILIES_PATH'				=> 'Smilies storage path',
	'SMILIES_PATH_EXPLAIN'		=> 'Path under your phpBB root directory, e.g. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Extension group icons storage path',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Path under your phpBB root directory, e.g. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Here you are able to define session and login related settings.',

	'ALL'							=> 'All',
	'ALLOW_AUTOLOGIN'				=> 'Allow persistent logins',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determines whether users can autologin when they visit the board.',
	'AUTOLOGIN_LENGTH'				=> 'Persistent login key expiration length (in days)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Number of days after which persistent login keys are removed or zero to disable.',
	'BROWSER_VALID'					=> 'Validate browser',
	'BROWSER_VALID_EXPLAIN'			=> 'Enables browser validation for each session improving security.',
	'CHECK_DNSBL'					=> 'Check IP against DNS Blackhole List',
	'CHECK_DNSBL_EXPLAIN'			=> 'If enabled the user’s IP address is checked against the following DNSBL services on registration and posting: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> and <a href="http://spamhaus.org">spamhaus.org</a>. This lookup may take a while, depending on the server’s configuration. If slowdowns are experienced or too many false positives reported it is recommended to disable this check.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Check e-mail domain for valid MX record',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'If enabled, the e-mail domain provided on registration and profile changes is checked for a valid MX record.',
	'FORCE_PASS_CHANGE'				=> 'Force password change',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Require user to change their password after a set number of days. Setting this value to 0 disables this behaviour.',
	'FORWARDED_FOR_VALID'			=> 'Validated <var>X_FORWARDED_FOR</var> header',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessions will only be continued if the sent <var>X_FORWARDED_FOR</var> header equals the one sent with the previous request. Bans will be checked against IPs in <var>X_FORWARDED_FOR</var> too.',
	'IP_VALID'						=> 'Session IP validation',
	'IP_VALID_EXPLAIN'				=> 'Determines how much of the users IP is used to validate a session; <samp>All</samp> compares the complete address, <samp>A.B.C</samp> the first x.x.x, <samp>A.B</samp> the first x.x, <samp>None</samp> disables checking. On IPv6 addresses <samp>A.B.C</samp> compares the first 4 blocks and <samp>A.B</samp> the first 3 blocks.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Maximum number of login attempts',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'After this number of failed logins the user needs to additionally confirm his login visually (visual confirmation).',
	'NO_IP_VALIDATION'				=> 'None',
	'PASSWORD_TYPE'					=> 'Password complexity',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determines how complex a password needs to be when set or altered, subsequent options include the previous ones.',
	'PASS_TYPE_ALPHA'				=> 'Must contain letters and numbers',
	'PASS_TYPE_ANY'					=> 'No requirements',
	'PASS_TYPE_CASE'				=> 'Must be mixed case',
	'PASS_TYPE_SYMBOL'				=> 'Must contain symbols',
	'TPL_ALLOW_PHP'					=> 'Allow php in templates',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'If this option is enabled, <code>PHP</code> and <code>INCLUDEPHP</code> statements will be recognised and parsed in templates.',
));

// Email Settings
$lang = array_merge($lang, array(
 	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'This information is used when the board sends e-mails to your users. Please ensure the e-mail address you specify is valid, any bounced or undeliverable messages will likely be sent to that address. If your host does not provide a native (PHP based) e-mail service you can instead send messages directly using SMTP. This requires the address of an appropriate server (ask your provider if necessary). If the server requires authentication (and only if it does) enter the necessary username, password and authentication method.',

	'ADMIN_EMAIL'					=> 'Return e-mail address',
	'ADMIN_EMAIL_EXPLAIN'			=> 'This will be used as the return address on all e-mails, the technical contact e-mail address. It will always be used as the <samp>Return-Path</samp> and <samp>Sender</samp> address in e-mails.',
	'BOARD_EMAIL_FORM'				=> 'Users send e-mail via board',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Instead of showing the users e-mail address users are able to send e-mails via the board.',
	'BOARD_HIDE_EMAILS'				=> 'Hide e-mail addresses',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'This function keeps e-mail addresses completely private.',
	'CONTACT_EMAIL'					=> 'Contact e-mail address',
	'CONTACT_EMAIL_EXPLAIN'			=> 'This address will be used whenever a specific contact point is needed, e.g. spam, error output, etc. It will always be used as the <samp>From</samp> and <samp>Reply-To</samp> address in e-mails.',
	'EMAIL_FUNCTION_NAME'			=> 'E-mail function name',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'The e-mail function used to send mails through PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'E-mail package size',
 	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'This is the number of maximum e-mails sent out in one package. This setting is applied to the internal message queue; set this value to 0 if you have problems with non-delivered notification emails.',
	'EMAIL_SIG'						=> 'E-mail signature',
	'EMAIL_SIG_EXPLAIN'				=> 'This text will be attached to all e-mails the board sends.',
	'ENABLE_EMAIL'					=> 'Enable board-wide e-mails',
	'ENABLE_EMAIL_EXPLAIN'			=> 'If this is set to disabled no e-mails will be sent by the board at all.',
	'SMTP_AUTH_METHOD'				=> 'Authentication method for SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Only used if a username/password is set, ask your provider if you are unsure which method to use.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP password',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Only enter a password if your SMTP server requires it.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP server port',
	'SMTP_PORT_EXPLAIN'				=> 'Only change this if you know your SMTP server is on a different port.',
	'SMTP_SERVER'					=> 'SMTP server address',
	'SMTP_SETTINGS'					=> 'SMTP settings',
	'SMTP_USERNAME'					=> 'SMTP username',
	'SMTP_USERNAME_EXPLAIN'			=> 'Only enter a username if your SMTP server requires it.',
	'USE_SMTP'						=> 'Use SMTP server for e-mail',
	'USE_SMTP_EXPLAIN'				=> 'Select “Yes” if you want or have to send e-mail via a named server instead of the local mail function.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Here you can enable and control the use of Jabber for instant messaging and board notifications. Jabber is an open source protocol and therefore available for use by anyone. Some Jabber servers include gateways or transports which allow you to contact users on other networks. Not all servers offer all transports and changes in protocols can prevent transports from operating. Please be sure to enter already registered account details - phpBB will use the details you enter here as is.',

	'ERR_JAB_AUTH'			=> 'Could not authorise on Jabber server.',
	'ERR_JAB_CONNECT'		=> 'Could not connect to Jabber server.',
	'JAB_ENABLE'				=> 'Enable Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Enables use of Jabber messaging and notifications.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber package size',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'This is the number of messages sent in one package. If set to 0 the message is sent immediately and will not be queued for later sending.',
	'JAB_PASSWORD'				=> 'Jabber password',
	'JAB_PORT'					=> 'Jabber port',
	'JAB_PORT_EXPLAIN'			=> 'Leave blank unless you know it is not port 5222.',
	'JAB_SERVER'				=> 'Jabber server',
	'JAB_SERVER_EXPLAIN'		=> 'See %sjabber.org%s for a list of servers.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber settings changed successfully.',
	'JAB_USE_SSL'				=> 'Use SSL to connect',
	'JAB_USE_SSL_EXPLAIN'		=> 'If enabled a secure connection is tried to be established. The Jabber port will be modified to 5223 if port 5222 is specified.',
	'JAB_USERNAME'				=> 'Jabber username',
	'JAB_USERNAME_EXPLAIN'		=> 'Specify a registered username. The username will not be checked for validity.',
));

?>