<?php
  session_start();
?>

<?php
    include '../../../Controller/database.php';
    global $db; ?>

<?php include '../../../Modele/paneladmin/rechercheadmingestioid.php'; ?>

<?php
if(isset($_SESSION['role_id'])){
    if($_SESSION['role_id'] == 1){
?>


<style>
            .goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon {
                display: none !important;
            }
            body {
                top: 0px !important;
            }
            .goog-tooltip {
                display: none !important;
            }
            .goog-tooltip:hover {
                display: none !important;
            }
            .goog-text-highlight {
                background-color: transparent !important;
                border: none !important;
                box-shadow: none !important;
            }
        </style>
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

<?php }else{
?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../../Controller/errors/erreur.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
<head>
    <title>Erreur</title>
</head>
<body>
<div class="fond">
    <div class="round">
        Erreur vous n'êtes pas administrateur !</br>
        Veuillez retouner à la page d'accueil !</br>
        <button ><a href="../Pagedaccueil/index.php"  style="text-decoration:none">Page d'accueil</a></button>
        </div>
</div>


<img src="../../../PNG/errorimage.png" alt="image d'erreur">

</body>

</html>
<?php
}


}else{

    ?>
    <!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../../Controller/errors/erreur.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
<head>
    <title>Erreur</title>
</head>
<body>
<div class="fond">
    <div class="round">
        Erreur vous n'êtes pas administrateur !</br>
        Veuillez retouner à la page d'accueil !</br>
        <button ><a href="../Pagedaccueil/index.php"  style="text-decoration:none">Page d'accueil</a></button>
        </div>
</div>


<img src="../../../PNG/errorimage.png" alt="image d'erreur">

</body>

</html>
    <?php
}

?>