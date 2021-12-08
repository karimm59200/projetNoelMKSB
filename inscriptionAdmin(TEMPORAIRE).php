<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    entete('(Admin) Inscription');

    if ($_POST)
    {
        $nom = $_POST[ 'nom' ];
        $pw = $_POST[ 'pw' ];

        $mysqli = new mysqli($servername, $username, $password, $database);

        $pw = md5($pw);

        $query  = "INSERT INTO admin (nom, pw) VALUES ('$nom', '$pw');";

        if ( $mysqli->query( $query ) )
            print( "<h3>$nom enregistré</h3>");
        else
            print( "<h3>erreur d'enregistrement</h3>");
        $mysqli->close();
    }
?>

<form action="#" method="POST">
    <input type="text" name='nom' placeholder="Entrez votre nom" required>
    <br>
    <input type="password" name='pw' placeholder="Entrez votre mot de passe" required>
    <br>
    <button type="submit">inscription</button>
</form>

</body>
</html>