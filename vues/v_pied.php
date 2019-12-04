<?php
/**
 * Vue Pied de page
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */
?>
<a href="#">
    <button type="button" data-target="#maModalHome" data-toggle="modal" class="btn btn-success">
        <span class="glyphicon glyphicon-home"></span> Home
    </button>
</a>
<a href="#">
    <button type="button" data-target="#maModal" data-toggle="modal" class="btn btn-warning"><span
            class="glyphicon glyphicon-log-out"> Déconnection</button>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
<script type="text/javascript" src="../js/module.js"></script>

<!-- Modale deconnexion -->
<div class="modal fade" id="maModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Vous allez etre deconnecté.</h4>
            </div>
            <div class="modal-footer">
                <a href="vues/v_deconnexion.php">
                    <button class="btn btn-warning">
                        <span class="glyphicon glyphicon-log-out">Déconnection</span>
                    </button>
                </a>

            </div>
        </div>
    </div>
</div>
<!-- Modale de retoure au livret de competence -->
<div id="maModalHome" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Vous allez etre redirigés vers le livret de compétence.</h4>
            </div>
            <div class="modal-footer">
                <a href="https://bts-sio.lyc-bonaparte.fr/livret/">
                    <button class="btn btn-warning">
                        <span class="glyphicon glyphicon-log-out"></span>cliquez ici
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<!--  Modale de sauvegarde de bd declencher via le bouton export sur FTP -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4>Le fichier portefeuille.sql a bien été transféré sur le FTP  </h4>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" data-dismiss="modal" >
                    OK
                </button>
            </div>
        </div>
    </div>
</div>

</html>


<script>
    function myFunction() {
       <?php $_SESSION['Remplacer'] = true; ?>
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("text");
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>