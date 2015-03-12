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
        <form action="index.php?option=com_panier&task=commands.save" id="demande-devis" class="form-inline" method="POST">
            <h1 class="title">Brochure:</h1>
            <input type="hidden" name="Titre Command" value="Brochure">

            <!-- Nombre de pages -->
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Info Pages</h3>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label>Nombre de pages :</label>
                  <input type="text" class="form-control" name="Nombre de pages" placeholder="" required>
                </div>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label>Quantité :</label>
                  <input type="text" class="form-control" name="Quantité" placeholder="" required>
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
                  <input type="text" class="form-control" name="Fermé" placeholder="Largeur x Hauteur" pattern="([1,2]\d|[3][0-2])x([1-2]\d|[3][0-2])" required>
                </div>
                <div class="form-group">
                  <label>Ouvert :</label>
                  <input type="text" class="form-control" name="Ouvert" placeholder="Largeur x Hauteur" pattern="([1,2]\d|[3][0-2])x([1-2]\d|[3][0-2])" required>
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
                  <li>
                    <label>
                      <input type="radio" name="Couverture - Papier" value="200gr" required><!-- required -->
                      <span class="btn btn-info">200gr</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Couverture - Papier" value="250gr" required><!-- required -->
                      <span class="btn btn-info">250gr</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Couverture - Papier" value="300gr" required><!-- required -->
                      <span class="btn btn-info">300gr</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Couverture - Papier" value="350gr" required><!-- required -->
                      <span class="btn btn-info">350gr</span>
                    </label>
                  </li>
                </ul>

                <h4>Impression</h4>
                <ul data-label="Impression" class="list-inline">
                  <li>
                    <label>
                      <span class="btn btn-info">Recto</span>
                      <input type="radio" name="Couverture - Impression" value="Recto" required><!-- required -->
                    </label>
                  </li>
                  <li>
                    <label>
                      <span class="btn btn-info">Recto/Verso</span>
                      <input type="radio" name="Couverture - Impression" value="Recto/Verso" required><!-- required -->
                    </label>
                  </li>
                  <li>
                    <div class="form-group">
                      <label>Autre :</label>
                      <input type="text" class="form-control" name="Couverture - Autre" placeholder="Couleurs">
                    </div>
                  </li>
                </ul>

                <h4>Pelliculage</h4>
                <ul data-label="Pelliculage" class="list-inline">
                  <li>
                    <label>
                      <input type="radio" name="Couverture - Pelliculage" value="Sans pelliculage" required> <!-- required -->
                      <span class="btn btn-info">Sans pelliculage</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Couverture - Pelliculage" value="Pelliculage Brillant (Recto)" required> <!-- required -->
                      <span class="btn btn-info">Pelliculage Brillant (Recto)</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Couverture - Pelliculage" value="Pelliculage Brillant (Recto/Verso)" required> <!-- required -->
                      <span class="btn btn-info">Pelliculage Brillant (Recto/Verso)</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Couverture - Pelliculage" value="Pelliculage Mat  (Recto)" required> <!-- required -->
                      <span class="btn btn-info">Pelliculage Mat  (Recto)</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Couverture - Pelliculage" value="Pelliculage Mat  (Recto/Verso)" required> <!-- required -->
                      <span class="btn btn-info">Pelliculage Mat  (Recto/Verso)</span>
                    </label>
                  </li>
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
                  <li>
                    <label>
                      <input type="radio" name="Interieur - Papier" value="100gr" required> <!-- required -->
                      <span class="btn btn-info">100gr</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Interieur - Papier" value="130gr" required> <!-- required -->
                      <span class="btn btn-info">130gr</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Interieur - Papier" value="150gr" required> <!-- required -->
                      <span class="btn btn-info">150gr</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Interieur - Papier" value="200gr" required> <!-- required -->
                      <span class="btn btn-info">200gr</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Interieur - Papier" value="250gr" required> <!-- required -->
                      <span class="btn btn-info">250gr</span>
                    </label>
                  </li>
                </ul>

                <h4>Impression</h4>
                <ul data-label="Impression" class="list-inline">
                  <li>
                    <label>
                      <input type="radio" name="Interieur - Impression" value="Quadrichromie (Recto)" required> <!-- required -->
                      <span class="btn btn-info">Quadrichromie (Recto)</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Interieur - Impression" value="Quadrichromie (Recto/Verso)" required> <!-- required -->
                      <span class="btn btn-info">Quadrichromie (Recto/Verso)</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Interieur - Impression" value="Noir (Recto)" required> <!-- required -->
                      <span class="btn btn-info">Noir (Recto)</span>
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="Interieur - Impression" value="Noir (Recto/Verso)" required> <!-- required -->
                      <span class="btn btn-info">Noir (Recto/Verso)</span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Interieur -->

            <!-- Button addon -->
            <ul class="list-inline">
              <li>
                <input type="submit" name="" class="btn btn-info btn-lg" value="Ajouter au panier">
              </li>
            </ul>

            <!-- /Button addon -->

          </form><!-- /demande-devis -->

        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->