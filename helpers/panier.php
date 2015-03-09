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

    public static function prepareEmail($cmds='')
    {
        $str = '';

        foreach ($cmds as $cmd) {
            $details = json_decode($cmd->command);
            foreach ($details as $key => $value) {
                if ($key == 'Titre_Command') {
                    $str .= "<h3>Titre Command N° $cmd->id : <em>$value</em></h3>";
                }else{
                    $str .= str_replace('_', ' ', $key) . ": $value <br>";
                }
            }
        }

        return $str;
    }

}
