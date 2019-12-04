<?php
/**
 * Vue InterfaceAdministrateur
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
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse20"><span
                        class="glyphicon glyphicon-cog"></span> Ajout Utilisateur </a>
            </h4>
        </div>
        <div id="collapse20" class="panel-collapse collapse in" >
            <div class="panel-body">
                <form method="post">
                    <h4>Quel type d'utilisateur voulez-vous ajouter ?</h4><br>
                    <input type="radio" name="ajoutUtilisateur" value="Etudiant"> Etudiant<br>
                    <input type="radio" name="ajoutUtilisateur" value="Professeur"> Professeur<br>
                    <input type="radio" name="ajoutUtilisateur" value="Administrateur"> Administrateur<br>
                    <input type="submit" name="submit" Value="selectionner"/><br>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    if (($_POST['ajoutUtilisateur'] == "Etudiant")) { // On selectionne Etudiant.
                        $_SESSION['ajoutUtilisateur'] = "Etudiant";
                        require 'vues/v_ajoutEtudiant.php'; //affiche le vue v_ajoutEtudiant.php
                    } else {
                        if (($_POST['ajoutUtilisateur'] == "Professeur")) { // On selectionne Professeur.
                            $_SESSION['ajoutUtilisateur'] = "Professeur";
                        } else {
                            $_SESSION['ajoutUtilisateur'] = "Administrateur"; // On selectionne Administrateur
                        }
                        require 'vues/v_ajoutProfesseur.php'; //affiche la vue prof/admin -> addProf.php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> <span class="login200-form-title"><span
                            class="glyphicon glyphicon-user"></span> Gestion Etudiant </span>
                </a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table table-bordered table-hover specialCollapse">
                    <thead>
                    <tr>
                        <th class="col-md-1"><small></small></th>
                        <th class="col-md-1"><small>NOM</small></th>
                        <th class="col-md-2"><small>PRENOM</small></th>
                        <th class="col-md-2"><small>EMAIL</small></th>
                        <th class="col-md-1"><small>Action</small></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($lesEtudiants as $unEtudiant) {
                            $id = $unEtudiant['num'];
                            $nom = htmlspecialchars($unEtudiant['nom']);
                            $prenom = htmlspecialchars($unEtudiant['prenom']);
                            $mail = $unEtudiant['login'];
                            ?>
                            <tr>
                                <td> <input class="input100" type="checkbox" value=""> </td>
                                <td> <input class="input100" type="text" id="nom" name="nom" value="<?php echo $nom ?>"></td>
                                <td> <input class="input100" type="prenom" id="prenom" name="prenom" value="<?php echo $prenom ?>"></td>
                                <td> <input class="input100" type="mail" id="mail" name="mail" value="<?php echo $mail ?>"</td>
                                <td><!-- btn de revoke -->
                                    <button type="button" class="btn btn-info">
                                        <span class="glyphicon glyphicon-ban-circle"></span>
                                    </button><br>
                                    <!-- btn de  btn de modification -->
                                    <a href="index.php?uc=utilisateur&action=modifierUtilisateur&idUtilisateur=<?php echo $id ?>"
                                       onclick="return confirm('Voulez-vous vraiment modifier cet utilisateur ?');">
                                        <button class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button><br>
                                    </a>
                                    <!-- btn de btn de suppression -->
                                    <button type="button" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-remove-sign"></span>
                                    </button><br>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table><br>
                <button type="button" class="btn btn-warning">Modifier</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
    <!-- fin du panel etudian  -->

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"> <span class="login200-form-title"><span
                            class="glyphicon glyphicon-user"></span> Gestion Professeur </span>
                </a>
            </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table table-bordered table-hover specialCollapse">
                    <thead>
                    <tr>
                        <th class="col-md-1"><small></small></th>
                        <th class="col-md-1"><small>NOM</small></th>
                        <th class="col-md-2"><small>PRENOM</small></th>
                        <th class="col-md-2"><small>EMAIL</small></th>
                        <th class="col-md-1"><small>Action</small></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($lesProfesseurs as $unProfesseur) {
                            $id = $unProfesseur['num'];
                            $nom = htmlspecialchars($unProfesseur['nom']);
                            $prenom = htmlspecialchars($unProfesseur['prenom']);
                            $mail = $unProfesseur['login'];
                            ?>
                            <tr>
                                <td> <input type="checkbox" value=""> </td>
                                <td> 
                                    <fieldset> <input type="text" id="nom" 
                                                    name="nom"
                                                    class="input100"
                                                    value="<?php echo $nom ?>">
                                    </fieldset>
                                </td>
                                <td> 
                                    <fieldset> 
                                        <input type="prenom"
                                               class="input100"
                                                id="prenom" 
                                                name="prenom" 
                                                value="<?php echo $prenom ?>">
                                    </fieldset> </td>
                                <td> 
                                    <input type="mail" id="mail" name="mail"
                                           class="input100"
                                            value="<?php echo $mail ?>"></td>
                                <td>
                                    <!-- btn de revoke -->
                                    <button type="button" 
                                            class="btn btn-info">
                                        <span class="glyphicon glyphicon-ban-circle"></span>
                                    </button><br>
                                    <!-- btn de  btn de modification -->
                                    <a href="index.php?uc=utilisateur&action=modifierUtilisateur&idUtilisateur=<?php echo $id ?>"
                                       onclick="return confirm('Voulez-vous vraiment modifier cet utilisateur ?');">
                                        <button class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button><br>
                                    </a>
                                    <!-- btn de btn de suppression -->
                                    <button type="button" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-remove-sign"></span>
                                    </button><br>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table><br>
                <button type="button" class="btn btn-warning">Modifier</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
    <!--  fin panel professeur  -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span
                        class="glyphicon glyphicon-cog"></span> Sauvegarde - Export </a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr><!--   Champ numero 1 -->
                            <th>
                                <h3>Procedure sauvegarde</h3>
                            </th>
                            <th>
                                <h3>Procédure d'export sur FTP </h3>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://projetwifi/dump.php">
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> executer la sauvegarde
                                    </button>
                                </a>
                            </td>
                            <td>
<!--                                <form class="contact100-form validate-form" method="post"
                              action="index.php?uc=administrateur&action=">
                             Partie input de l'@ MAc 
                            <label class="label-input100" for="MacAdr">saisir le nom de l'hote</label>
                            <div class="wrap-input100 validate-input">
                                <input id="ftpNomdhote" class="input100" type="text" name="ftpNomdhote"
                                <span class="focus-input100"></span>
                            </div>
                             espace de saisir specifique par l'utilisateur 
                            <label class="label-input100" for="first-name">saisir le port d'accés</label>
                            <div class="wrap-input100 rs1 validate-input">
                                <input id="ftpPort" class="input100" type="text" name="ftpPort">
                                <span class="focus-input100"></span>
                            </div>
                             <label class="label-input100" for="first-name">saisir le Login du FTP</label>
                            <div class="wrap-input100 rs1 validate-input">
                                <input id="ftpLogin" class="input100" type="text" name="ftpLogin">
                                <span class="focus-input100"></span>
                            </div>
                              <label class="label-input100" for="first-name">saisir le mot de passe d'accés au FTP</label>
                            <div class="wrap-input100 rs1 validate-input">
                                <input id="ftpMdp" class="input100" type="text" name="ftpMdp">
                                <span class="focus-input100"></span>
                            </div>
                              <label class="label-input100" for="first-name">saisir le Chemin ou sera entreposé le fichier</label>
                            <div class="wrap-input100 rs1 validate-input">
                                <input id="ftpChemin" class="input100" type="text" name="ftpChemin">
                                <span class="focus-input100"></span>
                            </div>
                             <input type="submit" value="exporter sur FTP" />
                                </form>

                                -->             <form action="http://projetwifi/export.php">
                                            <input type="submit" class="btn btn-primary" value="Exporter sur un serveur FTP" />
                                    </form>

                            </td>
                        </tr>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!-- fin du deuxieme onglet -->
</div>
<?php
require 'vues/v_pied.php';
?>
