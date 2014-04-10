<?php

try
{
    /* 
    				TO DO
    		Changer les logs de connexion de la bdd
    */
    $dbconnexion=new PDO("mysql:host=localhost;dbname=speedtest","root","");                                      
}

catch(PDOexception $e)
{
    header('location:index.php?mess=echec+de+la+connexion');
    exit;
}
?>