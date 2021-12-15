<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $pseudo = $_POST['pseudo'];
    
    query( "insert into inscriptions (pseudo) values ( '$pseudo' );" );

    query( "select * from inscriptions;" );

    $tableauData = [];
    while ( $ligne = $res->fetch_assoc())
    {
        //$ligne[ 'nom' ] = utf8_encode( $ligne[ 'nom' ] );
        $tableauData[] = $ligne;
    } 
    print( json_encode( $tableauData ) );
?>