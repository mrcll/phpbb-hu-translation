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
	'ALL_AVAILABLE'			=> 'összes',
	'ALL_RESULTS'			=> 'Összes találat',

	'DISPLAY_RESULTS'		=> 'Találatok megjelenítése',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> '%d találat',
		2	=> '%d találat',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Több, mint %d találat',
		2	=> 'Több, mint %d találat',
	),

	'GLOBAL'				=> 'Globális közlemény',

	'IGNORED_TERMS'			=> 'mellőzött',
	'IGNORED_TERMS_EXPLAIN'	=> 'A következő szavak mellőzésre kerültek a keresési kifejezésből: <strong>%s</strong>',

	'JUMP_TO_POST'			=> 'Ugrás a hozzászóláshoz',

 	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'A saját hozzászólásai megtekintéséhez be kell jelentkeznie.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Az olvasatlan hozzászólásainak megtekintéséhez be kell jelentkeznie.',
		'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Az utolsó látogatása óta keletkezett hozzászólásainak megtekintéséhez be kell jelentkeznie.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Túl sok keresendő szót adott meg. Kérjük, legfeljebb %1$d szót adjon meg.',
		2	=> 'Túl sok keresendő szót adott meg. Kérjük, legfeljebb %1$d szót adjon meg.',
	),

	'NO_KEYWORDS'			=> 'Legalább egy keresendő szót meg kell adnia. Minden szónak, a jokerkaraktereket nem számítva, legalább %s és legfeljebb %s karakterből kell állnia.', //? helyettesítő jel: *
	'NO_RECENT_SEARCHES'	=> 'Nem történt keresés a közelmúltban.',
	'NO_SEARCH'				=> 'Sajnos az ön számára nem engedélyezett a kereső használata.',
	'NO_SEARCH_RESULTS'		=> 'Nincs a keresési feltételeknek megfelelő találat.', //? "No suitable matches were found."
	'NO_SEARCH_LOAD'		=> 'Sajnos a kereső a szerver terheltsége miatt jelenleg nem használható. Kérjük, próbálkozz később.', //bb31
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Most nem használhatja a keresőt. Kérjük, próbálkozzon újra %d másodperc múlva.',
		2	=> 'Most nem használhatja a keresőt. Kérjük, próbálkozzon újra %d másodperc múlva.',
	),
	'NO_SEARCH_UNREADS'		=> 'Sajnos az olvasatlan hozzászólásokra való keresés ki van kapcsolva ezen a fórumon.',
	'WORD_IN_NO_POST'		=> 'Nincs találat, mivel a <strong>%s</strong> szót nem tartalmazza egy hozzászólás sem.',
	'WORDS_IN_NO_POST'		=> 'Nincs találat, mivel a <strong>%s</strong> szavakat nem tartalmazza egy hozzászólás sem.',

	'POST_CHARACTERS'		=> 'karakterének megjelenítése',
	'PHRASE_SEARCH_DISABLED'	=> 'A pontos kifejezés alapján történő keresés ezen a fórumon nem támogatott.', //bb31

	'RECENT_SEARCHES'		=> 'Legutóbbi keresések',
	'RESULT_DAYS'			=> 'Időintervallum', //?
	'RESULT_SORT'			=> 'Találatok rendezése',
	'RETURN_FIRST'			=> 'Hozzászólások első',
	'GO_TO_SEARCH_ADV'	=> 'Ugrás a részletes kereséshez', //bb31

	'SEARCHED_FOR'				=> 'Keresett kifejezés', //?
	'SEARCHED_TOPIC'			=> 'Keresett téma',
	'SEARCHED_QUERY'			=> 'Keresési kifejezés',
	'SEARCH_ALL_TERMS'			=> 'Keresés az összes szóra vagy a keresési kifejezés pontos használata', //?? "Search for all terms or use query as entered"
	'SEARCH_ANY_TERMS'			=> 'Keresés bármely szóra',
	'SEARCH_AUTHOR'				=> 'Szerző',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Részleges szavakhoz használja a * jokerkaraktert.',
	'SEARCH_FIRST_POST'			=> 'Csak témák első hozzászólása',
	'SEARCH_FORUMS'				=> 'Fórumok', //? 'Keresett fórumok'
	'SEARCH_FORUMS_EXPLAIN'		=> 'Válassza ki azokat a fórumokat, melyben keresni szeretne. A keresés automatikusan megtörténik az alfórumokban is, hacsak alább nem kapcsolta ki a „keresés az alfórumokban” beállítást.',
	'SEARCH_IN_RESULTS'			=> 'Keresés a találatokban',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Írjon „<strong>+</strong>”-t a keresett, valamint „<strong>-</strong>”-t a kizárandó  szavak elé. Ha több szóból csak egy megtalálása is elég, készítsen ezekből a szavakból egy „<strong>|</strong>” jellel elválasztott listát, és tegye az egészet zárójelek közé. Részleges szavakhoz használja a * jokerkaraktert.', //? "Place <strong>+</strong> in front of a word which must be found and <strong>-</strong> in front of a word which must not be found. Put a list of words separated by <strong>|</strong> into brackets if only one of the words must be found. Use * as a wildcard for partial matches."
	'SEARCH_MSG_ONLY'			=> 'Csak üzenetek szövege',
	'SEARCH_OPTIONS'			=> 'Keresési beállítások',
	'SEARCH_QUERY'				=> 'Keresési feltételek',
	'SEARCH_SUBFORUMS'			=> 'Keresés az 	alfórumokban',
	'SEARCH_TITLE_MSG'			=> 'Hozzászólások témája és üzenetek szövege',
	'SEARCH_TITLE_ONLY'			=> 'Csak témák címe',
	'SEARCH_WITHIN'				=> 'Keresés tárgya', //??
	'SORT_ASCENDING'			=> 'Növekvő sorrend',
	'SORT_AUTHOR'				=> 'Szerző',
	'SORT_DESCENDING'			=> 'Csökkenő sorrend',
	'SORT_FORUM'				=> 'Fórum',
	'SORT_POST_SUBJECT'			=> 'Hozzászólás témája',
	'SORT_TIME'					=> 'Elküldés időpontja',
	'SPHINX_SEARCH_FAILED'		=> 'Hiba történt a keresés közben: %s', //bb31
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Sajnáljuk, a keresést nem lehetett elvégezni. További információk kerültek rögzítésre a hibanaplóban.', //bb31

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'A szerző nevéből legalább %d karaktert meg kell adnia.',
		2	=> 'A szerző nevéből legalább %d karaktert meg kell adnia.',
	),
));
