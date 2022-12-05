<?php session_start();

?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Login.css">
<head>
    <title>Login</title>
    <a href="accueil.php">Sign in</a>
    <h1>Login</h1>
</head>



<?php include 'C:\wamp64\www\includes\database.php';
global $db;
?>

<body>
<div class="login-card">
            <h2>Connexion</h2>
            <h3>Entrez votre email et votre mot de passe </h3>

<form class="login-form" method="post">
    <input type="email" name="lemail" id="lemail" placeholder="Votre Email" required><br/>
    <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required><br/>
    <button><input type="submit" name="formlogin" id="formlogin" value="Ok"></button>
</form>

    <?php include 'C:\wamp64\www\includes\login.php'; ?>

    </div>
</body>
    
</html>