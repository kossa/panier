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

?>

<div class="container">
      <div class="row">
        <div class="col-sm-8">
        <form action="#" id="demande-devis" class="form-inline">
            <h1 class="title">Brochure:</h1>

            <!-- Nombre de pages -->
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Info Pages</h3>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label>Nombre de pages :</label>
                  <input type="text" class="form-control" data-label="Nombre de pages:" placeholder="">
                </div>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label>Quantité :</label>
                  <input type="text" class="form-control" data-label="Quantité:" placeholder="">
                </div>
              </div>
            </div>
            <!-- /Nombre de pages -->


            <!-- Format -->
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Format en (cm):</h3>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label>Fermé :</label>
                  <input type="text" class="form-control" data-label="Fermé:" placeholder="Largeur x Hauteur" pattern="([1,2]\d|[3][0-2])x([1-2]\d|[3][0-2])" >
                </div>
                <div class="form-group">
                  <label>Ouvert :</label>
                  <input type="text" class="form-control" data-label="Ouvert:" placeholder="Largeur x Hauteur" pattern="([1,2]\d|[3][0-2])x([1-2]\d|[3][0-2])" >
                </div>
                <p class="help-block info"><small><i>La largeur et la Hauteur doit etre entre 10 et 32, ex : 10x25</i></small></p>
              </div>
            </div>
            <!-- Format -->

            <!-- Couverture -->
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Couverture:</h3>
              </div>
              <div class="panel-body">
                <h4>Papier</h4>
                <ul data-label="Papier" class="list-inline">
                  <li><a href="#" class="btn btn-info">200gr</a></li>
                  <li><a href="#" class="btn btn-info">250gr</a></li>
                  <li><a href="#" class="btn btn-info">300gr</a></li>
                  <li><a href="#" class="btn btn-info">350gr</a></li>
                </ul>

                <h4>Impression</h4>
                <ul data-label="Impression" class="list-inline">
                  <li><a href="#" class="btn btn-info">Recto</a></li>
                  <li><a href="#" class="btn btn-info">Recto/Verso</a></li>
                  <div class="form-group">
                    <label>Autre :</label>
                    <input type="text" class="form-control" data-label="Autre:" placeholder="Couleurs">
                  </div>
                </ul>

                <h4>Pelliculage</h4>
                <ul data-label="Pelliculage" class="list-inline">
                  <li><a href="#" class="btn btn-info">Sans pelliculage</a></li>
                  <li><a href="#" class="btn btn-info">Pelliculage Brillant (Recto)</a></li>
                  <li><a href="#" class="btn btn-info">Pelliculage Brillant (Recto/Verso)</a></li>
                  <li><a href="#" class="btn btn-info">Pelliculage Mat  (Recto)</a></li>
                  <li><a href="#" class="btn btn-info">Pelliculage Mat  (Recto/Verso)</a></li>
                </ul>
              </div>
            </div>
            <!-- /Couverture -->

            <!-- Interieur -->
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Interieur:</h3>
              </div>
              <div class="panel-body">
                <h4>Papier</h4>
                <ul data-label="Papier" class="list-inline">
                  <li><a href="#" class="btn btn-info">100gr</a></li>
                  <li><a href="#" class="btn btn-info">130gr</a></li>
                  <li><a href="#" class="btn btn-info">150gr</a></li>
                  <li><a href="#" class="btn btn-info">200gr</a></li>
                  <li><a href="#" class="btn btn-info">250gr</a></li>
                </ul>

                <h4>Impression</h4>
                <ul data-label="Impression" class="list-inline">
                  <li><a href="#" class="btn btn-info">Quadrichromie (Recto)</a></li>
                  <li><a href="#" class="btn btn-info">Quadrichromie (Recto/Verso)</a></li>
                  <li><a href="#" class="btn btn-info">Noir (Recto)</a></li>
                  <li><a href="#" class="btn btn-info">Noir (Recto/Verso)</a></li>
                </ul>
              </div>
            </div>
            <!-- Interieur -->

            <!-- Button addon -->
            <ul class="list-inline">
              <li>
                <input type="submit" name="" class="btn btn-info btn-lg" value="Demander" id="demander">
              </li>
              <li>
                <input type="submit" name="" class="btn btn-info btn-lg" value="Ajouter au panier" id="ajouter-panier">
              </li>
            </ul>

            <!-- /Button addon -->

          </form><!-- /demande-devis -->

        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->