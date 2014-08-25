<?php
/**
 * @package gftransfers
 * @copyright Copyright (c)2014 David Valverde / grafitto.es
 * @license GNU General Public License version 3 or later
 */

defined('_JEXEC') or die;

class GFTransfersToolbar extends F0FToolbar
{
    function __construct($config = array())
    {
        parent::__construct($config);

        $this->renderFrontendButtons = true;
    }
}

