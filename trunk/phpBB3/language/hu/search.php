<?php
/** 
*
* search [Hungarian]
*
* @package language
* @version $Id: search.php,v 1.4 2007-03-15 21:01:18 fberci Exp $
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
	'ALL_AVAILABLE'			=> '�sszes',
	'ALL_RESULTS'			=> '�sszes tal�lat',

	'DISPLAY_RESULTS'		=> 'Tal�latok megjelen�t�se',

	'FOUND_SEARCH_MATCH'		=> '%d tal�lat',
	'FOUND_SEARCH_MATCHES'		=> '%d tal�lat',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'T�bb, mint %d tal�lat',

	'GLOBAL'				=> 'Glob�lis k�zlem�ny',

	'IGNORED_TERMS'			=> 'mell�z�tt',
	'IGNORED_TERMS_EXPLAIN'	=> 'A k�vetkez� szavak mell�z�sre ker�ltek a keres�si kifejz�sb�l: <strong>%s</strong>',

	'JUMP_TO_POST'			=> 'Ugr�s a hozz�sz�l�shoz',

	'NO_KEYWORDS'			=> 'Legal�bb egy keresend� sz�t meg kell adnod. Minden sz�nak legal�bb %d �s legfeljebb %d karakterb�l kell �llnia a helyettes�t� jeleket nem sz�m�tva.', //? helyettes�t� jel: *
	'NO_RECENT_SEARCHES'	=> 'Nincs nemr�gi keres�s.', //? "No searches have been carried out recently" - jobb megfogalmaz�s k�ne!
	'NO_SEARCH'				=> 'Sajnos sz�modra nem enged�lyezett a keres� haszn�lata.',
	'NO_SEARCH_RESULTS'		=> 'Nincs a keres�si felt�leknek megfelel� tal�lat.', //? "No suitable matches were found."
	'NO_SEARCH_TIME'		=> 'Most nem haszn�lhatod a keres�t. K�rj�k pr�b�lkozz �jra p�r percen bel�l.',
	'WORD_IN_NO_POST'		=> 'Nincs tal�lat, mivel a <strong>%s</strong> sz�t nem tartalmazza egy hozz�sz�l�s sem.',
	'WORDS_IN_NO_POST'		=> 'Nincs tal�lat, mivel a <strong>%s</strong> szavakat nem tartalmazza egy hozz�sz�l�s sem.',

	'POST_CHARACTERS'		=> 'karakter�nek megjelen�t�se',

	'RECENT_SEARCHES'		=> 'Nemr�gi keres�sek',
	'RESULT_DAYS'			=> 'Id�tartam', //??
	'RESULT_SORT'			=> 'Tal�latok rendez�se',
	'RETURN_FIRST'			=> 'Hozz�sz�l�sok els�',

	'SEARCHED_FOR'				=> 'Search term used',
	'SEARCHED_TOPIC'			=> 'Searched topic',
	'SEARCH_ALL_TERMS'			=> 'Search for all terms or use query as entered',
	'SEARCH_ANY_TERMS'			=> 'Search for any terms',
	'SEARCH_AUTHOR'				=> 'Search for author',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Use * as a wildcard for partial matches',
	'SEARCH_FIRST_POST'			=> 'First post of topics only',
	'SEARCH_FORUMS'				=> 'Search in forums',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Select the forum or forums you wish to search in. For speed all subforums can be searched by selecting the parent and setting enable search subforums below.',
	'SEARCH_IN_RESULTS'			=> 'Search these results',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Place <strong>+</strong> in front of a word which must be found and <strong>-</strong> in front of a word which must not be found. Put a list of words separated by <strong>|</strong> into brackets if only one of the words must be found. Use * as a wildcard for partial matches.',
	'SEARCH_MSG_ONLY'			=> 'Message text only',
	'SEARCH_OPTIONS'			=> 'Search options',
	'SEARCH_QUERY'				=> 'Search query',
	'SEARCH_SUBFORUMS'			=> 'Search subforums',
	'SEARCH_TITLE_MSG'			=> 'Post subjects and message text',
	'SEARCH_TITLE_ONLY'			=> 'Topic titles only',
	'SEARCH_WITHIN'				=> 'Search within',
	'SORT_ASCENDING'			=> 'Ascending',
	'SORT_AUTHOR'				=> 'Author',
	'SORT_DESCENDING'			=> 'Descending',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Post subject',
	'SORT_TIME'					=> 'Post time',

	'TOO_FEW_AUTHOR_CHARS'	=> 'You must specify at least %d characters of the authors name.',
));

?>