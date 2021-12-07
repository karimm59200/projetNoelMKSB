<?php
    session_start();
    require_once "ressources.php";

    print("Bonjour ".$_SESSION['nom']);
?>
<br>
<a href="logout.php">Déconnexion</a>