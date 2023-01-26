<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Efrontech </title>
        <meta charset="utf-8">
        <link rel="icon" href="../../../PNG/icon.jpeg">
        <link rel="stylesheet" type="text/css" href="styleformuser2.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">

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
    </head>

</body>
</html>

    <body>
    <nav>
            <ul>
                <li><img src="../../../PNG/Logo alternatif.png" class="logo"></li> 
                <li><a href="../Pagedaccueil/index.php" > Accueil </a></li>
                <li><a href="../FAQ/faq.php"> FAQ </a></li>
                <li><a href="../Apropos/A_propos_de_nous.php"> A propos de nous </a></li>
                
                
                
                <li class="deroulant"><?php if(isset($_SESSION['email'])){
                            ?>
                        
                      <a><?php echo $_SESSION['email'];?></a>
                    <ul class="sous">
                    <li><a href="../monprofiluser/monprofil.php"> Voir mon profil </a></li>
                        <li><a href="../listefestivals/festivals.php"> Liste des festivals </a></li>
                        <li><a href="../../../Controller/deconnexion.php"> Se déconnecter </a></li>
                        <?php if($_SESSION['role_id'] == '2'){
                        ?>
                        
                            <li><a href="../paneladmin/accueiladmin.php"> Panel Admin </a></li>
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

<?php include '../../../Controller/database.php';
global $db;
?>


<?php 
if(isset($_SESSION['Fest_id'])){
    ?>
    <h1>Bienvenue sur la page du festival <?php echo $_GET['Fest_nom']?></h1>
    <div id="searchBox">
                        <form method="POST" style="width: 100%">
                            <div style="height: 50px; display: flex; flex-direction: row; justify-content: space-evenly">
                                <input type="int" name="searchbar" id="searchbar" placeholder="Recherchez le festival que vous souhaitez" required><br/>
                                <input type="submit" name="montrerecherche" id="montrerecherche">
                            </div>
                        </form>
            <?php include '../../../Modele/recherchemontre/recherchemontre.php' ?>
                </div>
    <div class="global">            
        <img href="./Efrontech/Form user 2.html"  src="../../../PNG/les_ardentes_2022.jpg">
        <div class="round"> 
    <p>Date début : </p>
     <p><?php echo $_GET['Fest_datedebut'] ?></p>
     <p>Date de fin : </p>
     <p> <?php echo $_GET['Fest_datefin'] ?></p>
     <p>Lieu du festival :</p>
    <p> <?php echo $_GET['Fest_adresse'] ?> - <?php echo $_GET['Fest_codepostal'] ?> - <?php echo $_GET['Fest_pays'] ?></p>
     <p>Accès du festival </p> 
    <p><?php echo $_GET['Fest_access']; ?> </p>
    <p>Contacts en cas de problème :</p>
    <p><?php echo $_GET['Fest_numtelephone'] ?> - <?php echo $_GET['Fest_email'] ?></p>
    <p>Programmation : </p>
     <p><?php echo $_GET['Fest_programmation'] ?> </p>
    </div>
</div>

<footer class="foot_2">
    <div class="contact_2">
        <br>
        Nous contacter <br>
        Mail:<br> prodetec@gmail.com <br>
        Numéro:<br> 068975412 <br>
        Adresse: <br>10 Rue de Vanves, 92130 Issy-les-Moulineaux
    </div>
         
    <div class="foot_2">
        <div class="reseaux_2">
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta"class="logo_foot2"></a>
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/twitter.png" alt="icone de insta" class="logo_foot2"></a>
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/youtube.png" alt="icone de insta" class="logo_foot_you"  ></a>
        </div>
        <div class="lien_2">
            <a href="../CGU/cgu.php">Conditions général d'utilisation</a>
            <a href="../FAQ/faq.php">FAQ</a>
            <a href="#">Connexion</a>
        </div> 
    </div>
</footer>
                    
    <?php
}else{
?>


    <?php
    
        $r4 = $db->prepare("SELECT * FROM reservation WHERE Fest_id = :Fest_id AND id = :id");
        $r4->execute([
            'Fest_id' => $_GET['Fest_id'],
            'id' => $_SESSION['id']
        ]);
        $result4 = $r4->fetch();

        if($result4 == 0){

    if(isset($_POST['formnumreserv']))
    {

        extract($_POST);

        if(!empty($lnumreserv))
        {
            $r = $db->prepare("SELECT * FROM reservation WHERE Fest_id = :Fest_id AND id IS NULL");
            $r->execute(['Fest_id' => $_GET['Fest_id']]);
            $result = $r->fetch();

            $r1 = $db->prepare("SELECT * FROM reservation WHERE Fest_id = :Fest_id AND id = :id");
            $r1->execute([
                'Fest_id' => $_GET['Fest_id'],
                'id' => $_SESSION['id']
            ]);
            $result2 = $r1->fetch();

            if($result2 == 0){

            if($result == true){
                $r2 = $db->prepare("UPDATE reservation SET id = :id WHERE Fest_id = :Fest_id AND Reservation_id = :Reservation_id AND id IS NULL");
                $r2->execute([
                    'id' => $_SESSION['id'],
                    'Fest_id' => $_GET['Fest_id'],
                    'Reservation_id' => $lnumreserv
                ]);
?>
                   <h1>Bienvenue sur la page du festival <?php echo $_GET['Fest_nom']?></h1>
    <div id="searchBox">
                        <form method="POST" style="width: 100%">
                            <div style="height: 50px; display: flex; flex-direction: row; justify-content: space-evenly">
                                <input type="int" name="searchbar" id="searchbar" placeholder="Recherchez le festival que vous souhaitez" required><br/>
                                <input type="submit" name="montrerecherche" id="montrerecherche">
                            </div>
                        </form>
            <?php include '../../../Modele/recherchemontre/recherchemontre.php' ?>
                </div>
    <div class="global">            
        <img href="./Efrontech/Form user 2.html"  src="../../../PNG/les_ardentes_2022.jpg">
        <div class="round"> 
    <p>Date début : </p>
     <p><?php echo $_GET['Fest_datedebut'] ?></p>
     <p>Date de fin : </p>
     <p> <?php echo $_GET['Fest_datefin'] ?></p>
     <p>Lieu du festival :</p>
    <p> <?php echo $_GET['Fest_adresse'] ?> - <?php echo $_GET['Fest_codepostal'] ?> - <?php echo $_GET['Fest_pays'] ?></p>
     <p>Accès du festival </p> 
    <p><?php echo $_GET['Fest_access']; ?> </p>
    <p>Contacts en cas de problème :</p>
    <p><?php echo $_GET['Fest_numtelephone'] ?> - <?php echo $_GET['Fest_email'] ?></p>
    <p>Programmation : </p>
     <p><?php echo $_GET['Fest_programmation'] ?> </p>
    </div>
</div>

<footer class="foot_2">
    <div class="contact_2">
        <br>
        Nous contacter <br>
        Mail:<br> prodetec@gmail.com <br>
        Numéro:<br> 068975412 <br>
        Adresse: <br>10 Rue de Vanves, 92130 Issy-les-Moulineaux
    </div>
         
        <div class="foot">
            <div class="reseaux">
                <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta"class="logo_foot"></a>
                <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/twitter.png" alt="icone de insta" class="logo_foot"></a>
                <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/youtube.png" alt="icone de insta" class="logo_foot_you"  ></a>
            </div>
            <div class="lien">
                <a href="../CGU/cgu.php">Conditions général d'utilisation</a>
                <a href="../FAQ/faq.php"> FAQ</a>
                <a href="#">Connexion</a>
            </div> 
        </div>
    </footer>

<?php
            }else{
                echo "erreur";
            }
        }else{
            echo "erreur";
        }
    }echo "erreur";

        ?>

<?php
    }
    else{
        ?>
<body>
<form class="numreserv" method="post">
    <span>Rentrer votre numéro de réservation pour <?php echo $_GET['Fest_nom'] ?> </span>
    <input type="int" name="lnumreserv" id="lnumreserv" placeholder="Numéro de réservation " class="haut"  required><br/>
    <input type="submit" name="formnumreserv" id="formnumreserv" value="Ok" class="button_ok"><br/>
</form>
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
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta" height="60"></a>
            <img src="../../../PNG/youtube.png" alt="icone de insta" height="70">
            <img src="../../../PNG/twitter.png" alt="icone de insta" height="75">
            </div>
            <div class="lien">
                <a href="../CGU/cgu.php">Conditions général d'utilisation</a>
                <a href="../FAQ/faq.php"> FAQ</a>
                <a href="#">Connexion</a>
            </div> 
        </div>
    </footer>

<?php
    }

}else{
    ?>
    <h1>Bienvenue sur la page du festival <?php echo $_GET['Fest_nom']?></h1>
    <div id="searchBox">
                        <form method="POST" style="width: 100%">
                            <div style="display: flex; flex-direction: row; justify-content: space-evenly">
                                <input type="int" name="searchbar" id="searchbar" placeholder="Recherchez le festival que vous souhaitez" required><br/>
                                <input type="submit" name="montrerecherche" id="montrerecherche" value="OK">
                            </div>
                        </form>
            <?php include '../../../Modele/recherchemontre/recherchemontre.php' ?>
                </div>
    <div class="global">            
        <img href="./Efrontech/Form user 2.html"  src="../../../PNG/les_ardentes_2022.jpg">
        <div class="round"> 
    <p>Date début : </p>
     <p><?php echo $_GET['Fest_datedebut'] ?></p>
     <p>Date de fin : </p>
     <p> <?php echo $_GET['Fest_datefin'] ?></p>
     <p>Lieu du festival :</p>
    <p> <?php echo $_GET['Fest_adresse'] ?> - <?php echo $_GET['Fest_codepostal'] ?> - <?php echo $_GET['Fest_pays'] ?></p>
     <p>Accès du festival </p> 
    <p><?php echo $_GET['Fest_access']; ?> </p>
    <p>Contacts en cas de problème :</p>
    <p><?php echo $_GET['Fest_numtelephone'] ?> - <?php echo $_GET['Fest_email'] ?></p>
    <p>Programmation : </p>
     <p><?php echo $_GET['Fest_programmation'] ?> </p>
    </div>
</div>

<footer class="foot_2">
    <div class="contact_2">
        <br>
        Nous contacter <br>
        Mail:<br> prodetec@gmail.com <br>
        Numéro:<br> 068975412 <br>
        Adresse: <br>10 Rue de Vanves, 92130 Issy-les-Moulineaux
    </div>
         
    <div class="foot_2">
        <div class="reseaux_2">
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta"class="logo_foot2"></a>
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/twitter.png" alt="icone de insta" class="logo_foot2"></a>
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/youtube.png" alt="icone de insta" class="logo_foot_you"  ></a>
        </div>
        <div class="lien_2">
            <a href="../CGU/cgu.php">Conditions général d'utilisation</a>
            <a href="../FAQ/faq.php">FAQ</a>
            <a href="#">Connexion</a>
        </div> 
    </div>
</footer>
    </body>
</html>
<?php
}
}
    ?>

    

