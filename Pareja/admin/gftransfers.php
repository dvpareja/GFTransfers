<?php
/**
 * @package gftransfers
 * @copyright Copyright (c)2014 David Valverde / grafitto.es
 * @license GNU General Public License version 3 or later
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 

// Load FOF
include_once JPATH_LIBRARIES.'/f0f/include.php';
if(!defined('F0F_INCLUDED')) {
	JError::raiseError ('500', 'FOF is not installed');
	
	return;
}

F0FDispatcher::getTmpInstance('com_gftransfers')->dispatch();