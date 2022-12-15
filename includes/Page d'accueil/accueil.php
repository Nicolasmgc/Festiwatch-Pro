<?php session_start();


?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Login.css">
<head>
    <title>Titre</title>
    <a href="../../login1.php">Login</a>
</head>
<body>


    <?php

        if(isset($_SESSION['email']) && (isset($_SESSION['nom'])))
        {
            ?>
            <h1>Bienvenue sur votre profil</h1>
            <p>Votre email : <?php echo $_SESSION['email']; ?> </p>
            <p>Votre nom : <?php echo $_SESSION['nom']; ?> </p>
            <p>Votre prénom : <?php echo $_SESSION['prenom']; ?> </p>

            <?php

        }else{
            echo "Veuillez vous connecter à votre compte";
        }

    ?>


    <?php include 'C:\wamp64\www\includes\database.php';
    global $db;
    ?>

    <a href="deconnexion.php">Déconnexion</a>

    <a href="deleteuser.php">Supprimer votre compte</a>

    <h1>Login<h1>
        <a href="accueil.php"> accc </a>
    <form method="post">
        <input type="email" name="lemail" id="lemail" placeholder="Votre Email" required><br/>
        <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required><br/>
        <input type="submit" name="formlogin" id="formlogin" value="Ok">
        
    </form>

        <?php include 'C:\wamp64\www\includes\login.php'; ?>

    <h1>Sign in</h1>
    <form method="post">
        <input type="texte" name="nom" id="nom" placeholder="Votre Nom" required><br/>
        <input type="texte" name="prenom" id="prenom" placeholder="Votre Prenom" required><br/>
        <input type="email" name="semail" id="semail" placeholder="Votre Email" required><br/>
        <input type="int" name="numtelephone" id="numtelephone" placeholder="Votre numéro de téléphone" required><br/>
        <input type="texte" name="adresse" id="adresse" placeholder="Votre Adresse" required><br/>
        <input type="texte" name="pays" id="pays" placeholder="Votre Pays" required><br/>
        <input type="date" name="datedenaissance" id="datedenaissance" placeholder="Votre Date de Naissance" required><br/>
        <input type="int" name="codepostal" id="codepostal" placeholder="Votre Code Postal" required><br/>
        <input type="texte" name="ville" id="ville" placeholder="Votre Ville" required><br/>
        <input type="password" name="password" id="password" placeholder="Votre Mot de passe" required><br/>
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirmez votre mot de passe" required><br/>
        
        <label> Accès handicapé :</label>
                <select type="boolean" name="handicap" id="handicap">
                    <option value=0>Non</option>
                    <option value=1>Oui</option>
                <br/>
        <input type="submit" name="formsend" id="formsend" value="Ok">
    </form>

    <?php include 'C:\wamp64\www\includes\signin.php'; ?>
</body>
</html>


