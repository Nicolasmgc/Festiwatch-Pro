<?php
session_start();
if(isset($_SESSION['email']) && (isset($_SESSION['nom'])))
{
    ?>
         <!DOCTYPE html>
     <html>
        <head>
           <link rel="stylesheet" href="monprofil.css">
           <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
           <h1>Bienvenue sur votre profil</h1>
         </head>
     <body> 
     <div class="round"> 
    <p>Votre email : </p>
     <p><?php echo $_SESSION['email']; ?> </p>
     <p>Votre nom :</p>
    <p> <?php echo $_SESSION['nom']; ?></p>
     <p>Votre prénom :</p> 
    <p><?php echo $_SESSION['prenom']; ?> </p>
    <p>Votre numéro de téléphone : </p>
    <p><?php echo $_SESSION['numtelephone']; ?> </p>
    <p>Votre adresse : </p>
     <p><?php echo $_SESSION['adresse']; ?> </p>
    <p>Votre ville : </p>
     <p><?php echo $_SESSION['ville']; ?> </p>
    </div>

    <div class="modif">
<form method="post">
<button><input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">Modifier votre adresse</button>
    <input type="number" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
</form>

<form method="post">
<button><input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">Modifier votre ville</button>
    <input type="number" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
</form>

<form method="post">
<button><input type="submit" name="formrechercheuserid" id="formrechercheuserid" value="Ok">Modifier votre numéro de téléphone</button>
    <input type="number" name="rechercheuserid" id="rechercheuserid" placeholder="Chercher un utilisateur par id" required><br/>
</form>
</div>

<div class="btn">
    <button ><a href="deconnexion.php"  style="text-decoration:none">Déconnexion</a></button>

    <button ><a href="deleteuser.php"  style="text-decoration:none">Supprimer votre compte</a></button>

    <button ><a href="Page d'accueil/index.php"  style="text-decoration:none">Page d'accueil</a></button>

    <button ><a href="festivals.php"  style="text-decoration:none">Liste des festivals</a></button>
</div>
</body>
</html>

    
    
    <?php

}else{
    echo "Veuillez vous connecter à votre compte";
}

?>



