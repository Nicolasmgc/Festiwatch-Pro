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
  $sql = "SELECT * FROM festsign";
   
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

<table class= "fond" style ="overflow-x:scroll; margin-top: 50px" >
<thead>
        <tr>
          <th class="test">ID</th>
          <th>Adresse</th>
          <th>Email</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Numéro de téléphone</th>
          <th>Remarque</th>
        </tr>
      </thead>

<tbody>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr> 
          <td><?php echo htmlspecialchars($row['festsign_id']); ?></td>
          
          <td><?php echo htmlspecialchars($row['festsign_adresse']); ?></td>
          <td><?php echo htmlspecialchars($row['festsign_email']); ?></td>
          <td><?php echo htmlspecialchars($row['festsign_nom']); ?></td>
          <td><?php echo htmlspecialchars($row['festsign_prenom']); ?></td>
          <td><?php echo htmlspecialchars($row['festsign_numtel']); ?></td>
          <td><?php echo htmlspecialchars($row['festsign_remarque']); ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
        </table>

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