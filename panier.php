<?php
/**
 * @version     1.0.0
 * @package     com_panier
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

define('COMPONENT_PATH', JURI::base().'/components/com_panier');


// Add CSS and JS
$document = JFactory::getDocument();
$document->addStyleSheet(COMPONENT_PATH . '/assets/css/style.css');
$document->addScript(COMPONENT_PATH . '/assets/js/jquery.js');
$document->addScript(COMPONENT_PATH . '/assets/js/main.js');

// Execute the task.
$controller	= JControllerLegacy::getInstance('Panier');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
