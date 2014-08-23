<?php
defined('_JEXEC') or die;

jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldGFTransfers extends JFormFieldList
{
    protected $type = 'GFTransfers';

    protected function getOptions()
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('#__gftransfers.id as id,greeting, #__categories.title as category,catid ');
        $query->from('#__gftransfers');
        $query->leftJoin('#__categories on catid=#__categories.id');
        $db->setQuery((string)$query);
        $messages = $db->loadObjectList();
        $options = array();
        if($messages) 
        {
            foreach($messages as $message)
            {
                $options[] = JHtml::_('select.option', $message->id, $message->greeting . 
                        ($message->catid ? ' ('.$message->category.')' : ''));
            }
        }
        $options = array_merge(parent::getOptions(), $options);
        return $options;
    }
}
?>