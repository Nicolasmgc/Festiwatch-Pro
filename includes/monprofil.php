<?php
session_start();
if(isset($_SESSION['email']) && (isset($_SESSION['nom'])))
{
    ?>
    <h1>Bienvenue sur votre profil</h1>
    <p>Votre email : <?php echo $_SESSION['email']; ?> </p>
    <p>Votre id : <?php echo $_SESSION['id']; ?> </p>
    <p>Votre nom : <?php echo $_SESSION['nom']; ?> </p>
    <p>Votre prénom : <?php echo $_SESSION['prenom']; ?> </p>
    <p>Votre numéro de téléphone : <?php echo $_SESSION['numtelephone']; ?> </p>
    <p>Votre adresse : <?php echo $_SESSION['adresse']; ?> </p>
    <p>Votre ville : <?php echo $_SESSION['ville']; ?> </p>


    <a href="deconnexion.php">Déconnexion</a>

    <a href="deleteuser.php">Supprimer votre compte</a>

    <a href="..\index.php">Page d'accueil</a>
    
    <?php

}else{
    echo "Veuillez vous connecter à votre ";
}

?>