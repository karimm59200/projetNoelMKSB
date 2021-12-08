<?php
    session_start();
    require_once "ressources.php";
    require_once "fonctions.php";

    entete('(Admin) Login');

    if ($_POST)
    {
        $nom = $_POST[ 'nom' ];
        $pw = $_POST[ 'pw' ];

        $mysqli = new mysqli($servername, $username, $password, $database);

        $pw = md5($pw);

        $query  = "SELECT * FROM admin WHERE nom='$nom' AND pw='$pw';";

        $res = $mysqli->query( $query );
        // print_r( $res );

        if ( $res->num_rows == 0 )
            print( "login invalide");
        else
        {
            $_SESSION['nom'] = $nom;
            $_SESSION['pw'] = $pw;
            header("location: pageAdmin.php");
        }

        $mysqli->close();
    }
?>

<form action="#" method="POST">
    <input type="text" name='nom' placeholder="Entrez votre nom" required>
    <br>
    <input type="password" name='pw' placeholder="Entrez votre mot de passe" required>
    <br>
    <button type="submit">Connect</button>
</form>

</body>
</html>