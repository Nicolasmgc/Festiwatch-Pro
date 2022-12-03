<?php session_start();


?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
<h1>Sign in</h1>
    <form method="post">
        <input type="int" name="Fest_id" id="Fest_id" placeholder="Votre id de festival" required><br/>
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
        <input type="varchar" name="fest_password" id="fest_password" placeholder="Votre mot de passe" required><br/>

        
        
    </form>

    <?php include 'C:\wamp64\www\includes\signin.php'; ?>



</body>
</html>

