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
                        <li><a href="#"> Liste des festivales </a></li>
                        <li><a href="../../../Controller/deconnexion.php"> Se déconnecter </a></li>
                        
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
                                    <input id="searchBar" placeholder="Recherchez un code de montre ici"/>
                                    <a href=""><img id="searchIcon" src="../../../PNG/searchIcon.png" alt="search"></a>
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

<form class="numreserv" method="post">
    <span>Rentrer votre numéro de réservation pour <?php echo $_GET['Fest_nom'] ?> </span>
    <input type="int" name="lnumreserv" id="lnumreserv" placeholder="Numéro de réservation " class="haut"  required><br/>
    <input type="submit" name="formnumreserv" id="formnumreserv" value="Ok" class="button_ok"><br/>
</form>

<?php
    }

}else{
    ?>
    <h1>Bienvenue sur la page du festival <?php echo $_GET['Fest_nom']?></h1>
    <div id="searchBox">
                    <input id="searchBar" placeholder="Recherchez un code de montre ici"/>
                    <a href=""><img id="searchIcon" src="../../../PNG/searchIcon.png" alt="search"></a>
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

<?php
}
    ?>

        
    </body>
</html>

