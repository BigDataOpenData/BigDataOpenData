<?php
    session_start();
    include'connexion.php';
    include'testInformation.inc.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <script src="http://speedof.me/api/api.js" type="text/javascript"></script>
        <script type="text/javascript" src="JS/speedtest.js"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css" media="all"/>
        <script type="text/javascript" src="JS/geolocalisation.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnIfQkM1wlqQN_omTeEMala_dHw07NEIY&sensor=false"></script>
        <?php
            
        ?>
    </head>
    <body onload="initialize()">
        <div class="fond">
            <div class="conteneur">
                <div class="title">
                    <h2>SpeedOf.Me API Consumer - Sample Page</h2>
                </div>
                <div class="contenu">
                    <a href="index.php">retour</a>
                </div>
            </div>
        </div>
    </body>
</html>