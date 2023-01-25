<?php session_start();

?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Login2.css">
<head>
    <title>Login</title>

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
</head>
   



<?php include '../../../Controller/database.php';
global $db;
?>

<body>

    

<div class="login-card">
            <h2>Connexion</h2>
            <h3>Entrez votre email et votre mot de passe </h3>
            <h4><a href="../Signin/signinform.php"> Créer un compte </a></h4>
            <h5><a href="../Connexiongestio/logingestio.php" class="fest"> Vous organisez un festival ? </a></h5>

<form class="login-form" method="post">
    <input type="email" name="lemail" id="lemail" placeholder="Votre Email" required><br/>
    <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required><br/>
    <button><input class="butt" type="submit" name="formlogin" id="formlogin" value="Ok"></button><br/>
</form>

    <?php include '../../../Modele/loginuser/login.php'; ?>

    <a href="../Pagedaccueil/index.php" class="acc"> Revenir à la page d'accueil </a>
    
    

    </div>

</body>
    
</html>
