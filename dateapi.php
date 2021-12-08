<?php
    require_once "ressources.php";
    require_once "fonctions.php";
   
    $mysqli = new mysqli($servername, $username, $password, $database);

        $query  = "SELECT * FROM dateTirage;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        
        print( json_encode($ligne['dateFin']));
?>