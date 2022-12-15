<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>FestiWatch - Mes Données</title>
        <meta charset="utf-8">
        <link rel="icon" href="icon.jpeg">
        <link rel="stylesheet" type="text/css" href="../general.css">
        <link rel="stylesheet" type="text/css" href="../navStyle.css">
        <link rel="stylesheet" type="text/css" href="userData.css">
    </head>
    <body>
    <nav>
            <ul>
               <li><img src="../../Logo alternatif2.png" class="logo" >  </a></li>   
                  
                <li><a href="#" > Accueil </a></li>
                <li><a href="./FAQ/faq.php"> FAQ </a></li>
                <li><a href="./AProposDeNous/A_propos_de_nous.php"> A propos de nous </a></li>
                
                <li class="deroulant"><?php if(isset($_SESSION['email'])){
                            ?>
                        
                      <a><?php echo $_SESSION['email'];?></a>
                        <ul class="sous">
                            <li><a href="../monprofil.php"> Voir mon profil </a></li>
                            <li><a href="../deconnexion.php"> Se déconnecter </a></li>
                        </ul>           
                        


                        <?php
                        }
                        
                        elseif(isset($_SESSION['Fest_id'])){
                            ?>


                        <a><?php echo $_SESSION['Fest_nom'];?></a>
                        <ul class="sous">
                            <li><a href="../ConnexionGestionnaire/mesinfos.php?Fest_id=".$_SESSION['Fest_id']> Voir mes infos </a></li> <?php // Truc très ghetto ça marche moyennement ce href faire gaffe pendant la démo ?>
                            <li><a href="../deconnexion.php"> Se déconnecter </a></li>
                        </ul>  


                            <?php
                        }
                        
                        else{ ?>
                        <li><a href="../login1.php">Se connecter </a></li>
                        
                        <?php } ?></a>
                          
                    
                    
                    
                </li>
                
                
                
                
            </ul>
        </nav>


        <div class="userDataTitle"><h1>Mes Données</h1></div>

        <div id="content">
            <div id="sidebar">
                <div id="mapBox">
                    <h1>MAP</h1>
                    <div id="map">
                        <!--<img id="mapImage" src="templateMap.png" alt="Current Map unavailable">-->
                        <?php 
                            include "../MAP/map.html";
                        ?>
                    </div>
                </div>
                <div id="friendBox">
                    <h1>Friends</h1>
                    <div id="friendList">
                        <?php 
                            $friendList = [["Jean-Patrick", "105235"], ["Marie-Francine", "696969"], ["Billie Jean-Paul", "515625"]];

                            for($i = 0 ; $i < count($friendList) ; $i++){
                                echo  "<br>";
                                echo $friendList[$i][0];
                                echo  " ";
                                echo  $friendList[$i][1];
                                echo  "<br>";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div id="mainContent">
                <div id="searchBox">
                    <input id="searchBar"/>
                    <a href=""><img id="searchIcon" src="searchIcon.png" alt="search"></a>
                </div>
                <div id="dashboardBox">
                    <h1>Dashboard</h1>
                    <div id="upperIndicators">
                        <div>
                            <label for="heartRate">Fréquence Cardiaque</label>
                            <meter id="heartRate" min=0 max=100 low="50" high="80" value=81 optimum="0"></meter>
                        </div>
                        <div>
                            <label for="soundIntensity">Amplitude Sonore</label>
                            <meter id="soundIntensity" min=0 max=100 low="50" high="80" value=51 optimum="0"></meter>
                        </div>
                    </div>
                    
                    <div id="lowerIndicators">
                        <div>
                            <label for="gazExposition">Gaz</label>
                            <meter id="gazExposition" min=0 max=100 low="33" high="66" value=20 optimum="0"></meter>
                        </div>   
                        <div>
                            <label for="alcoholConsumption">Consommation d'Alcool</label>
                            <meter id="alcoholConsumption" min=0 max=100 low="33" high="66" value=80 optimum="0"></meter>
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
            Mail:<br> prodetec@gmail.com <br>
            Numéro:<br> 068975412 <br>
            Adresse: <br>10 Rue de Vanves, 92130 Issy-les-Moulineaux
            </div>
         
            <div class="foot">
            <div class="reseaux">
            <a href="https://www.instagram.com/pro_detech"> <img src="insta.png" alt="icone de insta" height="60"></a>
            <img src="youtube.png" alt="icone de insta" height="70">
            <img src="twitter.png" alt="icone de insta" height="75"  class="twitter">
            </div>
            <div class="lien">
            <a href="../../cgu.php">Conditions général d'utilisation</a>
            <a href=".././FAQ/faq.php"> FAQ</a>
            <a href="../login1.php">Connexion</a>
            </div> </div>
             </footer>

</html>