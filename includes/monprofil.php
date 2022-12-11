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
           <h1>Bienvenue sur votre profil</h1>
         </head>
     <body> 
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
   <input type="submit" name="formupdate" id="formupdate" value="Ok">
</form>

<form method="post">
<label for="pemail">Modifier <br/>votre email</label><br/>
    <input type="text" name="pemail" id="pemail" placeholder="Nouveau mail" required><br/>
   <input type="submit" name="formupdate" id="formupdate" value="Ok">
</form>

<form method="post">
<label for="pnumtelephone" >Modifier votre numéro <br/>de téléphone </label><br/>
    <input type="text" name="pnumtelephone" id="pnumtelephone" placeholder="Nouveau numéro" required><br/>
   <input type="submit" name="formupdate" id="formupdate" value="Ok">
</form>
</div>
<?php include 'C:\wamp64\www\includes\database.php';
  global $db;
  ?>

  <?php
  if(isset($_POST['formupdate'])){

    extract($_POST);

    if(!empty($padresse)&& !empty ($pville)&& !empty ($pemail)&& !empty ($pnumtelephone)){
        $z = $db->prepare("UPDATE user SET adresse = :adresse, ville = :ville, email = :email, numtelephone = :numtelephone WHERE id = :id");
        $z ->execute([
            'adresse' => $padresse,
            'ville'  => $pville,
            'email'  => $pmail;
            'numtelephone'  => $pnumtelephone
            'id' =>$_SESSION['id']
        ]);
        echo "Changement faits";
    }
  }   ?>
<br/><br/><br/>
<div class="btn">
    <button ><a href="deconnexion.php"  style="text-decoration:none">Déconnexion</a></button>

    <button ><a href="deleteuser.php"  style="text-decoration:none">Supprimer votre compte</a></button>

    <button ><a href="Page d'accueil/index.php"  style="text-decoration:none">Page d'accueil</a></button>

    <button ><a href="festivals.php"  style="text-decoration:none">Liste des festivals</a></button>
</div>
</body>
</html>

    
    
    <?php

}else{
    echo "Veuillez vous connecter à votre compte";
}

?>



