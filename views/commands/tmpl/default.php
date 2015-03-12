<?php
/**
 * @version     1.0.0
 * @package     com_panier
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */
// no direct access
defined('_JEXEC') or die;
$commands = $this->commands;

?>

<div id="mes-commandes">
        
    <h1>Mes commandes</h1>
    
    <?php if (!$commands): ?>
        <h3 class="text-center">Le panier est vide</h3>
        <?php return false ?>
    <?php endif ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <a class="btn btn-primary" href="index.php?option=com_panier&task=commands.procedeCommand">Proceder la commande</a>
            </div>
        </div>
    </div>
    <br>
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Nom commande</th>
            <th>Detail</th>
            <th></th>
        </tr>
        <?php foreach ($commands as $key=>$command): ?>
            <?php $details = json_decode($command->command); ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $details->Titre_Command ?></td>
            <td><?php echo PanierFrontendHelper::parseCommand($details) ?></td>
            <td>
                <a href="index.php?option=com_panier&task=commands.delete&id=<?php echo $command->id ?>" 
                     class="btn btn-warning cancel">
                    Annuler
                </a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</div>