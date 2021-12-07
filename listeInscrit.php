<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $mysqli = new mysqli($servername, $username, $password, $database);

    $query  = "SELECT * FROM inscription;";

    $res = $mysqli->query( $query );
    
    while ($ligne = $res->fetch_assoc())
        print(json_encode($ligne['pseudo'])."<br>");
        //print( "- ".$ligne['pseudo']."<br>");

    $mysqli->close();
?>