<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  MEN AT WORK 2011 
 * @package    Language
 * @license    GNU/LGPL 
 * @filesource
 */
 
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_syncCto_settings']['edit'] = 'Edit the syncCto configuration';
$GLOBALS['TL_LANG']['tl_syncCto_settings']['blacklist_legend'] = "Files and folders blacklist";
$GLOBALS['TL_LANG']['tl_syncCto_settings']['local_blacklist_legend'] = "localconfig.php blacklist";
$GLOBALS['TL_LANG']['tl_syncCto_settings']['whitelist_legend'] = "Whitelist for root folders";
$GLOBALS['TL_LANG']['tl_syncCto_settings']['hidden_tables_legend'] = "Hidden tables";
$GLOBALS['TL_LANG']['tl_syncCto_settings']['tables_legend'] = "Not recommended tables";
$GLOBALS['TL_LANG']['tl_syncCto_settings']['security_legend'] = "Encryption";
$GLOBALS['TL_LANG']['tl_syncCto_settings']['debug_legend'] = "Debug mode";

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_syncCto_settings']['folder_blacklist'] = array("Folder blacklist", "Here you can define which folders should be ignored for synchronization.");
$GLOBALS['TL_LANG']['tl_syncCto_settings']['file_blacklist'] = array("File blacklist", "Here you can define which files should be ignored for synchronization.");
$GLOBALS['TL_LANG']['tl_syncCto_settings']['folder_whitelist'] = array("Whitelist for root folders", "Here you can define which root folder for synchronization should be considered.");
$GLOBALS['TL_LANG']['tl_syncCto_settings']['local_blacklist'] = array("localconfig.php", "Here you can define which localconfig.php entries should not be synchronized.");
$GLOBALS['TL_LANG']['tl_syncCto_settings']['table_list'] = array("Not recommended tables", "Here you can define which database tables you do not recommend for the synchronization.");
$GLOBALS['TL_LANG']['tl_syncCto_settings']['table_hidden'] = array("Hidden tables", "Here you can grant access to one or more database tables for the synchronization.");
$GLOBALS['TL_LANG']['tl_syncCto_settings']['seckey'] = array("Encryption key", "The key is used for the encrypted data storage.");
$GLOBALS['TL_LANG']['tl_syncCto_settings']['debug_filelist'] = array("Enable debug mode", "Print information like runtime or synchronized data to the screen.");
$GLOBALS['TL_LANG']['tl_syncCto_settings']['debug_log'] = array("Enable debug log", "Save the communication between server and client in the debug.txt.");
$GLOBALS['TL_LANG']['tl_syncCto_settings']['measurement_log'] = array("Enable measurement log", "Save runtime information in the measurement.txt");

?>