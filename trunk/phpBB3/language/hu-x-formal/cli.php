<?php
/**
*
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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//oly
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', //bb31! this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Állítsa be ezt az opciót, ha a konfigurációs beállítás olyan gyakorisággal változik, hogy nem lehet hatékonyan gyorsítótárazni.', //bb31
	'CLI_CONFIG_CURRENT'				=> 'Aktuális konfigurációs érték, használja a 0-t és 1-et logikai értékek megadásához.', //bb31
	'CLI_CONFIG_DELETE_SUCCESS'			=> '%s beállítás sikeresen törölve.', //bb31
	'CLI_CONFIG_NEW'					=> 'Új beállítási érték, használja a 0-t és 1-et logikai értékek megadásához.', //bb31
	'CLI_CONFIG_NOT_EXISTS'				=> '%s beállítás nem létezik', //bb31
	'CLI_CONFIG_OPTION_NAME'			=> 'A beállítás neve', //bb31
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Állítsa be ezt, hogy az érték sortörés nélkül kerüljün kiírásra.', //bb31
	'CLI_CONFIG_INCREMENT_BY'			=> 'Növelendő beállítási érték', //bb31
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> '%s beállítási érték sikeresen megnövelve', //bb31
	'CLI_CONFIG_SET_FAILURE'			=> '%s értéket nem lehet beállítani', //bb31
	'CLI_CONFIG_SET_SUCCESS'			=> '%s érték sikeresen beállítva', //bb31

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Kilistázza a befejezett és még nem befejezett cron jobokat.', //bb31
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Lefuttatja az összes elkészült cron jobot.', //bb31
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Futtatandó feladat neve', //bb31
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Adatbázis frissítése migration-ökkel.', //bb31 ?
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Töröl egy konfigurációs opciót', //bb31
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Letilt egy megadott kiterjesztést.', //bb31
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Engedélyez egy meghatározott kiterjesztést.', //bb31
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Megkeresi azokat a migration-öket, amik nem függenek tőle.', //bb31 ?
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Konfigurációs beállítás értékét kéri le', //bb31
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Megnöveli egy konfigurációs beállítás értékét', //bb31
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Kilistázza az adatbázisban és a fájlrendszerben lévő összes kiterjesztést.', //bb31
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Futtatás csökkentett módban (kiterjesztések nélkül).', //bb31
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Shell indítása.', //bb31
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Purges the specified extension.', //bb31!
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Újraszámítja a users tábla user_email_hash oszlopát.', //bb31
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Csak akkor állítja be a konfigurációs beállítás értékét, ha annak eredeti értéke megegyezik az aktuális értékkel.', //bb31 ?
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Beállítja egy opció értékét', //bb31

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Nem lehet letiltani a %s kiterjesztést', //bb31
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '%s kiterjesztés sikeresen letiltva', //bb31
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Nem lehet engedélyezni a %s kiterjesztést', //bb31
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '%s kiterjesztés sikeresen engedélyezve', //bb31
	'CLI_EXTENSION_NAME'				=> 'Kiterjesztés neve', //bb31
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Could not purge extension %s', //bb31!
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Successfully purged extension %s', //bb31!
	'CLI_EXTENSION_NOT_FOUND'			=> 'Nem találhatóak kiterjesztések.', //bb31
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Available', //bb31!
	'CLI_EXTENSIONS_DISABLED'			=> 'Disabled', //bb31!
	'CLI_EXTENSIONS_ENABLED'			=> 'Enabled', //bb31!

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Az összes e-mail hash sikeresen újraszámításra került.', //bb31
));