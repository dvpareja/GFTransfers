<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controller library
jimport('joomla.application.component.controller');
 
/**
 * General Controller of GFTransfers component
 */
class GFTransfersController extends JController
{
    /**
     * display task
     *
     * @return void
     */
    function display($cachable = false, $urlparams = false) 
    {
        // set default view if not set
        JRequest::setVar('view', JRequest::getCmd('view', 'GFTransferss'));

        // call parent behavior
        parent::display($cachable);

        GFTransfersHelper::addSubmenu('messages');
    }
}