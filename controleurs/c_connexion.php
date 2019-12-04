<?php
/**
 * Contrôleur de la page vues/v_connexion.php.
 * Gestion de la connexion à l'application.
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

switch ($action) {
    case 'demandeConnexion':
        include 'vues/v_connexion.php';
        break;
    case 'valideConnexion':
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);

        $hash = null;
        $utilisateur = null;

        //Requetes qui récupere le mdp depuis la base de donnée en fonction du mel.
        $ligneEtudiant = $pdo->getInfosLigneEtudiant($login);
        $ligneProfesseur = $pdo->getInfosLigneProfesseur($login);


        //Test pour savoir quel requete a retourné une valeur
        // Si $ligneEtudiant est vide, alors l'utilisateur est un professeur.
        if (!is_array($ligneEtudiant)) {
            $hash = $ligneProfesseur['mdp'];
            $utilisateur = 'professeur';
        } else {
            $hash = $ligneEtudiant['mdp'];
            $utilisateur = 'etudiant';
        }

        // $hash = erreur de login // password_verify = erreur de mdp.
        if ($hash == null or password_verify($mdp, $hash) == false) {
            ajouterErreur('Login ou mot de passe incorrect');
            include 'vues/v_erreurs.php';
            include 'vues/v_connexion.php';
        } else { // tout est ok.
            if ($utilisateur == 'etudiant') {
                $etudiant = $pdo->getInfosEtudiant($login); // Récupération des info de l'etudiant

                $id = $etudiant['id'];
                $nom = $etudiant['nom'];
                $prenom = $etudiant['prenom'];
                $_SESSION["typeCompte"] = "Etudiant";
            } else {
                $professeur = $pdo->getInfosProfesseur($login); // Récupération des info du prof

                $id = $professeur['id'];
                $nom = $professeur['nom'];
                $prenom = $professeur['prenom'];
                if ($professeur['niveau'] == 0) {
                    $_SESSION["typeCompte"] = "Administrateur";
                } else {
                    $_SESSION["typeCompte"] = "Enseignant";
                }
            }
            connecter($id, $nom, $prenom, $login);
            echo $_SESSION["typeCompte"];
            header('Location: index.php');
        }
        break;
    default:
        include 'vues/v_connexion.php';
        break;
}