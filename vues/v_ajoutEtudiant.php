<div>
    <div class="container-contact100">
        <h4 class="text-center">Nouvel élève :</h4>
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" method="post"
                  action="index.php?uc=administrateur&action=ajoutUtilisateur">
                <!-- Partie input de l'@ MAc -->
                <li class="list-group-item">
                    <label class="label-input100" for="MacAdr">Nom :</label>
                    <div class="wrap-input100 validate-input">
                        <input id="nom" class="input100" type="text" name="nom" placeholder="Petitjean">
                        <span class="focus-input100"></span>
                    </div>
                    <!-- espace de saisir specifique par l'utilisateur -->
                    <label class="label-input100" for="first-name">Prénom :</label>
                    <div class="wrap-input100 rs1 validate-input">
                        <input id="prenom" class="input100" type="text" name="prenom" placeholder="Rayan">
                        <span class="focus-input100"></span>
                    </div>
                    <label class="label-input100" for="MacAdr">Email :</label>
                    <div class="wrap-input100 validate-input">
                        <input id="login" class="input100" type="email" name="login" placeholder="Timothe@localhost.fr">
                        <span class="focus-input100"></span>
                    </div>
                    <label class="label-input100" for="MacAdr">Mot de passe :</label>
                    <div class="wrap-input100 validate-input">
                        <input id="mdp" class="input100" type="text" name="mdp" placeholder="P@ssw0rd">
                        <span class="focus-input100"></span>
                    </div>
                    <!-- espace de saisie de groupe  -->
                    <div class="label-input100">
                        <label>groupe de l'élève ?</label>
                        <select id ="numGroup" name="numGroup">
                            <option value="null">Groupe</option>
                            <?php
                            foreach ($lesGroupes as $unGroupe) {
                                $idGroupe = $unGroupe['num'];
                                $nomGroupe = $unGroupe['nom'];
                                ?>
                                <option value="<?php echo$idGroupe?>"><?php echo $nomGroupe ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <!--  Bouton d'envoi  -->
                    <div class="container-contact100-form-btn">
                        <button data-target="#exportModal" data-toggle="modal" class="btn btn-success contact100-form-btn">
                            <span class="glyphicon glyphicon-save"></span> Envoyer
                        </button>
                    </div>
                </li>

            </form>
        </div>
    </div>
</div>


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