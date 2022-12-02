

    <?php include 'C:\wamp64\www\Festiwatch-Pro\includes\database.php';
    global $db;
    ?>

<?php include 'C:\wamp64\www\Festiwatch-Pro\includes\rechercheadminuserid.php'; ?>




<form method="post">
    <input type="number" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
    <button><input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok"></button>
</form>


<?php

if(isset($resultc['id']))
{
    ?>
<h1>Bienvenue sur la page du festival <?php echo $resultc['id'] ?></h1>
    <h2>Les informations</h2>
    <p>L'id de l'utilisateur : <?php echo $resultc['id']; ?> </p>
    <p>Le nom de l'utilisateur : <?php echo $resultc['nom']; ?> </p>
    <?php

}else{
    echo "Veuillez chercher un utilisateur";
}

?>

