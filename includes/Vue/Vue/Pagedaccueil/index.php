<?php session_start();

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Efrontech </title>
        <meta charset="utf-8">
        <link rel="icon" href="../../../PNG/Logo alternatif.png">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            .goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon {
                display: none !important;
            }
            body {
                top: 0px !important;
            }
            .goog-tooltip {
                display: none !important;
            }
            .goog-tooltip:hover {
                display: none !important;
            }
            .goog-text-highlight {
                background-color: transparent !important;
                border: none !important;
                box-shadow: none !important;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="accueil2.css">
        
        
    </head>
    <body>
    <nav>
            <ul>
                <li><img src="../../../PNG/Logo alternatif.png" class="logo"></li> 
                <li><a href="../Pagedaccueil/index.php" > Accueil </a></li>
                <li><a href="../FAQ/faq.php"> FAQ </a></li>
                <li><a href="../Apropos/A_propos_de_nous.php"> À propos de nous </a></li>
                
                
                
                <li class="deroulant">
                    <?php if(isset($_SESSION['email'])){
                            ?>
                        
                      <a><?php echo $_SESSION['email'];?></a>
                    <ul class="sous">
                        <li><a href="../monprofiluser/monprofil.php"> Voir mon profil </a></li>
                        <li><a href="#"> Liste des festivals </a></li>
                        <li><a href="../../../Controller/deconnexion.php"> Se déconnecter </a></li>
                        <?php if($_SESSION['role_id'] == '2'){
                        ?>
                        
                            <li><a href="../paneladmin/accueiladmin.php"> Pannel Admin </a></li>
                            <?php } ?>
                        
                        </ul>
                                               
                        <?php
                }
                        elseif(isset($_SESSION['Fest_id'])){
                            ?>


                        <a><?php echo $_SESSION['Fest_nom'];?></a>
                        <ul class="sous">
                            <li><a href="../mesinfosgestio/mesinfos.php"> Voir mes infos </a></li> <?php // Truc très ghetto ça marche moyennement ce href faire gaffe pendant la démo ?>
                            <li><a href="../../../Controller/deconnexion.php"> Se déconnecter </a></li>
                        </ul>  


                            <?php
                        }
                        else{ ?>
                        <li><a href="../Connexionuser/login1.php">Se connecter </a></li>
                        
                        <?php } ?>
                    
                    
                    
                </li>
                
                
                
                
            </ul>
        </nav>

            <!--<div class="TOP2"></div>-->

        
        <button class="PoButton">
            <div class="Po">Qu'est-ce que FestiWatch ?</div>
        </button>
        <img class="boite" src="../../../PNG/Logo alternatif 2.png">
       
        <video src="../../../PNG/Concert - 1630.mp4" id="video" autoplay loop muted></video>
        
        <div class="shadowup"></div>
        <img class="Montre" src="../../../PNG/Montre.png">

        <section>
            <div class="Bloc-description">
                <button class="button1"><h1>FestiWatch, la sécurité entre vos mains</h1></button><br>
                <p> FestiWatch est une montre connectée<br>permettant la
                    retranscription en direct<br> d'information sur votre
                    état physique.<br>
                </p><br>
                <p> 
                    Véritable bijou technologique, FestiWatch<br> vous fournira
                    n'importe quelle information,<br> où vous le voulez et
                    quand vous le voulez.<br>
                </p>
            </div>
        </section>

        <secion>
            <div class="Bloc-description2">
                <button class="button2"><h1>Une nouvelle manière de s'amuser</h1></button><br>
                <p> En plus de vous transmettre des informations<br> en continuité, FestiWatch permet
                    de vous avertir <br>en cas de danger potentiel afin que vous <br>et vos amis puissiez
                profiter de chaque instants <br>en toute sureté. </p>

            </div>
        </section>
        </div>
            <div class="element">
                <div class="nombre1">1</div>
                <div class="infobulle">
                    Capteur1
                </div>
            </div>
            <div class="element2">
                <div class="nombre2">2</div>
                <div class="infobulle2">
                    Capteur2
                </div>
            </div>
            <div class="element3">
                <div class="nombre3">3</div>
                <div class="infobulle3">
                    Capteur3
                </div>
            </div>
        
       
        <div class="shadowdown"></div>
        <img class="image2" src="../../../PNG/hd-wallpaper-4768501_1920.jpg">
   
    <footer>
        <div class="contact">
            <br>
            Nous contacter <br>
            Mail :<br> prodetech@gmail.com <br>
            Numéro :<br> 068975412 <br>
            Adresse : <br>10 Rue de Vanves, 92130 Issy-les-Moulineaux
        </div>
         
        <div class="foot">
            <div class="reseaux">
                <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta" height="70"></a>
                <img src="../../../PNG/youtube.png" alt="icone de insta" height="70" padding-left="10">
                <img src="../../../PNG/twitter.png" alt="icone de insta" height="75">
            </div>
            <div class="lien">
                <a href="../CGU/cgu.php">Conditions générales d'utilisation</a>
                <a href="../FAQ/faq.php"> FAQ</a>
                <a href="../Connexionuser/login1.php">Connexion</a>
            </div> 
            <div id="google_translate_element" style="position: absolute; right: 20px; bottom: 50px"></div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement(
                        {pageLanguage: 'fr'},
                        'google_translate_element'
                    );
                }
            </script>
        
            <script type="text/javascript"
                    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
            </script>
        </div>
    </footer>
    </body>
</html>
