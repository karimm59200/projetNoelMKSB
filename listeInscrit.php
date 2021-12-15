<?php
    // require_once "ressources.php";
    // require_once "fonctions.php";

    $mysqli = new mysqli("localhost", "mehdi", "password", "fetedenoel");

    $query  = "SELECT * FROM inscriptions;";

    $res = $mysqli->query( $query );
    $tab = [];
    while ($ligne = $res->fetch_assoc()){
        $tab[]= $ligne;
    }
        //print( "- ".$ligne['pseudo']."<br>");

    $mysqli->close();
    print( json_encode($tab));
?>