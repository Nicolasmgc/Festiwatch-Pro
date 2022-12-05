<?php
session_start();
if(isset($_SESSION['email']) && (isset($_SESSION['nom'])))
{
    ?>
         <!DOCTYPE html>
     <html>
        <head>
           <link rel="stylesheet" href="Login.css">
           <h1>Bienvenue sur votre profil</h1>
         </head>
     <body> 
     <div class="round"> 
     <p>Votre email </p>
     <?php echo $_SESSION['email']; ?> 
     <p>Votre nom </p>
     <?php echo $_SESSION['nom']; ?>
     <p>Votre prénom</p> 
    <?php echo $_SESSION['prenom']; ?> 
    <p>Votre numéro de téléphone </p>
    <?php echo $_SESSION['numtelephone']; ?> 
    <p>Votre adresse </p>
     <?php echo $_SESSION['adresse']; ?> 
    <p>Votre ville </p>
     <?php echo $_SESSION['ville']; ?> 
    </div>


    <a href="deconnexion.php">Déconnexion</a>

    <a href="deleteuser.php">Supprimer votre compte</a>

    <a href="..\index.php">Page d'accueil</a>

    <a href="festivals.php">Liste des festivals</a>
    
</body>
</html>

    
    
    <?php

}else{
    echo "Veuillez vous connecter à votre compte";
}

?>