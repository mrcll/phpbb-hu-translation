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
* Magyar fordítás (c) 2007-2016 „Magyar phpBB Közösség fordítók”,
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
	'CONFIG_NOT_EXIST'					=> 'A "%s" konfigurációs beállítás nem létezik.',

	'GROUP_NOT_EXIST'					=> 'A "%s" csoport nem létezik.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> '%s függőségeinek alkalmazása.', //? apply
	'MIGRATION_DATA_DONE'				=> 'Telepített adat: %1$s; Idő: %2$.2f másodperc', //? Installed Data
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Adat telepítése: %1$s; Idő: %2$.2f másodperc', //? Installing Data
	'MIGRATION_DATA_RUNNING'			=> 'Adat telepítése: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'A migráció már végre lett hajtva (kihagyva): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Hiba történt a kérés végrehajtása során és a feldolgozás megszakadt. A hiba bekövetkezése előtti állapotot megpróbáltuk visszaállítani. Kérjük, lépj be a fórumba, és ellenőrizd, hogy minden rendesen működik-e.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'A "%1$s" migráció nem hajtható végre, mert hiányzik a "%2$s" migráció.',
	'MIGRATION_NOT_INSTALLED'			=> 'A(z) "%s" migráció nincs telepítve.',
	'MIGRATION_NOT_VALID'				=> '%s egy érvénytelen migráció.',
	'MIGRATION_SCHEMA_DONE'				=> 'Telepített séma: %1$s; Idő: %2$.2f másodperc',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Séma telepítése: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Adatok visszaállítva: %1$s; Idő: %2$.2f másodperc',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Adatok visszaállítása: %1$s; Idő: %2$.2f másodperc',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Adatok visszaállítása: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Adatbázis Schema visszaállítva: %1$s; Idő: %2$.2f másodperc',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Adatbázis Schema visszaállítása: %s.',

	// Az angol fordítások szándékosan maradtak benne, hogy megkönnyítsék a hibakeresést
	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'A migráció érvénytelen. Egy IF kifejezésnek hiányzik a feltétele. [An if statement helper is missing a condition.]', //?
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'A migráció érvénytelen. Egy IF kifejezésnek hiányzik egy érvényes migrációs lépés hívása. [An if statement helper is missing a valid call to a migration step.]', //?
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'A migráció érvénytelen. Egy egyéni meghívható függvény nem hívható meg. [A custom callable function could not be called.]', //?
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'A migráció érvénytelen. Ismeretlen migrációs típus. [An unknown migration tool type was encountered.]', //?
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'A migráció érvénytelen. Nem meghatározott migráció. [An undefined migration tool was encountered.]', //?
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'A migráció érvénytelen. Nem meghatározott metódus. [An undefined migration tool method was encountered.]', //?

	'MODULE_ERROR'						=> 'Hiba történt a modul létrehozása közben: %s', //?
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Szükséges modul információs állomány nem létezik: %2$s',
	'MODULE_NOT_EXIST'					=> 'Szükséges modul nem létezik: %s',

	'PERMISSION_NOT_EXIST'				=> 'A "%s" jogosultság beállítás nem létezik.',

	'ROLE_NOT_EXIST'					=> 'A "%s" jogosultság szerep nem létezik.',
));
