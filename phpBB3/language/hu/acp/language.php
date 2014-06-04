<?php
/**
*
* acp_language [Hungarian]
*
* @package language
* @version $Id$
* @copyright (c) 2007 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'Adminisztrátori nyelvi állományok',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Itt a nyelvi csomagokat telepítheted, illetve törölheted. Az alapértelmezett nyelvi csomag egy csillaggal (*) van megjelölve.',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Are you sure you wish to delete “%s”?', //bb31

	'INSTALLED_LANGUAGE_PACKS'	=> 'Telepített nyelvi csomagok',

	'LANGUAGE_DETAILS_UPDATED'			=> 'A nyelvi adatok sikeresen frissítésre kerültek.',
	'LANGUAGE_ENTRIES'					=> 'Nyelvi elemek', //? 'Nyelvi bejegyzések'
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Itt megváltoztathatod a jelenlegi nyelvi csomag bejegyzéseket vagy a még nem lefordítottakat.<br /><strong>Megjegyzés:</strong> Miután módosítottad a nyelvi állományt, a változtatások egy külön mappában kerülnek majd tárolásra, ahonnan letöltheted a csomagot. Amíg az eredeti nyelvi állományokat nem helyettesíted az újakkal (azzal, hogy feltöltöd a tárhelyedre), a változtatások a felhasználóid számára nem lesznek érzékelhetők.',
	'LANGUAGE_FILES'					=> 'Nyelvi állományok',
	'LANGUAGE_KEY'						=> 'Nyelvi kulcs',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Ez a nyelvi csomag már telepítve van.',
	'LANGUAGE_PACK_DELETED'				=> 'A “%s” nyelvi csomag sikeresen eltávolításra került. Az ezt a nyelvet használó felhasználók nyelve visszaállításra került a fórum alapértelmezett nyelvére.',
	'LANGUAGE_PACK_DETAILS'				=> 'Nyelvi csomag adatok',
	'LANGUAGE_PACK_INSTALLED'			=> 'A “%s” nyelvi csomag sikeresen telepítésre került.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Az egyedi profil mezők nyelvspecifikus szövegei az alapértelmezett nyelvből lettek átmásolva. Módosítd őket, ha szükséges.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalizált név', //? 'Helyi név'
	'LANGUAGE_PACK_NAME'				=> 'Név',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'A kiválasztott nyelvi csomag nem létezik.',
	'LANGUAGE_PACK_USED_BY'				=> 'Használók száma (robotok beleértve)',
	'LANGUAGE_VARIABLE'					=> 'Nyelvi változó',
	'LANG_AUTHOR'						=> 'Nyelvi csomag szerzője',
	'LANG_ENGLISH_NAME'					=> 'Angol név',
	'LANG_ISO_CODE'						=> 'ISO kód',
	'LANG_LOCAL_NAME'					=> 'Lokalizált név',

	'MISSING_LANGUAGE_FILES'		=> 'Hiányzó nyelvi állományok',
	'MISSING_LANG_VARIABLES'	=> 'Hiányzó nyelvi változók',

	'NO_FILE_SELECTED'				=> 'Nem adtál meg nyelvi állományt.',
	'NO_LANG_ID'					=> 'Nem adtál meg nyelvi csomagot.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Az alapértelmezett nyelvi csomagot nem tudod eltávolítani.<br />Ha törölni szeretnéd ezt a nyelvi csomagot, először változtasd meg a fórum alapértelmezett nyelvét.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Nincs telepítetlen nyelvi csomag.',

	'THOSE_MISSING_LANG_FILES'			=> 'A következő nyelvi állományok hiányoznak a “%s” nyelvi könyvtárból:',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'A következő nyelvi változók hiányoznak a “%s” nyelvi csomagból:',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Telepítetlen nyelvi csomagok.',
));