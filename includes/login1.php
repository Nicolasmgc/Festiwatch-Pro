<?php session_start();

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

    

<div class="login-card">
            <h2>Connexion</h2>
            <h3>Entrez votre email et votre mot de passe </h3>
            <h4><a href="Page d'accueil/accueil.php"> Créer un compte </a></h4>
            <h5><a href="ConnexionGestionnaire/logingestio.php" class="fest"> Vous organisez un festival ? </a></h5>

<form class="login-form" method="post">
    <input type="email" name="lemail" id="lemail" placeholder="Votre Email" required><br/>
    <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required><br/>
    <button><input class="butt" type="submit" name="formlogin" id="formlogin" value="Ok"></button><br/>
</form>

    <?php include 'C:\wamp64\www\includes\login.php'; ?>

    <a href="./Page d'accueil/index.php" class="acc"> Revenir à la page d'accueil </a>
    
    

    </div>

</body>
    
</html>
