<?php
    session_start();
    require_once "ressources.php";
    require_once "fonctions.php";

    entete('(Admin) Mise à jour tirage');

    $nom = $_SESSION['nom'];
    $pw = $_SESSION['pw'];

    $mysqli = new mysqli($servername, $username, $password, $database);

    $query  = "SELECT * FROM admin WHERE nom='$nom' AND pw='$pw';";

    $res = $mysqli->query( $query );
    // print_r( $res );

    if ( $res->num_rows == 0 )
        header("location: loginAdmin.php");
    else
    {
        $query  = "SELECT * FROM dateTirage;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        
        print("Bonjour ".$_SESSION['nom']."<br>");
        print("La date du tirage actuel est le ".$ligne['dateFin']."<br>");

        if($_POST)
        {
            $date = $_POST['dateTirage'];

            $mysqli = new mysqli($servername, $username, $password, $database);

            $query  = "UPDATE dateTirage SET dateFin='$date';";
            // print( $query."<br>");
            $res = $mysqli->query( $query );

            if($res)
                print("Mise à jour effectué !");

            else
            print("Erreur !!");

            $mysqli->close();
        }
    
?>

<form action="#" method="POST">
  <label for="dateTirage">Mise à jour de la date du tirage au sort :</label>
  <input type="datetime-local" id="dateTirage" name="dateTirage">
  <input type="submit">
</form>
<br>
<a href="logout.php">Déconnexion</a>
<?php } ?>
</body>
</html>