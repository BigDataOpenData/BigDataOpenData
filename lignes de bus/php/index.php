<html>
    <head>
        <title>Bus lines management</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
        <script src="http://www.openstreetmap.org/openlayers/OpenStreetMap.js"></script>
        <script type="text/javascript" src="../js/index.js"></script>

    </head>

    <body onload="init();">
        <div id="divmain">
            <div id="divheader">
                <p class="ptitre">Affichage de lignes de bus avec OpenStreetMap</p>
                
            </div>
      <!--      <div id="divmenu">
                <p> Lignes de bus à afficher</p>
                <p> Ligne 2602 <span class="spanbtn"><input type="checkbox" id="chk2602" onclick="affiche2602();"/></span> </p>
                <p> Ligne 7753 <span class="spanbtn"><input type="checkbox" id="chk7753" value="false" onclick="affiche7753();"/></span> </p>
            </div> -->
            <div id="divtext">
                <p>"Proof of Concept" du projet technique de M1 à l'ISEN-Toulon.
                    Il est possible de visualiser sur la carte ci-dessous le trajet
                    emprunté par deux lignes de bus du département Var. Les cases à cocher
                    permettent d'afficher ou d'effacer les trajets de la carte. <br/>
                    Tuteur du projet: PÉROCHEAU Guillaume <br />
                    Client: SEVAL Jean-Pierre </p>
                <input type="file" name="Parcourir">
            </div>
            <div id="divmap"></div>
            <div id="divfooter">
                <p class="pfooter">Réalisé par: ALBALADEJO, BARRAUD, CHAMIEH, NATIVO</p>
            </div>
        </div>
    </body>
</html>