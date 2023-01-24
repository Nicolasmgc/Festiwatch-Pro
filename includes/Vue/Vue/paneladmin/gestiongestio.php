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
  $sql = "SELECT * FROM festival";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<link rel="stylesheet" typer="text/css" href="gestiongestio.css">

<h1 style="margin: 50px; auto; padding: 0px; font-family: Elephant;">COMPTES FESTIVALS ENREGISTRÉS</h1>

<div id="actionmenu">
  <a href="variablehtml.php" class="action">Ajouter un festival</a>
  <a href="vuefestisign.php" class="action">Consulter les demandes</a>
</div>

<?php include '../../../Controller/database.php';
    global $db;
    ?>

<?php
if(isset($_SESSION['role_id'])){
    if($_SESSION['role_id'] == 2){
?>

<div style="overflow-x: scroll;">
<table class= "fond" style ="overflow-x:scroll; margin-top: 50px" >
<thead>
        <tr>
          <th class="test">ID</th>
          <th>Nom</th>
          <th>Email</th>
          <th>Date de début</th>
          <th>Date de fin</th>
          <th>Prix</th>
          <th>Adresse</th>
          <th>Code postal</th>
          <th>Pays</th>
          <th>Accès</th>
          <th>Numéro de téléphone</th>
          <th>Lien</th>
          <th>Programmation</th>

        </tr>
      </thead>

<tbody>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr> 
          <td><?php echo htmlspecialchars($row['Fest_id']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_nom']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_email']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_datedebut']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_datefin']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_prix']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_adresse']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_codepostal']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_pays']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_access']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_numtelephone']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_lien']); ?></td>
          <td><?php echo htmlspecialchars($row['Fest_programmation']); ?></td>
          <td><a href="../../../Modele/paneladmin/gestiongestio/deletegestio.php?Fest_id=<?php echo $row['Fest_id'];?>">Supprimer ce festival</a></td>
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