<?php
require_once "ressources.php";
require_once "fonctions.php";

entete(" formulaire inscription ");

if ($_GET) {
    $pseudo     = $_GET['pseudo'];


    $query  = "insert into inscription (pseudo) values ( '$pseudo' );";
    print($query);
    $res = query($query);
    if ($res)
        print("<h3> $pseudo enregistré</h3>\n");
    else
        print("<h3>erreur enregistrement !!!</h3>\n");
}
?>
<form action="#" method="get">
    <input type="text" name='pseudo' placeholder=" entre ton pseudo">
    <br>
    

    <input type="checkbox" name="cadeau" OnClick="checkboxx();" id="checkbox" />
    <button type="submit" name="envoyer" value="J'ai déposé mon cadeau !" id="submit" disabled="disabled" >J'ai déposé mon cadeau !</button>
    
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
</body>

</html>