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
	'PLUPLOAD_ADD_FILES'		=> 'Add files', //bb31!
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Add files to the upload queue and click the start button.', //bb31!
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s already present in the queue.', //bb31!
	'PLUPLOAD_CLOSE'			=> 'Close', //bb31!
	'PLUPLOAD_DRAG'				=> 'Drag files here.', //bb31!
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Duplicate file error.', //bb31!
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'You may also attach files by dragging and dropping them in the message box.', //bb31!
	'PLUPLOAD_ERR_INPUT'		=> 'Failed to open input stream.', //bb31!
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Failed to move uploaded file.', //bb31!
	'PLUPLOAD_ERR_OUTPUT'		=> 'Failed to open output stream.', //bb31!
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'File too large:', //bb31!
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'File count error.', //bb31!
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Invalid file extension:', //bb31!
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Runtime ran out of available memory.', //bb31!
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Upload URL might be wrong or does not exist.', //bb31!
	'PLUPLOAD_EXTENSION_ERROR'	=> 'File extension error.', //bb31!
	'PLUPLOAD_FILE'				=> 'File: %s', //bb31!
	'PLUPLOAD_FILE_DETAILS'		=> 'File: %s, size: %d, max file size: %d', //bb31!
	'PLUPLOAD_FILENAME'			=> 'Filename', //bb31!
	'PLUPLOAD_FILES_QUEUED'		=> '%d files queued', //bb31!
	'PLUPLOAD_GENERIC_ERROR'	=> 'Generic error.', //bb31!
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP error.', //bb31!
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Image format either wrong or not supported.', //bb31!
	'PLUPLOAD_INIT_ERROR'		=> 'Init error.', //bb31!
	'PLUPLOAD_IO_ERROR'			=> 'IO error.', //bb31!
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A', //bb31!
	'PLUPLOAD_SECURITY_ERROR'	=> 'Security error.', //bb31!
	'PLUPLOAD_SELECT_FILES'		=> 'Select files', //bb31!
	'PLUPLOAD_SIZE'				=> 'Size', //bb31!
	'PLUPLOAD_SIZE_ERROR'		=> 'File size error.', //bb31!
	'PLUPLOAD_STATUS'			=> 'Status', //bb31!
	'PLUPLOAD_START_UPLOAD'		=> 'Start upload', //bb31!
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Start uploading queue', //bb31!
	'PLUPLOAD_STOP_UPLOAD'		=> 'Stop upload', //bb31!
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Stop current upload', //bb31!
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Uploaded %d/%d files', //bb31!
));
