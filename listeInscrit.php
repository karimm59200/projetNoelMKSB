<?php
    // require_once "ressources.php";
    // require_once "fonctions.php";

    $mysqli = new mysqli("localhost", "root", "", "fetedenoel");

    $query  = "SELECT * FROM inscriptions;";

    $res = $mysqli->query( $query );
    $tab = [];
    while ($ligne = $res->fetch_assoc()){
        array_push($tab, $ligne);
    }
        //print( "- ".$ligne['pseudo']."<br>");

    $mysqli->close();
    echo json_encode($tab);
?>