<?php
/**
 * @version     1.0.0
 * @package     com_panier
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Commands list controller class.
 */
class PanierControllerCommands extends PanierController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function &getModel($name = 'Commands', $prefix = 'PanierModel', $config = array())
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}

    public function save()
    {
        $command         = json_encode($_POST);
        
        $app             = JFactory::getApplication();
        $user_id         = JFactory::getUser()->id;
        
        // Object
        $object          = new stdClass();
        $object->user_id = $user_id;
        $object->command = $command;
        
        // Get Model and save
        $model           = $this->getModel('Commands');
        $model->save($object);

    }
}