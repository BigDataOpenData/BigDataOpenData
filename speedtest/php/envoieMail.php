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
            $nom = "";
            $prenom = "";
            $tel = "";
            $mail = "";
            $subject = "";
            $message = "";
            $msg_nom = "";
            $msg_mail = "";
            if($_POST){
                //Récupération des données du formulaire----------------------------
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $tel = $_POST["tel"];
                $mail = $_POST["user_email"];
                $message = $_POST["resultat"];
                //------------------------------------------------------------------

                 $destinataire = $mail;
                 $expediteur   = "mon.adresse@monhebergeur.fr";
                 $message .= $_POST['mail']."\n";
                 $message .= $_POST['message']."\n";
                 /* adresse de l'expéditeur ci-dessous c'est à dire le Site Web */
                 /* $headers ='From: "SiteWeb"<mon.adresse@monhebergeur.fr>'."\n"; */
                 $headers ='From: "SiteWeb"<mon.adresse@monhebergeur.fr>'."\n";
                 $headers .='Reply-To: mon.adresse@monhebergeur.fr'."\n";
                 $headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n";
                 $headers .='Content-Transfer-Encoding: 8bit';
                 /* adresse du destinataire ci-dessous */
                 if(mail($destinataire, $subject, $message, $headers))
                 {
                      echo 'Le message a bien été envoyé';
                 }
                 else
                 {
                      echo 'Le message n\'a pas pu être envoyé';
                 }
            }
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