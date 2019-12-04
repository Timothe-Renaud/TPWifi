<?php
/**
 * Vue Entête
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/StylePopup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Application Wifi</title>
</head>
<body>
<div class="conatainer-fluid padding">
    <div class="row padding">
        <div class="clo-md-6">
            <div class="container-login100">
                <div class="TopDecale">
                    <div class="row">
                        <div class="container">
                            <div class="login100-form-title">
                                <h2>
                                    <span class="glyphicon glyphicon-arrow-right"></span><?php echo ' ' . $_SESSION['typeCompte'] . ' - ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?>
                                </h2><br>
                            </div>
