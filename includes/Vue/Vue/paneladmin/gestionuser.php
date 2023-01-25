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
  $sql = "SELECT * FROM user";
   
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
            <link rel="stylesheet" href="gestionuser.css">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
            <h1>Gestion des utilisateur</h1>
            <body>
            <a href="vuehistoryuser.php" class="ref">Consulter l'historique des utilisateurs</a>
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
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr> 
          <td><?php echo htmlspecialchars($row['id']); ?></td>
          
          <td><?php echo htmlspecialchars($row['nom']); ?></td>
          <td><?php echo htmlspecialchars($row['prenom']); ?></td>
          <td><?php echo htmlspecialchars($row['email']); ?></td>
          <td><?php echo htmlspecialchars($row['handicap']); ?></td>
          <td><?php echo htmlspecialchars($row['pays']); ?></td>
          <td><?php echo htmlspecialchars($row['adresse']); ?></td>
          <td><?php echo htmlspecialchars($row['ville']); ?></td>
          <td><?php echo htmlspecialchars($row['codepostal']); ?></td>
          <td><?php echo htmlspecialchars($row['datedenaissance']); ?></td>
          <td><?php echo htmlspecialchars($row['datedecreation']); ?></td>
          <td><?php echo htmlspecialchars($row['numtelephone']); ?></td>
          <td><a href="../../../Modele/paneladmin/gestionuser/deleteuser.php?id=<?php echo $row['id'];?>&amp;nom=<?php echo $row['nom'];?>&amp;prenom=<?php echo $row['prenom'];?>&amp;email=<?php echo $row['email'];?>&amp;handicap=<?php echo $row['handicap'];?>&amp;pays=<?php echo $row['pays'];?>&amp;adresse=<?php echo $row['adresse'];?>&amp;ville=<?php echo $row['ville'];?>&amp;codepostal=<?php echo $row['codepostal'];?>&amp;datedenaissance=<?php echo $row['datedenaissance'];?>&amp;datedecreation=<?php echo $row['datedecreation'];?>&amp;numtelephone=<?php echo $row['numtelephone']?>">Supprimer cet utilisateurs</a></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
        </table>
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