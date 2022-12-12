<?php session_start();
?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="signin.css">
    <title>Formulaire pour utilisateurs</title>
    <img src="./Logo form2.png">

    <div class="container">
        <form method="post">
            <p>Sign in</p>
            <input type="texte" name="nom" id="nom" placeholder="Votre Nom" required><br/>
            <input type="texte" name="prenom" id="prenom" placeholder="Votre Prenom" required><br/>
            <input type="email" name="semail" id="semail" placeholder="Votre Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required><br/> 
            <input type="int" name="numtelephone" id="numtelephone" placeholder="Votre numéro de téléphone" pattern="[0-9]{10}" required><br/>
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
                    <option value=1>Oui</option><br/>
            <input type="submit" name="formsend" id="formsend" value="Ok">
        </form>
    </div>

</html>

    <?php include 'C:\wamp64\www\includes\database.php';
    global $db;
    ?>
    <?php include 'C:\wamp64\www\includes\login.php'; ?>
    <?php include 'C:\wamp64\www\includes\signin.php'; ?>