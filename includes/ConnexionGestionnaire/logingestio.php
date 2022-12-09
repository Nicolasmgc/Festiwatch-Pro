<?php session_start();

?>


<?php 
if(isset($_SESSION['Fest_nom']))
{
    ?>
    <h1>Bienvenue sur votre profil</h1>
    <p>Votre nom : <?php echo $_SESSION['Fest_nom']; ?> </p>

    <?php

}else{
    echo "Veuillez vous connecter à votre compte";
}

?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Login2.css">
<head>
    <title>Login</title>

</head>

<?php include 'C:\wamp64\www\includes\database.php';
global $db;
?>

<body>

<form method="post">
    <input type="texte" name="lfest_nom" id="lfest_nom" placeholder="Le nom de votre festival" required><br/>
    <input type="password" name="fpassword" id="fpassword" placeholder="Votre Mot de passe" required><br/>
    <input type="submit" name="formlogingestio" id="formlogingestio" value="Ok"><br/>
</form>

    <?php include 'backlogingestio.php'; ?>

    <a href="./Page d'accueil/index.php" class="acc"> Revenir à la page d'accueil </a>
    
    

    </div>

</body>
    
</html>