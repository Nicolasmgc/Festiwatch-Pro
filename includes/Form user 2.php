<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Efrontech </title>
        <meta charset="utf-8">
        <link rel="icon" href="icon.jpeg">
        <link rel="stylesheet" type="text/css" href="styleformuser2.css">
    </head>
    <body>
    <h1>Bienvenue sur la page du festival <?php // echo $_GET['Fest_nom']?></h1>
    <div id="searchBox">
                    <input id="searchBar"/>
                    <a href=""><img id="searchIcon" src="searchIcon.png" alt="search"></a>
                </div>
    <div class="global">            
        <img href="./Efrontech/Form user 2.html"  src="les_ardentes_2022.jpg">
        <div class="round"> 
    <p>La date de début et de fin : </p>
     <p><?php echo $_SESSION['email']; ?> </p>
     <p>L'adresse :</p>
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
</div>

                
    </body>
</html>
