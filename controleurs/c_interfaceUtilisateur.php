<?php
/**
 * Contrôleur de la page vues/v_interfaceUtilisateur.php
 * Gestion des differentes actions que peut effectuer un Utilisateur.
 *
 * 1) Ajouter/Supprimer un péripherique.
 * 2) Demande d'envoie des information de connexion par mel.
 * 3) Changer de mot de passe.
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$infoWifi = getLoginWifi();
switch ($action) {
    case 'demandeConnexion':
        break;
    case 'formulaireWifi':
        $mac = filter_input(INPUT_POST, 'mac', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $adressmac = strtolower($mac);
        $adressmac = str_replace('-', '', $adressmac);
        $adressmac = str_replace(':', '', $adressmac);
        $estConcordant = $pdo->getPeripheriquesConcordants($adressmac);
        if (!is_array($estConcordant)) {
            $pdo->nouveauPeripherique($_SESSION['idUtilisateur'], $adressmac, $description, 1, date('y-m-d'));
            ecritConfigDhcp("ajout", $adressmac, $_SESSION['prenom'], "SLAM"); //TODO
            ecritConfigBorne("ajout", $adressmac);
            if($_SESSION['Remplacer'] == true) 
            {
                $adressemacaremplacer = filter_input(INPUT_POST, 'lstperiph', FILTER_SANITIZE_STRING);
                $pdo->desacPeripherique($adressemacaremplacer);
                ecritConfigDhcp("suppr", $adressmac, $_SESSION['prenom'], "SLAM"); //TODO
                ecritConfigBorne("suppr", $adressmac);
            }
            
        } else {
            ajouterErreur('erreur : votre adresse MAC a déja été entrée auparavant , veuillez la supprimer ou préciser le remplacement.');
            include 'vues/v_erreurs.php';
        }
        break;
    case 'demandeInfo':
        envoieMailRecap($_SESSION['nom'], $_SESSION['prenom'], $infoWifi['ssid'], $infoWifi['securite'], $infoWifi['mdp'], $_SESSION['login']);
        break;
    case 'changerMdp':
        $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);
        $mdpverif = filter_input(INPUT_POST, 'mdpverif', FILTER_SANITIZE_STRING);
        $num = $_SESSION['idUtilisateur'];
        if ($mdp == $mdpverif) { // test si les mdp sont les mêmes
            $hash = password_hash($mdp, PASSWORD_DEFAULT); // on hash le mdp
            if (password_verify($mdp, $hash)) { // en théory le password_verify sera toujours OK
                if ($_SESSION['typeCompte'] == "Etudiant") { // Si l'utilisateur n'est pas un étudiant alors c'est un prof/admin
                    $pdo->updateEtudiantMdp($num, $hash);
                } else {
                    $pdo->updateProfesseurMdp($num, $hash);
                }
            } else {
                echo "KO hash";
            }
        } else {
            echo "mdp différent";
        }
        break;
    case 'supprimerPeripherique':
        $adressmac = filter_input(INPUT_GET, 'adressMac', FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_GET, 'idPeripherique', FILTER_SANITIZE_STRING);
        $pdo->supprimerPeripherique($id);
        ecritConfigDhcp("suppr", $adressmac, $_SESSION['prenom'], "SLAM");
        ecritConfigBorne("suppr", $adressmac);
        break;
}
    $_SESSION['Remplacer'] = false; 
$lesPeripheriques = $pdo->getTousLesPeripheriquesUtilisateur($_SESSION['idUtilisateur']);
require 'vues/v_interfaceUtilisateur.php';