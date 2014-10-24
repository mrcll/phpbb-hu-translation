<?php
/**
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'F�jlok hozz�ad�sa', //bb31
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Adj f�jlokat a felt�lt�si sorhoz �s kattints az ind�t�s gombra.', //bb31
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s m�r a felt�lt�si sorban van.', //bb31
	'PLUPLOAD_CLOSE'			=> 'Bez�r�s', //bb31
	'PLUPLOAD_DRAG'				=> 'H�zz ide f�jlokat.', //bb31
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'F�jl kett�z�si hiba.', //bb31 ? Duplicate file error
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Hozz�adhatsz f�jlokat azok �zenet dobozba h�z�s�val is.', //bb31 ?
	'PLUPLOAD_ERR_INPUT'		=> 'Nem siker�lt a bemeneti stream megnyit�sa.', //bb31
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Nem siker�lt a felt�lt�tt f�jl �tmozgat�sa.', //bb31
	'PLUPLOAD_ERR_OUTPUT'		=> 'Nem siker�lt a kimeneti stream megnyit�sa.', //bb31
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'A f�jl t�l nagy:', //bb31
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'F�jl mennyis�g hiba.', //bb31 count error
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> '�rv�nytelen f�jlkiterjeszt�s:', //bb31
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Elfogyott a szabad mem�ria.', //bb31
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'A felt�lt�s URL-je hib�s vagy nem l�tezik.', //bb31
	'PLUPLOAD_EXTENSION_ERROR'	=> 'F�jlkiterjeszt�s hiba.', //bb31
	'PLUPLOAD_FILE'				=> 'F�jl: %s', //bb31
	'PLUPLOAD_FILE_DETAILS'		=> 'F�jl: %s, m�ret: %d, maxim�lis f�jl m�ret: %d', //bb31 ?
	'PLUPLOAD_FILENAME'			=> 'F�jln�v', //bb31
	'PLUPLOAD_FILES_QUEUED'		=> '%d f�jl van a sorban', //bb31
	'PLUPLOAD_GENERIC_ERROR'	=> '�ltal�nos hiba.', //bb31
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP hiba.', //bb31
	'PLUPLOAD_IMAGE_FORMAT'		=> 'A k�p form�tuma hib�s vagy nem t�mogatott.', //bb31
	'PLUPLOAD_INIT_ERROR'		=> 'Inicializ�ci�s hiba.', //bb31
	'PLUPLOAD_IO_ERROR'			=> 'IO hiba.', //bb31
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A', //bb31
	'PLUPLOAD_SECURITY_ERROR'	=> 'Biztons�gi error.', //bb31
	'PLUPLOAD_SELECT_FILES'		=> 'V�lassz f�jlokat', //bb31
	'PLUPLOAD_SIZE'				=> 'M�ret', //bb31
	'PLUPLOAD_SIZE_ERROR'		=> 'F�jlm�ret hiba', //bb31
	'PLUPLOAD_STATUS'			=> '�llapot', //bb31
	'PLUPLOAD_START_UPLOAD'		=> 'Felt�lt�s ind�t�sa', //bb31 ?
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Felt�lt�si sor ind�t�sa', //bb31 ?
	'PLUPLOAD_STOP_UPLOAD'		=> 'Felt�lt�s le�ll�t�sa', //bb31 ?
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Aktu�lis felt�lt�s le�ll�t�sa', //bb31 ?
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> '%d/%d f�jl felt�ltve', //bb31
));
