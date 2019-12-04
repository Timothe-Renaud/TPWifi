<?php
/**
 * Contrôleur de la page vues/v_deconnexion.php
 * Gestion de la déconnexion de l'application.
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if (!$uc) {
    $uc = 'demandeconnexion';
}
switch ($action) {
    case 'demandeDeconnexion':
        include 'vues/v_deconnexion.php';
        break;
    case 'valideDeconnexion':
        if (estConnecte()) {
            include 'vues/v_deconnexion.php';
        } else {
            ajouterErreur("Vous n'êtes pas connecté");
            include 'vues/v_erreurs.php';
            include 'vues/v_connexion.php';
        }
        break;
    default:
        include 'vues/v_connexion.php';
        break;
}
