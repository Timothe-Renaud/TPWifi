<?php
/**
 * Fonctions pour le script de mise a jour de la base de données init/majBDD.php
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */


/**
 * Mise a jour de la structure de la base de donnée.
 * 1. Table port_etudiant -> augmentation de 32 a 255 char pour la colonne 'mdp'
 * 2. Table port_professeur -> augmentation de 32 a 255 char pour la colonne 'mdp'
 * 3. Création de la table peripherique
 */
function majBDD($pdo)
{

    $req = 'DROP TABLE IF EXISTS port_peripherique;';
    $pdo->exec($req);

    $req = 'ALTER TABLE `port_etudiant` CHANGE `mdp` `mdp` CHAR(255)';
    $pdo->exec($req);

    $req = 'ALTER TABLE `port_professeur` CHANGE `mdp` `mdp` CHAR(255)';
    $pdo->exec($req);

    $req = 'CREATE TABLE IF NOT EXISTS port_peripherique ('
        . 'id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, '
        . 'idutilisateur INT(10) NOT NULL, '
        . 'description CHAR(30) NOT NULL, '
        . 'adressemac VARCHAR(17) NOT NULL, '
        . 'etat INT(1) NOT NULL, '
        . 'datecreation DATE NOT NULL)';
    $pdo->exec($req);
}


/**
 * Génère un mot de passe aléatoire de 8 caractères
 * @return string le mot de passe
 */
function radomPassword()
{

    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'
        . '0123456789';
    $length = 8;
    $str = '';
    $max = strlen($chars) - 1;

    for ($i = 0; $i < $length; $i++) {
        $str .= $chars[mt_rand(0, $max)];
    }

    return $str;
}

/**
 * Requete qui récupere tous les étudiants avec leurs numéro, nom, prénom, mel.
 * @param $pdo
 * @return mixed la liste de tous les étudiants
 */
function getAllEtudiant($pdo)
{
    $req = 'SELECT port_etudiant.num AS num, port_etudiant.nom AS nom, port_etudiant.prenom AS prenom,'
        . ' port_etudiant.mel AS login '
        . 'FROM port_etudiant ';
    $res = $pdo->query($req);
    $lesLignes = $res->fetchAll();
    return $lesLignes;
}

/**
 * Requete qui récupere tous les professeurs avec leurs numéro, nom, prénom, mel.
 * @param $pdo
 * @return mixed la liste de tous les professeurs
 */
function getAllProfesseur($pdo)
{
    $req = 'SELECT port_professeur.num AS num , port_professeur.nom AS nom, port_professeur.prenom AS prenom,'
        . ' port_professeur.mel AS login '
        . 'FROM port_professeur ';
    $res = $pdo->query($req);
    $lesLignes = $res->fetchAll();
    return $lesLignes;
}

/**
 * Requete qui met a jour la colonne 'mdp' de la table port_etudiant grace a la PK num
 * @param $pdo
 * @param $num
 * @param $mdp
 */
function updateEtudiantMpd($pdo, $num, $mdp)
{
    $req = "UPDATE port_etudiant SET mdp = '" . $mdp . "' WHERE port_etudiant.num = " . $num;
    $pdo->exec($req);
}

/**
 * Requete qui met a jour la colonne 'mdp' de la table port_etudiant grace a la PK num
 * @param $pdo
 * @param $num
 * @param $mdp
 */
function updateProfesseurMpd($pdo, $num, $mdp)
{
    $req = "UPDATE port_professeur SET mdp = '" . $mdp . "' WHERE port_professeur.num = " . $num;
    $pdo->exec($req);
}

/**
 * Envoie du mail
 * @param $nom
 * @param $prenom
 * @param $mdp
 * @param $login
 *
 * 1. le message
 * 2. envoie du mail
 */
function envoieMail($nom, $prenom, $mdp, $login)
{

// Le message
    $message = "Bonjour " . $prenom . " " . $nom . " !\r\nNotre politique de mot de passe vient de changer.\r\nle mot de passe de votre compte \""
        . $login . "\" à été changer. Voici votre nouveau mot de passe : \"" . $mdp . "\".";

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
    $message = wordwrap($message, 70, "\r\n");

// Envoi du mail
    mail($login, 'Nouveau mot de passe', $message);

}