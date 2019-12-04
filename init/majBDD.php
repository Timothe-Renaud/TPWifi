<?php
/**
 * Script de mise a jour de la base de données pour intégration de l'application Wifi.
 *
 * 1) Récuperation de tout les utilisateurs (Etudiant + Professeur + Administrateur).
 * 2) Modification de tout les mot de passe utilisateurs.
 * 3) Envoie de mail a tous les utilisateurs avec leurs nouveau mot de passe (ils pourront changer dans l'appli).
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */

require './fonctions.php';

$pdo = new PDO('mysql:host=localhost;dbname=portefeuille', 'root', '');
$pdo->query('SET CHARACTER SET utf8');

majBDD($pdo);

// On récupere tous les étudiants et tous les professeurs.
$lesEtudiants = getAllEtudiant($pdo);
$lesProfesseurs = getAllProfesseur($pdo);

$i = 0;
echo "Etudiants : <br>";
foreach ($lesEtudiants as $unEtudiant) {
    $num = $unEtudiant['num'];
    $nom = $unEtudiant['nom'];
    $prenom = $unEtudiant['prenom'];
    $login = $unEtudiant['login'];
    $mdp = radomPassword(); // Génération du nouveau mdp

    $hash = $mdp; //on crée une copie du mdp pour le hasher
    $hash = password_hash($hash, PASSWORD_DEFAULT); // on hash la copie du mdp
    if (password_verify($mdp, $hash)) { // on test si tout est ok avec password verify
        updateEtudiantMpd($pdo, $num, $hash); // update du mdp dans la base
        envoieMail($nom, $prenom, $mdp, $login);
    }
    echo $num . ' - ' . $nom . ' - ' . $prenom . ' - ' . $login . ' - ' . $mdp . ' - ' . $hash . " - mail envoyé !<br>";

    $i++;
}
echo "<br>";
echo "Il y a " . $i . " Etudiants.<br><br>";

$i = 0;
echo "Professeurs :<br>";
foreach ($lesProfesseurs as $unProfesseurs) {
    $num = $unProfesseurs['num'];
    $nom = $unProfesseurs['nom'];
    $prenom = $unProfesseurs['prenom'];
    $login = $unProfesseurs['login'];
    $mdp = radomPassword(); // Génération du nouveau mdp

    $hash = $mdp; //on crée une copie du mdp pour le hasher
    $hash = password_hash($hash, PASSWORD_DEFAULT); // on hash la copie du mdp
    if (password_verify($mdp, $hash)) { // on test si tout est ok avec password verify
        updateProfesseurMpd($pdo, $num, $hash); // update du mdp dans la base
        envoieMail($nom, $prenom, $mdp, $login);
    }
    echo $num . ' - ' . $nom . ' - ' . $prenom . ' - ' . $login . ' - ' . $mdp . ' - ' . $hash . " - mail envoyé !<br>";
    $i++;
}
echo "<br>";
echo "Il y a " . $i . " de Professeurs.<br>";



