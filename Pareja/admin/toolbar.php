<?php
/**
 * @package gftransfers
 * @copyright Copyright (c)2014 David Valverde / grafitto.es
 * @license GNU General Public License version 3 or later
 */

defined('_JEXEC') or die;

class GFTransfersToolbar extends F0FToolbar
{
    public function onItemsBrowse()
    {
        parent::onBrowse();

        JToolBarHelper::preferences('com_gftransfers', 550, 875);
    }
}