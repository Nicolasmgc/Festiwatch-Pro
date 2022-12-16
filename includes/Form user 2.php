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
    <nav>
            <ul>
               <li><img src="Logo alternatif2.png" class="logo" >  </a></li>   
                  
                <li><a href="Page d'accueil/index.php" > Accueil </a></li>
                <li><a href="Page d'accueil/FAQ/faq.php"> FAQ </a></li>
                <li><a href="Page d'accueil/AProposDeNous/A_propos_de_nous.php"> A propos de nous </a></li>
                
                <li class="deroulant"><?php if(isset($_SESSION['email'])){
                            ?>
                        
                      <a><?php echo $_SESSION['email'];?></a>
                        <ul class="sous">
                            <li><a href="monprofil.php"> Voir mon profil </a></li>
                            <li><a href="deconnexion.php"> Se déconnecter </a></li>
                        </ul>           
                        


                        <?php
                        }
                        
                        elseif(isset($_SESSION['Fest_id'])){
                            ?>


                        <a><?php echo $_SESSION['Fest_nom'];?></a>
                        <ul class="sous">
                            <li><a href="ConnexionGestionnaire/mesinfos.php?Fest_id=".$_SESSION['Fest_id']> Voir mes infos </a></li> <?php // Truc très ghetto ça marche moyennement ce href faire gaffe pendant la démo ?>
                            <li><a href="deconnexion.php"> Se déconnecter </a></li>
                        </ul>  


                            <?php
                        }
                        
                        else{ ?>
                        <li><a href="login1.php">Se connecter </a></li>
                        
                        <?php } ?></a>
                          
                    
                    
                    
                </li>
                
                
                
                
            </ul>
        </nav>


    <h1>Bienvenue sur la page du festival <?php echo $_GET['Fest_nom']?></h1>
    <div id="searchBox">
                    <input id="searchBar" placeholder="Recherchez un code de montre ici"/>
                    <a href=""><img id="searchIcon" src="searchIcon.png" alt="search"></a>
                </div>
    <div class="global">            
        <img href="./Efrontech/Form user 2.html"  src="les_ardentes_2022.jpg">
        <div class="round"> 
    <p>La date de début et de fin : </p>
     <p><?php echo $_GET['Fest_datedebut'] ?> - <?php echo $_GET['Fest_datefin'] ?></p>
     <p>L'adresse :</p>
    <p> <?php echo $_GET['Fest_adresse'] ?> - <?php echo $_GET['Fest_codepostal'] ?> - <?php echo $_GET['Fest_pays'] ?></p>
     <p>L'accès </p> 
    <p><?php echo $_GET['Fest_access']; ?> </p>
    <p>Les contacts en cas de problème :</p>
    <p><?php echo $_GET['Fest_numtelephone'] ?> - <?php echo $_GET['Fest_email'] ?></p>
    <p>La programmation : </p>
     <p><?php echo $_GET['Fest_programmation'] ?> </p>
    </div>
</div>

                
    </body>
    <footer>
           <div class="contact">
           <br>
            Nous contacter <br>
            Mail:<br> prodetec@gmail.com <br>
            Numéro:<br> 068975412 <br>
            Adresse: <br>10 Rue de Vanves, 92130 Issy-les-Moulineaux
            </div>
         
            <div class="foot">
            <div class="reseaux">
            <a href="https://www.instagram.com/pro_detech"> <img src="insta.png" alt="icone de insta" class="insta" ></a>
            <img src="youtube.png" alt="icone de insta" class="youtube" >
            <img src="twitter.png" alt="icone de insta"  class="twitter">
            </div>
            <div class="lien">
            <a href="./Festiwatch-Pro/includes/cgu.php">Conditions général d'utilisation</a>
            <a href="./Page d'accueil/FAQ/faq.php"> FAQ</a>
            <a href="../login1.php">Connexion</a>
            </div> </div>
             </footer>
</html>
