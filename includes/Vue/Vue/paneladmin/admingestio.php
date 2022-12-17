
<?php
    include '../../../Controller/database.php';
    global $db; ?>

<?php include '../../../Modele/paneladmin/rechercheadmingestioid.php'; ?>



<form method="post">
    <input type="number" name="recherchegestioid" id="recherchegestioid" placeholder="Chercher un festival par id" required><br/>
    <button><input type="submit" name="formrecherchegestioid" id="formrecherchegestioid" value="Rechercher"></button>
</form>



<form method="post">
    <input type="texte" name="recherchegestionom" id="recherchegestionom" placeholder="Chercher un festival par nom" required><br/>
    <button><input type="submit" name="formrecherchegestionom" id="formrecherchegestionom" value="Rechercher"></button>
</form>

<?php

if(isset($resultc['Fest_id']))
{
    ?>
<h1>Bienvenue sur la page du festival <?php echo $resultc['Fest_id'] ?></h1>
    <h2>Les informations</h2>
    <p>L'id du festival : <?php echo $resultc['Fest_id']; ?> </p>
    <p>Le nom du festival : <?php echo $resultc['Fest_nom']; ?> </p>

    <a href="../../../Modele/paneladmin/deletegestioid.php?Fest_id=<?php echo $resultc['Fest_id'];?>">Supprimer ce festival</a> 
<?php }else{
    echo "Cherchez un utilisateur";

} ?>