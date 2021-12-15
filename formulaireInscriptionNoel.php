<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $pseudo = $_POST['pseudo'];
    
    query( "insert into inscriptions (pseudo) values ( '$pseudo' );" );

?>