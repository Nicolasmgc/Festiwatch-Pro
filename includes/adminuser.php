
<?php
    include 'database.php';
    global $db; ?>

<?php include 'C:\wamp64\www\Festiwatch-Pro\includes\rechercheadminuserid.php'; ?>

<?php include 'C:\wamp64\www\Festiwatch-Pro\includes\rechercheadminusernom.php'; ?>




<form method="post">
    <input type="number" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
    <button><input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok"></button>
</form>



<form method="post">
    <input type="texte" name="rechercheusernom" id="rechercheusernom" placeholder="Chercher un utilisateur par nom" required><br/>
    <button><input type="submit" name="formrechercheusernom" id="formrechercheusernom" value="Ok"></button>
</form>


<?php

if(isset($resultc['id']))
{
    ?>
<h1>Bienvenue sur la page de l'utilisateur <?php echo $resultc['id'] ?></h1>
    <h2>Les informations</h2>
    <p>L'id de l'utilisateur : <?php echo $resultc['id']; ?> </p>
    <p>Le nom de l'utilisateur : <?php echo $resultc['nom']; ?> </p>

    <a href="deleteuserid.php?id=<?php echo $resultc['id'];?>">Supprimer cet utilisateur</a> 

    <?php

}else{
    echo "Veuillez chercher un utilisateur";
}

?>


<?php

if(isset($resultm['nom']))
{
    ?>
<h1>Bienvenue sur la page de l'utilisateur <?php echo $resultm['nom'] ?></h1>
    <h2>Les informations</h2>
    <p>L'id de l'utilisateur : <?php echo $resultm['id']; ?> </p>
    <p>Le nom de l'utilisateur : <?php echo $resultm['nom']; ?> </p>

    <?php

}else{

}

?>




<!-- Mettre un location vers la page du user avec tous les champs et la possibilité de les modifier et de supprimer l'utilisateur.
Faire la même chose pour les festivals -->