<?php
/*
 *
 * @package		ARI Quiz Lite
 * @author		ARI Soft
 * @copyright	Copyright (c) 2011 www.ari-soft.com. All rights reserved
 * @license		GNU/GPL (http://www.gnu.org/copyleft/gpl.html)
 * 
 */

defined('_JEXEC') or die;

$installFile = dirname(__FILE__) . '/install.php';
$installFile2 = dirname(__FILE__) . '/backend/install.php';

if (file_exists($installFile))
	require_once $installFile;
else if (file_exists($installFile2))
	require_once $installFile2;