<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>FestiWatch - Mes Données</title>
        <meta charset="utf-8">
        <link rel="icon" href="../../../PNG/icon.jpeg">
        <link rel="stylesheet" type="text/css" href="../../../general.css">
        <link rel="stylesheet" type="text/css" href="navStyle.css">
        <link rel="stylesheet" type="text/css" href="../UserData/userData.css">
    </head>
    <body>
    <nav>
            <ul>
               <li><img src="../../../PNG/Logo alternatif2.png" class="logo" >  </a></li>   
                  
                <li><a href="../../Vue/Pagedaccueil" > Accueil </a></li>
                <li><a href="../../Vue/FAQ/faq.php"> FAQ </a></li>
                <li><a href="../../Vue/Apropos/A_propos_de_nous.php"> A propos de nous </a></li>
                
                <li class="deroulant"><?php if(isset($_SESSION['email'])){
                            ?>
                        
                      <a><?php echo $_SESSION['email'];?></a>
                        <ul class="sous">
                            <li><a href="../monprofiluser/monprofil.php"> Voir mon profil </a></li>
                            <li><a href="../../../Controller/deconnexion.php"> Se déconnecter </a></li>
                        </ul>           
                        


                        <?php
                        }
                        
                        elseif(isset($_SESSION['Fest_id'])){
                            ?>


                        <a><?php echo $_SESSION['Fest_nom'];?></a>
                        <ul class="sous">
                            <li><a href="../ConnexionGestionnaire/mesinfos.php?Fest_id=".$_SESSION[`Fest_id`]> Voir mes infos </a></li> <?php // Truc très ghetto ça marche moyennement ce href faire gaffe pendant la démo ?>
                            <li><a href="../deconnexion.php"> Se déconnecter </a></li>
                        </ul>  


                            <?php
                        }
                        
                        else{ ?>
                        <li><a href="../Connexionuser/login1.php">Se connecter </a></li>
                        
                        <?php } ?></a>
                          
                    
                    
                    
                </li>
                
                
                
                
            </ul>
        </nav>


        <?php include '../../../Controller/database.php';
        global $db;
        ?>

        <div class="userDataTitle"><h1>Mes Données</h1></div>

        <div id="content">
            <div id="sidebar">
                <div id="mapBox">
                    <h1>MAP</h1>
                    <div id="map">
                        <?php 
                            include "../UserData/MAP/map.html";
                        ?>
                    </div>
                </div>
            </div>

            <div id="mainContent">
                <div id="searchBox">
                    <form method="POST" style="width: 100%; display: flex; flex-direction: row; justify-content: space-between">
                        <input type="int" name="searchbar" class="searchBar" id="searchbar" placeholder="Recherchez le numéro de montre que vous souhaitez" required><br/>
                        <input type="submit" name="montrerecherche" id="montrerecherche">
                    </form>

                    <?php include '../../../Modele/recherchemontre/recherchemontre.php' ?>

                </div>
                <div id="dashboardBox">
                    <h1>Dashboard</h1>
                    <div id="upperIndicators">
                        <div>
                            <label for="heartRate" style="font-size: 28px">Fréquence Cardiaque</label>
                            <meter id="heartRate" min=0 max=100 low="50" high="80" value=81 optimum="0"></meter>
                            <div style="font-size: 32px; margin-bottom: 20px; margin-top: 40px; color: white"><?php echo $_GET['card_frequ']; ?> BPM</div>
                        </div>
                        <div>
                            <label for="soundIntensity" style="font-size: 28px">Amplitude Sonore</label>
                            <meter id="soundIntensity" min=0 max=100 low="50" high="80" value=51 optimum="0"></meter>
                            <div style="font-size: 32px; margin-bottom: 20px; margin-top: 40px; color: white"><?php echo $_GET['son_db']; ?> dB</div>
                        </div>
                    </div>
                    
                    <div id="lowerIndicators">
                        <div>
                            <label for="gazExposition" style="font-size: 28px">Gaz</label>
                            <meter id="gazExposition" min=0 max=100 low="33" high="66" value=20 optimum="0"></meter>
                            <div style="font-size: 32px; margin-bottom: 20px; margin-top: 40px; color: white"><?php echo $_GET['gaz_detec']; ?>%</div>
                        </div>   
                        <div>
                            <label for="alcoholConsumption" style="font-size: 28px">Consommation d'Alcool</label>
                            <meter id="alcoholConsumption" min=0 max=100 low="33" high="66" value=80 optimum="0"></meter>
                            <div style="font-size: 32px; margin-bottom: 20px; margin-top: 40px; color: white"><?php echo $_GET['compteur_alcool']; ?> verres</div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

    </body>
    <footer>
           <div class="contact">
           <br>
            Nous contacter <br>
            Mail :<br> prodetech@gmail.com <br>
            Numéro :<br> 068975412 <br>
            Adresse :<br>10 Rue de Vanves, 92130 Issy-les-Moulineaux
            </div>
         
            <div class="foot">
            <div class="reseaux">
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta" class="insta" ></a>
            <img src="../../../PNG/youtube.png" alt="icone de insta" class="youtube" >
            <img src="../../../PNG/twitter.png" alt="icone de insta" class="twit">
            </div>
            <div class="lien">
            <a href="../CGU/cgu.php">Conditions générales d'utilisation</a>
            <a href="../FAQ/faq.php"> FAQ</a>
            <a href="../Connexionuser/login1.php">Connexion</a>
            </div> </div>
             </footer>
</html>