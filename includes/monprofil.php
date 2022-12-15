<?php
session_start();
if(isset($_SESSION['email']) && (isset($_SESSION['nom'])))
{
    ?>
         <!DOCTYPE html>
     <html>
        <head>
           <link rel="stylesheet" href="monprofil.css">
           <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
           
         </head>
     <body> 
     <nav>
            <ul>
               <li><a><img src="Logo alternatif2.png" class="logo" >  </a></li>   
                  
                <li><a href="./Page d'accueil/index.php" > Accueil </a></li>
                <li><a href="./Page d'accueil/FAQ/faq.php"> FAQ </a></li>
                <li><a href="./Page d'accueil/AProposDeNous/A_propos_de_nous.php"> A propos de nous </a></li>
                
                <li class="deroulant"><?php if(isset($_SESSION['email'])){
                            ?>
                        
                      <a><?php echo $_SESSION['email'];?></a>
                        <ul class="sous">
                            <li><a href="#"> Voir mon profil </a></li>
                            <li><a href="./deconnexion.php"> Se déconnecter </a></li>
                        </ul>
                        


                    
                    
                        
                        <?php
                        
                        }else{ ?>
                        <li><a href="../login1.php">Se connecter </a></li>
                        
                        <?php } ?></a>
                          
                    
                    
                    
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
<?php include 'C:\wamp64\www\includes\database.php';
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

    if(!empty($pemail)){
        $z = $db->prepare("UPDATE user SET email = :email WHERE id = :id");
        $z ->execute([
            'email' => $pemail,

            'id' =>$_SESSION['id']
        ]);
        echo "Changement faits";
    }
}
if(isset($_POST['formupdate3'])){
    extract($_POST);
    
        if(!empty($pnumtelephone)){
        $z = $db->prepare("UPDATE user SET numtelephone = :numtelephone WHERE id = :id");
        $z ->execute([
            'numtelephone' => $pnumtelephone,

            'id' =>$_SESSION['id']
        ]);
        echo "Changement faits";
    }
  }   ?>
<br/><br/><br/>
<div class="btn">
    <button ><a href="./deconnexion.php"  style="text-decoration:none">Déconnexion</a></button>

    <button ><a href="./deleteuser.php"  style="text-decoration:none">Supprimer votre compte</a></button>

    <button ><a href="Page d'accueil/index.php"  style="text-decoration:none">Page d'accueil</a></button>

    <button ><a href="festivals.php"  style="text-decoration:none">Liste des festivals</a></button>
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
            <img src="twitter.png" alt="icone de insta" height="75">
            </div>
            <div class="lien">
            <a href="./cgu.php">Conditions général d'utilisation</a>
            <a href="./Page d'accueil/FAQ/faq.php"> FAQ</a>
            <a href="../login1.php">Connexion</a>
            </div> </div>
             </footer>
</html>

    
    
    <?php

}else{
    echo "Veuillez vous connecter à votre compte";
}

?>



