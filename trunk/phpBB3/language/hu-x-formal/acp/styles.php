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
	'ACP_STYLES_EXPLAIN'	=> 'Itt a fórumon elérhető megjelenéseket tudod kezelni. A megjelenéseket módosíthatod, törölheted, deaktiválhatod, újraaktiválhatod, vagy telepíthetsz újakat is. Az előnézet funkció segítségével azt is megnézheted, hogy egy megjelenés hogyan fog kinézni. Minden megjelenés mellett megjelenik, hányan használják, azonban ebben az értékben nem jelentkezik a felhasználói sablon felülírás hatása.', //?

	'CANNOT_BE_INSTALLED'			=> 'Cannot be installed', //bb31!
	'CONFIRM_UNINSTALL_STYLES'		=> 'Are you sure you wish to uninstall selected styles?', //bb31!
	'COPYRIGHT'						=> 'Copyright', //? kell valami?

	'DEACTIVATE_DEFAULT'		=> 'Nem tudod deaktiválni az alapértelmezett megjelenést.',
	'DELETE_FROM_FS'			=> 'Törlés a fájlrendszerből',
	'DELETE_STYLE_FILES_FAILED'	=> 'Error deleting files for style "%s".', //bb31!
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Files for style "%s" have been deleted.', //bb31!
	'DETAILS'					=> 'Adatok', //? Részletek?

	'INHERITING_FROM'			=> 'Öröklés',
	'INSTALL_STYLE'				=> 'Megjelenés telepítése',
	'INSTALL_STYLES'				=> 'Megjelenések telepítése',
	'INSTALL_STYLES_EXPLAIN'		=> 'Itt telepíteni tudod a új stílust.<br /><br />If you cannot find a specific style in list below, check to make sure style is already installed. If it is not installed, check if it was uploaded correctly.', //bb31!
	'INVALID_STYLE_ID'			=> 'Invalid style ID.', //bb31!

	'NO_MATCHING_STYLES_FOUND'	=> 'No styles match your query.', //bb31!
	'NO_UNINSTALLED_STYLE'		=> 'Nincs telepítetlen megjelenés.',

	'PURGED_CACHE'				=> 'Cache was purged.', //bb31!

	'REQUIRES_STYLE'			=> 'This style requires the style "%s" to be installed.', // bb31 Ennek a megjelenésnek szüksége van rá, hogy a %s képkészlet telepítve legyen.

	'STYLE_ACTIVATE'			=> 'Aktiválás',
	'STYLE_ACTIVE'				=> 'Aktív',
	'STYLE_DEACTIVATE'			=> 'Deaktiválás',
	'STYLE_DEFAULT'				=> 'Alapértelmezett megjelenéssé tétel',
	'STYLE_DEFAULT_CHANGE'		=> 'Change default style', //bb31!
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'You must activate style before making it default style.', //bb31!
	'STYLE_ERR_NAME_EXIST'		=> 'Már létezik megjelenés ilyen névvel.',
	'STYLE_INSTALLED'			=> 'Style "%s" has been installed.', //bb31!
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Return to installed styles list', //bb31!
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Install more styles', //bb31!
	'STYLE_NAME'				=> 'Megjelenés neve',
	'STYLE_NOT_INSTALLED'		=> 'Style "%s" was not installed.', //bb31!
	'STYLE_PATH'				=> 'Style path', //bb31!
	'STYLE_UNINSTALL'			=> 'Uninstall', //bb31!
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Style "%s" cannot be uninstalled because it has one or more child styles.', //bb31!
	'STYLE_UNINSTALLED'			=> 'Style "%s" uninstalled successfully.', //bb31!
	'STYLE_USED_BY'				=> 'Használók száma (robotok beleértve)',

	'UNINSTALL_DEFAULT'		=> 'You cannot uninstall the default style.', //bb31!

));