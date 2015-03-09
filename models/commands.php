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
	
}
