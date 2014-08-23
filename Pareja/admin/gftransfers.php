<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
JLoader::register('GFTransfersHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'gftransfers.php');

// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by GFTransfers
$controller = JController::getInstance('GFTransfers');
JFactory::getApplication()->JComponentTitle = "<h1>GFTransfers</h1>";
 
// Perform the Request task
$controller->execute(JRequest::getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();
