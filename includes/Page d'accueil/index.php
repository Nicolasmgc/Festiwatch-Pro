<?php session_start();

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Efrontech </title>
        <meta charset="utf-8">
        <link rel="icon" href="Logo alternatif.png">
        <link rel="stylesheet" type="text/css" href="general.css">
        <link rel="stylesheet" type="text/css" href="accueil.css">
    </head>
    <body>
        <nav class="navbar">
            <a href="C:\Nicolas\Travail\A1\APP\ProDeTech\CODE\Première page d'acceuil\Page acceuil\accueil.html" class="logo"> <img src="Logo alternatif.png">  </a>
            <img class="boite" src="Logo alternatif 2.png">
            <div class="nav-links">
                <ul>
                    <li class="active">
                        <a class="button" href="#">Accueil</a>
                    </li>
                    <li>
                        <a class="button" href="../login1.php">Se connecter</a>
                    </li>
                    <li>
                        <a class="button" href="./FAQ/faq.php">FAQ</a>
                    </li>
                    <li>
                        <a class="button" href="./AProposDeNous/A_propos_de_nous.php">A propos de nous</a>
                    </li>
                    <li>
                        <a class="button" href="#">Nous contacter</a>
                    </li>
                    <li>
                        <a class="texte"> <?php if(isset($_SESSION['email'])){
                        
                        echo $_SESSION['email'];
                        }else{echo "Vous n'êtes pas connectés";} ?></a>

                </ul>
           
            </div>
        </nav>

        <!--

            <div class="TOP"></div>
            <div class="TOP2"></div>
            <header> </header>

        -->

        <button class="PoButton">
            <div class="Po">Qu'est-ce que FestiWatch ?</div>
        </button>
       
        <video src="./Concert - 1630.mp4" id="video" autoplay loop muted></video>
        <div class="shadowup"></div>
        
        
        <!-- <div class="TOP3"></div> -->

        <section>
            <div class="Bloc-description">
                <button class="button1"><h1>FestiWatch, la sécurité entre vos mains</h1></button><br>
                <p> FestiWatch est une montre connectée<br>permettant la
                    retranscription en direct<br> d'information sur votre
                    état physique.<br>
                </p><br>
                <p> Véritable bijoux technologique, FestiWatch<br> vous fournira
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
       
        <div class="shadowdown"></div>
        <img class="image2" src="./hd-wallpaper-4768501_1920.jpg">
   
    </body>
</html>