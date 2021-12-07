<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $mysqli = new mysqli($servername, $username, $password, $database);

    $query  = "SELECT * FROM inscriptions;";

    $res = $mysqli->query( $query );
    
    $pseudosMelanger = [];
    $pseudosNonMelanger = [];

    while ($ligne = $res->fetch_assoc())
    {
        $pseudosMelanger[] = $ligne['pseudo'];
        $pseudosNonMelanger[] = $ligne['pseudo'];
    }

    shuffle($pseudosMelanger);

    while ($pseudosNonMelanger[0] === $pseudosMelanger[0])
    {
        shuffle($pseudosMelanger);
        shuffle($pseudosNonMelanger);
    }

    while ( count( $pseudosMelanger ) )
    {
        while ($pseudosMelanger[0] == $pseudosNonMelanger[0] )
            shuffle($pseudosMelanger);

        print($pseudosMelanger[0]." donne a ".$pseudosNonMelanger[0]."<br>");
        array_shift($pseudosNonMelanger);
        array_shift($pseudosMelanger);
    }

    $mysqli->close();
?>