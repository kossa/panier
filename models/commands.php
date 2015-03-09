<?php

/**
 * @version     1.0.0
 * @package     com_panier
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */
defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

/**
 * Methods supporting a list of Panier records.
 */
class PanierModelCommands extends JModelList
{

	/**
	 * Constructor.
	 *
	 * @param    array    An optional associative array of configuration settings.
	 *
	 * @see        JController
	 * @since      1.6
	 */
		

	public function save($obj='')
	{
		return JFactory::getDbo()->insertObject('#__panier_command', $obj);
	}
	

	public function getMyCommands($user_id)
	{
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);		
		$query
		    ->select('*')
		    ->from($db->quoteName('#__panier_command'))
		    ->where($db->quoteName('user_id') . ' = '. $user_id)
		    ->where($db->quoteName('state') . ' = 0');
		
		$db->setQuery($query);
		
		return $db->loadObjectList();
		
	}


	public function delete($id = 0, $user_id = 0)
	{
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);		

		$conditions = array(
		    $db->quoteName('id') . '=' . $id, 
		    $db->quoteName('user_id') . ' = ' . $user_id,
		);
		 
		$query->delete($db->quoteName('#__panier_command'));
		$query->where($conditions);
		 
		$db->setQuery($query);
		 
		return $db->query();
	}


	public function archiveCommands($user_id)
	{
		$object = new stdClass();
		$object->user_id = $user_id;
		$object->state = 1;
		$result = JFactory::getDbo()->updateObject('#__panier_command', $object, 'user_id');
		
		return $result;
	}
}
