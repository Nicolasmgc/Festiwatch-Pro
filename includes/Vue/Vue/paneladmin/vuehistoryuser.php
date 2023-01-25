<?php
  session_start();
?>

<?php
  $host = 'localhost';
  $dbname = 'siteweb';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM userhistory";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<?php include '../../../Controller/database.php';
    global $db;
    ?>

<?php
if(isset($_SESSION['role_id'])){
    if($_SESSION['role_id'] == 2){
?>
<!DOCTYPE html>
        <html>
            <meta charset="utf-8">
            <link rel="stylesheet" href="vuehistoryuser.css">
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
            <body>

<h1>Historique utilisateur</h1>

<div id="actionmenu">
  <a href="accueiladmin.php" class="action">Menu</a>
</div> 
<div style="overflow-x: auto; margin: 40px">
<table class= "fond" style ="overflow-x:scroll; margin-top: 50px" >
<thead>
        <tr>
          <th class="test">ID</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Email</th>
          <th>Handicap</th>
          <th>Pays</th>
          <th>Adresse</th>
          <th>Ville</th>
          <th>Code postal</th>
          <th>Date de naissance</th>
          <th>Date de création</th>
          <th>Numéro de téléphone</th>

        </tr>
      </thead>

<tbody>

</body>
        
        </html>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr> 
          <td><?php echo htmlspecialchars($row['userhistory_id']); ?></td>
          
          <td><?php echo htmlspecialchars($row['userhistory_nom']); ?></td>
          <td><?php echo htmlspecialchars($row['userhistory_prenom']); ?></td>
          <td><?php echo htmlspecialchars($row['userhistory_email']); ?></td>
          <td><?php echo htmlspecialchars($row['userhistory_handicap']); ?></td>
          <td><?php echo htmlspecialchars($row['userhistory_pays']); ?></td>
          <td><?php echo htmlspecialchars($row['userhistory_adresse']); ?></td>
          <td><?php echo htmlspecialchars($row['userhistory_ville']); ?></td>
          <td><?php echo htmlspecialchars($row['userhistory_codepostal']); ?></td>
          <td><?php echo htmlspecialchars($row['userhistory_datedenaissance']); ?></td>
          <td><?php echo htmlspecialchars($row['userhistory_datedecreation']); ?></td>
          <td><?php echo htmlspecialchars($row['userhistory_numtelephone']); ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
        </table>
        </div>
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
            <a href="https://www.instagram.com/pro_detech"> <img src="../../../PNG/insta.png" alt="icone de insta" height="60"></a>
            <img src="../../../PNG/youtube.png" alt="icone de insta" height="70">
            <img src="../../../PNG/twitter.png" alt="icone de insta" height="75">
            </div>
            <div class="lien">
            <a href="../CGU/cgu.php">Conditions générales d'utilisation</a>
            <a href="../FAQ/faq.php"> FAQ</a>
            <a href="../Connexionuser/login1.php">Connexion</a>
            </div> </div>
             </footer>

        <?php
    }else{
?>
        <!DOCTYPE html>
        <html>
            <meta charset="utf-8">
            <link rel="stylesheet" href="page_erreur.css">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
        <head>
            <title>Erreur</title>
        </head>
        <body>
        <div class="fond">
            <div class="round">
                Erreur vous n'êtes pas administrateur !</br>
                Veuillez retouner à la page d'accueil !</br>
                <button ><a href="./deconnexion.php"  style="text-decoration:none">Page accueil</a></button>
                </div>
        </div>
        
        
        <img src="image.png" alt="image d'erreur">
        
        </body>
        
        </html>
    

    <?php
    }}else{
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
                Erreur vous n'êtes pas administrateur !</br>
                Veuillez retouner à la page d'accueil !</br>
                <button ><a href="./deconnexion.php"  style="text-decoration:none">Page accueil</a></button>
                </div>
        </div>
        
        
        <img src="../../../PNG/errorimage.png" alt="image d'erreur">
        
        </body>
        
        </html>
    <?php
    }
    ?>