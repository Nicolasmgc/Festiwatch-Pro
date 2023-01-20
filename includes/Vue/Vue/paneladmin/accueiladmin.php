<?php
  session_start();
?>

<?php
if(isset($_SESSION['role_id'])){
    if($_SESSION['role_id'] == 1){
?>

<a href="gestionuser.php">Gérer les utilisateurs</a>
<a href="gestiongestio.php">Gérer les gestionnaires</a>

<?php
    }else{
?>
        <!DOCTYPE html>
        <html>
            <meta charset="utf-8">
            <link rel="stylesheet" href="page_erreur.css">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
        <head>
            <title>Erreur</title>
        </head>
        <body>
        <div class="fond">
            <div class="round">
                Erreur vous n'êtes pas administrateur !</br>
                Veuillez retouner à la page d'accueil !</br>
                <button ><a href="./deconnexion.php"  style="text-decoration:none">Page accueil</a></button>
                </div>
        </div>
        
        
        <img src="image.png" alt="image d'erreur">
        
        </body>
        
        </html>
    

    <?php
    }}else{
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
                <button ><a href="./deconnexion.php"  style="text-decoration:none">Page accueil</a></button>
                </div>
        </div>
        
        
        <img src="../../../PNG/errorimage.png" alt="image d'erreur">
        
        </body>
        
        </html>
    <?php
    }
    ?>