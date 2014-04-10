<?php
    session_start();
    include'connexion.php';
?>
<html class="no-js" lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <script src="http://speedof.me/api/api.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="../css/main.css" media="all"/>
        <script type="text/javascript" src="../JS/geolocalisation.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnIfQkM1wlqQN_omTeEMala_dHw07NEIY&sensor=false"></script>
        <link rel="stylesheet" href="../css/foundation.css" />
        <script src="../JS/vendor/modernizr.js"></script>
    </head>
        <body onload="initialize()">

        
            <div class=" row">
                <header>
                    <h2>SpeedOf.Me API Consumer - Sample Page</h2>
                </header >
                <div class="contenu row">
                    <form method="POST" action="envoieMail.php" data-abide>

                        <div class="row collapse">
                            <div class="small-3 large-2 columns">
                              <span class="prefix"> Support <span class="obligatoire">*</span> </span>
                            </div>
                            <div class="small-9 large-10 columns">
                                <select class="menuDeroulant name="localisationUtilisation" fullBlock" id="idLocalisationUtilisation" >
                                    <option>Selection</option>
                                    <option>smartphone</option>
                                    <option>ordinateur</option>
                                    <option>tablette</option>
                                </select>
                            </div>
                            
                        </div>
                      
                        <br>

                        <div id="divAdress" class="row collapse"  data-equalizer>
                            <div class="small-3 large-2 columns"  >
                              <span class="prefix"  class="prefixAdress" data-equalizer-watch>Adresse</span>
                            </div>
                            <div class="small-8 large-9 columns" >
                                 <input id="address" type="textbox" class="fullBloc" data-equalizer-watch>
                            </div>

                            <div class="small-1 large-1 columns"  >
                              <input type="button" value="Localiser" class="secondary button" onclick="codeAddress()" data-equalizer-watch>
                            </div>
                            
                        </div>

                        
                        <br>
                        <span class="exemple">n° nom rue, Ville, Pays</span><br>
                        <!--<div id="infoposition"></div>-->
                        <div id="map-canvas"></div>
                        <br>

                        <div class="row collapse">
                            <div class="small-3 large-2 columns">
                                <span class="prefix"> e-mail <span class="obligatoire">*</span> </span>
                            </div>
                            <div class="small-9 large-10 columns">
                                <input type="email" name="user_email"  required>
                                <small class="error">Un e-mail valide est requis.</small>
                            </div>   
                        </div>

                        <br>
                        <div class="row collapse">
                            <div class="small-3 large-2 columns">
                                <span class="prefix"> nature de l'offre  <span class="obligatoire">*</span> </span>
                            </div>
                            <div class="small-9 large-10 columns">
                                <select class="menuDeroulant" id="idNatureOffre" name="typeUtilisateur">
                                    <option>Selection</option>
                                    <option>Pro</option>
                                    <option>Grand Public</option>
                                </select>
                            </div>   
                        </div>
                    
                   
                    
                    
                    <br>


                        <div class="row collapse">
                            <div class="small-3 large-2 columns">
                                <span class="prefix"> Type de technologie  <span class="obligatoire">*</span> </span>
                            </div>
                            <div class="small-9 large-10 columns">
                                <select class="menuDeroulant" id="idTypeDeTechno" name="technoUtilisateur">
                                    <option>Selection</option>
                                    <option>DSL</option>
                                    <option>Fibre</option>
                                    <option>hertzien satellite</option>
                                    <option>hertzien terrestre</option>
                                    <option>autre</option>
                                    <option>Je ne sais pas</option>
                                </select>
                            </div>   
                        </div>
                    
                        <div id="msg" name="resultat"></div>
                        <div id="attentesUtilisateur"></div>

                        <ul class="button-group round "> 
                            <li><button id="btnStart" type="button"  onclick="btnStartClick()">Lancer le test</button></li>
                            <script type="text/javascript">
								SomApi.account = "SOM532a5597ab34d";   //your API Key here
								SomApi.domainName = "speedtest";      //your domain or sub-domain here 
								SomApi.config.sustainTime = 4; 
								SomApi.onTestCompleted = onTestCompleted;
								SomApi.onError = onError;

								var msgDiv = document.getElementById("msg");
											
								 function btnStartClick() {
									msgDiv = document.getElementById("msg");
									msgDiv.innerHTML = "<h3>Speed test in progress. Please wait...</h3>";
												SomApi.startTest();
								}
											
								function onTestCompleted(testResult) {
									msgDiv = document.getElementById("msg");
									msgDiv.innerHTML = 
									"<h3>"+
									"Download: "+testResult.download+"<br/>"+
									"Upload: "+testResult.upload+"<br/>"+
									"Test Server: "+testResult.testServer+"<br/>"+
									"IP: "+testResult.ip_address+"<br/>"+
									"Hostname: "+testResult.hostname+"<br/>"+
									"</h3>";
								}
											
								function onError(error) {
									msgDiv = document.getElementById("msg");
									msgDiv.innerHTML = "Error "+ error.code + ": "+error.message;
								}
							</script>
							<!--<li><button id="idBtnValidation" type="button"  onclick="validerTest()" class="btnValidation">Valider le test</button></li>--> 
                         
                        </ul>
                    
                    
                    <br>
                    <!--
                                        TO DO
                                    disabled="disabled" à rajouter
                    -->

                    <input type="submit" class="envoieForm button expand" name="envoieInformation" id="btnEnvoie">
                </form>
            </div>
        </div>
         <script src="../JS/vendor/jquery.js"></script>
    <script src="../JS/foundation.min.js"></script>
    <script src="../JS/foundation/foundation.abide.js"></script>
    <script src="../JS/foundation/foundation.equalizer.js"></script>
  <script src="../JS/foundation/foundation.interchange.js"></script>
    <script>
      $(document).foundation();

      
    </script>
    </body>
</html>