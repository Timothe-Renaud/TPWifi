<?php
/**
 * Vue Déconnexion
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */
require "../includes/fct.inc.php";
deconnecter();
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/util.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>panel étudiant</title>
    </head>
    <body>
    <div class="conatainer-fluid padding">
        <div class="row padding">
            <div class="container-login100">
                <div class="row">
                    <div class="container">
                        <div class="alert alert-danger" role="alert">
                            <p>Vous avez bien été déconnecté ! <a href="../index.php?action=demandeConnexion">Cliquez
                                    ici</a>
                                pour revenir à la page de connexion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
<?php
