<?php
/**
 * Contrôleur de la page vues/v_interfaceAdministrateur.php
 * Gestion des differentes actions que peut effectuer un Administrateur.
 *
 * 1) Ajouter/Modidier/Supprimer un utilisateur.
 * 2) Ajouter/Modidier/Supprimer un périphérique.
 * 3) Export/Sauvegarde de la base de données.
 * 4) Export/Sauvegarde des scripts de mise a jours des bornes wifi et du HDCP.
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$lesEtudiants = $pdo->getAllEtudiant();
$lesProfesseurs = $pdo->getAllProfesseur();
$lesGroupes = $pdo->getAllGroupe();
switch ($action) {
    case 'demandeConnexion':
        break;
    case 'ajoutUtilisateur': // Ajout d'un nouvel utilisateur, Etudiant, Professeur ou Administrateur.
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
        $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);

        if ($_SESSION['ajoutUtilisateur'] == "Etudiant") {
            $numGroup = filter_input(INPUT_POST, 'numGroup', FILTER_SANITIZE_STRING);
            $pdo->newEtudiant($numGroup, $nom, $prenom, $login, $mdp);
        } else {
            $niveau = 1;
            if ($_SESSION['ajoutUtilisateur'] == "Administrateur") {
                $niveau = 0;
            }
            $pdo->newProfesseur($nom, $prenom, $login, $mdp, $niveau);
            $_POST['ajoutUtilisateur'] = null;
        }
        break;
    case 'modifierUtilisateur':
        $num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
        $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);

        if ($_POST['ajoutUtilisateur'] == "Etudiant") {
            $numGroup = filter_input(INPUT_POST, 'numGroup', FILTER_SANITIZE_STRING);
            $pdo->modifEtudiant($num, $numGroup, $nom, $prenom, $login, $mdp);
        } else {
            $niveau = 1;
            if ($_POST['ajoutUtilisateur'] == "Administrateur") {
                $niveau = 0;
            }
            $pdo->modifProfesseur($nom, $prenom, $login, $mdp, $niveau);
            $_POST['ajoutUtilisateur'] = null;
        }
        break;
    case 'supprimerUtilisateur':
        $num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);

        if ($_POST[ajoutUtilisateur] == "Etudiant") {
            $pdo->supprimerEtudiant($num);
        } else {
            $niveau = 1;
            if ($_POST['ajoutUtilisateur'] == "Administrateur") {
                $niveau = 0;
            }
            $pdo->supprimerProfesseur($num);
            $_POST['ajoutUtilisateur'] = null;
        }
        break;
    case 'ajoutPeripherique':

        break;
    case 'supprimerPeripherique':
        break;
    case 'exportBase':
        // nom d'hote du ftp ( son adresse ip)
$ftpNomdhote = $_POST['ftpNomdhote'];
//port par lequel passer (la plupart du temps on utilise le port 21)
$ftpPort = $_POST['ftpPort'];
// le login pour se connecter au ftp
$ftpLogin = $_POST['ftpLogin'];
// le mot de passe pour se connecter au ftp
$ftpMdp =$_POST['ftpMdp'];
//le chemin ou entreposer le fichier dans le ftp
$ftpChemin = $_POST['ftpChemin'];
envoyerDumpsurFtp($ftpNomdhote, $ftpPort, $ftpLogin, $ftpMdp, $ftpChemin);
        break;
    case 'exportScript':
        break;
}
require 'vues/v_interfaceAdministrateur.php';
