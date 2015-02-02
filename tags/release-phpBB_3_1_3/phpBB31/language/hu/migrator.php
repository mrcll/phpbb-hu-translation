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
	'CONFIG_NOT_EXIST'					=> 'A "%s" konfigurációs beállítás nem létezik.', //bb31

	'GROUP_NOT_EXIST'					=> 'A "%s" csoport nem létezik.', //bb31

	'MIGRATION_APPLY_DEPENDENCIES'		=> '%s függőségeinek alkalmazása.', //bb31 ? apply
	'MIGRATION_DATA_DONE'				=> 'Telepített adat: %1$s; Idő: %2$.2f másodperc', //bb31 ? Installed Data
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Adat telepítése: %1$s; Idő: %2$.2f másodperc', //bb31 ? Installing Data
	'MIGRATION_DATA_RUNNING'			=> 'Adat telepítése: %s.', //bb31
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'A migráció már végre lett hajtva (kihagyva): %s', //bb31
	'MIGRATION_EXCEPTION_ERROR'			=> 'Hiba történt a kérés végrehajtása során és a feldolgozás megszakadt. A hiba bekövetkezése előtti állapotot megpróbáltuk visszaállítani. Kérjük, lépj be a fórumba, és ellenőrizd, hogy minden rendesen működik-e.', //bb31
	'MIGRATION_NOT_FULFILLABLE'			=> 'A "%1$s" migráció nem hajtható végre, mert hiányzik a "%2$s" migráció.', //bb31
	'MIGRATION_NOT_VALID'				=> '%s egy érvénytelen migráció.', //bb31
	'MIGRATION_SCHEMA_DONE'				=> 'Telepített séma: %1$s; Idő: %2$.2f másodperc', //bb31
	'MIGRATION_SCHEMA_RUNNING'			=> 'Séma telepítése: %s.', //bb31

	'MODULE_ERROR'						=> 'Hiba történt a modul létrehozása közben: %s', //bb31 ?
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Szükséges modul információs állomány nem létezik: %2$s', //bb31
	'MODULE_NOT_EXIST'					=> 'Szükséges modul nem létezik: %s', //bb31

	'PERMISSION_NOT_EXIST'				=> 'A "%s" jogosultság beállítás nem létezik.', //bb31

	'ROLE_NOT_EXIST'					=> 'A "%s" jogosultság szerep nem létezik.', //bb31
));
