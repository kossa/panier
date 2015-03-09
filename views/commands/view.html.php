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

jimport('joomla.application.component.view');

/**
 * View class for a list of Panier.
 */
class PanierViewCommands extends JViewLegacy {


    /**
     * Display the view
     */
    public function display($tpl = null) {

        $model      = JModelLegacy::getInstance('Commands', 'PanierModel');
        $user_id    = JFactory::getUser()->id;

        $this->commands = $model->getMyCommands($user_id);

        parent::display($tpl);
    }

}