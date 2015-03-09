<?php

/**
 * @version     1.0.0
 * @package     com_panier
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */
// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

class PanierController extends JControllerLegacy {

    /**
     * Method to display a view.
     *
     * @param	boolean			$cachable	If true, the view output will be cached
     * @param	array			$urlparams	An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
     *
     * @return	JController		This object to support chaining.
     * @since	1.5
     */
    public function display($cachable = false, $urlparams = false) {
        if(!JFactory::getUser()->id) {
            $mainframe = JFactory::getApplication();
            $mainframe->redirect('index.php?option=com_users&view=login');
        }


        $view = JFactory::getApplication()->input->getCmd('view', 'commands');
        JFactory::getApplication()->input->set('view', $view);

        parent::display($cachable, $urlparams);

        return $this;
    }

}
