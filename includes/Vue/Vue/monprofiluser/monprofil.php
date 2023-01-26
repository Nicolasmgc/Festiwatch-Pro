<?php
session_start();

    ?>
        <?php
        if(isset($_SESSION['id'])){
    ?>

         <!DOCTYPE html>
     <html>
        <head>
           <link rel="stylesheet" href="monprofil.css">
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
                        <?php if($_SESSION['role_id'] == '2'){
                        ?>
                        
                            <li><a href="#"> Pannel Admin </a></li>
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

        <h1>Bienvenue sur votre profil</h1>
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

    <h2>Modifier votre profil</h2>


    <div class="modif">
<form method="post">
<label for="padresse">Modifier<br/> votre adresse</label><br/>
    <input type="text" name="padresse" id="padresse" placeholder="Nouvelle adresse" required><br/>
   <input type="submit" name="formupdate" id="formupdate" value="Ok">
</form>

<form method="post">
<label for="pville">Modifier <br/>votre ville</label><br/>
    <input type="text" name="pville" id="pville" placeholder="Nouvelle ville" required><br/>
   <input type="submit" name="formupdate1" id="formupdate1" value="Ok">
</form>

<form method="post">
<label for="pemail">Modifier <br/>votre email</label><br/>
    <input type="text" name="pemail" id="pemail" placeholder="Nouveau mail" required><br/>
   <input type="submit" name="formupdate2" id="formupdate2" value="Ok">
</form>

<form method="post">
<label for="pnumtelephone" >Modifier votre numéro <br/>de téléphone </label><br/>
    <input type="text" name="pnumtelephone" id="pnumtelephone" placeholder="Nouveau numéro" required><br/>
   <input type="submit" name="formupdate3" id="formupdate3" value="Ok">
</form>
</div>
<?php include '../../../Controller/database.php';
  global $db;
  ?>

  <?php
  if(isset($_POST['formupdate'])){

    extract($_POST);

    if(!empty($padresse)){
        $z = $db->prepare("UPDATE user SET adresse = :adresse WHERE id = :id");
        $z ->execute([
            'adresse' => $padresse,

            'id' =>$_SESSION['id']
        ]);
        echo "Changement faits";
    }
}
if(isset($_POST['formupdate1'])){

    extract($_POST);

    if(!empty($pville)){
        $z = $db->prepare("UPDATE user SET ville = :ville WHERE id = :id");
        $z ->execute([
            'ville' => $pville,

            'id' =>$_SESSION['id']
        ]);
        echo "Changement faits";
    }
}
if(isset($_POST['formupdate2'])){
    extract($_POST);
    $z9 = $db->prepare("SELECT email FROM user WHERE email = :email");
    $z9 ->execute([
        'email' => $pemail
    ]);
    $result = $z9->rowCount();
    if($result==0){
    if(!empty($pemail)){
        $z = $db->prepare("UPDATE user SET email = :email WHERE id = :id");
        $z ->execute([
            'email' => $pemail,

            'id' =>$_SESSION['id']
        ]);
        echo "Changement faits";
    }
}else{
    echo "Cet email existe déjà";
}
}
if(isset($_POST['formupdate3'])){
    extract($_POST);
    $z8 = $db->prepare("SELECT numtelephone FROM user WHERE numtelephone = :numtelephone");
    $z8 ->execute([
        'numtelephone' => $pnumtelephone
    ]);
    $result2 = $z8->rowCount();
    if($result==0){
        if(!empty($pnumtelephone)){
        $z = $db->prepare("UPDATE user SET numtelephone = :numtelephone WHERE id = :id");
        $z ->execute([
            'numtelephone' => $pnumtelephone,

            'id' =>$_SESSION['id']
        ]);
        echo "Changement faits";
    }
  }else{
    echo "Ce numéro de téléphone existe déjà";
  }
   }   ?>
<br/><br/><br/>
<div class="btn">
    <button ><a href="../../../Controller/deconnexion.php"  style="text-decoration:none">Déconnexion</a></button>

    <button ><a href="../../../Controller/deleteuser.php"  style="text-decoration:none">Supprimer votre compte</a></button>

    <button ><a href="../Pagedaccueil/index.php"  style="text-decoration:none">Page d'accueil</a></button>

    <button ><a href="../listefestivals/festivals.php"  style="text-decoration:none">Liste des festivals</a></button>

    <button ><a href="../Historiqueutilisateur/histouser.php"  style="text-decoration:none">Historique des festivals</a></button>
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
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta" class="insta"></a>
            <img src="../../../PNG/youtube.png" alt="icone de insta" height="60">
            <img src="../../../PNG/twitter.png" alt="icone de insta" height="65">
            </div>
            <div class="lien">
            <a href="../CGU/cgu.php">Conditions générales d'utilisation</a>
            <a href="../FAQ/faq.php"> FAQ</a>
            <a href="../Connexionuser/login1.php">Connexion</a>
            </div> </div>
             </footer>
</html>

    
    
    <?php

// }else{
//     echo "Veuillez vous connecter à votre compte";
// }

?>


<?php
}else{
    ?>
    <!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../../Controller/errors/erreur.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
<head>
    <title>Erreur</title>
</head>
<body>
<div class="fond">
    <div class="round">
        Erreur vous n'avez pas accès à cette page !</br>
        Veuillez vous connecter</br>
        <button ><a href="../Connexionuser/login1.php"  style="text-decoration:none">Se connecter</a></button>
        </div>
</div>


<img src="../../../PNG/errorimage.png" alt="image d'erreur">

</body>

</html>
<?php
}
?>
