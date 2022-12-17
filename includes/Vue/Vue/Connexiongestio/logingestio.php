<?php session_start();

?>


<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="logingestio.css">
<head>
    <title>Login Gestionnaire</title>

</head>

<?php include '../../../Controller/database.php';
global $db;
?>

<body>
<div class="login-card">
    <h2>Connexion</h2>
    <h3>Veuillez vous connecter à votre festival</h3>

<form class="login-form" method="post">
    <input type="texte" name="lfest_nom" id="lfest_nom" placeholder="Le nom de votre festival" required><br/>
    <input type="password" name="fpassword" id="fpassword" placeholder="Votre Mot de passe" required><br/>
    <input type="submit" name="formlogingestio" id="formlogingestio" value="Ok"><br/>
</form>

    <?php include '../../../Modele/logingestio/backlogingestio.php'; ?>

    <a href="../Pagedaccueil/index.php" class="acc"> Revenir à la page d'accueil </a>

    </div>

</body>
    
</html>