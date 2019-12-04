<?php
/**
 * Vue InterfaceUtilisateur
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */
require 'vues/v_entete.php';
?>
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    <span class="login200-form-title"><span class="glyphicon glyphicon-signal"></span> Demande de nouvelle connexion</span></a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
                <!--  Affichage du form   -->
                <div class="container-contact100">
                    <div class="wrap-contact100">
                        <form class="contact100-form validate-form" method="post"
                              action="index.php?uc=administrateur&action=formulaireWifi">
                            <!-- Partie input de l'@ MAc -->
                            <label class="label-input100" for="MacAdr">Saisir l'adresse MAC de l'appareil</label>
                            <div class="wrap-input100 validate-input">
                                <input id="mac" class="input100" type="text" name="mac"
                                       placeholder="Ex. 00:1B:44:11:3A:B7"
                                       oninvalid="setCustomValidity('Veuillez entrez une adresse MAC valide en majuscule , séparée par des tirets (-) et sans espaces exemple: 12-AB-E2-F3-ZE-B7')"
                                       pattern="^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$">
                                <span class="focus-input100"></span>
                            </div>

                            <!-- espace de saisir specifique par l'utilisateur -->
                            <label class="label-input100" for="first-name">Informations supplementaires de
                                l'appareil</label>
                            <div class="wrap-input100 rs1 validate-input">
                                <input id="description" class="input100" type="text" name="description"
                                       placeholder="ex : pc portable, telephone, etc...">
                                <span class="focus-input100"></span>
                            </div>
                            <ul class="list-group">
                                <label class="label-input100">Remplacement d'appareil?</label>
                                <input type="checkbox" id="myCheck" onclick="myFunction()">
                                <p id="text" style="display:none">
                                    <select id="pet-select" name ="lstperiph">
                                        <option value="">Choisissez l'appareil concerné:</option>
                                        <?php
                                        foreach ($lesPeripheriques as $unPeripherique) {
                                            $i++;
                                            $id = $unPeripherique['id'];
                                            $adressemac = htmlspecialchars($unPeripherique['adressemac']);
                                            $description = htmlspecialchars($unPeripherique['description']);
                                            $datecreation = $unPeripherique['datecreation'];
                                            
                                            ?>
                                            <option value="<?php echo $adressemac ?>"><?php echo $description ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                </p>
                            </ul>
                            <!--  Button d'envoye  -->
                            <div class="container-contact100-form-btn">
                                <button data-target="#exportModal" data-toggle="modal" class="btn btn-success">
                                    <span class="glyphicon glyphicon-save"></span> Envoyer
                                </button>
                            </div>
                        </form> <!-- fin du premiere onglet  -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span
                            class="glyphicon glyphicon-list-alt"></span> Récapitulatif de vos données</a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr><!--   Champ numero 1 -->
                        <th>
                            <h3>Infos WIFI</h3>
                        </th>
                        <th>
                            <h3>Champ de renouvellement de mot de passe</h3>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <form class="contact100-form validate-form" method="post"
                                  action="index.php?uc=utilisateur&action=demandeInfo">
                                <div class="wrap-input100 validate-input">
                                    <h3>SSID</h3>
                                    <p><?php echo $infoWifi['ssid']; ?></p>
                                    <h3>Sécurité</h3>
                                    <p><?php echo $infoWifi['securite']; ?></p>
                                    <h3>Clé WEP du WIFI</h3>
                                    <p><?php echo $infoWifi['mdp']; ?></p>
                                </div>
                                <button class=" btn btn-success">Envoyer par Email</button>
                            </form>
                        </td>
                        <td>
                            <form class="contact100-form validate-form" method="post"
                                  action="index.php?uc=utilisateur&action=changerMdp">
                                <label class="label-input100" for="MacAdr">Saisir un nouveau mot de passe:</label>
                                <div class="wrap-input100 validate-input">
                                    <input id="mac" class="input100" type="text" name="mdp"
                                           placeholder="P@ssw0rd but in a other language"
                                    <span class="focus-input100"></span>
                                </div>
                                <label class="label-input100" for="MacAdr">Confirmer</label>
                                <div class="wrap-input100 validate-input">
                                    <input id="mac" class="input100" type="text" name="mdpverif"
                                           placeholder="P@ssw0rd but in a other language"
                                           oninvalid="setCustomValidity('Veuillez entrez un mot de passe concordant')">
                                    <span class="focus-input100"></span>
                                </div>
                                <button class="btn btn-warning">Valider</button>
                            </form>
                        </td>
                    </tr>
                    </tr>
                    </thead>
                </table>
                <!--si ajoute d'un button le faire ici.  -->
            </div>
        </div>
    </div>
    <!-- fin du deuxieme onglet -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span
                            class="glyphicon glyphicon-briefcase"></span> Liste de vos appareils</a>
            </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th class="adresseMac">Adresse Mac</th>
                        <th class="description">Description</th>
                        <th class="datecreation">Date de création</th>
                        <th class="etat">Etat du péripherique</th>
                        <th class="action">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($lesPeripheriques as $unPeripherique) {
                        $id = $unPeripherique['id'];
                        $etat = $unPeripherique['etat'];
                        $adresseMac = htmlspecialchars($unPeripherique['adressemac']);
                        $description = htmlspecialchars($unPeripherique['description']);
                        $datecreation = $unPeripherique['datecreation'];
                        ?>
                        <tr>
                            <td> <?php echo strtoupper(gestionMac($adresseMac, "-")) ?></td>
                            <td> <?php echo $description ?></td>
                            <td><?php echo $datecreation ?></td>
                            <td><?php echo $etat ?></td>
                            <td>
                                <a href="index.php?uc=utilisateur&action=supprimerPeripherique&idPeripherique=<?php echo $id ?>&adressMac=<?php echo gestionMac($adresseMac, "-") ?>"
                                   onclick="return confirm('Voulez-vous vraiment supprimer ce périphérique?');">Supprimer
                                    ce périphérique</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <!-- fin du deuxieme onglet -->
    <?php
    require 'vues/v_pied.php';
    ?>
    <!-- fenetre modal -->
    <div class="modal fade" id="exportModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- contenue de la modal-->
                <div class="modal-header">
                    <button class="btn btn-clode close" data-dismiss="modal"><span
                                class="glyphicon glyphicon-remove"></span></button>
                    <h4 class="modal-title">Validation de la demande</h4>
                </div>
                <div class="modal-body">
                    la demande a bien ete envoyée , veuillez patienter quelques instants
                </div>
            </div>
        </div>
    </div>


    <!--
    doc checked
    https://stackoverflow.com/questions/18307323/how-to-show-hide-an-element-on-checkbox-checked-unchecked-states-using-jquery
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    -->
