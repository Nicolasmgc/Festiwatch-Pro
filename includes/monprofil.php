<?php
session_start();
if(isset($_SESSION['email']) && (isset($_SESSION['nom'])))
{
    ?>
         <!DOCTYPE html>
     <html>
        <head>
           <link rel="stylesheet" href="Login2.css">
           
           <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
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


    <button><a href="deconnexion.php">Déconnexion</a></button>

    <button><a href="deleteuser.php">Supprimer votre compte</a></button>

    <button><a href="..\index.php">Page d'accueil</a></button>

    <button><a href="festivals.php">Liste des festivals</a></button>
    
</body>
</html>

    
    
    <?php

}else{
    echo "Veuillez vous connecter à votre compte";
}

?>



