<?php
    if(isset($_POST["envoieInformation"]))
            {
                
                    try
                    {   
                        /*$_SESSION["user_email"]=$_POST["user_email"];*/
                           
						/*if $_POST["user_email"] = mail déjà existant, mettre id correspondant*/  
						/*faire la requête de Kenny pour l'user_id de localisation*/  						

                        $insertionUtilisateur=$dbconnexion->prepare("INSERT INTO user (type_user,mail_user,type_technologies_user) VALUES (:userType,:userMail,:userTechno);");
                        $insertionUtilisateur->bindValue(':userType',$_POST["typeUtilisateur"],PDO::PARAM_STR);
                        $insertionUtilisateur->bindValue(':userMail',$_POST["user_email"],PDO::PARAM_STR);
                        $insertionUtilisateur->bindValue(':userTechno',$_POST["technoUtilisateur"],PDO::PARAM_STR);
                        $insertionUtilisateur->execute();

                        $insertionLocalisation=$dbconnexion->prepare("INSERT INTO localisation (longitude,latitude,id_user) VALUES (:userLon,:userLat,:userId);");
                        $insertionLocalisation->bindValue(':userLon',"NULL",PDO::PARAM_STR);
                        $insertionLocalisation->bindValue(':userLat',"NULL",PDO::PARAM_STR);
                        $insertionLocalisation->bindValue(':userId',1,PDO::PARAM_INT);
                        $insertionLocalisation->execute(); 

                        /*$insertionResultat=$dbconnexion->prepare("INSERT INTO resultat (ping,debit_montant,debit_descendant,) VALUES (:userPing,:userMontant,:userDescendant);");
                        $insertionResultat->bindValue(':userPing'," ",PDO::PARAM_STR);
                        $insertionResultat->bindValue(':userMontant'," ",PDO::PARAM_STR);
                        $insertionResultat->bindValue(':debit_descendant'," ",PDO::PARAM_STR);
                        $insertionResultat->execute();*/
                  
                    }
                    catch(PDOException $e)
                    {

                    }
                }
?>