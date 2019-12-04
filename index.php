<?php
/**
 * Created by PhpStorm.
 * User: kakas
 * Date: 16/10/2018
 * Time: 09:37
 */

require_once 'includes/class.pdoWifi.inc.php';
require_once 'includes/fct.inc.php';

session_start();
$pdo = PdoWifi::getPdoWifi();
$estConnecte = estConnecte();
$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_STRING);
if (!$estConnecte) {
    $uc = 'connexion';
} else {
    if ($_SESSION["typeCompte"] == "Administrateur") {
        $uc = 'administrateur';
    } else {
        $uc = 'utilisateur';
    }
}

switch ($uc) {
    case 'connexion';
        include 'controleurs/c_connexion.php';
        break;
    case 'administrateur';
        include 'controleurs/c_interfaceAdministrateur.php';
        break;
    case 'utilisateur';
        include 'controleurs/c_interfaceUtilisateur.php';
        break;
    case 'deconnexion':
        include 'controleurs/c_deconnexion.php';
        break;

}
