<?php
require_once "ressources.php";
require_once "fonctions.php";
if ($_POST) {
    $pseudo = $_POST['pseudo'];

    $query  = "insert into inscriptions (pseudo) values ( '$pseudo' );";
    $res = query($query);
    if ($res)
        print("<h3> $pseudo enregistré</h3>\n");
    else
        print("<h3>erreur enregistrement !!!</h3>\n");
}
?>
<form action="#" method="POST">
    <input type="text" name='pseudo' placeholder=" entre ton pseudo" required>
    <br>

    <input type="checkbox" name="cadeau" OnClick="checkboxx();" id="checkbox" />
    <label>Je confirme avoir un cadeau</label><br>
    <button type="submit" name="envoyer" id="submit" disabled="disabled" >Ajouter</button>
    
    <br>
    
</form>
<script type="text/javascript">
    function checkboxx() {
        if (document.getElementById('checkbox').checked ) {
            document.getElementById('submit').disabled = false;
        } else {
            document.getElementById('submit').disabled = true;
        }
    }
</script>