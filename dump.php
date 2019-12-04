<?php

require 'vendor/autoload.php';

try {
    
    $dump = new \Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=portefeuille', 'root', '');

    $dump->start('portefeuille.sql');
    
    echo 'sauvegarde executée avec succés';
    ?> <p><a href="../index.php">Cliquez
                                    ici</a>
                                pour revenir à la page de connexion.</p>
    
 <?php   
} catch (Exception $ex) {
    echo 'impossible de procéder a la sauvegarde : ' . $ex->getMessage();
}

// fonction inutilisée pour le moment
 function envoyerDumpsurFtp($ftpNomdhote,$ftpPort, $ftpLogin, $ftpMdp, $ftpChemin){
$ftp_connect = ftp_connect($ftpNomdhote, $ftpPort, 90);

ftp_login($ftp_connect, $ftpLogin, $ftpMdp);

ftp_pasv($ftp_connect, true);

if(ftp_put($ftp_connect, $ftpChemin, 'portefeuille.sql', FTP_ASCII)){

} else {  
        echo 'Erreur lors de l\'envoi du fichier portefeuille.sql';
    }
    ftp_close($ftp_connect);
}

