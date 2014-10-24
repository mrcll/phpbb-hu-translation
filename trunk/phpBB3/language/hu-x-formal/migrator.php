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
* Magyar ford�t�s (c) 2007-2014 �Magyar phpBB K�z�ss�g ford�t�k�,
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
	'CONFIG_NOT_EXIST'					=> 'A "%s" konfigur�ci�s be�ll�t�s nem l�tezik.', //bb31

	'GROUP_NOT_EXIST'					=> 'A "%s" csoport nem l�tezik.', //bb31

	'MIGRATION_DATA_DONE'				=> 'Telep�tett adat: %1$s; Id�: %2$.2f m�sodperc', //bb31 ? Installed Data
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Adat telep�t�se: %1$s; Id�: %2$.2f m�sodperc', //bb31 ? Installing Data
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'A migr�ci� m�r v�gre lett hajtva (kihagyva): %s', //bb31
	'MIGRATION_EXCEPTION_ERROR'			=> 'Hiba t�rt�nt a k�r�s v�grehajt�sa sor�n �s a feldolgoz�s megszakadt. A hiba bek�vetkez�se el�tti v�ltoztat�sokat megpr�b�ltuk vissza�ll�tani. K�rj�k, ellen�rizd a f�rum m�k�d�k�pess�g�t.', //bb31
	'MIGRATION_NOT_FULFILLABLE'			=> 'A "%1$s" migr�ci� nem hajthat� v�gre, mert hi�nyzik a "%2$s" migr�ci�.', //bb31
	'MIGRATION_SCHEMA_DONE'				=> 'Telep�tett s�ma: %1$s; Id�: %2$.2f m�sodperc', //bb31

	'MODULE_ERROR'						=> 'Hiba t�rt�nt a modul l�trehoz�sa k�zben: %s', //bb31 ?
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Sz�ks�ges modul inform�ci�s �llom�ny nem l�tezik: %2$s', //bb31
	'MODULE_NOT_EXIST'					=> 'Sz�ks�ges modul nem l�tezik: %s', //bb31

	'PERMISSION_NOT_EXIST'				=> 'A "%s" jogosults�g be�ll�t�s nem l�tezik.', //bb31

	'ROLE_NOT_EXIST'					=> 'A "%s" jogosults�g szerep nem l�tezik.', //bb31
));
