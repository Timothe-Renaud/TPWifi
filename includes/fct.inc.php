<?php

/**
 * Fonctions pour l'application Wifi
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */



/**
 * Teste si un quelconque visiteur est connecté
 *
 * @return vrai ou faux
 */
function estConnecte()
{
    return isset($_SESSION['idUtilisateur']);
}

/**
 * Enregistre dans une variable session les infos d'un visiteur
 *
 * @param String $idVisiteur ID du visiteur
 * @param String $nom Nom du visiteur
 * @param String $prenom Prénom du visiteur
 *
 * @return null
 */
function connecter($id, $nom, $prenom, $login)
{  
    $_SESSION['Remplacer']= false;
    $_SESSION['idUtilisateur'] = $id;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['login'] = $login;

}

/**
 * Détruit la session active ainsi que ses cookies
 *
 * @return null
 */
function deconnecter()
{
    session_start();
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params["httponly"]);
    }
    session_destroy();
}

/**
 * Ajoute le libellé d'une erreur au tableau des erreurs
 *
 * @param String $msg Libellé de l'erreur
 *
 * @return null
 */
function ajouterErreur($msg)
{
    if (!isset($_REQUEST['erreurs'])) {
        $_REQUEST['erreurs'] = array();
    }
    $_REQUEST['erreurs'][] = $msg;
}

/**
 * Retourne un tableau associatif contenant les information de connexion au réseau wifi.
 * @return array
 */
function getLoginWifi()
{
    return $identifiantWifi = ['ssid' => "SIO810 / SIO806", 'securite' => "WPA2-PSK(AES)", 'mdp' => "2016-BONA-SIO"];
}

function gestionMac($mac, $separateur)
{
    $newMac = null;

    for ($i = 0; $i < strlen($mac); $i++) {
        $newMac .= $mac[$i];
        if ($i % 2) {
            $newMac .= $separateur;
        }
    }

    return substr($newMac, 0, strlen($newMac) - 1);
}

/**
 * Envoie du mail qui récapitule toutes les infos du wifi
 * @param $nom nom de l'utilisateur
 * @param $prenom prenom de l'utilisateur
 * @param $ssid identifiant des borne wifi
 * @param $securite type de sécurité des bornes
 * @param $mdpwifi mot de passe du wifi
 * @param $login mel de l'utilisateur
 */
function envoieMailRecap($nom, $prenom, $ssid, $securite, $mdpwifi, $login)
{

// Le message
    $message = "Bonjour " . $prenom . " " . $nom . " !\r\n"
        . "Vous avez demandé à recevoir un récapitulatif de vos informations de connexion pour le reseaux wifi du BTS SIO.\r\n"
        . "SSID : \"" . $ssid . "\" \r\n"
        . "Sécurité : \"" . $securite . "\" \r\n"
        . "Mot de passe du wifi : \"" . $mdpwifi . "\"\r\n"
        . "Votre login : votre adresse mail \r\n"
        . "Votre mot de passe (le meme que pour le livret de compétance) vous a été envoyé dans un précédant mail.";

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
    $message = wordwrap($message, 70, "\r\n");

// Envoi du mail
    mail($login, 'WIFI SIO - Récapitulatif de vos informations', $message);

}

/**
 * Fonction qui ecrit dans un fichier .txt la configuration du serveur DHCP.
 * Les lignes de commande permette soit d'ajouter soit de supprimer une reservation d'ip pour une adresse mac.
 * @param $action "suppr" ou "ajout".
 * @param string $adressmac Adresse mac en minuscule et avec séparateurs "-".
 * @param string $prenom de l'utilisateur.
 * @param string $groupe nom du groupe de l'utilisateur.
 */
function ecritConfigDhcp($action, $adressmac, $prenom, $groupe)
{
    $fichier = "configDHCP.txt";
    $monFichier = fopen($fichier,"a" );
    $contenu = "";
    if($action == "ajout"){
        $contenu = "Add-DhcpServerv4Reservation -ScopeId 10.10.0.0 -IPAddress 10.10.130.xxx -ClientId "
            . gestionMac($adressmac, "-") ."  -Description \"" . $prenom. " ".$groupe . " \" -Name \"" . $prenom. " ".$groupe . "\"" . "\n";
    }else{
        $contenu = "Remove-DhcpServerv4Reservation -ComputerName \"cd1.sio.lan\" -ScopeId 10.10.0.0 -ClientId ". $adressmac . "\n";
    }
    fwrite($monFichier, $contenu);
    fclose($monFichier);

}

/**
 * Fonction qui ecrit dans un fichier .txt la configuration du des bornes wifi.
 * Les lignes de commande permette soit d'ajouter soit de supprimer une adresse mac dans la white list des bornes wifi.
 * @param $action "suppr" ou "ajout".
 * @param string $adressmac Adresse mac en minuscule et avec séparateurs ":".
 */
function ecritConfigBorne($action, $adressmac)
{
    $fichier = "configBorne.txt";
    $monFichier = fopen($fichier, "a");
    $contenu = "";
    if ($action == "ajout") {
        $contenu = "listMac=`nvram show | grep wlan0_ssid0_acl_list | cut -d\"=\" -f2`\n";
        $contenu .= "nvram set wlan0_ssid0_acl_list=" . gestionMac($adressmac, ":") . ",unknown,1\; \n";
    } else {
        $contenu = "nvram set wlan0_ssid0_acl_list=,unknown,1\; \n";
    }
    fwrite($monFichier, $contenu);
    fclose($monFichier);
}