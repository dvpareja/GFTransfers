<?php 
defined ('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class GFTransfersControllerGFTransferss extends JControllerAdmin
{
    public function getModel($name='GFTransfers', $prefix='GFTransfersModel')
    {
        $model = parent::getModel($name, $prefix, array('ignore_request' => true));
    }
}    