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
* Magyar fordítás (c) 2007-2015 „Magyar phpBB Közösség fordítók”,
* http://phpbb.hu
*
* $Id$
*/

/**
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
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Kiterjesztés', //bb31
	'EXTENSIONS'				=> 'Kiterjesztések', //bb31
	'EXTENSIONS_ADMIN'			=> 'Kiterjesztés kezelő', //bb31
	'EXTENSIONS_EXPLAIN'		=> 'A kiterjesztés kezelővel a phpBB fórumod kiterjesztéseit kezelheted, illetve kiterjesztésekkel kapcsolatos információkat tekinthetsz meg.', //bb31 ?
	'EXTENSION_INVALID_LIST'	=> 'A “%s” kiterjesztés érvénytelen.<br />%s<br /><br />', //bb31
	'EXTENSION_NOT_AVAILABLE'	=> 'A kiválasztott kiterjesztés nem telepíthető erre a fórumra, kérjük ellenőrizd a támogatott phpBB és PHP verziókat a részletek oldalon.', //bb31
	'EXTENSION_DIR_INVALID'		=> 'A kiválasztott kiterjesztés könyvtárszerkezete hibás, ezért a kiterjesztés nem engedélyezhető.', //bb31
	'EXTENSION_NOT_ENABLEABLE'	=> 'A kiválasztott kiterjesztés nem engedélyezhető. Kérjük, ellenőrizd a kiterjesztés követelményeit.', //bb31

	'DETAILS'				=> 'Részletek', //bb31

	'EXTENSIONS_DISABLED'	=> 'Letiltott kiterjesztések', //bb31
	'EXTENSIONS_ENABLED'	=> 'Engedélyezett kiterjesztések', //bb31

	'EXTENSION_DELETE_DATA'	=> 'Adatok törlése', //bb31
	'EXTENSION_DISABLE'		=> 'Letiltás', //bb31
	'EXTENSION_ENABLE'		=> 'Engedélyezés', //bb31

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'A kiterjesztés adatainak törlése eltávolítja a kiterjesztés által létrehozott adatokat és beállításokat. A kiterjesztés állományai megmaradnak, így a kiterjesztés később újra engedélyezhető.', //bb31
	'EXTENSION_DISABLE_EXPLAIN'		=> 'A kiterjesztés letiltása megtartja a kiterjesztés fájljait, adatait és beállításait, azonban eltávolít minden a kiterjesztés által nyújtott funkcionalitást.', //bb31
	'EXTENSION_ENABLE_EXPLAIN'		=> 'A kiterjesztés engedélyezésével az használhatóvá válik a fórumodon.', //bb31

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'A kiterjesztés adatainak törlése folyik. Kérjük, ne hagyd el vagy frissítsd az oldalt, amíg a művelet be nem fejeződik.', //bb31
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'A kiterjesztés letiltása folyik. Kérjük, ne hagyd el vagy frissítsd az oldalt, amíg a művelet be nem fejeződik.', //bb31
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'A kiterjesztés engedélyezése folyik. Kérjük, ne hagyd el vagy frissítsd az oldalt, amíg a művelet be nem fejeződik.', //bb31

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'A kiterjesztés adatai sikeresen törlésre kerültek.', //bb31
	'EXTENSION_DISABLE_SUCCESS'		=> 'A kiterjesztés sikeresen letiltásra került.', //bb31
	'EXTENSION_ENABLE_SUCCESS'		=> 'A kiterjesztés sikeresen engedélyezésre került.', //bb31

	'EXTENSION_NAME'			=> 'Kiterjesztés neve', //bb31
	'EXTENSION_ACTIONS'			=> 'Műveletek', //bb31
	'EXTENSION_OPTIONS'			=> 'Beállítások', //bb31
	'EXTENSION_INSTALL_HEADLINE'=> 'Kiterjesztés telepítése', //bb31
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Tölts le egy kiterjesztést a phpBB.com kiterjesztés adatbázisából</li>
			<li>Csomagold ki a letöltött fájlt és másold fel a fórumod <samp>ext/</samp> könyvtárába</li>
			<li>Engedélyezd a kiterjesztést</li>
		</ol>', //bb31
	'EXTENSION_UPDATE_HEADLINE'	=> 'Kiterjesztés frissítése', //bb31
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Tiltsd le a kiterjesztést</li>
			<li>Töröld a kiterjesztés állományait a fájlrendszerből</li>
			<li>Töltsd fel az új állományokat</li>
			<li>Engedélyezd a kiterjesztést</li>
		</ol>', //bb31
	'EXTENSION_REMOVE_HEADLINE'	=> 'Kiterjesztés teljes eltávolítása', //bb31
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Tiltsd le a kiterjesztést</li>
			<li>Töröld a kiterjesztés adatait</li>
			<li>Töröld a kiterjesztés állományait a fájlrendszerből</li>
		</ol>', //bb31

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Biztosan törölni akarod “%s” adatait?<br /><br />Ez a művelet törli az összes adatot és beállítást, és nem vonható vissza!', //bb31
	'EXTENSION_DISABLE_CONFIRM'		=> 'Biztosan letiltod a “%s” kiterjesztést?', //bb31
	'EXTENSION_ENABLE_CONFIRM'		=> 'Biztosan engedélyezed a “%s” kiterjesztést?', //bb31
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Biztosan használni szeretnél egy nem stabil verziót?', //bb31

	'RETURN_TO_EXTENSION_LIST'	=> 'Vissza a kiterjesztésekhez', //bb31

	'EXT_DETAILS'			=> 'Kiterjesztés részletei', //bb31
	'DISPLAY_NAME'			=> 'Megjelenítendő név', //bb31
	'CLEAN_NAME'			=> 'Egyszerű név', //bb31
	'TYPE'					=> 'Típus', //bb31
	'DESCRIPTION'			=> 'Leírás', //bb31
	'VERSION'				=> 'verzió', //bb31
	'HOMEPAGE'				=> 'Honlap', //bb31
	'PATH'					=> 'Elérési út', //bb31
	'TIME'					=> 'Kiadás dátuma', //bb31
	'LICENSE'				=> 'Licenc', //bb31

	'REQUIREMENTS'			=> 'Követelmények', //bb31
	'PHPBB_VERSION'			=> 'phpBB verzió', //bb31
	'PHP_VERSION'			=> 'PHP verzió', //bb31
	'AUTHOR_INFORMATION'	=> 'Készítő adatai', //bb31
	'AUTHOR_NAME'			=> 'Név', //bb31
	'AUTHOR_EMAIL'			=> 'E-mail', //bb31
	'AUTHOR_HOMEPAGE'		=> 'Honlap', //bb31
	'AUTHOR_ROLE'			=> 'Szerep', //bb31

	'NOT_UP_TO_DATE'		=> '%s nem a legfrissebb', //bb31
	'UP_TO_DATE'			=> '%s a legfrissebb', //bb31
	'ANNOUNCEMENT_TOPIC'	=> 'Kiadási közlemény', //bb31
	'DOWNLOAD_LATEST'		=> 'Legfrissebb verzió letöltése', //bb31
	'NO_VERSIONCHECK'		=> 'No version check information given.', //bb31 ?

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Összes verzió újraellenőrzése', //bb31
	'FORCE_UNSTABLE'					=> 'Mindig ellenőrizze a nem stabil verziókat is', //bb31
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Verzió ellenőrzés beállításai', //bb31

	'BROWSE_EXTENSIONS_DATABASE'		=> 'A phpBB.com kiterjesztés adatbázisának böngészése', //bb31

	'META_FIELD_NOT_SET'	=> 'A szükséges %s információ nem lett megadva.', //bb31 ? meta field
	'META_FIELD_INVALID'	=> '%s információ érvénytelen.', //bb31
));
