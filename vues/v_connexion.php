<?php
/**
 * Vue Connexion
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>se connecter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
    </head>
    <body>
        <div class="conatainer-fluid padding">
            <div class="row padding">
                <div class="clo-md-6">
                    <div class="limiter">
                        <div class="container-login100">
                            <form class="login100-form validate-form" method="post"
                                  action="index.php?uc=connexion&action=valideConnexion">
                                <span class="login100-form-title">
                                    Veuillez-vous connecter:
                                </span>
                                <div class="wrap-input200 validate-input"
                                     data-validate="Un email valide est obligatoire: ex@abc.xyz">
                                    <input class="input100" type="email" name="login" placeholder="Email">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="wrap-input200 validate-input" data-validate="mot de passe obligatoire">
                                    <input class="input100" type="password" name="mdp" placeholder="Password">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn">
                                        Envoyer
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script>
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <script src="js/main.js"></script>

    </body>
</html>