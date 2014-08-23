<?php
// No direct access to this file
defined('_JEXEC') or die;
 
/**
 * GFTransfers component helper.
 */
abstract class GFTransfersHelper
{
        /**
         * Configure the Linkbar.
         */
        public static function addSubmenu($submenu) 
        {
                JSubMenuHelper::addEntry(JText::_('COM_GFTRANSFERS_SUBMENU_MESSAGES'),
                                         'index.php?option=com_gftransfers', $submenu == 'messages');
                JSubMenuHelper::addEntry(JText::_('COM_GFTRANSFERS_SUBMENU_CATEGORIES'),
                                         'index.php?option=com_categories&view=categories&extension=com_gftransfers',
                                         $submenu == 'categories');
                // set some global property
                $document = JFactory::getDocument();
                if ($submenu == 'categories') 
                {
                        $document->setTitle(JText::_('COM_GFTRANSFERS_ADMINISTRATION_CATEGORIES'));
                }
        }
}