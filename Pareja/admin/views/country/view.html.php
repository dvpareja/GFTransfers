<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * GFTransfers View
 */
class GFTransfersViewGFTransfers extends JView
{
    /**
     * display method of GFTransfers view
     * @return void
     */
    public function display($tpl = null) 
    {
        // get the Data
        $form = $this->get('Form');
        $item = $this->get('Item');
        $script = $this->get('Script');
        // Check for errors.
        if (count($errors = $this->get('Errors'))) 
        {
                JError::raiseError(500, implode('<br />', $errors));
                return false;
        }
        // Assign the Data
        $this->form = $form;
        $this->item = $item;
        $this->script = $script;
        // Set the toolbar
        $this->addToolBar();

        // Display the template
        parent::display($tpl);
        $this->setDocument();
    }

    /**
     * Setting the toolbar
     */
    protected function addToolBar() 
    {
        $input = JFactory::getApplication()->input;
        $input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        JToolBarHelper::title($isNew ? JText::_('COM_GFTRANSFERS_MANAGER_GFTRANSFERS_NEW')
                                     : JText::_('COM_GFTRANSFERS_MANAGER_GFTRANSFERS_EDIT'));
        JToolBarHelper::save('gftransfers.save');
        JToolBarHelper::cancel('gftransfers.cancel', $isNew ? 'JTOOLBAR_CANCEL'
                                                           : 'JTOOLBAR_CLOSE');
    }

    protected function setDocument() 
    {
        $isNew = ($this->item->id < 1);
        $document = JFactory::getDocument();
        $document->setTitle($isNew ? JText::_('COM_GFTRANSFERS_GFTRANSFERS_CREATING')
                                : JText::_('COM_GFTRANSFERS_GFTRANSFERS_EDITING'));

        $document->addScript(JURI::root(). $this->script);
        $document->addScript(JURI::root()."administrator/components/com_gftransfers"
                                         ."views/GFTransfers/submibutton.js");
        JText::script('COM_GFTRANSFERS_GFTRANSFERS_ERROR_UNACCEPTABLE');
    }
}