<?php session_start();

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
<h1>Sign in</h1>




<?php include '../../../Controller/database.php';
global $db;
?>

<?php
if(isset($_SESSION['role_id'])){
    if($_SESSION['role_id'] == 2){
?>

    <form method="post">
        <input type="varchar" name="Fest_nom" id="Fest_nom" placeholder="Votre Nom" required><br/>
        <input type="date" name="Fest_datedebut" id="Fest_datedebut" placeholder="Début de votre festival" required><br/>
        <input type="date" name="Fest_datefin" id="Fest_datefin" placeholder="Fin de votre festival" required><br/>
        <input type="float" name="Fest_prix" id="Fest_prix" placeholder="Prix d'une place" required><br/>
        <input type="texte" name="Fest_programmation" id="Fest_programmation" placeholder="Votre programmation" required><br/>
        <input type="varchar" name="Fest_adresse" id="Fest_adresse" placeholder="Votre adresse" required><br/>
        <input type="int" name="Fest_codepostal" id="Fest_codepostal" placeholder="Votre Code Postal" required><br/>
        <input type="varchar" name="Fest_pays" id="Fest_pays" placeholder="Votre pays" required><br/>
        <input type="text" name="Fest_access" id="Fest_access" placeholder="Accès à votre festival" required><br/>
        <input type="text" name="Fest_lien" id="Fest_lien" placeholder="Lien vers votre festival" required><br/>
        <input type="email" name="Fest_email" id="Fest_email" placeholder="Email du festival" required><br/>
        <input type="int" name="Fest_numtelephone" id="Fest_numtelephone" placeholder="Numéro de téléphone du festival" required><br/>
        <input type="password" name="fest_password" id="fest_password" placeholder="Votre mot de passe" required><br/>
        <input type="password" name="fest_passwordc" id="fest_passwordc" placeholder="Vérifiez votre mdp" required><br/>

        
        <input type="submit" name="formsendgestio" id="formsendgestio" value="Ok">
    </form>

    <?php include '../../../Modele/signingestio/signingestio.php'; ?>

</body>
</html>

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