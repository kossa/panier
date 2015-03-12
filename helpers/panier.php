<?php

/**
 * @version     1.0.0
 * @package     com_panier
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */
defined('_JEXEC') or die;

class PanierFrontendHelper {
    
    /*
    |------------------------------------------------------------------------------------
    | Parse One Command
    |------------------------------------------------------------------------------------
    */
    public static function parseCommand($cmd='')
    {
        $str = '';

        foreach ($cmd as $key => $value) {
            if ($key != 'Titre_Command') {
                $str .= str_replace('_', ' ', $key) . ": $value <br>";
            }
        }

        return $str;
    }

    /*
    |------------------------------------------------------------------------------------
    | Preparation de l'email O/ email context 
    |------------------------------------------------------------------------------------
    */
    public static function prepareEmail($cmds='', $userObj)
    {
        $str = '';

        // Put user Informations
        $str .= "<h1>Information du client :</h1>";
        $str .= "<ul>";
            $str .= "<li><strong>Nom complet : </strong> $userObj->name</li>";
            $str .= "<li><strong>Email : </strong> $userObj->email</li>";
            $str .= "<li><strong>Telephone : </strong> " . $userObj->profile['phone'] . "</li>";
        $str .= "</ul>";

        // Retrieve all commands
        $str .= '<h1>La commande :</h1>';
        foreach ($cmds as $cmd) {
            $details = json_decode($cmd->command);
            foreach ($details as $key => $value) {
                if ($key == 'Titre_Command') {
                    $str .= "<h3>Command N° $cmd->id : <em>$value</em></h3>";
                }else{
                    $str .= "<b>" . str_replace('_', ' ', $key) . "</b>: $value <br>";
                }
            }
            $str .= '============================================';
        }

        return $str;
    }


    /*
    |------------------------------------------------------------------------------------
    | Send the Email
    |------------------------------------------------------------------------------------
    */
    public static function sendEmail($text = '')
    {
        $config = JFactory::getConfig();
        $mailer = JFactory::getMailer();

        $sender = array( 
            $config->get( 'mailfrom' ),
            $config->get( 'fromname' ) );
        $mailer->setSender($sender);

        $mailer->setSender(['hadjikouceyla@gmail.com']);

        $mailer->setSubject('Nouvelle command');

        $mailer->addRecipient($config->get( 'mailfrom' ));

        $mailer->isHTML(true);
        $mailer->Encoding = 'base64';
        $mailer->setBody($text);

        return $mailer->Send();
    }

}
