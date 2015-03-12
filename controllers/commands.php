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
    private $urlPanier = 'index.php?option=com_panier&view=commands&Itemid=104';

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

        $app->redirect($this->urlPanier);

    }


    public function delete()
    {
        $app     = JFactory::getApplication();
        $jinput  = $app->input;
        $id      = $jinput->get('id','', 'STRING');
        $user_id = JFactory::getUser()->id;
        $this->getModel('Commands')->delete($id, $user_id);

        $app->redirect($this->urlPanier);
    }

    public function procedeCommand()
    {
        $app       = JFactory::getApplication();
        
        // Get my commands
        $userObj   = JFactory::getUser();
        $user_id   = $userObj->id;
        $model     = $this->getModel('Commands');
        $cmds      = $model->getMyCommands($user_id);
        
        // Get email text
        $emailText = PanierFrontendHelper::prepareEmail($cmds, $userObj);

        // Archive the command
        $model->archiveCommands($user_id);
        
        // Send the email
        if(PanierFrontendHelper::sendEmail($emailText)){
            // Archive commands
            $model->archiveCommands($user_id);
            
            $app->redirect($this->urlPanier, 'Votre command a été bien enregisté', 'success');
        }else{ // Error : email not sent :'(
            $app->redirect($this->urlPanier, 'Erreur Email', 'error');
        }

    }
}