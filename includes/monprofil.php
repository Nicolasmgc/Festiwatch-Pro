<?php
session_start();
if(isset($_SESSION['email']) && (isset($_SESSION['nom'])))
{
    ?>
         <!DOCTYPE html>
     <html>
        <head>
           <link rel="stylesheet" href="Login2.css">
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

    <div class="btn">
    <button ><a href="deconnexion.php">Déconnexion</a></button>

    <button ><a href="deleteuser.php">Supprimer votre compte</a></button>

    <button ><a href="..\index.php">Page d'accueil</a></button>

    <button ><a href="festivals.php">Liste des festivals</a></button>
</div>
</body>
</html>

    
    
    <?php

}else{
    echo "Veuillez vous connecter à votre compte";
}

?>



